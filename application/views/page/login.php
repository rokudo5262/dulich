<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        body
        {

            margin: 0 auto;
            padding: 0;
            font-family: sans-serif;
            background: url(<?php echo base_url();?>asset/login/Ocean.jpg);
            background-size: cover;
        }
        .box
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            padding: 40px;
            background: rgba(0,0,0,0.8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,0.5);
            border-radius: 10px;
        }
        .box h1
        {
            margin: 0 0 30px;
            padding: 0px;
            color: #fff;
            text-align: center;
        }
        .box .input-box
        {
            position: relative;
        }
        .box .input-box input
        {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color:#fff;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border:none;
            border-bottom: 1px solid #fff;
            border-radius: 5px;
            outline: none;
            background: transparent;
        }
        .box .input-box label
        {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }
        .box .input-box input:valid ~ label,
        .box .input-box input:focus ~ label
        {
            top: -25px;
            left: 0px;
            color: #03a9f4;
            font-size: 12px;
        }
        .box input[type='submit']
        {
            background: transparent;
            border:none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .box input[type='submit']:hover
        {
            background-color: #337ab7;
            box-shadow: 1px 1px ;
        }
        .box label
        {
            letter-spacing: 1px;
            padding: 10px 0;
            font-size: 10px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }
    </style>
    
</head>
<body>
    <div class="box">
    <h1>Đăng Nhập</h1>
                <form name="login" method="POST" action="<?php echo base_url();?>main/checklogin">
                <div class="input-box">
                    <input id="username" type="text" name="username" required="">
                    <label>Tài Khoản</label>
                </div>
                <div class="input-box">
                    <input id="password" type="password" name="password" required="">
                    <label>Mật Khẩu</label>
                </div>
                    <input id="submit" type="submit" name="submit" value="Đăng Nhập">
                </form>
                <label class="textstyle">Bạn không có tài khoản? <a class="spantext" href="<?php echo base_url();?>index.php/Demo/customerregister">Tạo tài khoản</a></label>
        </div>
</body>
</html>