<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Language;
use App\Country;
use App\City;
use App\Job;
use App\Creative;


class CompanyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// list of all companies
		$companies = Company::all();

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// This function is automatically created after registration new users
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// This function is automatically created after registration new users
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$company = Company::find($id);

        return view('companies.show', compact('company'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        // get list of countries and cities
        $countries = Country::all();
        foreach($countries as $ctr){
            $country_names[$ctr->id] = $ctr->name;
        }
        $cities = City::all();
        foreach($cities as $ct){
            $city_names[$ct->id] = $ct->name;
        }

        $company = Company::find($id);
		return view('companies.edit', compact('company', 'country_names', 'city_names'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$company = Company::find($id);

		if($request->hasFile('image')){
			// upload profile picture
			$file = $request->file('image');
			$destPath = public_path().'/images';
			$filename = $file->getClientOriginalName();
			$file->move($destPath, $filename);
			$company->logo = $filename;
			$company->save();
		}
		else {
			// Update profile
			DB::table('companies')->where('id', $id)->update([
				'fullname' => $request->input('fullname'),
				'address' => $request->input('address'),
				'contact_gender' => $request->input('contact_gender'),
				'contact_name' => $request->input('contact_name'),
				'country_id' => $request->input('country'),
				'city_id' => $request->input('city'),
				'phone' => $request->input('phone'),
				'fax' => $request->input('fax'),
				'fax_number' => $request->input('fax_number'),
				'profile_name' => $request->input('profile_name'),
				'company_size' => $request->input('size'),
				'about_us' => $request->input('about_us'),
				'why_join_us' => $request->input('why_join_us'),
				'website' => $request->input('website'),
				'video_url' => $request->input('video_url')
			]);
		}

        return view('companies.dashboard', compact('company'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$company = Company::find($id);
		DB::table('companies')->where('id','=',$id)
							->join('users', 'companies.user_id', '=', 'users.id')
							->join('jobs', 'companies.id', '=', 'jobs.company_id')
							->delete();

		return redirect()->route('home');

	}


}
