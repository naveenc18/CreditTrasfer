<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
    <a href="viewuser.php"><h3>View Users</h3></a> 
   <a href="index.php"><h3>About</h3></a>
     <a href="index.php"><h3>Contact</h3></a>
</div>
<?php
$con =mysqli_connect("localhost:3306","root","","credit");
if(isset($_POST['details']))
{
	$name = $_POST['name'];
	$sql = "SELECT * FROM transfer WHERE name='$name'";
	$result = mysqli_query($con, $sql);
		  echo "<table border='2' style='border: 1px solid black;' align='center' width='80%'>
          <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Credit</th>
          <th>Address</th>
          <th>Mobile</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) 
          {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['credit']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['mobile']."</td>";
          }
          echo "</table>";
}
?>
</body>
</html>