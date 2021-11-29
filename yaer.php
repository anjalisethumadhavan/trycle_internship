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
<title>BUDGET MANAGEMNET SYSTEM | Graph</title>
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
<link rel="stylesheet" href="css/morris.css">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<!-- //charts -->
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
<title>BUDGET MANAGEMNET SYSTEM | Graph</title>
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
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
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
		<div class="chart_agile">
			<div class="col-md-12 chart_agile_left">
				<div class="chart_agile_top">
					<div class="chart_agile_bottom">
						 <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
					Year-wise Chart
                    </header>
					<div class="panel-body">
                        <div class="position-center">
						<center>
                            <form class="form-inline" action="yt.php" method="post" role="form">
                            <div class="form-group">
							 <label>From date:</label>
                                <input type="date" class="form-control" id="fromdate" name="fromdate" required="true">
                            </div><br><br>
							
							<div class="form-group">
                                <label>To date:</label>
                                <input type="date" class="form-control"  id="todate" name="todate" required="true" >
                            </div>
							 <br> 
							<br> 
							<center>
                            <button type="submit" name="go" class="btn btn-success">View Graph</button>
							</center>
                        </form>
						</center>
                        </div>
                    </div>
                </section>

            </div>
        </div>
						</div>
						</div>
						</div>
						</div>
</section>

<!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			<CENTER> <p>BUDGET MANAGEMENT SYSTEM</p></CENTER>
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

							