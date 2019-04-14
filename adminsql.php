<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
				}
			$aname=$_POST['adname'];
			$apassw=$_POST['adpass'];
			
			
			$sql = "select apass from admin where admin='$aname'";
			
			$result = mysqli_query($conn, $sql);
		 
			
			$row = mysqli_fetch_assoc($result);
			 
			
			
			if ($row["apass"]==$apassw){header("location:dashboard.php");}
			else{echo "<script type='text/javascript'>alert('invalid username or password!!!');</script>";
				header("refresh:0;url=adminlogin.php");
				}
				
			//if ($row["vids"]==$id){header("location:gmailverify.php");}
			//else{echo "<script type='text/javascript'>alert('invalid voterid');</script>";
				//header("location:idverify.php");}
			//if (mysqli_num_rows($result) > 0){
				//echo '!!!...Today events are...!!!';
				//while($row = mysqli_fetch_assoc($result)) {echo "<br>\t"."\t". $row["event"]."  ";}}
			//else {echo "NO events Today";}
			//echo $id;
			//echo "<script type='text/javascript'>alert('$msg');</script>";
			//header("location:gmailverify.php");
			mysqli_close($conn);
?>