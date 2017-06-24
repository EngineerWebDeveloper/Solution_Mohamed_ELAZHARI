<?php


include("config.php");


$q=$_GET["q"];
$hint="";

if (strlen($q)>0) {
  
       

$sql = "SELECT * FROM `quotes` WHERE symbol LIKE '%".$q."%'"; 
$r_query = mysqli_query($mysqli,$sql); 

while ($row = mysqli_fetch_array($r_query)){  
$hint.=$row['symbol']." has been already added</br>"   ;
 

}
  
}


if ($hint=="") {
  $response="The given symbol doesn't exist";
} else {
  $response=$hint;
}


echo $response;
?>