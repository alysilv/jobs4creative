<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hunter Home</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div id="home-slider" class="carousel slide hidden-xs" data-ride="carousel">
        <!-- Wrapper for Slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('/images/home-banner.jpg') }}" >
                <div class="carousel-caption">
                    <h1>Discover <strong class="text-highlight">Creative Star </strong>for Your Team</h1>
                    <a href="#" class="btn btn-lg btn-default">Find out more</a>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/images/home-banner.jpg') }}" >
                <div class="carousel-caption">
                    <h1>Discover <strong class="text-highlight">Creative Star </strong>for Your Team</h1>
                    <a href="#" class="btn btn-lg btn-default">Find out more</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#home-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if(Auth::user())
                    @if(Auth::user()->getRoleId() != 2)
                    <a class="btn btn-lg btn-black btn-right" href="#" data-toggle="modal" data-target="#alert_message">Post your job now</a>
                    @else
                    <a class="btn btn-lg btn-black btn-right" href="{{ asset('/index.php/jobs/create') }}">Post your job now</a>
                    @endif
                @else
                    <a class="btn btn-lg btn-black btn-right" href="#" data-toggle="modal" data-target="#SigninBox">Post your job now</a>
                @endif
                <h1>HOT JOBS</h1>

                <table class="table table-hover result-list">
                    <tr>
                        <td><img class="med-pic" src="images/company1.jpg"></td>
                        <td>
                            <h4><a href="">Designer/Illustrator for Book cover</a></h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-7">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Nha Nam Publisher</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 col-sm-5">
                                    <p><i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="med-pic" src="images/company2.jpg"></td>
                        <td>
                            <h4><a href="">Designer/Illustrator for Book cover</a></h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-7">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Nha Nam Publisher</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 col-sm-5">
                                    <p><i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="med-pic" src="images/company3.jpg"></td>
                        <td>
                            <h4><a href="">Designer/Illustrator for Book cover</a></h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-7">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Nha Nam Publisher</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 col-sm-5">
                                    <p><i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="med-pic" src="images/company4.jpg"></td>
                        <td>
                            <h4><a href="">Designer/Illustrator for Book cover</a></h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-7">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Nha Nam Publisher</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 col-sm-5">
                                    <p><i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="med-pic" src="images/company5.jpg"></td>
                        <td>
                            <h4><a href="">Designer/Illustrator for Book cover</a></h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-7">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Nha Nam Publisher</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 col-sm-5">
                                    <p><i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="med-pic" src="images/company6.jpg"></td>
                        <td>
                            <h4><a href="">Designer/Illustrator for Book cover</a></h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-7">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Nha Nam Publisher</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 col-sm-5">
                                    <p><i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh</p>
                                </div>
                            </div>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 showcase">
                    <h1>STAR OF THE WEEK</h1>
                    <div class="img-square">
                        <img class="img-responsive full-width" src="images/work1.jpg">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-square">
                                <img class="img-responsive full-width" src="images/work2.jpg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-square">
                                <img class="img-responsive full-width" src="images/work3.jpg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-square">
                                <img class="img-responsive full-width" src="images/work4.jpg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-square">
                                <img class="img-responsive full-width" src="images/work5.jpg">
                            </div>
                        </div>
                    </div>
                    <p><a class="link-yellow" href=""><i class="fa fa-search"></i> Find more creative stars</a></p>
                </div>
            </div>
        </div>
    </div>
    <section id="whyus">
        <div class="container-fluid">
            <h1>why us?</h1>
            <div class="col-md-3 col-xs-6">
                <img class="img-responsive center-block" src="{{ asset('/images/homeicon1.png') }}">
                <h3 class="text-uppercase">Lorem ispum</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            </div>
            <div class="col-md-3 col-xs-6">
                <img class="img-responsive center-block" src="{{ asset('/images/homeicon2.png') }}">
                <h3 class="text-uppercase">Lorem ispum</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            </div>
            <div class="col-md-3 col-xs-6">
                <img class="img-responsive center-block" src="{{ asset('/images/homeicon3.png') }}">
                <h3 class="text-uppercase">Lorem ispum</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            </div>
            <div class="col-md-3 col-xs-6">
                <img class="img-responsive center-block" src="{{ asset('/images/homeicon4.png') }}">
                <h3 class="text-uppercase">Lorem ispum</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            </div>
        </div>
    </section>
    <section id="create-ur-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-uppercase text-center">Create your profile</h1>
                    <p class="text-center">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-6">
                    <a class="circle-link" href="{{ asset('/index.php/users/register#creative') }}">
                        <div>
                            <img src="{{ asset('/images/homeicon5.png') }}">
                            <h4>Creative</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="circle-link" href="{{ asset('/index.php/users/register#company') }}">
                        <div>
                            <img src="{{ asset('/images/homeicon6.png') }}">
                            <h4>Company</h4>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </section>
    @include('includes.footer')

</body>
</html>
