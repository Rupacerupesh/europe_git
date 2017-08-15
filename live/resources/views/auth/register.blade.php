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
    <div class="wrapper login-wrapper register-form-wrapper">
        <h1><img src="{{URL::to('/')}}/backend/assets/img/user-logo.png" alt="" class="user-img img-responsive"></h1>
        <form method="post" class="registerForm">
        <div class="form-group">
            <label class="pe-7s-lock fa"></label>
            <label for="TFirstName"></label>
            <input type="text" id="TFirstName"   placeholder="First Name" name="TFirstName"/>
        </div>
        <div class="form-group">
            <label class="pe-7s-lock fa"></label>
            <label for="TLastName"></label>
            <input type="text" id="TLastName"   placeholder="Last Name" name="TLastName"/>
        </div>
        <div class="form-group">
            <label class="pe-7s-lock fa"></label>
            <label for="Email"></label>
            <input type="text" id="Email" placeholder="Email" name="Email"/>
        </div>
        <div class="form-group">
            <label class="pe-7s-lock fa"></label>
            <label for="Username"></label>
            <input type="text" id="Username" placeholder="Username" name="Username"/>
        </div>
        <div class="form-group">
            <label class="pe-7s-lock fa"></label>
            <label for="Password"></label>
            <input type="text" id="Password" placeholder="Password" name="Password"/>
        </div>
        <div class="form-group">
            <label class="pe-7s-lock fa"></label>
            <label for="ConfirmPassword"></label>
            <input type="text" id="ConfirmPassword" placeholder="ConfirmPassword" name="ConfirmPassword"/>
        </div>
        <div class="form-group submit-group">
            <input type="submit" value="Register" />
        </div>
        <div class="group">
            <label>Already have an account?</label>  
            <a href="{{URL::route('login')}}" class="registerButton">Login</a>  
        </div>
    </form>
    </div>
</body>

<!--   Core JS Files   -->
<script src="{{URL::to('/')}}/backend/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/backend/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{URL::to('/')}}/backend/assets/js/main.js"></script>

</html>