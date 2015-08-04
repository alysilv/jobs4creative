<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Profile</title>
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

        <section id="create-ur-profile">
            <div class="container">
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