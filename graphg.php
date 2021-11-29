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
<?php include"sidebar.php";?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">




	<section class="wrapper">
		<div class="chart_agile">
			<div class="col-md-10 chart_agile_left">
				<div class="chart_agile_top">
				<a href="chartjs.php"><button class="btn btn-warning">View Another Graph
				</button ></a>
					<div class="chart_agile_bottom">
						<div id="graph10"></div>
						<html>
<head>
<title>EXPENSE CHART</title>
</head>
<body >
<?Php
require "config.php";// Database connection
$one=$_REQUEST['dateone'];
$two=$_REQUEST['datetwo'];

if($stmt = $connection->query("SELECT date,amount FROM expence where date BETWEEN '$one' AND '$two' and userid='".$_SESSION['userid']."'")){

  
$php_data_array = Array(); // create PHP array
 // echo "<table>
//<tr> <th>Month</th><th>Sale</th><th>Profit</th><th>Expanses</th><th>Exp Fxd</th><th>Exp Vrv</th></tr>";
while ($row = $stmt->fetch_row()) {
  // echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
   $php_data_array[] = $row; // Adding to array
   }
echo "</table>";
}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
 json_encode($php_data_array); 

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
?>


<div id="curve_chart"></div>
<br><br>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {packages: ['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	  
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        //data.addColumn('number', 'Amount');
		//data.addColumn('number', 'Profit');
		data.addColumn('number', 'Expenses');
		//data.addColumn('number', 'Exp_fixed');
		//data.addColumn('number', 'Exp_var');
        for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
       var options = {
          title: 'EXPENSE',
        curveType: 'function',
		width: 800,
        height: 500,
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
	///////////////////////////////
</script>
</body></html>

					</div>
				</div>
			</div>
			
			
			
						<div class="clearfix"></div>
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
