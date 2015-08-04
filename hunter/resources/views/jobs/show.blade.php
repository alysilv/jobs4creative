<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post Job </title>
    @include('includes.head')

</head>
<body>
    @include('includes.header')

    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ asset('/index.php/companies/'.$company->getId()) }}">{!! $company->getFullName() !!}</a></li>
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
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/edit') }}"><i class="fa-li fa fa-building"></i> Company profile</a></li>
                        <li><a class="active" href="{{ asset('/index.php/companies/'.$company->getId().'/jobs/create') }}"><i class="fa-li fa fa-toggle-up"></i> Post a job</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/jobs') }}"><i class="fa-li fa fa-suitcase"></i> Job list</a></li>
                        <li><a href=""><i class="fa-li fa fa-users"></i> Creative list</a></li>
                        <li><a href=""><i class="fa-li fa fa-envelope"></i> Message (3)</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-shopping-cart"></i> Order history</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-md">
                <div role="tabpanel" class="padding-md center-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" id="createJobLink"><a href="{!! URL::to('/companies/'.$company->getId().'/jobs/'.$job->getID().'/edit') !!}" aria-controls="home" role="tab"><span class="badge">1</span> Create a job</a></li>
                        <li role="presentation" class="active" id="previewJobLink"><a href="#previewJob" aria-controls="profile" role="tab" data-toggle="tab"><span class="badge">2</span> Preview</a></li>
                        <li role="presentation" id="publishJobLink"><a href="#publishJob" aria-controls="profile" role="tab" ><span class="badge">3</span> Publish</a></li>
                    </ul>
                    <br>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- EDIT JOB -->
                        <div role="tabpanel" class="tab-pane" id="createJob">
                        </div>

                        <!-- PREVIEW -->
                        <div role="tabpanel" class="tab-pane active" id="previewJob">
                            <p class="bg-warning padding-sm"><small><i class="fa fa-asterisk"></i> Your job has been saved as a deactive job in your Job list.</small></p>
                            <div class="'form-horizontal">
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Job title</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">{!! $job->job_title !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Creative field</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">{!! $job->creative_field !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Location</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">{!! $job->location !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Expiry</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">{!! $job->exp_date !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Preferred language</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">{!! $job->pre_lang !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Resume language</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">{!! $job->res_lang !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Salary</label>
                                    <div class="col-md-9 col-sm-9">
                                        @if($job->salary == 'remember')
                                        <p class="form-control-static">{!! $job->salary_from !!} - {!! $job->salary_to !!} USD/month</p>
                                        @else
                                        <p class="form-control-static">Negotiate</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Job Level</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">
                                            @if($job->job_levels != null)
                                                @foreach($job->job_levels as $j_level)
                                                    {!! $j_level->level->name !!},

                                                @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Job type</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">
                                            @if($job->job_types != null)
                                                @foreach($job->job_types as $j_type)
                                                    {!! $j_type->type->name !!},

                                                @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Contact person</label>
                                    <div class="col-md-9 col-sm-2">
                                        <p class="form-control-static">{!! $job->contact_gender !!} {!! $job->contact_name !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Email for application</label>
                                    <div class="col-md-9 col-sm-6">
                                        <p class="form-control-static">{!! $job->apply_email !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Job description</label>
                                    <div class="col-md-9 col-sm-9">
                                        <p class="form-control-static">{!! $job->job_desc !!}</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Required skill & experience</label>
                                    <div class="col-md-9 col-sm-9">
                                        @foreach($job->skills as $skill)
                                        <h4>{!! $skill->name !!}</h4>
                                        <p>{!! $skill->description !!}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <label class="col-md-3 col-sm-3 control-label">Why you should work here</label>
                                    <div class="col-md-9 col-sm-9">
                                        <p class="form-control-static">{!! $job->apply_reason !!}</p>
                                    </div>
                                </div>

                                <hr>



                                <a href="{!! URL::to('/companies/'.$company->getId().'/jobs/'.$job->getID().'/edit') !!}" class="btn btn-line"><i class="fa fa-angle-left"></i> Back</a>
                                <a href="{!! URL::to('/companies/'.$company->getId().'/jobs/'.$job->getID().'/publish') !!}" class="btn btn-black pull-right">Publish</a>

                            </div>
                        </div>

                        <!-- PUBLISH -->
                        <div role="tabpanel" class="tab-pane" id="publishJob">
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    @include('includes.footer')

</body>
</html>