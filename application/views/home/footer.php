<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	footer
	{
  font-size: 10px;
  color: white;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(<?php echo base_url();?>asset/template1/footer.jpg);
  background-repeat: no-repeat;
  width:100%;
  height: auto;
  margin-top: 10px;
	}
footer p
{
  display: inline-block;
  float: left;
  clear: left;
}
footer img
 {
  width:50px;
  height:50px;
  left: 0px;
  padding-right: 2px;
  padding-top: 1px;
}
  footer a:hover 
{
    opacity: 0.7;
}
footer h4 
{
  text-decoration:bold;
  padding-bottom: 30px;
  text-align: center;
}
footer .search
 {
  width: 100%;
  position: relative;
  display: flex;
}

footer .searchTerm
 {
  width: 100%;
  border: 1px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 30px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}
footer .searchTerm:focus
{
  color: #00B4CC;
}

footer .searchButton
{
  width: 40px;
  height: 30px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
footer .row
{
  margin: 0 auto;
  width: 80%;
  padding: 20px;
}
footer a
{
    padding: 5px;
    font-size: 20px;
    width: 25px;
    height: 25px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
}
footer .icon
{
  text-align: center;
  padding: 2px;
}
footer .fa-facebook,footer .fa-twitter,footer .fa-dribbble,footer .fa-youtube
{
  text-decoration: none;
    color: black;
    font-size:15px;
    padding: 5px 5px;
    border: 1px solid #fff;
    border: 1px solid transparent;
    transition: 0.6s ease;
}
footer .fa-facebook:hover,footer .fa-twitter:hover,footer .fa-dribbble:hover,footer .fa-youtube:hover
{ 
  background-color: #fff;
  color:#silver; 
}
/**********************************************************************************************************/
  #copyright
  {
    background-color: black;
    color: white;
  }
  #copyright a
  {
    color: yellow;
    text-align:left;
    margin: 0 auto;
  }
  #copyright p
  {
    padding-left: 20%;
  }
	</style>
</head>
<body>
<footer>
 <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <h4>Newletter</h4>
             <div class="search">
                <input type="text" class="searchTerm" placeholder="search">
                <button type="submit" class="searchButton">
                  <i class="fa fa-search"></i>
               </button>
             </div>
          <div class="icon">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-dribbble"></a>
              <a href="#" class="fa fa-youtube"></a>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        	<h4>About Us</h4>
           <ul>
            <li><a>01227711951</a></li>
            <li><a>Trịnh Quang Trường</a></li>
            <li><a>Ngô Anh Quang</a></li>
         </ul>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <h4>Hình Ảnh</h4>
                <table>
                <tr>
                  <td><img src="<?php echo base_url();?>asset/image/instagram1.jpg"></td>
                    <td><img src="<?php echo base_url();?>asset/image/instagram2.jpg"></td>
                    <td><img src="<?php echo base_url();?>asset/image/instagram3.jpg"></td>
                </tr>
                <tr>
                  <td><img src="<?php echo base_url();?>asset/image/instagram4.jpg"></td>
                    <td><img src="<?php echo base_url();?>asset/image/instagram5.jpg"></td>
                    <td><img src="<?php echo base_url();?>asset/image/instagram6.jpg"></td>
                </tr>
                </table>
        </div>
      </div>
</footer>
	<div id="copyright">
			 <p>Copyright <a href="">Trịnh Quang Trường</a> All right reserved</p>
	</div>
</body>
</html>