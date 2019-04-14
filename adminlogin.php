<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
<style> 
	input[type=text] ,input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: none;
		  border-bottom: 1px solid dodgerblue;
		  border-radius:8px;
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
	<center><p style="font-size:20px;">ADMIN<br><br></p></center>
	<form method="post" action="adminsql.php">
	<center><input type="text" placeholder="USERNAME" name="adname" required>
	<input type="password" placeholder="PASSWORD" name="adpass" required></center>
	<br>
	<br>
	<br>
	<p style="padding-left:250px;"><input  type="submit" name="login" value="login" class="button"></p>
	</form>
</div>
</body>
</html>
