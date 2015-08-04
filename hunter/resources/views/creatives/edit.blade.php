<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creative Profile</title>
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
                        <li><a class="active" href="{{ asset('/index.php/creatives/'.$creative->getId().'/edit') }}"><i class="fa-li fa fa-user"></i> My profile</a></li>
                        <li><a href=""><i class="fa-li fa fa-suitcase"></i> My jobs</a></li>
                        <li><a href="{{ asset('/index.php/creatives/'.$creative->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-ellipsis-h"></i> My CV</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-md">
                <p>Your profile is searchable for Employer.</p>
                <a href="" class="btn btn-black">View as company</a>
                <h3 class="underline">Personal info</h3>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">First name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Occupation</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option>Country</option>
                                <option>Vietnam</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option>City</option>
                                <option>Ho Chi Minh</option>
                                <option>Ha Noi</option>
                                <option>Da Nang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Date of birth</label>
                        <div class="col-sm-2">
                            <select class="form-control">
                                <option>Month</option>
                                <option>Jan</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control">
                                <option>Date</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control">
                                <option>Year</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <p>Your contact info is only visible to Company when you apply for a job.</p>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                            <p class="form-control-static">png@gmail.com</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="(+84) 0979984392">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">About me</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="6" placeholder="A short description about you"></textarea>
                            <p class="help-block">Maximum 500 characters</p>
                        </div>
                    </div>
                </form>
                <h3 class="underline">Gallery</h3>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <a href="" class="add" data-toggle="modal" data-target="#gallery">
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <p><small>You have 2 frames left or get more by <a href=""><i class="fa fa-envelope"></i> Invite friends</a></small></p>
                        <div class="modal fade" id="gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4>Upload artwork</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a href="#upload-file" aria-controls="home" role="tab" data-toggle="tab"><span class="badge">1</span> Upload File</a></li>
                                                <li role="presentation" class="active"><a href="#setting" aria-controls="profile" role="tab" data-toggle="tab"><span class="badge">2</span> Setting</a></li>
                                            </ul>
                                            <br>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane" id="upload-file">
                                                    <form class="padding-md">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" value="option1">
                                                                From computer
                                                            </label>
                                                        </div>
                                                        <button class="btn btn-black">Select file</button>
                                                        <p class="help-block">Allowed file types: jpg, jpeg, gif, png, mov, avi, mp4, mpg, wmv, flv or MP3.<br>Maximum file size: image: 8MB, video: 500MB and audio: 20MB.</p>
                                                        <br>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio"2 name="optionsRadios" value="option">
                                                                Embed video
                                                            </label>
                                                        </div>
                                                        <input type="email" class="form-control" placeholder="www.">
                                                        <p class="help-block">WE ACCEPT VIDEO CONTENT FROM YOUTUBE AND VIMEO ONLY.<br>Please use the video URL only, not the embed code.<br>Eg: http://vimeo.com/xxxxxxxx or http://www.youtube.com/watch?v=xxxxxxxx</p>
                                                    </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane active" id="setting">
                                                    <form class="padding-md">
                                                        <div class="row">
                                                            <div class="col-sm-7">
                                                                <div class="form-group">
                                                                    <label>Work title *</label>
                                                                    <input type="text" class="form-control" placeholder="Give your work a title eg. Illustration for Children book">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description *</label>
                                                                    <textarea class="form-control" rows="6" placeholder="Tell us more about your work"></textarea>
                                                                    <p class="help-block">Maximum 1000 characters</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Client</label>
                                                                    <input type="text" class="form-control" placeholder="Who is this work for...">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Company</label>
                                                                    <input type="text" class="form-control" placeholder="This work belongs to...">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <label>Your role</label>
                                                                    <input type="text" class="form-control" placeholder="What you did in this project">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Co-owner</label>
                                                                    <input type="text" class="form-control" placeholder="Start typing and search user">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Their role</label>
                                                                    <input type="text" class="form-control" placeholder="What you did in this project">
                                                                </div>
                                                                <button class="btn btn-black">Send request</button><button class="btn btn-link"><i class="fa fa-envelope"></i> Invite new user</button>
                                                                <div class="media padding-sm bg-gray">
                                                                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <div class="media-left">
                                                                        <img class="media-object img-responsive" src="images/creative.jpg" alt="..." width="60px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <strong>Tien Nguyen</strong><br>Graphic Designer<br>Lead Designer
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p class="text-center">
                                                            <button class="btn btn-black">Done</button>
                                                            <button class="btn btn-line">Cancel</button>
                                                        </p>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 artwork">
                        <div class="art-thumb">
                            <div class="dummy"></div>
                            <div class="square-content">
                                <img class="img-responsive" src="images/work6.jpg">
                            </div>
                            <div class="square-content art-hover">
                                <a class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                                </a>
                                <div class="like-view">
                                    <i class="fa-wd fa fa-eye"></i> 35 &nbsp;&nbsp;
                                    <i class="fa-wd fa fa-heart"></i> 35
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <h5 class="text-uppercase">Thumbnail label</h5>
                            <p class="text-muted"><small>Character design</small>, <small>Illustration</small></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 artwork">
                        <div class="art-thumb">
                            <div class="dummy"></div>
                            <div class="square-content">
                                <img class="img-responsive" src="images/work7.jpg">
                            </div>
                            <div class="square-content art-hover">
                                <a class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                                </a>
                                <div class="like-view">
                                    <i class="fa-wd fa fa-eye"></i> 35 &nbsp;&nbsp;
                                    <i class="fa-wd fa fa-heart"></i> 35
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <h5 class="text-uppercase">Thumbnail label</h5>
                            <p class="text-muted"><small>Character design</small>, <small>Illustration</small></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 artwork">
                        <div class="art-thumb">
                            <div class="dummy"></div>
                            <div class="square-content">
                                <img class="img-responsive" src="images/work8.jpg">
                            </div>
                            <div class="square-content art-hover">
                                <a class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                                </a>
                                <div class="like-view">
                                    <i class="fa-wd fa fa-eye"></i> 35 &nbsp;&nbsp;
                                    <i class="fa-wd fa fa-heart"></i> 35
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <h5 class="text-uppercase">Thumbnail label</h5>
                            <p class="text-muted"><small>Character design</small>, <small>Illustration</small></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 artwork">
                        <div class="art-thumb">
                            <div class="dummy"></div>
                            <div class="square-content">
                                <img class="img-responsive" src="images/work9.jpg">
                            </div>
                            <div class="square-content art-hover">
                                <a class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                                </a>
                                <div class="like-view">
                                    <i class="fa-wd fa fa-eye"></i> 35 &nbsp;&nbsp;
                                    <i class="fa-wd fa fa-heart"></i> 35
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <h5 class="text-uppercase">Thumbnail label</h5>
                            <p class="text-muted"><small>Character design</small>, <small>Illustration</small></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 artwork">
                        <div class="art-thumb">
                            <div class="dummy"></div>
                            <div class="square-content">
                                <img class="img-responsive" src="images/work10.jpg">
                            </div>
                            <div class="square-content art-hover">
                                <a class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                                </a>
                                <div class="like-view">
                                    <i class="fa-wd fa fa-eye"></i> 35 &nbsp;&nbsp;
                                    <i class="fa-wd fa fa-heart"></i> 35
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <h5 class="text-uppercase">Thumbnail label</h5>
                            <p class="text-muted"><small>Character design</small>, <small>Illustration</small></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 artwork">
                        <div class="art-thumb">
                            <div class="dummy"></div>
                            <div class="square-content">
                                <img class="img-responsive" src="images/work8.jpg">
                            </div>
                            <div class="square-content art-hover">
                                <a class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                                </a>
                                <div class="like-view">
                                    <i class="fa-wd fa fa-eye"></i> 35 &nbsp;&nbsp;
                                    <i class="fa-wd fa fa-heart"></i> 35
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <h5 class="text-uppercase">Thumbnail label</h5>
                            <p class="text-muted"><small>Character design</small>, <small>Illustration</small></p>
                        </div>
                    </div>
                </div>
                <h3 class="underline">Skill</h3>
                <input class="form-control" type="text" value="Illsutration, Character design" data-role="tagsinput" >
                <p class="help-block">Add maximum 10 skills to your profile.</p>

                <h3 class="underline">Software</h3>
                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Adobe Indesign</option>
                            <option>...</option>
                        </select>
                        <select class="form-control">
                            <option>Skill rate</option>
                            <option>5</option>
                            <option>4</option>
                            <option>3</option>
                            <option>2</option>
                            <option>1</option>
                        </select>
                    </div>
                    <button class="btn btn-black">Add</button>
                </form>
                <br>
                <div class="col-sm-4 col-xs-6">
                    <div class="media padding-sm bg-gray">
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="media-left">
                            <img class="media-object img-responsive" src="images/software/illustrator.png" alt="...">
                        </div>
                        <div class="media-body">
                            <p>Adobe Illustrator<br>
                            <span class="star-rating">
                                <input type="radio" name="rating" value="1"><i></i>
                                <input type="radio" name="rating" value="2" checked><i></i>
                                <input type="radio" name="rating" value="3"><i></i>
                                <input type="radio" name="rating" value="4"><i></i>
                                <input type="radio" name="rating" value="5"><i></i>
                            </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="media padding-sm bg-gray">
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="media-left">
                            <img class="media-object img-responsive" src="images/software/photoshop.png" alt="...">
                        </div>
                        <div class="media-body">
                            <p>Adobe Photoshop<br>
                            <span class="star-rating">
                                <input type="radio" name="rating" value="1"><i></i>
                                <input type="radio" name="rating" value="2"><i></i>
                                <input type="radio" name="rating" value="3"><i></i>
                                <input type="radio" name="rating" value="4" checked><i></i>
                                <input type="radio" name="rating" value="5"><i></i>
                            </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="media padding-sm bg-gray">
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="media-left">
                            <img class="media-object img-responsive" src="images/software/indesign.png" alt="...">
                        </div>
                        <div class="media-body">
                            <p>Adobe Indesign<br>
                            <span class="star-rating">
                                <input type="radio" name="rating" value="1"><i></i>
                                <input type="radio" name="rating" value="2"><i></i>
                                <input type="radio" name="rating" value="3" checked><i></i>
                                <input type="radio" name="rating" value="4"><i></i>
                                <input type="radio" name="rating" value="5"><i></i>
                            </span></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h3 class="underline">Language</h3>
                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Language</option>
                            <option>...</option>
                        </select>
                        <select class="form-control">
                            <option>Fluent</option>
                            <option>...</option>
                        </select>
                    </div>
                    <button class="btn btn-black">Add</button>
                </form>
                <br>
                <div class="tag-box">Vietnamese&nbsp;&nbsp; <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                <div class="tag-box">English&nbsp;&nbsp; <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>

                <div class="clearfix"></div>
                <h3 class="underline">Job experience</h3>
                <form class="form-inline">
                    <div class="form-group">
                        <label>Years experience</label>
                        <select class="form-control">
                            <option>Select</option>
                            <option>...</option>
                        </select>
                    </div>
                </form>
                <br>
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="" class="add" data-toggle="modal" data-target="#experience">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </td>
                        <div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4>Job Experience</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="padding-md">
                                            <div class="form-group">
                                                <label>Company *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Job Title *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <select class="form-control">
                                                            <option>Country</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control">
                                                            <option>City</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>From</label>
                                                        <select class="form-control">
                                                            <option>Year</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>To</label>
                                                        <select class="form-control">
                                                            <option>Present</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="6" placeholder="Description"></textarea>
                                                <p class="help-block">Maximum 1000 words</p>
                                            </div>
                                            <button type="submit" class="btn btn-black">Done</button>
                                            <button type="submit" class="btn btn-line">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <td>
                            <ul class="action-link">
                                <li><button class="btn-link"><i class="fa fa-pencil"></i> Edit</button> </li> |
                                <li><button class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                            </ul>
                            <h5 class="text-uppercase">Graphic designer and website admin</h5>
                            <p class="text-muted"><small>XYZ Studio | Jan 2014 - Jun 2014</small></p>
                            <ul>
                                <li>Design e-banner for tourist company.</li>
                                <li>Aenean commodo ligula eget dolor. Aenean massa. </li>
                                <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </li>
                                <li>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul class="action-link">
                                <li><button class="btn-link"><i class="fa fa-pencil"></i> Edit</button> </li> |
                                <li><button class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                            </ul>
                            <h5 class="text-uppercase">Junior Designer</h5>
                            <p class="text-muted"><small>ABC Studio  |  Aug 2013 - Dec 2013</small></p>
                            <ul>
                                <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </li>
                                <li>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </li>
                            </ul>
                        </td>
                    </tr>
                </table>

                <h3 class="underline">Education</h3>
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="" class="add" data-toggle="modal" data-target="#education">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </td>
                        <div class="modal fade" id="education" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4>Education</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="padding-md">
                                            <div class="form-group">
                                                <label>School *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Degree *</label>
                                                    <select class="form-control">
                                                        <option>Bachelor</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Major *</label>
                                                    <select class="form-control">
                                                        <option>Multimedia Design</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>From</label>
                                                        <select class="form-control">
                                                            <option>Year</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>To</label>
                                                        <select class="form-control">
                                                            <option>Present</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-black">Done</button>
                                            <button type="submit" class="btn btn-line">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <td>
                            <ul class="action-link">
                                <li><button class="btn-link"><i class="fa fa-pencil"></i> Edit</button> </li> |
                                <li><button class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                            </ul>
                            <h5 class="text-uppercase">Ho Chi Minh City University of Architecture</h5>
                            <p class="text-muted"><small>Bachelor of Multimedia Design  |  Sep 2010 - July 2015 </small></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul class="action-link">
                                <li><button class="btn-link"><i class="fa fa-pencil"></i> Edit</button> </li> |
                                <li><button class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                            </ul>
                            <h5 class="text-uppercase">Nguyen Thi Minh Khai High School</h5>
                            <p class="text-muted"><small>Sep 2007 - July 2010</small></p>
                        </td>
                    </tr>
                </table>
                <hr>
                <h3 class="underline">Achievement</h3>
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="" class="add" data-toggle="modal" data-target="#achievement">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </td>
                        <div class="modal fade" id="achievement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4>Achievement</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="padding-md">
                                            <div class="form-group">
                                                <label>Title *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Creative field *</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <select class="form-control">
                                                            <option>Month</option>
                                                            <option>Jan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control">
                                                            <option>Date</option>
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="6" placeholder="Description"></textarea>
                                                <p class="help-block">Maximum 1000 words</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Website (optional)</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-black">Done</button>
                                            <button type="submit" class="btn btn-line">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <td>
                            <ul class="action-link">
                                <li><button class="btn-link"><i class="fa fa-pencil"></i> Edit</button> </li> |
                                <li><button class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                            </ul>
                            <h5 class="text-uppercase">Canon marathon Vietnam</h5>
                            <p class="text-muted"><small>Photography  |  Sep 2012</small></p>
                            <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. <a href="">http://www.canon.com.vn/photomarathon/</a></p>
                        </td>
                    </tr>
                </table>

            </div>

        </div>

    </div>

    @include('includes.footer')

</body>
</html>