
<?php

$uname="localhost";
$host="root";
$password="";
$dbname="userdb";

$conn=mysqli_connect($uname,$host,$password,$dbname);
if(!$conn)
{
    echo '<script>alert("Error :".mysqli_error())</script>';
}

?>