<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Job </title>
    @include('includes.head')

</head>
<body>
@include('includes.header')

<div class="breadcrumb-bar">
    <div class="container">
        <ol class="breadcrumb row">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('/companies/'.$company->getId()) }}">{!! $company->getFullName() !!}</a></li>
            <li class="active">Post a job</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="padding-md bg-black bright-text">
                <img class="img-responsive center-block" src="{{ asset('/images/'.$company->getLogo()) }}">
                <h3 class="text-center">{!! $company->getFullName() !!}</h3>
                <br>
                <ul class="fa-ul control-list">
                    <li><a href="{{ URL::to('/companies/'.$company->getId().'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                    <li><a href="{{ URL::to('/companies/'.$company->getId().'/edit') }}"><i class="fa-li fa fa-building"></i> Company profile</a></li>
                    <li><a class="active" href="{{ URL::to('/companies/'.$company->getId().'/jobs/create') }}"><i class="fa-li fa fa-toggle-up"></i> Post a job</a></li>
                    <li><a href="{{ URL::to('/companies/'.$company->getId().'/jobs') }}"><i class="fa-li fa fa-suitcase"></i> Job list</a></li>
                    <li><a href=""><i class="fa-li fa fa-users"></i> Creative list</a></li>
                    <li><a href=""><i class="fa-li fa fa-envelope"></i> Message (3)</a></li>
                    <li><a href="{{ URL::to('/companies/'.$company->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                    <li><a href=""><i class="fa-li fa fa-shopping-cart"></i> Order history</a></li>
                </ul>

            </div>
        </div>
        <div class="col-sm-9 padding-md">
            <div role="tabpanel" class="padding-md center-tab">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active" id="createJobLink"><a href="#createJob" aria-controls="home" role="tab" data-toggle="tab"><span class="badge">1</span> Create a job</a></li>
                    <li role="presentation" id="previewJobLink"><a href="{!! URL::to('/companies/'.$company->getId().'/jobs/'.$job->getID()) !!}" aria-controls="profile" role="tab" ><span class="badge">2</span> Preview</a></li>
                    <li role="presentation" id="publishJobLink"><a href="#" aria-controls="profile" role="tab" ><span class="badge">3</span> Publish</a></li>
                </ul>
                <br>
                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- EDIT JOB -->
                    <div role="tabpanel" class="tab-pane active" id="createJob">
                        {!! Form::model($job, ['route' => ['companies.jobs.update', $company->getId(), $job->getId()], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                            <input type="hidden" name="company_id" value="{!! $company->getId() !!}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job title</label>
                                <div class="col-sm-6">
                                    {!! Form::text('job_title', $job->job_title, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Creative field</label>
                                <div class="col-sm-6">
                                    {!! Form::text('creative_fields', $job->creative_field, ['class' => 'form-control', 'data-role' => 'tagsinput'] ) !!}
                                    <p class="help-block">Maximum 3 fields</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Location</label>
                                <div class="col-sm-6">
                                    {!! Form::text('location', $job->location, ['class' => 'form-control', 'data-role' => 'tagsinput'] ) !!}
                                    <p class="help-block">Maximum 3 locations</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Expiry</label>
                                <div class="col-sm-6">
                                    {!! Form::text('exp_date', $job->exp_date, ['class' => 'form-control date-picker', 'id' => 'exp_date']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Preferred language</label>
                                <div class="col-sm-6">
                                    {!! Form::text('pre_lang', $job->pre_lang, ['class' => 'form-control', 'data-role' => 'tagsinput'] ) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Resume language</label>
                                <div class="col-sm-6">
                                    {!! Form::text('res_lang', $job->res_lang, ['class' => 'form-control', 'data-role' => 'tagsinput'] ) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Salary</label>
                                <div class="col-sm-9">
                                    <div class="radio">
                                        <label>
                                            {!! Form::radio('salary', 'remember', (Input::old('salary') == 'remember')) !!}
                                        </label>
                                    </div>
                                    <div class="form-inline">
                                        {!! Form::text('salary_from', Input::old('salary_from'), ['class' => 'form-control']) !!}
                                        {!! Form::text('salary_to', Input::old('salary_to'), ['class' => 'form-control']) !!} USD/month
                                    </div>
                                    <br>
                                    <div class="radio">
                                        <label>
                                            {!! Form::radio('salary', 'negotiate', (Input::old('salary') == 'negotiate')) !!}
                                            Negotiable
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job Level</label>
                                <div class="col-sm-9">
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_level[]', (in_array('1', $level_names))) !!} Entry
                                    </label>
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_level[]', (in_array('2', $level_names))) !!} Junior
                                    </label>
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_level[]', (in_array('3', $level_names))) !!} Senior
                                    </label>
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_level[]', (in_array('4', $level_names))) !!} Director / Manager
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job type</label>
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_type[]', (in_array('1', $type_names))) !!} Full-time
                                    </label>
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_type[]', (in_array('2', $type_names))) !!} Part-time
                                    </label>
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_type[]', (in_array('3', $type_names))) !!} Contract
                                    </label>
                                    <label class="checkbox-inline">
                                        {!! Form::checkbox('job_type[]', (in_array('4', $type_names))) !!} Intern
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact person</label>
                                <div class="col-sm-2">
                                    {!! Form::select('contact_gender', ['Ms.' => 'Ms.', 'Mr.' => 'Mr.'], null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="contact_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email for application</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="apply_email">
                                    <p class="help-block">Hidden to Creative</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Required skill & experience</label>
                                <div class="col-sm-9">
                                    <table class="table table-hover">
                                        <tr>
                                            <td>
                                                <a href="" class="add" data-toggle="modal" data-target="#addskill">
                                                    <span class="fa-stack fa-lg">
                                                      <i class="fa fa-circle fa-stack-2x"></i>
                                                      <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <div class="modal fade" id="addskill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4>Add skill</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="padding-md">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Required skill or experience">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" rows="6" placeholder="Description"></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-black">Add</button><br><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach($job->skills as $skill)
                                            <tr>
                                                <td>
                                                    <ul class="action-link">
                                                        <li><a class="btn-link" href="" data-toggle="modal" data-target="#editskill"><i class="fa fa-pencil"></i> Edit</a> </li> |
                                                        <li><button type="button" class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                                                    </ul>
                                                    <h4>{!! $skill->name !!}</h4>
                                                    <p>{!! $skill->description !!}</p>

                                                    <div class="modal fade" id="editskill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <h4>Edit skill</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="padding-md">
                                                                        <div class="form-group">
                                                                            {!! Form::text('skill_name', $skill->name, ['class' => 'form-control']) !!}
                                                                        </div>
                                                                        <div class="form-group">
                                                                            {!! Form::textarea('skill_desc', $skill->description, ['class' => 'form-control', 'rows' => '6']) !!}
                                                                        </div>
                                                                        <button type="button" class="btn btn-black" id="update_btn">Update</button><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Why you should work here</label>
                                <div class="col-sm-9">
                                    {!! Form::textarea('apply_reason', $job->apply_reason, ['class' => 'form-control', 'rows' => '6']) !!}
                                </div>
                            </div>

                            <hr>
                            <button class="btn btn-black pull-right" id="createSubmit">Next</button>
                        {!! Form::close() !!}
                    </div>

                    <!-- PREVIEW -->
                    <div role="tabpanel" class="tab-pane" id="previewJob">
                    </div>

                    <!-- PUBLISH -->
                    <div role="tabpanel" class="tab-pane" id="publishJob">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="modal fade" id="addskill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4>Add skill</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="skill_name" id="skill_name" placeholder="Required skill or experience">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="6" name="skill_desc" id="skill_desc" placeholder="Description"></textarea>
                </div>
                <button type="button" class="btn btn-black" id="add_skill_btn">Add</button><br><br>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
<script type="text/javascript">
    $(document).ready(function() {
        $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput({
            maxTags: 3
        });

        $('#exp_date').datepicker({
            format: 'dd-mm-yy',
            startDate: '01-01-2015',
            showOn: 'both',
            buttonText: '<i class="fa fa-calendar"></i>'
        });

        // if the count variable is undefined, set its value to zero
//            if(! count){
//                var count = 0;
//            }
//            // function to increment value of count variable
//            function incrementCount() {
//                count++;
//            }

        $('#add_skill_btn').click(function(){
            $('#addskill').modal('hide');
//                incrementCount();
            $('#skill_table').append(
                    '<tr>'+
                    '<td>'+
                    '<h4>' + $('#skill_name').val() + '</h4>'+
                    '<p>' + $('#skill_desc').val() + '</p>'+
                    '<input type="hidden" name="skillnames[]" value="'+ $('#skill_name').val()+ '">'+
                    '<input type="hidden" name="skilldescs[]" value="'+ $('#skill_desc').val() + '">'+
                    '</td>'+
                    '</tr>'
            );
        });


    });

</script>
</body>
</html>