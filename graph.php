<?php

 $dataPoints = array();

 try{

$link = new PDO('mysql:host=localhost;dbname=axpence', 'root', '');

$handle = $link->prepare('select * from expence'); 
$handle->execute(); 
$result = $handle->fetchAll(PDO::FETCH_OBJ);

foreach($result as $row){

    array_push($dataPoints, array("x"=> $row->amount, "y"=> $row->amount));
}
$link = null;
}
catch(PDOException $ex){
print($ex->getMessage());
 }

?>
  <!DOCTYPE HTML>
  <html>
   <head>  
  <script>
   window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
   animationEnabled: true,
   exportEnabled: true,
    theme: "light1", 
      title:{
    text: "PHP Column Chart from Database"
   },
   xaxis
   data: [{
    type: "line", //change type to bar, line, area, pie, etc  
     yValueFormatString: "$#,##0K",
     indexLabel: "{y}",
     indexLabelPlacement: "inside",
     indexLabelFontWeight: "bolder",
     indexLabelFontColor: "white",

     dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
     });
     chart.render();

    }
    </script>
    </head> 
       <body>
          <center><div id="chartContainer" style="height: 370px; width: 50%;"></div></center>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> 
      </script>
       </body>
       </html>  