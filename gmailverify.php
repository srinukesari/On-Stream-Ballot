<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="voterfr.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 

<style> 
	input[type=text],[type=email] {
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
	<center><h1><i class="fa fa-yelp" style="font-size:40px;color:red";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i></h1></center>
	<center><p style="font-size:20px;">Verify <br>your Gmail id</p></center>
	<form method="post" action="addemail.php">
	<input type="email" placeholder="Gmail id" name="idverify" required>
	<p><a style="text-decoration: none;
				 display: inline-block;
				 color:dodgerblue;" href="https://accounts.google.com/signin/v2/usernamerecovery?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&osid=1&service=mail&ss=1&ltmpl=default&rm=false&flowName=GlifWebSignIn&flowEntry=AddSession">Forgot email?</a><p>
	
	<br>
	<p>No Gmail account??? <p>
	<p><a style="text-decoration: none;
				 display: inline-block;
				 color:dodgerblue;" href="https://accounts.google.com/signup/v2/webcreateaccount?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default&flowName=GlifWebSignIn&flowEntry=SignUp">create account</a><p>
	<br>
	<p style="padding-left:250px;"><input  type="submit" name="Verify" value="verify" class="button"></p>
	</form>
</div>
</body>
</html>
