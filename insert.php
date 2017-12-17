<html>
<head></head>
<body bgcolor= #D0A020 align="center">

<?php
include 'config.php';
$name=$_POST["name"];
$address=$_POST["address"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$city=$_POST["city"];
$destination=$_POST["destination"];
$date=$_POST["date"];
$people=$_POST["people"];
$result=$mysqli->query("INSERT into form (name,address,mobile,email,city,destination,date,people) values ('$name','$address','$mobile','$email','$city','$destination','date','people')");

	echo '<h1>Thank You for Enquiry '.$name.'.<br>We will get back to you soon !!</h1>';

?>
</body>
</html>