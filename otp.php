<html>
<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="voterfr.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
<style> 
	input[type=text] ,[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: none;
		  border-bottom: 2px solid dodgerblue;
	}
	.button {
		  border-radius:15px;
		  background-color:dodgerblue;
		  border: none;
		  color: white;
		  padding: 10px 28px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
}
</style>
</head>
<body>
<div class="id1" style="margin:100px 520px;width:350px;height:65%;padding:12px 15px;background-color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	<center><h1><i class="fa fa-yelp" style="font-size:40px;color:red;";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i></h1></center>
	<center><p style="font-size:20px;">Submit<br>your OTP</p></center>
	<form method="post" action="otpsql.php">
	<br>
	<br>
	<input type="password" placeholder="enter OTP send to your mail" name="otpverify" required>
	<p style="padding-left:300px;color:red" id="timer">0</p>
	<p>Not Get OTP???                             <a style="text-decoration: none;
				 display: inline-block;
				 color:dodgerblue;" href="resendgmail.php">  resend OTP</a><p>
	
	<br>
	<br>
	<p style="padding-left:250px;"><input  type="submit" name="submit" value="submit" class="button"></p>
	</form>
</div>
</body>
</html>
<?php
header( "refresh:120;url=front.php" );
?>
<script>
                            var time_in_minutes = 2;
                            var current_time = Date.parse(new Date());
                            var deadline = new Date(current_time + time_in_minutes*60*1000);
                            function time_remaining(endtime)
                            {
                                         var t = Date.parse(endtime) - Date.parse(new Date());
                                         var seconds = Math.floor( (t/1000) % 60 );
                                         var minutes = Math.floor( (t/1000/60) % 60 );
                                         var hours = Math.floor( (t/(1000*60*60)) % 24 );
                                         var days = Math.floor( t/(1000*60*60*24) );
                                         return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
                            }
                            function run_clock(endtime)
                            {
                                         
                                         function update_clock()
                                {
                                                     var t = time_remaining(endtime);
                                    document.getElementById('timer').innerHTML = t.minutes+'m '+t.seconds+'s';
                                                     if(t.total<=0)
                                  { 
                                      clearInterval(timeinterval); 
                                  }
                                         }
                                         update_clock();
                                         var timeinterval = setInterval(update_clock,1000);
                            }
                            run_clock(deadline);
</script>
