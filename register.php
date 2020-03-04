<!DOCTYPE html>
<html>
<head>
	<title>register</title>
<style type="text/css">

  footer{
  background:#000;
  padding: 80px 10px 80px 300px;
}
.col-md-3{
  width: 30%;
  float: left;
}
.footer_box{
  list-style: none;
  padding: 0;
}
ul.footer_box h4{
  color: #fff;
  font-size: 1.1em;
  text-transform: uppercase;
  font-weight: 700;
  margin-bottom: 8%;
}
ul.footer_box li a{
  color: #B8B6B6;
  font-size: 0.8125em;
  text-decoration: none;
  line-height: 2em;
}
.footer_search{
  margin-top: 10%;
  width: 100%;
  position: relative;
}
.footer_bottom{
  color: white;
}



*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
header{
	background-image: url(asserts/background1.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
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
.title{
	position: absolute;
	top: 40%;
	left: 60%;
	transform: translate(-50%,-50%);
}
.title h1{
	color: #fff;
	font-size: 50px;
}
.button{
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%,-50%);

}
.btn{
	border: 1px solid #fff;
	padding: 10px 20px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color:#fff;
	color: #000;

}
.form{
	position: absolute;
	top: 20%;
	left: 30%
	
}
.form th,td{
	color: #fff;
	padding: 5px 20px;
}
table{
	border: 1px solid #fff;
	width: 200%;
}
input[type=submit]{
	width: 100%;
	padding: 10px 20px;
	cursor: pointer;
	border: none;
	border-radius: 1px solid #ccc;
	color: #fff;
	background: #000;
	font-family: century Gothic;
	transition: 0.6s ease;
}
input[type=submit]:hover{
	
	color: #000;
	background: #fff;

	
}
input[type=text]{
	 width: 100%;
  padding: 5px 10px;
  margin: 5px 0;
  
  border: 1px solid #ccc;
  box-sizing: border-box;


}



</style>








</head>
<body>
<header>
<div class="main">
	<div class="logo">
		<img src="asserts/logo2.png">
	</div>
	
<ul>
	<li><a id="home"href="index.html">home</a></li>
	<li ><a href="rooms.php">rooms</a></li>
	<li ><a href="contact.php">contacts</a></li>
	<li class="active"><a href="register.php">sign up</a></li>

<li ><a href="practice.php">sign in</a></li>


</ul>

</div>

<div class="form">
	<form name="myForm" >
		<div>
			<img src="asserts/login.png" style="margin: -60px;height: 150px;width: 150px;margin-left: 85px;"></div>
	<table>
		<tr><td>username</td></tr>
<tr><td><input class="input"type="text" name="username" required/></td></tr>
	<tr><td>email</td></tr>
<tr><td><input class="input"type="text" name="email" required/></td></tr>
	<tr><td>password</td></tr>
<tr><td><input class="input"type="text" name="" required/></td></tr>
	<tr><td>repeate password</td></tr>
<tr><td><input class="input"type="text" name="" required></td></tr>
<tr><td><input type="submit" name=""onclick=" validation()" value="SUBMIT"></td></tr>
	</table>	

	</form>
</div>


</div>
</header>
<footer>
          <div class="col-md-3">
            <ul class="footer_box">
              <h4>About</h4>
              <li><a href="#">w hotels branches</a></li>
              <li><a href="#">countries</a></li>
              <li><a href="#">faculties</a></li>
              <li><a href="#">Catalog Request/Download</a></li>
            </ul>
          </div>
        <div class="col-md-3">
            <ul class="footer_box">
              <h4>Customer Support</h4>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">8008008</a></li>
              <li><a href="#">chandigarh</a></li>
              <li><a href="#">delhi</a></li>
              <li><a href="#">mumbai</a></li>
            </ul>
          </div>
        <div class="col-md-3">
            <ul class="footer_box">
              <h4>Newsletter</h4>
              <div class="footer_search">
                   <form>
                  <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
                  <input type="submit" value="Go">
                   </form>
            </div>             
        </div><br><br><br><br><br><br><br><br>
        <div class="footer_bottom">
                 <p>© 2018 <b>w hotels</b></p>
                </div>
    </footer>

<script type="text/javascript">
function validation() {
  var x = document.getElementByClassName('input').value;
   
  if (x == "") {
    alert("all fields must be filled out");
    
  }
  else{
var x=document.getElementById('home');
x.click();
  }
  
}

</script>




</body>
</html>