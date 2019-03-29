<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title> Apply for Google!! </title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
  
<body>
  <?php
    echo "<h2>Today is " . date("l/(m/d)") . "</h2><br>";
  ?>
	<h1> The life chance of your career! </h1>
	<p> Fill up your informaion for application. </p>

 <?php
  include('header.php');
 ?>

   <form action="mail.php" method="post"> 
   	Your name : <input type="text" name="name" placeholder="name"> <br>
   	Your email : <input type="email" name="email" placeholder="email"> <br>
   	Your phone : <input type="tel" name="usrtel" placeholder="phone number"> <br>
   	<input type="submit" name="submit">
   </form> 

<?php
  include('footer.php');
 ?>

</body>
</html>