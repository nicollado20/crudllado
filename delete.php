<?php
$id = $_GET['id'];
if(empty($id) {
    echo "id is empty.";
}
else {
    echo "id is ".$_GET['id'];
}
    include('connect.php');
    $result = mysqli_query($mysqli,"DELETE FROM country where id=$id ");
    header("Location:index.php");

?>
