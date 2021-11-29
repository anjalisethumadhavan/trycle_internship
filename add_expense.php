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
<title>BUDGET MANAGEMENT SYSTEM | Add Expense</title>
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
<script>
  function findselected() { 
    var result = document.querySelector('input[name="status"]:checked').value;
    if(result=="complete"){

        document.getElementById("remamount").setAttribute('disabled', true);
		document.getElementById("duedate").setAttribute('disabled', true);
	
    }
    else{
        document.getElementById("remamount").removeAttribute('disabled');
		document.getElementById("duedate").removeAttribute('disabled');
    }
}
  </script>
  
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
					 <header class="panel-body">
					 <?php
					 $rw=select("select sum(money) as abc from income where userid='".$_SESSION['userid']."'");
					 $rs= select("select sum(amount) as xyz from expence where userid='".$_SESSION['userid']."'");
					 $result=mysqli_fetch_array($rw);
					 $result1= mysqli_fetch_array($rs);
					 $b=$result['abc'] - $result1['xyz'];
					 {
						 ?>
						 <marquee behavior="scroll" direction="left"> <span class="username" style="color:red;font-weight:bold">Your remaining balance for spending is : <?=$b?>/-<span></marquee
						 <?php
					 }
					 ?>
                           
                            
                        </header>
                        <header class="panel-heading">
                            Add Expense
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                
								
								
								<form class="cmxform form-horizontal " enctype = "multipart/form-data" id="commentForm" method="post">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Select Category:  </label>
                                        <div class="col-lg-6">
										<select class="form-control" name="category">
										<option>Select Category:
										</option>
										<?php
										$result=select("select * from category where userid='".$_SESSION['userid']."'");
										while($r=mysqli_fetch_array($result))
										{
											extract($r);
										?>
										<option value="<?=$catid?>">
										<?=ucwords($name)?>
										</option><?php
										}
										?>
										</select>
                                                  </div>
                                    </div>
                                    
                                    
                                   
                             
								
								
								
								
								
								
								
<form class="cmxform form-horizontal " id="commentForm" method="post"  enctype = "multipart/form-data" novalidate="novalidate">
                               

									<div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Expense Date: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" type="date" name="expensedate" id="expensedate"  required="">
																				
                                        </div>
                                    </div>

<div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Expense Amount: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control"  type="text" name="expenseamount"  id="expensedate"  required="">
											
                                        </div>
                                    </div>




<div class="form-group ">
 <label for="ccomment" class="control-label col-lg-3">Expense Description:</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="ccomment" name="exdis" required=""></textarea>
                                        </div>
                                    </div>

<div class="form-group ">
 <label for="ccomment" class="control-label col-lg-3">Expense Image:</label>
 <div class="col-lg-6">
<input type="file" name = "myfile" id = "image" class="form-control" >

</div>
</div>

<div class="form-group ">
<label  for="ccomment" class="control-label col-lg-3">Status:</label>




      <label class="form-check-label" for="radio1" >
        <input type="radio" class="form-check-input" name="status"  id="status" value = "complete" checked  onChange="findselected()">Complete
      </label>
  &nbsp;&nbsp;&nbsp;&nbsp;
   
      <label class="form-check-label" for="radio2">
        <input type="radio" name="status"  id="status" value = "pending" class="form-check-input" onChange="findselected()">Pending
      </label>
	  
    
 </div>












<div class="form-group ">
 <label for="ccomment" class="control-label col-lg-3">Remaining Amount:</label>
 <div class="col-lg-6">
<input type="text" name="remamount" value="null" id="remamount" disabled class="form-control" >
</div>
</div>

<div class="form-group ">
 <label for="ccomment" class="control-label col-lg-3">Due Date:</label>
<div class="col-lg-6">
<input type="date" name="duedate"  id="duedate" disabled class="form-control" >
</div>
</div>





 <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-1">
                                            <button class="btn  btn-block btn-primary" name="saveexpence" type="submit">Add</button>
                                                 </div>
                                    </div>

</form>
								
	<?php
	if(isset($_REQUEST['saveexpence']))
	{
		extract($_REQUEST);
		
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];
$userid=$_SESSION['userid'];
	//$query="update user set image='$name' where userid='$userid'";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
		$query="INSERT INTO `expence`( `catid`, `date`,`amount`, `discription`, `image`, `status`, `ramain`, `due_date`,`userid`) VALUES
		('$category','$expensedate','$expenseamount','$exdis','$name','$status','$remamount','$duedate','$userid')";
	$n=iud($query);
	 if($n==1)
	 {
		 $p=iud("update income set remain=remain-'$expenseamount' where userid='".$_SESSION['userid']."'");
		 if($p>=1)
		 {
		echo"<script>alert(' uploaded successfully');
		 window.location='view_expence.php';
		 </script>";
		 }
		 }
	}
	}
	
	?>							
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
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
echo "Successful";
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
