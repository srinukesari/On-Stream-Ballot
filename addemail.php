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
			
			$id=$_SESSION['vid'];
			
			$email_id=$_POST['idverify'];
			$_SESSION['email']=$email_id;
			
			$sql="select vemail from voterdetails where vid=$id";
			
			$result=mysqli_query($conn, $sql);
			
			$row = mysqli_fetch_assoc($result);
			
			if($row['vemail']==$email_id){ 	
				header( "refresh:0;url=gmailverifysql.php");}
			else{
				echo "<script type='text/javascript'>confirm('not registered email');</script>";
				header( "refresh:0;url=gmailverify.php");}
			mysqli_close($conn);
?>