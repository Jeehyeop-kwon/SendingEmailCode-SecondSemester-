<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title> confirmation! </title>
</head>

<body>
	<h1> successfully applied!! </h1>

 <?php
  include('header.php');

  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$phone = $_POST['tel'];

  	$to = 'jeehyeop@naver.com';
  	$subject = 'Job candidates!';
  	$msg = "Candidate : $name / Email : $email / Phone number : $phone";

  	mail($to, $subject, $msg, 'From:'. $email); 
  	echo "<p> $name, Thank you for your application!.</p>";

 
  include('footer.php');
 ?>
   
</body>
</html>