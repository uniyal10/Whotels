<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
 
</style>

<link rel="stylesheet" type="text/css" href="contact.css">
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
