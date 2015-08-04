<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creative Account Setting</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ asset('/index.php/creatives/'.$creative->getId().'/edit') }}">{!! $creative->getFullName() !!}</a></li>
                <li class="active">Account setting</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="padding-md bg-black bright-text">
                    <img class="img-responsive center-block" src="images/creative.jpg">
                    <h3 class="text-center">{!! $creative->getFullName() !!}</h3>
                    <br>
                    <ul class="fa-ul control-list">
                        <li><a href="{{ asset('/index.php/creatives/'.$creative->getId().'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                        <li><a href="{{ asset('/index.php/creatives/'.$creative->getId().'/edit') }}"><i class="fa-li fa fa-user"></i> My profile</a></li>
                        <li><a href=""><i class="fa-li fa fa-suitcase"></i> My jobs</a></li>
                        <li><a class="active" href="{{ asset('/index.php/creatives/'.$creative->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-ellipsis-h"></i> My CV</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-md">

                <h3 class="underline">Account setting</h3>
                <p>Turn Searchable on when you want your profile to be found by Companies, and turn off when you don't want to be found.</p>
                {{--<form class="form-horizontal">--}}
                {!! Form::model($creative->user, ['route' => ['users.update', $creative->user->getId()], 'method' => 'PUT']) !!}
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="is_searchable"> Searchable
                        </label>
                    </div>
                    <hr>
                    <p>Your email is only visible to Company when you apply for a job.</p>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <p class="form-control-static">{!! $creative->user->getEmail() !!}</p>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 control-label">Current password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="current_password" id="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">New password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="new_password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Re-type new password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="re-new_password">
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-6 col-sm-offset-4">
                        <button class="btn btn-black">Save</button>
                        <a class="btn btn-line" href="{{ asset('/') }}">Cancel</a>
                    </div>

                {{--</form>--}}
                {!! Form::close() !!}
            </div>
        </div>

    </div>

    @include('includes.footer')

</body>
</html>



