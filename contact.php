<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
body {
  font-family: century gothic;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background: url(asserts/background1.jpg);
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
   color: #fff;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="logo">
    <img src="asserts/logo2.png">
  </div>
  
<ul>
  <li><a href="index.html">home</a></li>
  <li ><a href="rooms.php">rooms</a></li>
  <li  class="active" ><a href="contact.php">contacts</a></li>

<li ><a href="register.php">sign up</a></li>
<li ><a href="practice.php">sign in</a></li>


</ul>

</div>

<div class="container">
  <div style="text-align:center ;color:#fff;">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="asserts/logo2.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">india</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
