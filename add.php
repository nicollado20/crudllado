
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:cyan;">
<?php
$host = 'localhost';
$dbname = 'countries';
$dbuser = 'root';
$dbpass = '';
$mysqli = mysqli_connect($host,$dbuser,$dbpass,$dbname);
?>
   
<center>
<?php
if(isset($_POST['submit'])){
    $iso = mysqli_real_escape_string($mysqli, $_POST['iso']);
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']);
    $iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']);
    $numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']);
    $phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']);

    if(empty($iso) || empty($name) || empty($nicename) || empty($iso3) || empty($numcode) || empty($phonecode)){
       if(empty($iso)){
           echo "<font color ='red'> Field is empty! </font><br />";
       }
       if(empty($name)){
        echo "<font color ='red'> Field is empty! </font><br />";
    }
    if(empty($nicename)){
        echo "<font color ='red'> Field is empty! </font><br />";
    }
    if(empty($iso3)){
        echo "<font color ='red'> Field is empty! </font><br />";
    }
    if(empty($numcode)){
        echo "<font color ='red'> Field is empty! </font><br />";
    }
    if(empty($phonecode)){
        echo "<font color ='red'> Field is empty! </font><br />";
    }
   echo"<br /><button><a href='javascript:self.history.back();'>Go back</a></button>";
    }
    else {
        $result = mysqli_query($mysqli,"INSERT INTO country(iso,name,nicename,iso3,numcode,phonecode) VALUES('$iso','$name','$nicename','$iso3','$numcode','$phonecode')");
        echo "<font color='green'>Data Added Successfully.";
       echo"<br /><a href='index.php'>View Result</a>";
    }

    }
    
?>
</center>
</body>
</html>