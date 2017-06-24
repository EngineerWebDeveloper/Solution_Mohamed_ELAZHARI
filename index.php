<?php

include_once("config.php");



$result = mysqli_query($mysqli, "SELECT * FROM quotes "); 

?>

<html>
<head>	



	<title>My Watchlist</title>
		<script type="text/javascript" src="javascript/jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap/mycss.css">
	
        <script src="javascript/myjs.js"></script>
        <script type="text/javascript" src="tablesorter/jquery.tablesorter.js"></script> 

</head>

<body>
 
 <button onclick="window.location.href='add.html'"class="btn btn-primary active"id="myform">Add new symbol</button><br/><br/>
<form >
<input type="text" id="search"size="30" onkeyup="showResult(this.value)" onfocus="if (this.value=='Enter a symbol..') this.value = ''" type="text" value="Enter a symbol..">
<div id="livesearch"></div>

</form>


<?php
//print_r($result);
//print_r (mysqli_fetch_array($result));
//$res = mysqli_fetch_array($result);
 if($result->num_rows==0){
	 
	die("no data to display!!");

}
else { 
?>
	<table width='100%' border=1 id="sortedtable" id="table">
	<thead>

	<tr bgcolor='#CCCCCC'>
		<th>Symbol <img src="images/bg.gif"  style="width:15px;height:15px;"></th>
		<th>Symbol Name<img src="images/bg.gif"  style="width:15px;height:15px;"></th>
		<th>Last Price<img src="images/bg.gif"  style="width:15px;height:15px;"></th>
		<th>Change<img src="images/bg.gif"  style="width:15px;height:15px;"></th>
		<th>% Change<img src="images/bg.gif"  style="width:15px;height:15px;"></th>
		<th>Volume<img src="images/bg.gif"  style="width:15px;height:15px;"></th>
		<th>Time<img src="images/bg.gif"  style="width:15px;height:15px;"></th>
		<th>   </th>
	</tr>
	<thead>
	<tbody>
	<?php 
	
		while($res = mysqli_fetch_array($result)){	
		echo "<tr>";
		echo "<td>".$res['symbol']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['last']."</td>";	
		echo "<td>".$res['change']."</td>";
		echo "<td>".$res['pctchange']."</td>";
		echo "<td>".$res['volume']."</td>";
		echo "<td>".$res['tradetime']."</td>";
		echo "<td> <a href=\"delete.php?sy=$res[symbol]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img src=\"images/delete.png\"  style=\"width:15px;height:15px;\"></a></td>";				
	}
}
	?>
	</tbody>
	</table>
	<script>
	$(document).ready(function() {
   $("#sortedtable").tablesorter();
});
	</script>
</body>
</html>


