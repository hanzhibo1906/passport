<!DOCTYPE html>
<html lang="en">

<head>
    <title>用户注册</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body>

<div class=" w3l-login-form">
    <h2>注册页面</h2>
    <form action="{{url('/regDo')}}" method="post">
        <div class=" w3l-form-group">
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" name="u_name" placeholder="Username" required="required" />
            </div>
        </div>
        <div class=" w3l-form-group">
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" class="form-control" name="u_password" placeholder="Password" required="required" />
            </div>
        </div>
        <div class=" w3l-form-group">
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" class="form-control" name="u_password1"placeholder="Confirm Password" required="required" />
            </div>
        </div>
        <div class=" w3l-form-group">
            <div class="group">
                <i class="fa fa-phone"></i>
                <input type="text" class="form-control" name="u_tel" placeholder="Mobile" required="required" />
            </div>
        </div>
        <div class=" w3l-form-group">
            <div class="group">
                <i class="fa fa-envelope"></i>
                <input type="text" class="form-control" name="u_email" placeholder="Email" required="required" />
            </div>
        </div>
        <div class="forgot">
            <a href="#">Forgot Password?</a>
            <p><input type="checkbox">Remember Me</p>
        </div>
        <button type="submit">Register</button>
    </form>
    {{--<p class=" w3l-register-p">Have an account！<a href="/index/login/login.html" class="register">Login</a></p>--}}
</div>
{{--<footer>--}}
    {{--<p class="copyright-agileinfo"> &copy; Welcome to personal register</p>--}}
{{--</footer>--}}

</body>

</html>