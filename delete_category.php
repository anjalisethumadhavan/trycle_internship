<?php
include"dbconfig.php";
$n=iud("DELETE FROM `category` WHERE catid='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Deleted successfully');
		 window.location='view_category.php';
		 </script>";
}

?> 