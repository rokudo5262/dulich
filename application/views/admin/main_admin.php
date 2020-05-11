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
<body>
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li>
                                <a>Chào Mừng, <?php echo $this->session->userdata['username']?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/logout">Log Out</a>
                            </li>
                        </ul>                 
                    </div>                    
                </div>
            </div>
        </div>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span2" id="sidebar">
                            <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                                <li class="<?php echo isset($banner)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/banner"><span class="badge badge-info pull-right"></span>Banner</a>
                                </li>
                                <li class="<?php echo isset($nhanvien)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/nhanvien"><span class="badge badge-info pull-right"><?php echo $query1->num_rows();?></span>Nhân Viên</a>
                                </li>
                                <li class="<?php echo isset($khachhang)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/khachhang"><span class="badge badge-info pull-right"><?php echo $query2->num_rows();?></span> Khách Hàng</a>
                                </li>
                                <li class="<?php echo isset($dulich)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/dulich"><span class="badge badge-info pull-right"><?php echo $query3->num_rows();?></span>Thông tin Du Lịch</a>
                                </li>
                                <li class="<?php echo isset($dangkydulich)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/dangkydulich"><span class="badge badge-info pull-right"><?php echo $query->num_rows();?></span>Đăng Ký Du Lịch</a>
                                </li>
                                <li class="<?php echo isset($khachsan)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/khachsan"><span class="badge badge-info pull-right"><?php echo $query4->num_rows();?></span> Khách Sạn</a>
                                </li>
                                <li class="<?php echo isset($giamgia)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/giamgia"><span class="badge badge-info pull-right"><?php echo $query5->num_rows();?></span>Giảm Giá</a>
                                </li>
                                <li class="<?php echo isset($phuongtien)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/phuongtien"><span class="badge badge-info pull-right"><?php echo $query6->num_rows();?></span>Phương Tiện</a>
                                </li>
                                <li class="<?php echo isset($tinhthanh)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>admin/tinhthanh"><span class="badge badge-info pull-right"><?php echo $query7->num_rows();?></span>Tỉnh Thành</a>
                                </li>
                            </ul>
                    </div>
                    <div class="span10">
                        <?php echo $subview?>
                    </div>
                </div>
            </div>              
    </body>
</html>