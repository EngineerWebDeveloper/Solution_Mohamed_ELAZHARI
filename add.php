<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$symbol = mysqli_real_escape_string($mysqli, $_POST['symbol']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$last =  $_POST['last'];
	$change =  $_POST['change'];
	$pctchange =  $_POST['pctchange'];
	$volume = $_POST['volume'];
	$tradetime =  $_POST['tradetime'];
		
	
	if(empty($symbol) || empty($name) || empty($last)|| empty($change)|| empty($pctchange)|| empty($volume)|| empty($tradetime)) {
				
		if(empty($symbol)) {
			echo "<font color='red'>Symbol field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>name field is empty.</font><br/>";
		}
		
		if(empty($last)) {
			echo "<font color='red'>last field is empty.</font><br/>";
		}
		if(empty($change)) {
			echo "<font color='red'>change field is empty.</font><br/>";
		}
		if(empty($pctchange)) {
			echo "<font color='red'>pctchange field is empty.</font><br/>";
		}
		if(empty($volume)) {
			echo "<font color='red'>volume field is empty.</font><br/>";
		}
		if(empty($tradetime)) {
			echo "<font color='red'>tradetime field is empty.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
	
			
	
		$sql= "INSERT INTO `quotes`(`symbol`, `name`, `last`, `change`, `pctchange`, `volume`, `tradetime`) VALUES('$symbol', '$name', $last, $change, $pctchange, $volume, '$tradetime')";
		
		if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
		
		
		header("Location:index.php");
	}
}
?>
</body>
</html>
