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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year','Expenses'],
		  <?php
$sql = "SELECT date,Sum(amount) as abc FROM expence group by date";
$fire = mysqli_query($con,$sql);
while($result = mysqli_fetch_assoc($fire)){
  

echo "['".$result['date']."',".$result['abc']."],";

}
?>    
          
        ]);

        var options = {
          title: 'Expenses',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>