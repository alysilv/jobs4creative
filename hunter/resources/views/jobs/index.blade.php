<?php // get sort parameter value from url
$sort = '';
if(isset($_GET['sortby'])){
    $sort = $_GET['sortby'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Company's job list </title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="breadcrumb-bar">
        <div class="container">
            <ol class="breadcrumb row">
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/companies/'.$company->getId()) }}">{!! $company->getFullName() !!}</a></li>
                <li class="active">Job list</li>
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
                        <li><a href="{{ URL::to('/companies/'.$company->getId().'/dashboard') }}"><i class="fa-li fa fa-th"></i> Dashboard</a></li>
                        <li><a href="{{ URL::to('/companies/'.$company->getId().'/edit') }}"><i class="fa-li fa fa-building"></i> Company profile</a></li>
                        <li><a href="{{ URL::to('/companies/'.$company->getId().'/jobs/create') }}"><i class="fa-li fa fa-toggle-up"></i> Post a job</a></li>
                        <li><a class="active" href="{{ URL::to('/companies/'.$company->getId().'/jobs') }}"><i class="fa-li fa fa-suitcase"></i> Job list</a></li>
                        <li><a href=""><i class="fa-li fa fa-users"></i> Creative list</a></li>
                        <li><a href=""><i class="fa-li fa fa-envelope"></i> Message (3)</a></li>
                        <li><a href="{{ URL::to('/companies/'.$company->getId().'/account-setting') }}"><i class="fa-li fa fa-cog"></i> Account setting</a></li>
                        <li><a href=""><i class="fa-li fa fa-shopping-cart"></i> Order history</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-9 padding-sm">
                <button class="btn btn-black pull-right">Export</button>
                <h3 class="underline">Job list</h3>
                <div class="form-inline pull-right">
                    <!-- Filter -->
                    <div class="form-group">
                        <label>Sort by</label>
                        {!! Form::select('sortby', ['all' => 'All', 'job_title' => 'Job Title', 'id' => 'Job ID', 'exp_date' => 'Expired Date', 'view_stats' => 'View', 'applicants' => 'Applicants'], $sort, ['class' => 'form-controlDesigner', 'id' => 'sort']) !!}
                    </div>
                </div>
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" id="active_job"><a href="#active-job" role="tab" data-toggle="tab">Active</a></li>
                        <li role="presentation" id="expired_job"><a href="#expired-job" role="tab" data-toggle="tab">Expired </a></li>
                    </ul>
                    <br>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- Applicants -->
                        <div role="tabpanel" class="tab-pane" id="active-job">
                            <table class="table table-hover">
                                <tr>
                                    <th>Job title</th>
                                    <th>Job ID</th>
                                    <th>Expriry</th>
                                    <th>View</th>
                                    <th>Applicants</th>
                                    <th></th>
                                </tr>
                                @foreach($jobs as $job)
                                <tr>
                                    <td>{!! $job->job_title !!}</td>
                                    <td>{!! $job->id !!}</td>
                                    <td>{!! $job->exp_date !!}</td>
                                    <td>{!! $job->view_stats !!}</td>
                                    <td>{!! count($job->applicants) !!}</td>
                                    <td>
                                        <ul class="action-link">
                                            <li><a href="{!! URL::to('/companies/'.$company->getId().'/jobs/'.$job->getID().'/edit') !!}" class="btn-link"><i class="fa fa-pencil"></i> Edit</a> </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <!-- Pagination -->
                            <nav class="pull-right">
                                {!! $jobs->render() !!}
                            </nav>
                        </div>


                        <!-- EXPIRED -->
                        <div role="tabpanel" class="tab-pane" id="expired-job">
                            <table class="table table-hover">
                                <tr>
                                    <th>Job title</th>
                                    <th>Job ID</th>
                                    <th>Expriry</th>
                                    <th>View</th>
                                    <th>Applicants</th>
                                </tr>
                                @foreach($jobs as $job)
                                    @if($job->status_id == 3)
                                        <tr>
                                            <td>{!! $job->job_title !!}</td>
                                            <td>{!! $job->id !!}</td>
                                            <td>{!! $job->exp_date !!}</td>
                                            <td>{!! $job->view_stats !!}</td>
                                            <td>{!! count($job->applicants) !!}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <!-- Pagination -->
                            <nav class="pull-right">
                               {!! $jobs->render() !!}
                            </nav>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    @include('includes.footer')

    <?php $tab = '';
    if(isset($_GET['tab'])){
        $tab = $_GET['tab'];
    } ?>
    <script>
        var tab = "<?php echo $tab; ?>";
        if(tab == 'active_job' || tab == ''){
            $('li#active_job').addClass('active');
            $('#active-job').addClass('active');
            $('#expired_job').removeClass('active');
        }
        if(tab == 'inactive_job'){
            $('li#inactive_job').addClass('active');
            $('#active-job').removeClass('active');
            $('#expired_job').removeClass('active');
        }
        if(tab == 'expired_job'){
            $('li#expired_job').addClass('active');
            $('#active-job').removeClass('active');
            $('#expired_job').addClass('active');
        }

        $('#sort').on('change', function(){
            var sort = $('#sort option:selected').val();
            window.location.href = document.location.pathname + '?sortby=' + sort;
        });

    </script>
</body>
</html>