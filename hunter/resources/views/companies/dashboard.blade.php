<!DOCTYPE html>
<html lang="en">
<head>
    <title>Company Dashboard</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/companies/'.$company->getId().'/edit') }}">{!! $company->getFullName() !!}</a></li>
                <li class="active">My Profile</li>
            </ol>
        </div>
    </div>


    <div class="modal fade" id="upload_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload a profile picture</h4>
                </div>
                <div class="modal-body">
                    {!! Form::model($company, ['route' => ['companies.update', $company->getId()], 'method' => 'PUT', 'class' => 'padding-md', 'file' => 'true', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::file('image', Input::old('image'), ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group pull-right">
                            <a href="#" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Cancel</span></a>
                            {!! Form::submit('Upload', ['class' => 'btn btn-primary right_btn']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
                <div style="clear:both"></div>
            </div>
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
                        <li><a class="active" href="{{ asset('/index.php/companies/'.$company->getId().'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/edit') }}"><i class="fa-li fa fa-building"></i> Company profile</a></li>
                        <li><a href="{{ URL::to('/companies/'.$company->getId().'/jobs/create') }}"><i class="fa-li fa fa-toggle-up"></i> Post a job</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/jobs') }}"><i class="fa-li fa fa-suitcase"></i> Job list</a></li>
                        <li><a href=""><i class="fa-li fa fa-users"></i> Creative list</a></li>
                        <li><a href=""><i class="fa-li fa fa-envelope"></i> Message (3)</a></li>
                        <li><a href="{{ asset('/index.php/companies/'.$company->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-shopping-cart"></i> Order history</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-md">
                <h3 class="underline">Getting started</h3>
                <div class="well">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="complete" data-toggle="modal" data-target="#upload_file"><span class="badge">1</span> Upload a profile picture</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ asset('/index.php/companies/'.$company->getId().'/edit') }}" class="undone"><span class="badge">2</span> Fill in company profile</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ asset('/index.php/companies/'.$company->getId().'/jobs/create') }}" class="undone"><span class="badge">3</span> Post a job</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="undone"><span class="badge">4</span> Search creative stars</a>
                        </div>
                    </div>

                </div>
                <h3 class="underline">New applicants</h3>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="media padding-sm">
                            <div class="media-left">
                                <a href=""><img class="media-object img-responsive" src="images/creative.jpg" alt="..." width="60px"></a>
                            </div>
                            <div class="media-body">
                                <a href=""><strong>Tien Nguyen</strong></a><br>Graphic Designer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media padding-sm">
                            <div class="media-left">
                                <a href=""><img class="media-object img-responsive" src="images/work10.jpg" alt="..." width="60px"></a>
                            </div>
                            <div class="media-body">
                                <a href=""><strong>Phuong Nguyen</strong></a><br>Graphic Designer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media padding-sm">
                            <div class="media-left">
                                <a href=""><img class="media-object img-responsive" src="images/creative.jpg" alt="..." width="60px"></a>
                            </div>
                            <div class="media-body">
                                <a href=""><strong>Tien Nguyen</strong></a><br>Graphic Designer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media padding-sm">
                            <div class="media-left">
                                <a href=""><img class="media-object img-responsive" src="images/work10.jpg" alt="..." width="60px"></a>
                            </div>
                            <div class="media-body">
                                <a href=""><strong>Phuong Nguyen</strong></a><br>Graphic Designer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media padding-sm">
                            <div class="media-left">
                                <a href=""><img class="media-object img-responsive" src="images/creative.jpg" alt="..." width="60px"></a>
                            </div>
                            <div class="media-body">
                                <a href=""><strong>Tien Nguyen</strong></a><br>Graphic Designer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="media padding-sm">
                            <div class="media-left">
                                <a href=""><img class="media-object img-responsive" src="images/work10.jpg" alt="..." width="60px"></a>
                            </div>
                            <div class="media-body">
                                <a href=""><strong>Phuong Nguyen</strong></a><br>Graphic Designer
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <a href="">View all <i class="fa fa-angle-right"></i></a>
                <h3 class="underline">Statistic</h3>
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">
                        <form>
                            <div class="form-group">
                                <label>Job title</label>
                                <select class="form-control">
                                    <option>All</option>
                                    <option>Graphic designer</option>
                                    <option>Illustrator</option>
                                    <option>3d artist</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Time range</label>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>2 weeks
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">4 weeks
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>6 weeks
                                  </label>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <span class="note note-primary"></span> Views<br>
                        <span class="note note-black"></span> Applicants
                    </div>
                </div>
            </div>

        </div>

    </div>


    @include('includes.footer')

</body>
</html>