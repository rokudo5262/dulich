<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
      body
  {
    margin: 0px;
    padding: 0px;
    font-family: centurt Gothic;
  }
  header
  {
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(<?php echo base_url();?>asset/template1/background.jpg);
    height: 80vh;
    background-position: center;
    background-size: cover;
  }
  header ul
  {
    float: right;
    list-style-type: none;
    margin: 25px;
  }
  header ul li
  {
    display: inline-block;

  }
  
  header ul li a
  {
    text-decoration: none;
    color: #fff;
    padding: 5px 20px;
    border: 1px solid #fff;
    border: 1px solid transparent;
    border-radius: 2px;
    transition: 0.6s ease;
  }
  header ul li a:hover
  {
    background-color: #fff;
    color:#000; 
  }
  header ul li a.active
  {
    background-color: #fff;
    color:#000; 
  }

  header .logo img
  {
    float:left;
    width: 150px;
    height: auto;
  }
  header .main
  {
    max-width: 1200px;
    max-height: auto;
  }
  header .title
  {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
  }
  header .title h1
  {
    color: #fff;
    font-size: 60px;
  }
  header .button
  {
    position: absolute;
    top: 62%;
    left: 50%;
    transform: translate(-50%,-50%);
  }
  header .btn
  {
    border: 1px solid #fff;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    transition: 0.6s ease;
  }
  header .btn:hover
  {
    background-color: #fff;
    color:#000; 
  }
  </style>
</head>
<body>
<header>
  <div class="main">
    <div class="logo"><img src="<?php echo base_url();?>asset/template1/logo.png"></div>
    <ul>
      <li>
        <a class="<?php echo isset($home)? "active" : "";  ?>" href="<?php echo base_url();?>main/home">Home</a>
      </li>
      <li>
        <a class="<?php echo isset($tour)? "active" : "";  ?>" href="<?php echo base_url();?>main/tour">Tour</a>
      </li>
      <li>
        <a class="<?php echo isset($gallery)? "active" : "";  ?>" href="<?php echo base_url();?>main/gallery">Gallery</a>
      </li>
      <li>
        <a class="<?php echo isset($contact)? "active" : "";  ?>" href="<?php echo base_url();?>main/contact">Liên Hệ</a>
      </li>
      <li>
        <a href="<?php echo base_url();?>main/login">Hello, <?php echo $this->session->userdata['username']?></a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url();?>main/logout">Đăng Xuất</a>
      </li>
    </ul>
  </div>
  <div class="title">
    <h1>Welcome</h1>
  </div>
  <div class="button">
    <a href="#" class="btn">Watch Video</a>
    <a href="#" class="btn">Learn More</a>
  </div>
</header>
</body>
</html>