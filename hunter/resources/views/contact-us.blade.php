<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact us</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h3 class="underline">Contact us</h3>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Your name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Your email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-black">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-5 col-md-4 col-md-offset-1">
                <h3 class="underline">Jobs4Creative office</h3>
                <ul class="fa-ul">
                  <li><i class="fa-li fa fa-map-marker"></i>Indochina Park Tower<br>4 Nguyen Dinh Chieu, Da Kao Ward, District 1, Ho Chi Minh City</li>
                  <li><i class="fa-li fa fa-phone"></i>+84 (0)8 62 884 780</li>
                  <li><i class="fa-li fa fa-envelope"></i>contact@job4creative.com</li>
                </ul>
                <h3 class="underline">Follow us at</h3>
                <a href="" class="social-link">
                    <i class="fa fa-facebook fa-lg "></i>
                </a>
                <a href="" class="social-link">
                    <i class="fa fa-google-plus fa-lg"></i>
                </a>
                <a href="" class="social-link">
                    <i class="fa fa-linkedin fa-lg"></i>
                </a>
            </div>
        </div>
    </div>

    @include('includes.footer')

</body>
</html>