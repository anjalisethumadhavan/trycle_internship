<?php require_once"dbconfig.php";

?>
<!DOCTYPE html>
<head>
<title> BUDGET MANAGEMENT SYSTEM | Registration </title>
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
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register</h2>
		<form  method="post" autocomplete="off">
			<input type="text" class="ggg" name="Name" placeholder="Enter your name" required="">
			<input type="email" class="ggg" name="Email" placeholder="Enter your Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
			<input type="text" class="ggg" name="Phone" placeholder="Enter your phone number" maxlength="10" pattern="[0-9]{10}" required="">
			<input type="password" class="ggg" name="Password" placeholder="Enter your password" required="true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 6 or more characters">
			
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
		</form>
		
		<?php 
		if(isset($_REQUEST['register']))
		{
			extract($_REQUEST);
			$n=iud("INSERT INTO `register`(`name`, `email`, `mobile`, `password`) VALUES 
			('$Name','$Email','$Phone','$Password')");
			if($n==1)
			{
				echo"<script>alert('Successful');
				window.location='login.php';
				</script>";
			}
		}
		
		 
		
		
		
		?>
		<p>Already Registered ?<a href="login.php">Login</a></p>
</div>
<p style="text-align: center;">Anjali</p>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
