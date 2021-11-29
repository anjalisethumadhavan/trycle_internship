<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<head>
<title>BUDGET MANAGEMENT SYSTEM | Add Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
      <h4> BUDGET MANAGEMENT &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  
	   SYSTEM</h4>  
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<?php include"nav_top.php";?>

</header>
<!--header end-->
<!--sidebar start-->
<?php include"sidebar.php";?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Category
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" >
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Category Name:</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="catname" minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Category Description:</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="ccomment" name="catdis" required=""></textarea>
                                        </div>
                                    </div>
									<center>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" name="savecat" type="submit">Add</button>
                                                 </div>
                                    </div>
									</center>
                                </form>
                            </div>
<?php
//print_r($_SESSION);
if(isset($_REQUEST['savecat']))
{
	$id=$_SESSION['userid'];
	extract($_REQUEST);
	$n=iud("INSERT INTO `category`(`name`, `discription`, `userid`) values ('$catname','$catdis','$id')  ");
	if($n==1)
	{
echo"<script>alert('Category added.');
		 window.location='view_category.php';
		 </script>";
	}
}
?>
                        </div>
                    </section>
                </div>
            </div>
            
            <!-- page end-->
        </div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			<center>  <p>BUDGET MANAGEMENT SYSTEM </p></center>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html> 
