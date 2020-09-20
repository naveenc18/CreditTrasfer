<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    .topnav {
  background-color: #ccccb3;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 2px 4px;
  text-decoration: none;
  font-size: 13px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: grey;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: black;
}
body
{
  background-image: url('css/images/wall.jpg');
  background-size: cover;
}

  </style>
</head>
<body>
  <div class="topnav">
  <a href="index.php"><h3>Home</h3></a>
   <a href="view.php"><h3>Transfer Credit</h3></a>
   <a href="index.php"><h3>About</h3></a>
     <a href="index.php"><h3>Contact</h3></a>
</div>
  
  <strong><h1 align="center">Users Details:</h1></strong>
  <div align="
  center">
    <?php
$con =mysqli_connect("localhost:3306","root","","credit");
$sql = "SELECT * FROM transfer";  
$result = mysqli_query($con, $sql);
echo "<table border='2' style='border: 1px solid black;' align='center' width='80%'>
          <tr>
          <th>Name</th>
          <th>Email</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
         }
          echo "</table>";
if (!$result) {
    echo 'Error';
}
else {
     print_r(mysqli_fetch_array($result));
}
?>
  </div>
  <div align="center">
    <br>
   <form action="singleuser.php" method = "POST">
        <label><strong>View Details:</strong></label>
    <select name="name">
                      <option>Select</option>
                        <?php
                        $con =mysqli_connect("localhost:3306","root","","credit");
            $sql = "SELECT * FROM transfer";  
            $result = mysqli_query($con, $sql);
                            while ($row=mysqli_fetch_array($result)){
                                echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
                            }

                        ?>

                </select>
                <input type="submit" name="details">
    </form>
  </div>
</body>
</html>
