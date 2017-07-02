<!DOCTYPE html>
<html>
<body>


<?php

$for="vaughn_nichols@hotmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail ($email, $subject, $message, "From:".$for);

print "your message has been sent to: </br>$email</br>$subject</br>$message</p>";


?>

</body>
</html>



