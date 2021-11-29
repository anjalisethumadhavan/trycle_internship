<?php
 include"dbconfig.php";
 $p="select * from expence";
 $result=select($p);
 while($r=mysqli_fetch_array($result))
 {
	if(strlen($r['ramain'])==0)
{
	echo count($r['ramain']);
}
else
{
	echo"XX";
}
 }

?>
 