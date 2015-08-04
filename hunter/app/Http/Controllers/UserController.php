<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Creative;
use App\Company;
use Mail;
use Session;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all users
        $users = User::all();
        return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		//dd($request->all());
        $validator = Validator::make($request->all(),
            ['email' => 'required | email | unique:users',
            'password' => 'required | min:6',
            're-password' => 'required']
        );
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        else {
            if($request->input('password') != $request->input('re-password')){
                return redirect()->back()->withInput()->withErrors('Confirmation password does not match.');
            }
            else {
                // generate activation code
                $activation_code = str_random(60);

                // create new user account
                $new_user = new User();
                $new_user->email = $request->input('email');
                $new_user->password = Hash::make($request->input('password'));
                $new_user->role_id = $request->input('user_role'); // role creative
                $new_user->status_id = 2; // Inactive by default
                $new_user->activation_code = $activation_code;

                if ($request->input('user_role') == 3) {
                    // create creative's user
                    $new_user->name = $request->input('firstname');
                    $new_user->save();

                    // create creative's profile
                    $new_creative_profile = new Creative();
                    $new_creative_profile->user_id = $new_user->id;
                    $new_creative_profile->firstname = $request->input('firstname');
                    $new_creative_profile->lastname = $request->input('lastname');
                    $new_creative_profile->save();
                }
                if($request->input('user_role') == 2) {
                    // create company's user
                    $new_user->name = $request->input('fullname');
                    $new_user->save();

                    // creative company's profile
                    $new_company_profile = new Company();
                    $new_company_profile->user_id = $new_user->id;
                    $new_company_profile->fullname = $request->input('fullname');
                    $new_company_profile->contact_gender = $request->input('contact_gender');
                    $new_company_profile->contact_name = $request->input('contact_name');
                    $new_company_profile->save();
                }
                $email = $new_user->email;
                // send email to new user
                /*Mail::queue('emails.activation', ['name' => $new_user->name, 'activation_code' => $activation_code], function ($message) use ($new_user) {
                    $message->from('contact@jobs4creative.com', 'Jobs4Creative');
                    $message->to($new_user->email, $new_user->name)->subject('Activate account from Jobs4Creative');
                });*/
                $to = $email;
                $subject = 'Thanks for registering Jobs4Creative';
                $message = 'Activation link: http://69.195.124.233/~synergot/Jobs4Creative/index.php/users/activate/'.$activation_code;
                $header = "From: contact@jobs4creative.com";

                //if(mail($to, $subject, $message, $header)){
                    return view('verify-email', compact('email'));
                //}
                //else{
                //    return redirect()->back()->withInput()->withErrors('There was a problem while sending email!');
                //}

            }
        }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::find($id);
        if($user->getRoleId() == 1){
            return view('admin.show', compact('user'));
        }
        if($user->getRoleId() == 2){
            $company = $user->getCompany($id);
            return view('companies.show', compact('company'));
        }
        if($user->getRoleId() == 3){
            $creative = $user->getCreative();
            return view('creatives.show', compact('creative'));
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = User::find($id);
        return view('users.edit', compact('user'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $validator = Validator::make($request->all(),
            ['new_password' => 'required|min:6',
            're-new_password' => 'required|min:6']);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        else{
            $user = User::find($id);
            $user->password = Hash::make($request->input('new_password'));
            $user->is_searchable = $request->input('is_searchable');
            $user->save();
            if($user->getRoleId() == 2) {
                $company = $user->getCompany();
                return view('companies.dashboard', compact('company'));
            }
            elseif($user->getRoleId() == 3){
                $creative = $user->getCreative();
                return view('creatives.dashboard', compact('creative'));
            }
            else{
                return view('home', compact('user'));
            }
        }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        // get user
        $user = User::find($id);

        if($user->getRoleId() == 2){
            // delete company account before delete user
            $company = $user->getCompany();
            $company->delete();
        }
        elseif($user->getRoleId() == 3){
            // delete creative account before delete user
            $creative = $user->getCreative();
            $creative->delete();
        }
        // delete user
        $user->delete();

        // return users page
        return redirect()->route('users.index');
	}

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['email' => 'required | email',
             'password' => 'required | min:6']
        );
        if($validator->fails()){
            return redirect()->route('home')->withInput()->withErrors($validator->errors());
        }
        else{
            $user = User::where('email', '=', $request->input('email'))->first();
            if(!$user){
                return redirect()->route('home')->withInput()->withErrors('This email address does not exist. Please register before logging in.');
            }
            else{
                if($user->getStatusId() == 1) {
                    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'))) {
                        // user logged in
                        return redirect()->route('home');
                    } else {
                        return redirect()->route('home')
                            ->withInput($request->only('email', 'remember'))
                            ->withErrors("The credentials does not match.");
                    }
                }
                else{
                    return redirect()->route('home')->withInput()->withErrors('Your account has not activated yet. Please check your registered email and follow the instruction to activate it. Thank you!');
                }
            }

        }

    }

    /**
     * Handle a logout request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }


    /**
     * Handle a activation request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function activate($code){
        if($this->is_active($code)){
            Session::flash('message', 'Success, your account has been activated.');
        }
        else{
            Session::flash('message', 'Your account couldn\'t be activated, please try again');
        }
        return redirect()->route('home');

    }
    public function is_active($code){
        $user = User::where('activation_code','=',$code)->first();
        $user->status_id = 1; // Activate
        $user->activation_code = '';
        if($user->save()){
            Auth::login($user);
        }
        return true;
    }


}
