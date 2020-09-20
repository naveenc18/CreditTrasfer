<!DOCTYPE html>
<html>
<head>
	<title>T</title>
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
			$em = $_POST['em'];
			$amount = $_POST['amount'];
			$credit = "SELECT credit FROM transfer WHERE email='$email'";
			$result = mysqli_query($con, $credit);
			$newcred = mysqli_fetch_row($result);
			if($email==$em)
			{
				echo "<script>alert('Transfer to same user not allowed');
				window.location.href='view.php';</script>";
			}
			else
			{
				if($amount<=0)
				{
					echo "<script>alert('Zero or Negative amount cannot be transfered');
				window.location.href='view.php';</script>";
				}
				elseif($newcred[0] < $amount)
				{	
					echo "<script>alert('Insufficient credit');
				window.location.href='view.php';</script>";
				}
				else
				{ 
					$con =mysqli_connect("localhost:3306","root","","credit"); 
					$sql_update = "UPDATE transfer
                	SET credit = credit - '$amount'
                	WHERE email = '$email'";
                	$res = mysqli_query($con, $sql_update);
            		$sql_update_usr = "UPDATE transfer
                	SET credit = credit + '$amount'
                	WHERE email = '$em'";
                	$re = mysqli_query($con, $sql_update_usr);
                	echo "<script>alert('Transfer Successful');
				window.location.href='view.php';</script>"; 
				$con =mysqli_connect("localhost:3306","root","","credit");
                	$up = "INSERT INTO transaction (user1,user2,credit) VALUES ('$email','$em','$amount')";
                	$r = mysqli_query($con, $up);
            	}
            	
				
			}
			


		}
		?>
</body>
</html>