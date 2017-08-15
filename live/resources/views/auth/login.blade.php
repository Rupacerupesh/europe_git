<!DOCtype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{{URL::to('/')}}/backend/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Green Computing CMS</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{{URL::to('/')}}/backend/assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="{{URL::to('/')}}/backend/assets/css/animate.min.css" rel="stylesheet"/>

    <link href="{{URL::to('/')}}/backend/assets/css/dashboard.css" rel="stylesheet"/>


    <!--Custom CSS-->
    <link href="{{URL::to('/')}}/backend/assets/css/style.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="{{URL::to('/')}}/backend/assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>

</head>
<body class="user-login">

<div class="wrapper login-wrapper">
    <h1><img src="{{URL::to('/')}}/backend/assets/img/user-logo.png" alt="" class="user-img img-responsive"></h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" class="loginForm"  action="{{URL::to('/login')}}">
        {!! csrf_field() !!}
            <div class="form-group @{{ errors.email  ? ' has-error' : '' }}">
                <label class="pe-7s-user fa"></label>
                <input type="text" id="email" name="email"  autofocus="autofocus" placeholder="Email"/>
            </div>
            <div class="form-group ">
                <label class="pe-7s-lock fa"></label>
                <label for="password"></label>
                <input type="password" id="password"  autofocus="autofocus" placeholder="Password" name="password">
            </div>
            <div class="form-group submit-group">
                <input type="submit" value="Log in" />
            </div>
        </form>
        <div class="group">
            <label>Don't have an account?</label>  
            <a href="{{URL::to('register')}}" class="registerButton">register</a>  
        </div>

</div>

</div>
</body>

<!--   Core JS Files   -->
<script src="{{URL::to('/')}}/backend/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/backend/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/backend/assets/js/main.js"></script>

</html>
