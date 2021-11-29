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
<title>BUDGET MANAGEMENT SYSTEM | Home </title>
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
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
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
		<!-- //market-->
		
	 	
		
		
		<div class="market-updates">
		<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr"></i>
					</div>
	<?php
			 $p1="SELECT sum(money) FROM income 
			 WHERE userid='".$_SESSION['userid']."'";
//$p="select * from expence";
 $result1=select($p1);
 while($r1=mysqli_fetch_array($result1))
 
	
{
	?>
					 <div class="col-md-8 market-update-left">
					 <h4>Total Income</h4> &nbsp;
					<h3><?=$r1[0]?></h3>
					  </div>
<?php
}
?>
				  <div class="clearfix"> </div>
				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr"></i>
					</div>
	<?php
			 $p1="SELECT sum(amount) FROM expence
WHERE userid='".$_SESSION['userid']."'";
//$p="select * from expence";
 $result1=select($p1);
 while($r1=mysqli_fetch_array($result1))
 
	
{
	?>
					 <div class="col-md-8 market-update-left">
					 <h4>Total Expense</h4>&nbsp;
					<h3><?=$r1[0]?></h3>
					  </div>
<?php
}
?>
				  <div class="clearfix"> </div>
				</div>
			</div>
			
		






	<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr"></i>
					</div>	

<?php
					 $rw=select("select sum(money) as abc from income where userid='".$_SESSION['userid']."'");
					 $rs= select("select sum(amount) as xyz from expence where userid='".$_SESSION['userid']."'");
					 $result=mysqli_fetch_array($rw);
					 $result1= mysqli_fetch_array($rs);
					 $b=$result['abc'] - $result1['xyz'];
					 {
						 ?>

						<div class="col-md-8 market-update-left">
					 <h4>Balance</h4>&nbsp;
					<h3><?=$b?></h3>
					  </div>
<?php
}
?>

				  <div class="clearfix"> </div>
				</div>
			</div>	
			
			
			
			
			
			
			
			
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr"></i>
					</div>	

<?php
					 
$tdate=date('Y-m-d');
$query=select("select sum(amount)  as todaysexpense from expence where (date)='$tdate' && userid='".$_SESSION['userid']."'");
$result=mysqli_fetch_array($query);
$sum_today_expense=$result['todaysexpense'];
					 {
						 ?>

<div class="col-md-8 market-update-left">
					 <h4>Today's Expense</h4>&nbsp;
					<h3><?=$sum_today_expense?></h3> 
					  </div>
<?php
}
?>

				  <div class="clearfix"> </div>
				</div>
				<br>
			</div> 
			<br>
			</div>
			
			
			
			
			
			
			
			
			
			
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr"></i>
					</div>	

<?php
					 
$ydate=date('Y-m-d',strtotime("-1 days"));
$query1=select("select sum(amount)  as yesterdayexpense from expence where (date)='$ydate' && userid='".$_SESSION['userid']."'");
$result2=mysqli_fetch_array($query1);
$sum_yesterday_expense=$result2['yesterdayexpense'];
					 {
						 ?>

					<div class="col-md-8 market-update-left">
					 <h4>Yesterday's Expense</h4>&nbsp;
					<h3><?=$sum_yesterday_expense?></h3>
					  </div>
<?php
}
?>

				  <div class="clearfix"> </div>
				</div>
			</div>
			
				<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
<i class="fa fa-inr"></i>
					</div>	

<?php
					 
$pastdate=  date("Y-m-d", strtotime("-1 week")); 
$crrntdte=date("Y-m-d");
$query2=select("select sum(amount)  as weeklyexpense from expence where ((date) between '$pastdate' and '$crrntdte') && userid='".$_SESSION['userid']."'");
$result3=mysqli_fetch_array($query2);
$sum_weekly_expense=$result3['weeklyexpense'];
					 {
						 ?>

					<div class="col-md-8 market-update-left">
					 <h4>Last 7day's Expense</h4>&nbsp;
					<h3><?=$sum_weekly_expense?></h3>
					  </div>
<?php
}
?>

				  <div class="clearfix"> </div>
				</div>
			</div>
			
			
			
			
			
			
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr"></i>
					</div>	

<?php
					 
$monthdate=  date("Y-m-d", strtotime("-1 month")); 
$crrntdte=date("Y-m-d");
$query4=select("select sum(amount) as monthlyexpense from expence where ((date) between '$monthdate' and '$crrntdte') && userid='".$_SESSION['userid']."'");
$result4=mysqli_fetch_array($query4);
$sum_monthly_expense=$result4['monthlyexpense'];
					 {
						 ?>

<div class="col-md-8 market-update-left">
					 <h4>Last 30day's Expenses</h4>&nbsp;
					<h3><?=$sum_monthly_expense?></h3>
					  </div>
<?php
}
?>

				  <div class="clearfix"> </div>
				</div>
			</div>
			
			
			
			
			
			
			
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr"></i>
					</div>	

<?php
$cyear= date("Y");
$query5=select("select sum(amount) as yearlyexpense from expence where (year(date)='$cyear') && userid='".$_SESSION['userid']."'");
$result5=mysqli_fetch_array($query5);
$sum_yearly_expense=$result5['yearlyexpense'];
					 {
						 ?>

<div class="col-md-8 market-update-left">
					 <h4>Current Year Expenses</h4>&nbsp;
					<h3><?=$sum_yearly_expense?></h3>
					  </div>
<?php
}
?>

				  <div class="clearfix"> </div>
				</div>
			</div>
<div class="clearfix"> </div>
	</div>	
	
	
	
	
	
	<div class="col-md-6 w3agile-notifications">
			<div class="notifications">
				<!--notification start-->
				
					<header class="panel-heading">
						Notification 
					</header>
					<div class="notify-w3ls">
					<?php
			 $p1="SELECT * FROM expence 
WHERE ramain > '0'&& userid='".$_SESSION['userid']."'";
//$p="select * from expence";
 $result1=select($p1);
 while($r1=mysqli_fetch_array($result1))
 
	
{
	?>
          
						<div class="alert alert-info clearfix">
							<span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">PENDING PAYMENT:</a></span> <?=$r1['ramain']?> /-</li>
									<li class="pull-right notification-time">DUE DATE: <?=$r1['due_date']?></li>
								</ul>
								<p>
									<?=$r1['discription']?>
								</p>
							</div>
						</div>
						<?php
}
						?>
						
						
						
						
						
					</div>
				
				<!--notification end-->
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
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>

	
	
	
	
	
	
	
	
	
	
	
			</body>
</html>
