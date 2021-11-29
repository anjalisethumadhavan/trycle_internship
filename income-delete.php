<?php
include"dbconfig.php";
$n=iud("DELETE FROM `income` WHERE id='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Deleted successfully');
		 window.location='income.php';
		 </script>";
}

?> 