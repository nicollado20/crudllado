<?php
$id = $_GET['id'];
include('connect.php');
$result = mysqli_query($mysqli,"DELETE FROM country where id=$id ");

header("Location:index.php");
?>
