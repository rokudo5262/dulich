<!DOCTYPE html>
<html>
<head>
    <script type = 'text/javascript' src = "<?php echo base_url();?>js/sample.js"></script> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		form
		{
			border: 1px solid blue;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-2">
			<div class="card border-primary mb-3">
          <div class="card-header bg-primary text-white">Quãng Cáo</div>
          <div class="card-body">
          </div>
        </div>
		</div>
		<div class="col">
			<div class="card border-primary mb-3">
		        <div class="card-header bg-primary text-white">Quãng Cáo</div>
		        <div class="card-body">
		       	<div class="row">
		       		<div class="col">
		          		<img width="100%" src="<?php echo base_url();?>asset/image/<?php echo $data->HINHANHDAIDIEN;?>">
		          	</div>
		          	<div class="col">			
		          		<div class="card">
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item">Tên Tour: <?php echo $data->TENTOUR;?></li>
						    <li class="list-group-item">Giá: <?php echo $data->GIA;?> VND</li>
						    <li class="list-group-item">Ngày đi <?php echo $data->NGAYDI;?></li>
						    <li class="list-group-item">Số Ngày <?php echo $data->SONGAY;?></li>
						    <li class="list-group-item">Ghi chú <?php echo $data->GHICHU;?></li>
						    <li class="list-group-item">
						    	<button class="btn btn-large btn-info" type="submit">Đặt tour</button>
						    </li>
						  </ul>
						</div>
					</div>
		       	</div>
		      </div>
		    </div>
		</div>
		<div class="col-2">
			<div class="card border-primary mb-3">
          <div class="card-header bg-primary text-white">Quãng Cáo</div>
          <div class="card-body">
          </div>
        </div>
		</div>
	</div>
</body>
</html>