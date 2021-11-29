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
<title>BUDGET MANAGEMENT SYSTEM | Calculator</title>
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
<style>

#calc-contain{
  position: relative;
  width: 400px;
  border: 2px  #D89797;
  border-radius: 12px;
  margin: 0px auto;
  padding: 20px 20px 100px 20px;
}
#agh{
  position: relative;
  float: right;
  margin-top: 15px;
}
#agh p{
  font-size: 20px;
  font-weight: 900;
}
input[type=button] {
  background: linear-gradient(to bottom, #33ccff 0%, #ccff99 100%); ;
  width: 20%;
  font-size: 20px;
  font-weight: 900;
  border-radius: 7px;
  margin-left: 13px;
  margin-top: 10px;
}
input[type=button]:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
input[type=button]:hover {
  background-color: #003300;
  color: white;
}

input[type = text] {
  position: relative;
  display: block;
  width: 90%;
  margin: 5px auto;
  font-size: 20px;
  padding: 10px;
  box-shadow: 4px 0px 12px #ccff99  ;
}
</style>
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
<?php include"sidebar.php"?>
<!--sidebar end-->
<!--main content start-->

<section id="main-content" >
	<section class="wrapper"  >
		<!-- page start-->
		
		<div class="mail-w3agile" >
        <div class="row">
		
            <div class="col-sm-10 com-w3ls">
                <section class="panel" style="height:500px">
                    <div class="panel-body" >
                        <a href="mail_compose.php"  class="btn btn-compose" style="font-size:20px;font-weight:bold">
                            CALCULATOR
                        </a></div>
                       <div id='calc-contain' style="padding:20px">
  
          <form name="calculator">
            
            <input type="text" name="answer" />
            <br>
            
            <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
            <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
            <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
            <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
            <br/>
            
            <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
            <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
            <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
            <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
            </br>
          
            <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
            <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
            <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
            <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
            </br>
        
            <input type="button" value=" c " onclick="calculator.answer.value = ''" />
            <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
            <input type="button" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
            <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
            </br>
  
    
          </form>
          <div id="agh">
            <p>
          </div>
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
			 <center><p>BUDGET MANAGEMENT SYSTEM </p></center>
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
