<!DOCTYPE html>
<html lang="en">
<head>
    <title>Company Account Setting</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/edit') }} }}">{!! $company->getFullName() !!}</a></li>
                <li class="active">Account setting</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="padding-md bg-black bright-text">
                    <img class="img-responsive center-block" src="images/company3.jpg">
                    <h3 class="text-center">{!! $company->getFullName() !!}</h3>
                    <br>
                    <ul class="fa-ul control-list">
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/edit') }}"><i class="fa-li fa fa-building"></i> Company profile</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/jobs/create') }}"><i class="fa-li fa fa-toggle-up"></i> Post a job</a></li>
                        <li><a href="{{ asset('/index.php/jobs') }}"><i class="fa-li fa fa-suitcase"></i> Job list</a></li>
                        <li><a href=""><i class="fa-li fa fa-users"></i> Creative list</a></li>
                        <li><a href=""><i class="fa-li fa fa-envelope"></i> Message (3)</a></li>
                        <li><a class="active" href="{{ asset('/index.php/companies/'.$company->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-shopping-cart"></i> Order history</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-md">

                <h3 class="underline">Account setting</h3>
                <p>Invoices and receipts will be sent to this email address.</p>
                {{--<form class="form-horizontal" method="PUT" action="{{ route('users/'.$user->id) }}">--}}
                {!! Form::model($company->user, ['route' => ['users.update', $company->user->getId()], 'method' => 'PUT']) !!}
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <p class="form-control-static">{!! $company->user->getEmail() !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 control-label">Current password</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" id="password" name="current_password">
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
                {!! Form::close() !!}
                {{--</form>--}}

            </div>
        </div>

    </div>

    @include('includes.footer')

</body>
</html>