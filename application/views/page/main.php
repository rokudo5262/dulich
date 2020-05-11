<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	content
  {
    margin: 0 auto;
    padding-top: 20px;
    align-content: center;
    padding: 20px;
  }
  content h5
  {
    font-weight: bold;
    margin: 0 auto;
    text-align: left;
  }
  content .row .card img
  {
    max-width: 100%;
      max-height: 100%;
      object-fit: contain;
  }

  content #card
  {
    background-color:#e6e6ff;
  }
  content #card:hover
  {
    box-shadow: 2px 2px;
  }
  content .btn
  {
    font-size: 12px;
  }
  content .text-block 
  {
  position: absolute;
  top: 10px;
  right: 0px;
  background-color: yellow;
  color: black;
  padding-left: 10px;
  padding-right: 10px;
  border-radius: 5px;
  }
  content .text-block:hover
  {
    background-color: #e6e600;
    box-shadow: 2px 2px;
  }
  content .col-2
  {
    width: 200px;
    height: 100px;
  }
  content .container 
  {
    position: relative;
    font-family: Arial;
  }
  content .center
  {
    padding: 20px;
  }
  content .centered
   {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px;
    color: white;
  }
  content .centered p
  {
    margin: 0 auto;
    text-align: center;
    padding-bottom: 30px;
  }
  content .container img 
  { 
    margin: 0 auto;
    width: 100%;
      height: auto;
  }
  content .vl
   {
    border-left: 3px solid black;
    position: relative;
    height:100px;
    left:50%;
  }
  content #card-body
  {
    margin: 0 auto;
    padding: 1px;
    float: left;
  }
	</style>
</head>
<body>
	<content>
		<div class="row">
			<div class="col-2">
        <div class="card border-primary mb-3">
          <div class="card-header bg-primary text-white">Địa danh</div>
          <div class="card-body">
            <div class="list-inline">
              <a href="#" class="list-inline-item">First item</a>
              <a href="#" class="list-inline-item">Second item</a>
              <a href="#" class="list-inline-item">Third item</a>
            </div>
          </div>
        </div>
      </div>
			<div class="col">
          <div class="card border-primary mb-3">
          <div class="card-header bg-primary text-white">Du Lịch</div>
          <div class="card-body">
            <div class="row">
            <?php foreach ($dsdm2 as $dm):?>
                  <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card" id="card">
                    <a href=""><img src="<?php echo base_url();?>asset/image/<?= $dm['HINHANHDAIDIEN']?>" class="card-img-top"></a>
                    <div class="text-block"><?= $dm['GIA']?> VND</div>
                      <div class="card-body">
                        <h5 class="card-title"><?= $dm['TENTOUR']?></h5>
                        <p><a href="<?php echo base_url();?>main/dangkytour/<?= $dm['MATOUR']?>" class="btn btn-primary" role="button" data-toggle="tooltip" data-placement="bottom">Đặt Tour</a>
                              <a href="<?php echo base_url();?>main/chitiettour/<?= $dm['MATOUR']?>" class="btn btn-info" role="button">Chi Tiết</a></p>
                      </div>      
                  </div>
                </div>
                <?php endforeach; ?> 
            </div>
          </div>
        </div>
			</div>
			<div class="col-2" >
        <div class="card border-primary mb-3">
          <div class="card-header bg-primary text-white">Quãng Cáo</div>
          <div class="card-body">
          </div>
        </div>
      </div>
		</div>
		<div class="center">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url();?>asset/image/australia0.jpg" class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>asset/image/australia0.jpg" class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>asset/image/australia0.jpg" class="d-block w-100" src="..." alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
			<div class="vl"></div>		
			<h5 class="card-title" style="font-size: 50px; padding-top:10px; text-align: center;" >Hotel And Resort</h5>
		</div>
		<div class="row">
			<div class="col-2"></div>
			<div class="col">
        <div class="card border-primary mb-3">
          <div class="card-header bg-primary text-white">Khách Sạn</div>
          <div class="card-body">
            <div class="row">
                  <?php foreach ($dsdm1 as $dm):?>
                  <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card">
                      <a href=""><img width="auto" src="<?php echo base_url();?>asset/image/<?= $dm['HINHANH']?>" class="card-img-top" alt="..."></a>
                      <div class="text-block"><?= $dm['SOSAO']?></div>
                      <div class="card-body">
                        <h5 class="card-title"><?= $dm['TENKHACHSAN']?></h5>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>  
                </div>
          </div>
        </div>	
			</div>
			<div class="col-2"></div>
		</div>
</content>
</body>
</html>