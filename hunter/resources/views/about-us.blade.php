<!DOCTYPE html>
<html lang="en">
<head>
    <title>About us</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <section id="about-banner">
        <div class="container">
            <img src="images/imgaboutus.jpg" class="img-responsive col-md-10 col-md-offset-1">
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1>ABOUT US</h1>
                <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="images/icon1.png" class="img-responsive center-block">
                <h3 class="text-center">Who we are</h3>
                <p>Maecenas in libero eget nibh rhoncus lobortis non ac sem. Suspendisse fringilla fermentum sodales. Vivamus et mattis arcu. Phasellus erat risus, congue id porttitor vulputate, fringilla ut felis. Duis a iaculis eros. Quisque rutrum luctus ex, et rhoncus sapien viverra vitae. Etiam ornare tincidunt eleifend.</p>
            </div>
            <div class="col-sm-4">
                <img src="images/icon2.png" class="img-responsive center-block">
                <h3 class="text-center">The opportunities</h3>
                <p>Maecenas in libero eget nibh rhoncus lobortis non ac sem. Suspendisse fringilla fermentum sodales. Vivamus et mattis arcu. Phasellus erat risus, congue id porttitor vulputate, fringilla ut felis. Duis a iaculis eros. Quisque rutrum luctus ex, et rhoncus sapien viverra vitae. Etiam ornare tincidunt eleifend.</p>
            </div>
            <div class="col-sm-4">
                <img src="images/icon3.png" class="img-responsive center-block">
                <h3 class="text-center">Connecting</h3>
                <p>Maecenas in libero eget nibh rhoncus lobortis non ac sem. Suspendisse fringilla fermentum sodales. Vivamus et mattis arcu. Phasellus erat risus, congue id porttitor vulputate, fringilla ut felis. Duis a iaculis eros. Quisque rutrum luctus ex, et rhoncus sapien viverra vitae. Etiam ornare tincidunt eleifend.</p>
            </div>
        </div>
    </div>
    <section id="about-success">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-white">
                    <h1 class="underline text-white"> The success</h1>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                </div>
                <div class="col-sm-5">
                    <img src="images/icon4.png" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

</body>
</html>