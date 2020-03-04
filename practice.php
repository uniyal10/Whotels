
<?php


$host="localhost";
$user="root";
$password="password";
$db="register";
$con=mysqli_connect($host,$user,$password,$db);
$error="";
$sucess="";
//mysql_select_db($db);
if(isset($_POST['text'])){
	$uname=$_POST['text'];
	$password=$_POST['password'];
	$sql="select * from users where username='".$uname."'AND password='".$password."'limit 1";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)==1){
	$error="";
	$sucess="login sucessfully";
	header("index.html");
	
}
	else{
	$error="invalid username or password";
	$sucess="";

}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>login</title>
    <link rel="stylesheet" type="text/css" href="practice.css">
	<style type="text/css">
    body{
	margin: 0 auto;
	background-image: url(asserts/background1.jpg);
	background-height:100vh;
	background-size: cover;
}
.container img{
	height: 150px;
	width: 150px;
	margin-top: -60px;
	margin-left: 80px;

}
input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
	margin-left: 07px;
	margin-right: 07px;

}
.form_input::before{
	content: "\f007";
	font-family:century gothic;
	padding-left:07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9;
}
.form_input:nth-child(2)::before{
	content: "\f023";
}
.btn{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
	margin-left: 07px;

}
.container{
	top: 50%;
	position: absolute;
	left: 50%;
	transform: translate(-50%,-50%);
}

	
	*{
		font-family: century gothic;
	}

		ul{
	
	float: right;
	list-style-type: none;
	margin-top: 10px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}
ul li.active a{
	background-color: #fff;
	color: #000;
}
ul li a:hover{
	background-color: #fff;
	color: #000;
}
.logo img{
	float: left;
	width: 150px;
	height: auto;
}
.main{
	max-width: 1200px;
	margin: auto;
}

	</style>
	
	
</head>
<body>
	

	<div class="main">
	<div class="logo">
		<img src="asserts/logo2.png">
	</div>
	
<ul>
	<li ><a href="index.html">home</a></li>
	<li ><a href="rooms.php">rooms</a></li>
	<li ><a href="contact.php">contacts</a></li>

<li ><a href="register.php">sign up</a></li>
<li class="active"><a href="practice.php">sign in</a></li>


</ul>

</div>

<div class="container">
	<img src="asserts/login.png">

	<p class="error" style="align-items: center;font-family: cursive;color: red;margin-left: 50px;"><?php echo $error ?></p><p  style="align-items: center;font-family: cursive;color: green ;margin-left: 90px; class="sucess"><?php echo $sucess ?></p>
	<form method="POST" action="#">
		<div class="form_input">
			<input type="text" name="text" placeholder="Enter the User Name" required/>
		</div>
		<div class="form_input">
			<input type="password" name="password" placeholder="password" required/>
		</div>
		<input type="submit" value="login" class="btn">

	</form>
	</div>



</body>
</html>