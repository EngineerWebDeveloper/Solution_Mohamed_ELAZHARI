<?php

include("config.php");


$sy = $_GET['sy'];



$result = mysqli_query($mysqli, "DELETE FROM `quotes` WHERE symbol='$sy'");


header("Location:index.php");
?>

