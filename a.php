<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
				}
			else{echo "Connected successfully";}
			$query2 = "select * from images where partyid=316126510089";
			$result9 = mysqli_query($conn, $query2);
			$row9 = mysqli_fetch_assoc($result9);
			if($row9['id']==''){
				echo "vinee success";
			}
		
?>