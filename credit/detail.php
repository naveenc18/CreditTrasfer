<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		$con =mysqli_connect("localhost:3306","root","","credit");
		if(isset($_POST['bt']))
		{
			$email = $_POST['email'];
			$sql = "SELECT * FROM transfer where email='$email'";  
			$result = mysqli_query($con, $sql);
			echo "<table border='2'>
          <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Credit</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['credit']."</td>";
             echo "</tr>";
         }
          echo "</table>";
          if (!$result) {
    				echo 'Error';
						}
			else {
     			print_r(mysqli_fetch_array($result));
				}
		}
	?>
</body>
</html>