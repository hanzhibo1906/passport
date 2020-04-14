<!DOCTYPE html>
<html lang="en">

<head>
    <title>用户登录</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />

</head>


<body>
<div class=" w3l-login-form">
    <h2>登录页面</h2>
    <form action="{{url('/login/login_do')}}" method="post">
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
        <div class="forgot">
            <a href="#">Forgot Password?</a>
            <p><input type="checkbox">Remember Me</p>
        </div>
        <button type="submit">登录</button>
    </form>
</div>

</body>

</html>