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
			session_start();
			$vid=$_POST['nid'];
			
			
			$sql = "delete from votes where partyid=$vid";
			
			$sql2 = "delete from nominee where candidate_id=$vid";
			
			$sql3 = "delete from images where partyid=$vid";
			
			$sql4 = "delete from partyimages where partyid=$vid";
			
			$sql5 = "delete from npics where partyid=$vid";
			
			if(mysqli_query($conn, $sql)===true){
				if(mysqli_query($conn, $sql2)===true){
					if(mysqli_query($conn, $sql3)===true){
						if(mysqli_query($conn, $sql4)===true){
							if(mysqli_query($conn, $sql5)===true){
							echo "<script type='text/javascript'>alert('removed successfully');</script>";
							header("refresh:0;url=nremove.php");
							}
						}
					}
				}
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