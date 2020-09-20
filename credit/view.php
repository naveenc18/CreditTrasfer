<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		select {
  width: 10%;
  height: 50px;
  font-size: 100%;
  font-weight: bold;
  cursor: pointer;
  border-radius: 0;
  background-color: #ffff99;
  border: none;
  color: black;
  padding: 10px;
  padding-right: 30px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  /* Adding transition effect */
  transition: color 0.3s ease, background-color 0.3s ease;
}
/* For IE <= 11 */
select::-ms-expand {
  display: none; 
}
select:hover{
	color: black;
  background-color: grey;
  border-bottom-color: #DCDCDC;
}
select:focus {
  color: black;
  background-color: #ffff99;
  border-bottom-color: #DCDCDC;
}
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
	background-image: url('css/images/iun.jpg');
	background-size: 200%;
}

	</style>
</head>
<body>
	<div class="topnav">
  <a href="index.php"><h3>Home</h3></a>
    <a href="viewuser.php"><h3>View Users</h3></a> 
   <a href="transfer.php"><h3>Transactions</h3></a>
  </div>
	<form action="det.php" method="POST">
  <label for="email"><h3>Select User 1:</h3></label>
	  <select name="email">
                   		<option>Select</option>
                        <?php
                        $con =mysqli_connect("localhost:3306","root","","credit");
						$sql = "SELECT * FROM transfer";  
						$result = mysqli_query($con, $sql);
                            while ($row=mysqli_fetch_array($result)){
                                echo "<option value='". $row['email'] ."'>" .$row['email'] ."</option>" ;
                            }

                        ?>

                </select>
            
              <label for="em"><h3>Select User 2:</h3></label>
	  <select name="em">
                   		<option>Select</option>
                        <?php
                        $con =mysqli_connect("localhost:3306","root","","credit");
						$sql = "SELECT * FROM transfer";  
						$result = mysqli_query($con, $sql);
                            while ($row=mysqli_fetch_array($result)){
                                echo "<option value='". $row['email'] ."'>" .$row['email'] ."</option>" ;
                            }

                        ?>

                </select>
                Enter credit:<input type="value" name="amount" required="number">
             <input type="submit" name="bt">
     </form>
</html>

