<?php
			session_start();
			$id=$_POST['otpverify'];
			
			if ($_SESSION['otps']==$id){header("location:voterhome.php");}
			else{echo "<script type='text/javascript'>alert('incorrect otp');</script>";
				header( "refresh:0;url=front.php");}
?>