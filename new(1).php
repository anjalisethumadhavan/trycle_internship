
<?php
$con = mysqli_connect("localhost","root","","axpence");
if($con)
{
echo "";
}
 
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
<?Php
require "config.php";// Database connection

$sql = "SELECT userid,catid,sum(amount) as abc FROM expence where userid='".$_SESSION['userid']."' ";
$fire = mysqli_query($con,$sql);
while($result = mysqli_fetch_assoc($fire)){
  

echo "['".$result['catid']."',".$result['abc']."],";

}
?>    
]);

        var options = {
          title: 'CATEGORY',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>