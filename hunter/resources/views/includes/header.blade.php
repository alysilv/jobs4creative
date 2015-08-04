
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ asset('/') }}"><img class="img-responsive" src="{{ asset('/images/logo.png') }}"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                @if( !Auth::user() || (Auth::user() && Auth::user()->getStatusId() == 2))
                <!-- not signed in -->
                <a href="#" class="navbar-btn yellow navbar-right" data-toggle="modal" data-target="#SigninBox">Sign in</a>
                <a href="{{ asset('/index.php/users/create') }}" class="navbar-btn yellow navbar-right">Create account</a>
                @else
                    @if( Auth::user()->getRoleId() == 2)
                        <?php $company = Auth::user()->getCompany(); ?>
                <!-- signedin -->
                <p class="navbar-user navbar-right"><span>Welcome <a class="link-yellow" href="{{ asset('/index.php/companies/'.$company->getId().'/dashboard') }}">{!! Auth::user()->getName() !!}</a></span> | <a class="link-white" href="{{ asset('/index.php/users/logout') }}"> <i class="fa fa-sign-out"></i></a></p>
                    @elseif( Auth::user()->getRoleId() == 3)
                        <?php $creative = Auth::user()->getCreative(); ?>
                <p class="navbar-user navbar-right"><span>Welcome <a class="link-yellow" href="{{ asset('/index.php/creatives/'.$creative->getId().'/dashboard') }}">{!! Auth::user()->getName() !!}</a></span> | <a class="link-white" href="{{ asset('/index.php/users/logout') }}"> <i class="fa fa-sign-out"></i></a></p>
                    @else
                <p class="navbar-user navbar-right"><span>Welcome <a class="link-yellow" href="{{ asset('/index.php/users') }}">{!! Auth::user()->getName() !!}</a></span> | <a class="link-white" href="{{ asset('/index.php/users/logout') }}"> <i class="fa fa-sign-out"></i></a></p>
                    @endif
                @endif

                <ul class="nav navbar-nav navbar-right ">
                    <li><a data-toggle="collapse" href="#job-search" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-search"></span> JOBS</a></li>
                    <li><a data-toggle="collapse" href="#creative-search" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-search"></span> CREATIVE</a></li>
                    @if( !Auth::user() )
                    <li><a href="#" data-toggle="modal" data-target="#SigninBox">POST A JOB</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#SigninBox">PRICING PLAN</a></li>
                    @else
                        <?php $role = Auth::user()->getRoleId(); ?>
                        @if($role != 2)
                        <li><a href="#" data-toggle="modal" data-target="#alert_message">POST A JOB</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#alert_message">PRICING PLAN</a></li>
                        @else
                            <?php $company = Auth::user()->getCompany(); ?>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/jobs/create') }}">POST A JOB</a></li>
                        <li><a href="{{ asset('/index.php/pricing-plan') }}">PRICING PLAN</a></li>
                        @endif
                    @endif
                </ul>
            </div><!--/.nav-collapse -->

            <div class="modal fade" id="SigninBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sign in</h4>
                    </div>
                    <div class="modal-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="padding-md" action="{{ asset('/index.php/users/login')}}" method="POST">
                        {{--{!! Form::open(['route' => '/users/login', 'method' => 'POST', 'class' => 'padding-md']) !!}--}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-black">Sign in</button><br><br>
                        {{--</form>--}}
                        {!! Form::close() !!}
                        <a href="{{ asset('/index.php/users/create') }}"><small>Don't have an account?</small></a>
                    </div>
                </div>
              </div>
            </div>

        </div>
        
    </nav>
    <div class="collapse search-box" id="job-search">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" name="job_search" placeholder="Enter Job title, Company, Job type...">
                    <span class="input-group-btn">
                        <button class="btn btn-lg" type="button">Scan</button>
                    </span>
                </div><!-- /input-group -->
            </div>
                
        </div>
    </div>
    <div class="collapse search-box" id="creative-search">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" name="creative_search" placeholder="Enter Skill, Name, Title...">
                    <span class="input-group-btn">
                        <button class="btn btn-lg" type="button">Scan</button>
                    </span>
                </div><!-- /input-group -->
            </div>
                
        </div>
    </div>
    <div class="modal fade" id="alert_message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{--<div class="modal-header" style="background-color:#FFFFFF">--}}
                    {{--<button type="button" class="close close_message" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                {{--</div>--}}
                <div class="modal-body">
                    <div id="alert_message" class="alert_contain">
                        <p>You are not allowed to access this page!</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
</header>

@if (count($errors) > 0)
    <script>
            $('#SigninBox').modal('show');
          </script>

@endif


