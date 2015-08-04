<!DOCTYPE html>
<html lang="en">
<head>
    <title>Company profile setting</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ asset('/index.php/companies/'.$company->id) }}">{!! $company->fullname !!}</a></li>
                <li class="active">Company Profile</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="padding-md bg-black bright-text">
                    <img class="img-responsive center-block" src="{{ asset('/images/'.$company->logo) }}">
                    <h3 class="text-center">{!! $company->fullname !!}</h3>
                    <br>
                    <ul class="fa-ul control-list">
                        <li><a  href="{{ asset('/index.php/companies/'.$company->id.'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                        <li><a class="active" href="{{ asset('/index.php/companies/'.$company->id.'/edit') }}"><i class="fa-li fa fa-building"></i> Company profile</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/jobs/create') }}"><i class="fa-li fa fa-toggle-up"></i> Post a job</a></li>
                        <li><a href="{{ asset('/index.php/jobs') }}"><i class="fa-li fa fa-suitcase"></i> Job list</a></li>
                        <li><a href=""><i class="fa-li fa fa-users"></i> Creative list</a></li>
                        <li><a href=""><i class="fa-li fa fa-envelope"></i> Message (3)</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->id.'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-shopping-cart"></i> Order history</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-md">

                <h3 class="underline">Company profile</h3>
                <p>Please provide correct information from your company for billing purposes.</p>
                {{--<form class="form-horizontal" method="PUT" action="{{  }}">--}}
                {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Full name</label>
                        <div class="col-sm-6">
                            {!! Form::text('fullname', $company->fullname, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            {!! Form::text('address', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3 col-sm-offset-2">
                            {!! Form::select('country', $country_names, $company->country_id, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::select('city', $city_names, $company->city_id, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-6">
                          {!! Form::text('phone', $company->phone, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fax</label>
                        <div class="col-sm-6">
                          {!! Form::text('fax', $company->fax, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fax number</label>
                        <div class="col-sm-6">
                          {!! Form::text('fax_number', $company->fax_number, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Profile name</label>
                        <div class="col-sm-6">
                          {!! Form::text('profile_name', $company->fullname, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Contact person</label>
                        <div class="col-sm-2">
                            {!! Form::select('contact_gender', ['Ms.' => 'Ms.', 'Mr.' => 'Mr.'], $company->contact_gender, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::text('contact_name', $company->contact_name, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Company size</label>
                        <div class="col-sm-4">
                            {!! Form::text('size', $company->company_size, ['class' => 'form-control', 'placeholder' => '50-100 people']) !!}
                          {{--<input type="text" class="form-control" placeholder="50-100 people" name="size">--}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">About us</label>
                        <div class="col-sm-10">
                          {{--<textarea class="form-control" rows="6" name="about_us"></textarea>--}}
                          {!! Form::textarea('about_us', $company->about_us, ['class' => 'form-control', 'row' => '6']) !!}
                          <p class="help-block">Maximum 10,000 characters</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Why join us</label>
                        <div class="col-sm-10">
                          {{--<textarea class="form-control" rows="6" name="why_join_us"></textarea>--}}
                          {!! Form::textarea('why_join_us', $company->why_join_us, ['class' => 'form-control', 'row' => '6']) !!}
                          <p class="help-block">Maximum 10,000 characters</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-6">
                          {{--<input type="text" class="form-control" name="website" placeholder="http://">--}}
                          {!! Form::text('website', $company->website, ['class' => 'form-control', 'placeholder' => 'http://']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Embed video</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                {{--<input type="text" class="form-control" name="video_url" placeholder="http://">--}}
                                {!! Form::text('video_url', $company->video_url, ['class' => 'form-control', 'placeholder' => 'http://']) !!}
                                <span class="input-group-btn">
                                <button class="btn btn-black" type="button">Embed</button>
                                </span>
                            </div><!-- /input-group -->
                            <p class="help-block">WE ACCEPT VIDEO CONTENT FROM YOUTUBE AND VIMEO ONLY. Please use the video URL only, not the embed code. Eg: http://vimeo.com/xxxxxxxx or http://www.youtube.com/watch?v=xxxxxxxx</p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-2">
                            <button class="btn btn-black">Save</button>
                            <a class="btn btn-line" href="{!! asset('/index.php/companies/'.$company->id.'/dashboard') !!}">Cancel</a>
                        </div>
                    </div>
                {!! Form::close() !!}
                {{--</form>--}}

            </div>
        </div>

    </div>

    @include('includes.footer')

</body>
</html>