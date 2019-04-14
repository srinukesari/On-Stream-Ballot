<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
			}
			session_start();
			$ques=$_SESSION['ans'];
				$ans=$_POST["ans"];
				$sql = "update  helpdesk set ans='$ans' where ques='$ques' ";
				if(mysqli_query($conn, $sql)===true){
					echo "<script>alert('ans inserted into database')</script>";
					header("location:dashboard.php");
				}
					


?>