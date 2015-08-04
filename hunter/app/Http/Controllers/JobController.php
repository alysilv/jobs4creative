<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Job;
use App\JobApply;
use App\JobLevel;
use App\JobSkill;
use App\JobType;
use App\Language;
use Illuminate\Http\Request;
use App\Company;
use App\User;
use App\Country;
use App\City;
use Auth;
use DB;
use Illuminate\Support\Facades\Session;

class JobController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($company_id, Request $request)
	{
		// get current company
		$company = Company::find($company_id);

		// Sort by
		if($request->has('sortby')) {
			$sort_value = $request->get('sortby');
			switch ($sort_value) {
				case 'job_title':
					$jobs = Job::where('company_id', '=', $company_id)
						->where('status_id', '=', 1)
						->orderBy('job_title', 'desc')->paginate(10);
					break;
				case 'exp_date':
					$jobs = Job::where('company_id', '=', $company_id)
						->where('status_id', '=', 1)
						->orderBy('exp_date', 'desc')->paginate(10);
					break;
				case 'view_stats':
					$jobs = Job::where('company_id', '=', $company_id)
						->where('status_id', '=', 1)
						->orderBy('exp_date', 'desc')->paginate(10);
					break;
				case 'applicants':
					$jobs = Job::where('company_id', '=', $company_id)
						->where('status_id', '=', 1)
						->orderBy(count($company->job_applicants), 'desc')->paginate(10);
					break;
				default:
					$jobs = Job::where('company_id', '=', $company_id)
						->where('status_id', '=', 1)
						->orderBy('id', 'desc')->paginate(10);
					break;
			}
		}
		else{
			$jobs = Job::where('company_id', '=', $company_id)
						->where('status_id', '=', 1)->paginate(10);
		}


		$baseurl = url();
		$jobs->setPath($baseurl.'/companies/'.$company_id.'/jobs');


		return view('jobs.index', compact('jobs', 'company'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($company_id)
	{

        $company = Company::find($company_id);
        $countries = Country::all();
        foreach($countries as $ctr){
            $country_names[$ctr->id] = $ctr->name;
        }
        $cities = City::all();
        foreach($cities as $ct){
            $city_names[$ct->id] = $ct->name;
        }
        foreach(Language::all() as $lang){
            $langs[$lang->id] = $lang->name;
        }
        return view('jobs.create', compact('country_names', 'city_names', 'langs', 'company'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($company_id, Request $request)
	{
        //dd($request->all());
		$job = new Job();
        $job->company_id = $company_id;
        $job->status_id = 2; // Save as Draft or Inactive

        $job->job_title = $request->input('job_title');
        $job->creative_field = $request->input('creative_fields');
        $job->location = $request->input('location');
        $job->exp_date = $request->input('exp_date');
        $job->pre_lang = $request->input('pre_lang');
        $job->res_lang = $request->input('res_lang');
        $job->salary = $request->input('salary');
        $job->salary_from = $request->input('salary_from');
        $job->salary_to = $request->input('salary_to');
        $job->contact_gender = $request->input('contact_gender');
        $job->contact_name = $request->input('contact_name');
        $job->apply_email = $request->input('apply_email');
        $job->job_desc = $request->input('description');
        $job->apply_reason = $request->input('apply_reason');
		$job->save();

		/* Create job level */
		$levels = $request->input('job_level');
        $count_lev = sizeof($levels);
		for($i=0; $i<$count_lev; $i++){
			$job_level = new JobLevel();
			$job_level->job_id = $job->id;
			$job_level->level_id = $levels[$i];
			$job_level->save();
		}

		/* Create job type */
		$types = $request->input('job_type');
        $count_typ = sizeof($types);
		for ($i=0; $i<$count_typ; $i++) {
			$job_type = new JobType();
			$job_type->job_id = $job->id;
			$job_type->type_id = $types[$i];
			$job_type->save();
		}

        /* Store job skills */
        $names = $request->input('skillnames');
        $descs = $request->input('skilldescs');
        $count_ski = sizeof($names);
        for($i=0; $i<$count_ski; $i++){
            $jobskill = new JobSkill();
            $jobskill->job_id = $job->id;
            $jobskill->name = $names[$i];
            $jobskill->description = $descs[$i];
            $jobskill->save();
        }

        $company = Company::find($company_id);
		return view('jobs.show', compact('job', 'company'));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($company_id, $id)
	{
		// get job object
		$job = Job::find($id);
		$company = Company::find($company_id);

		return view('jobs.show', compact('job', 'company'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($company_id, $id)
	{
		$job = Job::find($id);
		$company = Company::find($company_id);
		$job_levels = JobLevel::where('job_id', '=', $id)->get();
		if($job_levels != null) {
			foreach ($job_levels as $jl) {
				$level_names[$jl->id] = $jl->level->name;
			}
		}
		else{
			$level_names = '';
		}
		$job_types = JobType::where('job_id', '=', $id)->get();
		if($job_types != null) {
			foreach ($job_types as $jt) {
				$type_names[$jt->id] = $jt->type->name;
			}
		}
		else{
			$type_names = '';
		}
		return view('jobs.edit', compact('job', 'company', 'level_names', 'type_names'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($company_id, $id, Request $request)
	{
		//dd($request->all());
		$job = Job::find($id);
		$job->job_title = $request->input('job_title');
		$job->creative_field = $request->input('creative_fields');
		$job->location = $request->input('location');
		$job->exp_date = $request->input('exp_date');
		$job->pre_lang = $request->input('pre_lang');
		$job->res_lang = $request->input('res_lang');
		$job->salary = $request->input('salary');
		$job->salary_from = $request->input('salary_from');
		$job->salary_to = $request->input('salary_to');
		$job->contact_gender = $request->input('contact_gender');
		$job->contact_name = $request->input('contact_name');
		$job->apply_email = $request->input('apply_email');
		$job->job_desc = $request->input('description');
		$job->apply_reason = $request->input('apply_reason');
		$job->save();

		/* Update job level */
		$levels = $request->input('job_level');
		$count_lev = sizeof($levels);
		for($i=0; $i<$count_lev; $i++){
			$job_level = new JobLevel();
			$job_level->job_id = $job->id;
			$job_level->level_id = $levels[$i];
			$job_level->save();
		}

		/* Update job types */
		$edit_types = $request->input('job_type'); // stored in array
		$created_types = $job->job_types->list('type_id');
		// compare 2 arrays
		$add_types = array_value(array_diff($edit_types, $created_types));
		$delete_types = array_value(array_diff($created_types, $edit_types));
		// add new types
		$count_typ = sizeof($add_types);
		for ($i=0; $i<$count_typ; $i++) {
			$job_type = new JobType();
			$job_type->job_id = $id;
			$job_type->type_id = $add_types[$i];
			$job_type->save();
		}
		// delete types
		$count_del = sizeof($delete_types);
		for($i=0; $i<$count_del; $i++){
			$job_type = JobType::where('type_id', '=', $delete_types[$id])->first();
			$job_type->delete();
		}

		/* Update job skills */
		$names = $request->input('skillnames');
		$descs = $request->input('skilldescs');
		$count_ski = sizeof($names);
		for($i=0; $i<$count_ski; $i++){
			$jobskill = new JobSkill();
			$jobskill->job_id = $job->id;
			$jobskill->name = $names[$i];
			$jobskill->description = $descs[$i];
			$jobskill->save();
		}

		$company = Company::find($company_id);
		return view('jobs.show', compact('job', 'company'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($company_id, $id)
	{


	}


    public function publish($company_id, $id){
        $job = Job::find($id);
        $job->status_id = 1; // active this job
		$job->save();
        $company = Company::find($company_id);
        return view('jobs.publish', compact('company', 'job'));
    }


}
