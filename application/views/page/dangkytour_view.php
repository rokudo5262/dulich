<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/admin/styles.css" rel="stylesheet" media="screen">
        <script src="<?php echo base_url();?>asset/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <style type="text/css">
    body
    {
      background: url(<?php echo base_url();?>asset/login/Ocean.jpg);
    }
  </style>
  <body id="login">
    <div class="container">
      <form class="form-signin" name="login" action="<?php echo base_url();?>Main/xuly_dangkytour" method="post">
        <h3 class="form-signin-heading">Đăng ký tour</h3>
        <p>Tài khoản</p>
        <input type="text" class="input-block-level" name="makhachhang" value="<?php echo $this->session->userdata['username']?>">
        <p>Mã tour</p>
        <input type="text" class="input-block-level" name="matour" value="<?php echo $data->MATOUR;?>">
        <p>phương thức thanh toán</p>
        <input type="text" class="input-block-level" name="phuongthuc">
        <button class="btn btn-large btn-info" type="submit">Thanh Toán</button>
      </form>
    </div> 
    <!-- /container -->
    <script src="asset/vendors/jquery-1.9.1.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>