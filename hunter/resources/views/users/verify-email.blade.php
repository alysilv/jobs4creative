<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verify email</title>
    @include('includes.head')
</head>
<body>
    {!! Html::ul($errors->all()) !!}
    @include('includes.header')
    <div class="container">
        <h1>Verify email address</h1>
        <p>Thank you for resitering with <a href="{{ asset('/') }}">Jobs4Creative</a></p>
        <p>We have sent varification email to {!! $email !!}. Please check your email account now and follow instruction. If the email doesn't arrive within the next 10 minutes, you may need to check your junk or spam folder.</p>
    </div>
    <div class="push"></div>
    @include('includes.footer')

</body>
</html>