<?php
$data=array(
    array("Adjusted","","","",'','','',''),

    array("1st quarter 2010(p)","960,474","38,707","4.0",'2.0','1.5','6.3','14.3'),
    array("4th quarter 2009(r)","941,355","38,141","4.1",'2.0','4.2','2.1','14.6'),
    array("3rd quarter 2009","922,763","36,587","4.0",'2.1','1.5','-7.8','14.3'),
    array("2nd quarter 2009","904,045","34,827","4.0",'00','1.5','-11.1','-4.8'),
    array("1st quarter 2009(r)","860,474","33,865","-2.0",'2.0','1.5','-10.7','-6.6'),

    array("Not Adjusted","","","",'','','',''),
    array("1st quarter 2010(p)","897,044","36,638","4.0",'-9.0','-18.9','6.3','14.3'),
    array("4th quarter 2009(r)","985,355","45,199","4.1",'2.0','4.2','2.1','14.6'),
    array("3rd quarter 2009","926,763","34,031","4.0",'2.1','1.5','-7.8','14.3'),
    array("2nd quarter 2009","919,045","32,769","4.0",'00','1.5','-11.1','-4.8'),
    array("1st quarter 2009(r)","839,474","32,125","2.0",'-13.1','-18.3','-10.7','-7.6')

  

    

);
function showTable(){

$text="<table>";
$text.="<tr><th rowspan='2'>Quarter</th><th colspan='2'>Retail sales (million of dollars)</th><th rowspan='2'>Ecommerce as a <br>percent of total</th><th colspan='2'>Percent change <br>from prior quarter</th><th colspan='2'>Percent change from <br> same quarter a year ago</th></tr>";
$text.="<tr><th>Total</th><th>Ecommerce</th><th>Total</th><th>Ecommerce</th><th>Total</th><th>Ecommerce</th></tr>";
global $data;
foreach($data as $el)
$text.='<tr><td>'.$el[0].'</td><td>'.$el[1].'</td><td>'.$el[2].'</td><td>'.$el[3].'</td><td>'.$el[4].'</td><td>'.$el[5].'</td><td>'.$el[6].'</td><td>'.$el[7].'</td></tr>';

$text.='</table>';
return $text;
}


$delete_text="<table>";
$delete_text.="<tr><th rowspan='2'>Quarter</th><th colspan='2'>Retail sales (million of dollars)</th><th rowspan='2'>Ecommerce as a <br>percent of total</th><th colspan='2'>Percent change <br>from prior quarter</th><th colspan='2'>Percent change from <br> same quarter a year ago</th></tr>";
$delete_text.="<tr><th>Total</th><th>Ecommerce</th><th>Total</th><th>Ecommerce</th><th>Total</th><th>Ecommerce</th></tr>";

foreach($data as $el)
{    if($el[1]=='897,044'||$el[1]=='839,474')
        continue;
    $delete_text.='<tr><td>'.$el[0].'</td><td>'.$el[1].'</td><td>'.$el[2].'</td><td>'.$el[3].'</td><td>'.$el[4].'</td><td>'.$el[5].'</td><td>'.$el[6].'</td><td>'.$el[7].'</td></tr>';

}

$delete_text.='</table>';


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="styles.css">
</head>
<body>
   <div>
       <h1>Displaying Array Data</h1>
      <?php echo(showTable()); ?>

   </div>
   <div>
       <h1>All records of 1st quarter of Not adjusted deleted</h1>
      <?php echo($delete_text); ?>

   </div>
   <div>
       <h1>All records of 1st quarter of Not adjusted Made same as that of adjusted</h1>
      <?php
      $data[7]=$data[1];
      $data[11]=$data[5];
      ?>
      <div>
      <?php echo(showTable()); ?>

   </div>

   <div>
       <h1>Average sale of ecommerce from Adjusted & not Adjusted</h1>
      <?php 
        $sumAdjusted=0;
       for($i=1;$i<6;$i++){
        //    echo((float)str_replace(',', '', $data[$i][2]));
           ;
           $sumAdjusted+=(float)str_replace(',', '', $data[$i][2]);


       }
       $avgAdjusted=$sumAdjusted/5;
       echo("<h3>Average of ecommerce sale from Adjusted is $avgAdjusted</h3>");

       $sumUnAdjusted=0;
       for($i=7;$i<12;$i++){
        //    echo((float)str_replace(',', '', $data[$i][2]));
           ;
           $sumUnAdjusted+=(float)str_replace(',', '', $data[$i][2]);


       }
       $avgUnAdjusted=$sumUnAdjusted/5;
       echo("<h3>Average of ecommerce sale from Adjusted is $avgUnAdjusted</h3>");
      
      ?>

   </div>
      
      
      
    

   
</body>
</html>