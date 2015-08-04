<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creative Dashboard</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ asset('/index.php/creatives/'.$creative->getId().'/edit') }}">{!! $creative->getFullName() !!}</a></li>
                <li class="active">My Profile</li>
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
                        <li><a class="active" href="{{ asset('/index.php/creatives/'.$creative->getId().'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                        <li><a href="{{ asset('/index.php/creatives/'.$creative->getId().'/edit') }}"><i class="fa-li fa fa-user"></i> My profile</a></li>
                        <li><a href=""><i class="fa-li fa fa-suitcase"></i> My jobs</a></li>
                        <li><a href=""><i class="fa-li fa fa-bell"></i> Job alert</a><li>
                        <li><a href=""><i class="fa-li fa fa-envelope"></i> Message (3)</a></li>
                        <li><a href="{{ asset('/index.php/creatives/'.$creative->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-area-chart"></i> Statistic</a></li>
                        <li><a href=""><i class="fa-li fa fa-file-text"></i> CV and Cover letter</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-md">
                <h3 class="underline">Getting started</h3>
                <div class="well">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="" class="complete"><span class="badge">1</span> Upload a profile picture</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="undone"><span class="badge">2</span> Fill in your profile</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="undone"><span class="badge">3</span> Upload new work</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="undone"><span class="badge">4</span> Upload a CV</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="undone"><span class="badge">5</span> Set job alert</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="complete"><span class="badge">6</span> Search job</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="undone"><span class="badge">7</span> Apply a job</a>
                        </div>
                    </div>

                </div>
                <h3 class="underline">My jobs</h3>
                <table class="table table-hover result-list">
                    <tr>
                        <td>
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4><a href="">Designer/Illustrator for Book cover</a></h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Nha Nam Publisher</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <p>
                                        <i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh<br>
                                        <i class="fa fa-fw fa-calendar"></i> Closing on Mar 17<br>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <ul class="action-link">
                                        <li><button class="btn btn-black">Apply</li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4><a href="">3D Artist</a></h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Glass Egg</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <p>
                                        <i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh<br>
                                        <i class="fa fa-fw fa-calendar"></i> Closing on Mar 20<br>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <ul class="action-link">
                                        <li><button class="btn btn-black">Apply</li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4><a href="">Photo retouch artist</a></h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <dl class="dl-horizontal">
                                        <dt>Company</dt>
                                        <dd><a href="">Studio 99</a></dd>
                                        <dt>Salary</dt>
                                        <dd>Negotiable</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <p>
                                        <i class="fa fa-fw fa-map-marker"></i> Ho Chi Minh<br>
                                        <i class="fa fa-fw fa-calendar"></i> Closing on June 04<br>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <ul class="action-link">
                                        <li><button class="btn btn-black">Apply</li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <a href="">View all jobs <i class="fa fa-angle-right"></i></a>
                <h3 class="underline">Statistic</h3>
                <a href="" class="pull-right">More detail <i class="fa fa-angle-right"></i></a>
            </div>

        </div>

    </div>

    @include('includes.footer')

</body>
</html>