<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        body
        {
            background: url(<?php echo base_url();?>asset/register/bg.jpg);
            background-size: cover;
            font-family: sans-serif;
        }
        .wrap
        {
            max-width: 350px;
            border-radius: 20px;
            margin: auto;
            background: rgba(0,0,0,0.8);
            box-sizing: border-box;
            padding: 40px;
            color:#fff;
            margin-top: 100px;
        }
        h1
        {
            text-align: center;
        }
        input[type=text],input[type=password],input[type=email]
        {
            width: 100%;
            box-sizing: border-box;
            padding: 12px 5px;
            background: rgba(0,0,0,0.10);
            outline: none;
            border:none;
            border-bottom: 1px dotted #fff;
            color: #fff;
            border-radius: 5px;
            margin:5px;
            font-weight: bold;
        }
        input[type=submit]
        {
            width: 50%;
            box-sizing: border-box;
            padding: 10px 0px;
            margin-top: 30px;
            outline: none;
            border:none;
            background: #60adde;
            opacity: 0.7;
            border-radius: 20px;
            font-size: 20px;
            color: #fff;
        }
        input[type=submit]:hover
        {
            background: #003366;
            opacity: 0.7;
        }

    </style>

</head>
<body>
    <div class="wrap">
        <h1>Đăng Ký</h1>
        <form class="box" name="login" method="POST" action="">
            <input type="text" name="username" placeholder="Nhập tài khoản" id="username" required="">
            <div id="error1"></div>
            <input type="password" name="password1" placeholder="Nhập mật khẩu" id="password1" required="">
            <div id="error2"></div>
            <input type="password" name="password2" placeholder="Nhập lại mật khẩu" id="password2" required="">
            <div id="error3"></div>
            <input type="email" name="email" placeholder="Enter email" id="email">
            <div id="error4"></div>
            <input type="submit" value="Đăng Ký" name="submit" onclick="check()" >
        </form>
</div>
</body>
</html>