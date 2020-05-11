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
  <body id="login">
    <div class="container">
      <form class="form-signin" name="login" action="<?php echo base_url();?>admin/xuly_suakhachhang" method="post">
        <h3 class="form-signin-heading">Thêm khách hàng</h3>
        <p>Tài khoản</p>
        <input type="text" class="input-block-level" name="username" value="<?php echo $data->TAIKHOAN;?>">
        <p>Mật khẩu</p>
        <input type="text" class="input-block-level" name="password" value="<?php echo $data->MATKHAU;?>">
        <p>Tên khách hàng</p>
        <input type="text" class="input-block-level" name="tenkhachhang" value="<?php echo $data->TENKHACHHANG;?>">
        <p>Địa chỉ</p>
        <input type="text" class="input-block-level" name="diachi" value="<?php echo $data->DIACHI;?>">
        <p>Giới tính</p>
        <input type="text" class="input-block-level" name="gioitinh" value="<?php echo $data->GIOITINH;?>">
        <button class="btn btn-large btn-info" type="submit">Lưu</button>
      </form>
    </div> 
    <!-- /container -->
    <script src="asset/vendors/jquery-1.9.1.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>