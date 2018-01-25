<?php
$password=$_POST["password"];
$rightpassword="1234";
if($password==$rightpassword)
{    echo"the password is right";
} else 
{ 
    echo"the password is wrong";
}
?>