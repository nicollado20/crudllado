<?php
//initialize session
session_start();

if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header('location: login.php');
  exit;
}
?>
<?php
include("connect.php");

$result = mysqli_query($mysqli, "SELECT * FROM country");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <link rel = "stylesheet" type ="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Document</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.mobile-container {
  max-width: 480px;
  margin: auto;
  background-color: #555;
  height: 500px;
  color: white;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  left: 0;
  top: 0;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
  
}
</style>
</head>
<body>
    
        <div class="topnav">
  <center><a href="index.php" class="active">COUNTRIES</a></center>
  
  <div id="Menus">
    <a href="add.html">Add data</a>
    <a href="logout.php">Logout</a>
  </div>
 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
         
<br  />

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

<script>
function myFunction() {
  var x = document.getElementById("Menus");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</div>
      </div>
    </div>
  </div>
</body>
</html>