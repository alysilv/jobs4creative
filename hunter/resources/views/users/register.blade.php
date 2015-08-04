<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li class="active">Create profile</li>
            </ol>
        </div>
    </div>

    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div role="tabpanel" class="padding-md center-tab">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" id="creative"><a href="#create-acc-creative" aria-controls="home" role="tab" data-toggle="tab">Creative</a></li>
                <li role="presentation" id="company"><a href="#create-acc-company" aria-controls="profile" role="tab" data-toggle="tab">Company</a></li>
            </ul>
            <br>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="create-acc-creative">
                    {!! Form::open(['url' => '/users', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/users') }}">--}}

                        <input type="hidden" name="user_role" value="3">

                        <div class="form-group">
                            <label for="firstName" class="col-sm-2 col-sm-offset-2 control-label">First name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="firstName" name="firstname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-sm-2 col-sm-offset-2 control-label">Last name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="lastName" name="lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 col-sm-offset-2 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 col-sm-offset-2 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password" name="password">
                                <p class="help-block">Password must contain at least 6 characters</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Pass2" class="col-sm-2 col-sm-offset-2 control-label">Re-type password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="pass2" name="re-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <p><small>By clicking on "Register" below, you are agreeing to the <a href="{{ asset('/index.php/terms-condition') }}">Terms and Conditions</a> and the <a href="{{ asset('/index.php/privacy-policy') }}">Privacy Statement</a>.</small></p>
                                <button class="btn btn-black btn-lg">Register</button>
                            </div>

                        </div>
                    {{--</form>--}}
                    {!! Form::close() !!}
                </div>
                <div role="tabpanel" class="tab-pane" id="create-acc-company">
                    {{--<form class="form-horizontal"  role="form" method="POST" action="{{ url('/users') }}">--}}
                    {!! Form::open(['url' => '/users', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        <input type="hidden" name="user_role" value="2">

                        <div class="form-group">
                            <label for="companyName" class="col-sm-2 col-sm-offset-2 control-label">Company</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="companyName" placeholder="Company full name" name="fullname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companyEmail" class="col-sm-2 col-sm-offset-2 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="companyEmail" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-offset-2 control-label">Contact person</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="contact_gender">
                                    <option>Ms.</option>
                                    <option>Mr.</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="contact_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companyPass" class="col-sm-2 col-sm-offset-2 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="companyPass" name="password">
                                <p class="help-block">Password must contain at least 6 characters</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companyPass2" class="col-sm-2 col-sm-offset-2 control-label">Re-type password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="companyPass2" name="re-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <p><small>By clicking on "Register" below, you are agreeing to the <a href="{{ asset('/index.php/terms-condition') }}">Terms and Conditions</a> and the <a href="{{ asset('/index.php/privacy-policy') }}">Privacy Statement</a>.</small></p>
                                <button class="btn btn-black btn-lg">Register</button>
                            </div>

                        </div>
                    {{--</form>--}}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>
    @include('includes.footer')


    <script type="text/javascript">
        var tab_id = window.location.hash.substr(1);
        // alert("id = " + tab_id);

        if(tab_id == 'creative'){
            $("li#creative").addClass('active');
            $("div#create-acc-creative").addClass('active');
            $("li#company").removeClass('active');
            $("div#create-acc-company").removeClass('active');
        }
        else{
            $("li#company").addClass('active');
            $("div#create-acc-company").addClass('active');
            $("li#creative").removeClass('active');
            $("div#create-acc-creative").removeClass('active');
        }

    </script>
</body>
</html>



