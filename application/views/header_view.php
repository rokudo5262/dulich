<!DOCTYPE html>
<html>
<head>
  <title>Template 1</title>
</head>
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
    height: 100vh;
    background-position: center;
    background-size: cover;
  }
  ul
  {
    float: right;
    list-style-type: none;
    margin: 25px;
  }
  ul li
  {
    display: inline-block;
  }
  
  ul li a
  {
    text-decoration: none;
    color: #fff;
    padding: 5px 20px;
    border: 1px solid #fff;
    border: 1px solid transparent;
    transition: 0.6s ease;
  }
  ul li a:hover
  {
    background-color: #fff;
    color:#000; 
  }
  ul li.active a
  {
    background-color: #fff;
    color:#000; 
  }

  .logo img
  {
    float:left;
    width: 150px;
    height: auto;
  }
  .main
  {
    max-width: 1200px;
    max-height: auto;
  }
  .title
  {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
  }
  .title h1
  {
    color: #fff;
    font-size: 60px;
  }
  .button
  {
    position: absolute;
    top: 62%;
    left: 50%;
    transform: translate(-50%,-50%);
  }
  .btn
  {
    border: 1px solid #fff;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    transition: 0.6s ease;
  }
  .btn:hover
  {
    background-color: #fff;
    color:#000; 
  }

</style>
<body>
  <!--Header-->
<header>
  <div class="main">
    <div class="logo"><img src="<?php echo base_url();?>asset/template1/logo.png"></div>
    <ul>
      <li class="active" ><a href="#">Home</a></li>
      <li><a href="#">Sevices </a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="title">
    <h1>Trịnh Quang Trường</h1>
  </div>
  <div class="button">
    <a href="#" class="btn">Watch Video</a>
    <a href="#" class="btn">Learn More</a>
  </div>
</header>
</body>
</html>