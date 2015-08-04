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
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/companies/'.$company->getId()) }}">{!! $company->getFullName() !!}</a></li>
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
                        <li role="presentation" id="createJobLink"><a href="#createJob" aria-controls="home" role="tab" data-toggle="tab"><span class="badge">1</span> Create a job</a></li>
                        <li role="presentation" id="previewJobLink"><a href="#previewJob" aria-controls="profile" role="tab" data-toggle="tab"><span class="badge">2</span> Preview</a></li>
                        <li role="presentation" class="active" id="publishJobLink"><a href="#publishJob" aria-controls="profile" role="tab" data-toggle="tab"><span class="badge">3</span> Publish</a></li>
                    </ul>
                    <br>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- CREATE JOB -->
                        <div role="tabpanel" class="tab-pane" id="createJob">
                            {{--<form class="form-horizontal" action="{{ asset('/index.php/jobs') }}">--}}
                            {!! Form::open(['url' => '/jobs', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                            <input type="hidden" name="company_id" value="{!! $company->getId() !!}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job title</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="job_title" placeholder="Illustrator for Print ad" value="{!! old('job_title') !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Creative field</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="creative_fields" value="{!! old('creative_fields') !!}" data-role="tagsinput">
                                    <p class="help-block">Maximum 3 fields</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Location</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="location" value="{!! old('location') !!}" data-role="tagsinput" >
                                    <p class="help-block">Maximum 3 locations</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Expiry</label>
                                <div class="col-sm-6">
                                    <div class='input-group input-append'>
                                        <input type='text' class="form-control" name="exp_date" value=""/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Preferred language</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" value="English" data-role="tagsinput" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Resume language</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" value="English" data-role="tagsinput" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Salary</label>
                                <div class="col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="radio"> Remember me
                                        </label>
                                    </div>
                                    <div class="form-inline">
                                        <input type="text" class="form-control" placeholder="from">
                                        <input type="text" class="form-control" placeholder="to"> USD/month
                                    </div>
                                    <br>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" >
                                            Negotiable
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job Level</label>
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="entry"> Entry
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="junior"> Junior
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="senior"> Senior
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="director/manager"> Director / Manager
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job type</label>
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="full-time"> Full-time
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="part-time"> Part-time
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="contract"> Contract
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="intern"> Intern
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact person</label>
                                <div class="col-sm-2">
                                    <select class="form-control">
                                        <option>Ms.</option>
                                        <option>Mr.</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email for application</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" >
                                    <p class="help-block">Hidden to Creative</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Job description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Required skill & experience</label>
                                <div class="col-sm-9">
                                    <table class="table table-hover">
                                        <tr>
                                            <td>
                                                <a href="" class="add" data-toggle="modal" data-target="#myModal">
                                                                <span class="fa-stack fa-lg">
                                                                  <i class="fa fa-circle fa-stack-2x"></i>
                                                                  <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                                                </span>
                                                </a>
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4>Add skill</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="padding-md">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Required skill or experience">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" rows="6" placeholder="Description"></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-black">Add</button><br><br>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <ul class="action-link">
                                                    <li><button class="btn-link"><i class="fa fa-pencil"></i> Edit</button> </li> |
                                                    <li><button class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                                                </ul>
                                                <h4>Illustration</h4>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <ul class="action-link">
                                                    <li><button class="btn-link"><i class="fa fa-pencil"></i> Edit</button> </li> |
                                                    <li><button class="btn-link" aria-label="Close"><i class="fa fa-remove"></i></button></li>
                                                </ul>
                                                <h4>2D Drawing</h4>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Why you should work here</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6"></textarea>
                                </div>
                            </div>

                            <hr>
                            <button class="btn btn-black pull-right" id="createSubmit">Next</button>
                            {{--</form>--}}
                            {!! Form::close() !!}
                        </div>

                        <!-- PREVIEW -->
                        <div role="tabpanel" class="tab-pane" id="previewJob">
                            <p class="bg-warning padding-sm"><small><i class="fa fa-asterisk"></i> Your job has been saved as a deactive job in your Job list.</small></p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job title</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">Illustrator for Print ad</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Creative field</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">Print media, Arts, Design</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Location</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">Ha Noi, Da Nang</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Expiry</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">18/03/2015</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Preferred language</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">English</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Resume language</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">English</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Salary</label>
                                    <div class="col-sm-9">
                                        <p class="form-control-static">500 - 600 USD/month</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job Level</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">Senior</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job type</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">Part-time</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact person</label>
                                    <div class="col-sm-2">
                                        <p class="form-control-static">Ms. Nhi Nguyen</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email for application</label>
                                    <div class="col-sm-6">
                                        <p class="form-control-static">nhinguyen@studio99.com</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Job description</label>
                                    <div class="col-sm-9">
                                        <p class="form-control-static">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Required skill & experience</label>
                                    <div class="col-sm-9">
                                        <h4>Illustration</h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        <h4>Hand sketching</h4>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                                        <h4>Teamwork</h4>
                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Why you should work here</label>
                                    <div class="col-sm-9">
                                        <p class="form-control-static">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <ul>
                                            <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</li>
                                            <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non.</li>
                                            <li>Humquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </li>
                                            <li>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</li>
                                        </ul>
                                    </div>
                                </div>

                                <hr>
                                <a href="" class="btn btn-line"><i class="fa fa-angle-left"></i> Back</a> <button class="btn btn-black pull-right">Publish</button>
                            </form>
                        </div>

                        <!-- PUBLISH -->
                        <div role="tabpanel" class="tab-pane active" id="publishJob">
                            <h3>Your job has been posted successfully.</h3>
                            <p>To manage and edit your job, please go to <a href="{!! URL::to('/companies/'.$company->getId().'/jobs') !!}">Job list</a>.</p>
                            <a href="{{ URL::to('/companies/'.$company->getId().'/jobs/create') }}" class="btn btn-black">Post a new job</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    @include('includes.footer')

</body>
</html>