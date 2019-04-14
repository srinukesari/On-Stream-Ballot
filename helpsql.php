<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
			}
				$ques=$_POST["ques"];
				$sql = "insert into helpdesk (ques) values ('$ques')";
				if(mysqli_query($conn, $sql)===true){
					echo "<script>alert('Question delivered to the admin')</script>";
					header("location:help.php");
				}
					


?>