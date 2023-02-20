<?php
include "config.php";
$ID = $_POST['id'];
$List = $_POST['list'];
mysqli_query($con, "UPDATE `tabeltodo` SET `list` = '$List' WHERE `tabeltodo` . `Id` = '$ID'");
header("location:index.php");


?>