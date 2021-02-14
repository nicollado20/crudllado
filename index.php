<?php
include("connect.php");

$result = mysqli_query($mysqli, "SELECT * FROM country");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" type ="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color:black;">
    <center><h2 style ="color:white;">COUNTRIES</h2></center>
<center>  
<a style ="color:white;" href="add.html">Add new data</a>
</center>
<br  />
<center>
<table>
     <tr bgcolor = 'orange'>
       <td>id</id>
       <td>iso</td>
       <td>name</td>
       <td>nicename</td>
       <td>iso3</td>
       <td>numcode</td>
       <td>phonecode</td>
       <td>created_at</td>
       <td>Update</td>
       
    </tr>
    
<?php
while($res = mysqli_fetch_array($result)){
    echo "<tr bgcolor = 'cyan'>";
    echo "<td>" ,$res['id'], "</td>";
    
    echo "<td>" ,$res['iso'], "</td>";
   
    echo "<td>" ,$res['name'], "</td>";
    
    echo "<td>" ,$res['nicename'], "</td>";
    
    echo "<td>" ,$res['iso3'], "</td>";
    
    echo "<td>" ,$res['numcode'], "</td>";
    
    echo "<td>" ,$res['phonecode'], "</td>";
    
    echo "<td>" ,$res['created_at'], "</td>";

    echo "<td><a href=\"edit.php?id=$res[id]\">Edit  |</a><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure about deleting this record?')\">  Delete</a></td>";
    echo "</tr>";
}
?>



</table>
</center>
</body>
</html>