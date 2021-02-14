<?php
include("connect.php");

if( isset($_POST['update']))
 {
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $iso = mysqli_real_escape_string($mysqli, $_POST['iso']);
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']);
    $iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']);
    $numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']);
    $phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']);
    $createdat = mysqli_real_escape_string($mysqli, $_POST['created_at']);

    if(empty($iso) || empty($name) || empty($nicename) || empty($iso3) || empty($numcode) || empty($phonecode)  || empty($createdat)){
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
    if(empty($createdat)){
        echo "<font color ='red'> Field is empty! </font><br />";
    }
   echo"<br /><button><a href='javascript:self.history.back();'>Go back</a></button>";
    }
    else {
        $result = mysqli_query($mysqli,"UPDATE country set iso='$iso',name='$name',nicename='$nicename',iso3='$iso3',numcode='$numcode',phonecode='$phonecode',created_at='$createdat' where id = $id");
        header("Location: index.php");
    }
 }
?>

<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli,"SELECT * FROM  country where id =$id");

while($res = mysqli_fetch_array($result))
{
    $iso = $res['iso'];
    $name = $res['name'];
    $nicename = $res['nicename'];
    $iso3 = $res['iso3'];
    $numcode = $res['numcode'];
    $phonecode = $res['phonecode'];
    $createdat = $res['created_at'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<center>
    <form name="form1" method="post" action="edit.php">
        <table bgcolor='cyan' width="25%" border="0">

            <tr>
                <td>iso</td>
                <td><input type="text" name="iso" value="<?php echo $iso;?>"></td>
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>nicename</td>
                <td><input type="text" name="nicename" value="<?php echo $nicename;?>"></td>
            </tr>
            <tr>
                <td>iso3</td>
                <td><input type="text" name="iso3" value="<?php echo $iso3;?>"></td>
            </tr>
            <tr>
                <td>numcode</td>
                <td><input type="text" name="numcode" value="<?php echo $numcode;?>"></td>
            </tr>
            <tr>
                <td>phonecode</td>
                <td><input type="text" name="phonecode" value="<?php echo $phonecode;?>"></td>
            </tr>
             <tr>
                <td>created_at</td>
                <td><input type="text" name="created_at" value="<?php echo $createdat;?>"></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                </td>

                <td>&nbsp;&nbsp;<input type="submit" name="update" value="Update"></td>

            </tr>

        </table>
</center>
</form>
</body>
</html>