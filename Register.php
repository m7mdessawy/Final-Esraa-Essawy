<?php


include'DB.php';

$title=mysqli_real_escape_string($Obito,$_POST['title']);

$name=mysqli_real_escape_string($Obito,$_POST['name']);

$position=mysqli_real_escape_string($Obito,$_POST['position']);

$company=mysqli_real_escape_string($Obito,$_POST['company']);

$email=mysqli_real_escape_string($Obito,$_POST['email']);

$address=mysqli_real_escape_string($Obito,$_POST['address']);

$address2=mysqli_real_escape_string($Obito,$_POST['address2']);

$country=mysqli_real_escape_string($Obito,$_POST['country']);

$city=mysqli_real_escape_string($Obito,$_POST['city']);

$region=mysqli_real_escape_string($Obito,$_POST['region']);

$zip=mysqli_real_escape_string($Obito,$_POST['zip']);

$phone=mysqli_real_escape_string($Obito,$_POST['phone']);




$sql="INSERT INTO data(title,name,position,company,email,address,address2,country,city,region,zip,number)
Values ('$title','$name','$position','$company','$email','$address','$address2','$country','$city','$region','$zip','$phone')";
mysqli_query($Obito,$sql);
mysqli_close($Obito);
echo "Thanks";


?>