<?php

include("conn.php");
session_start();
if(isset($_SESSION['username']))
{
    if($_POST['txtid']!="" && $_POST['txtname']!="" && $_POST['txtemail']!="" && $_POST['txtpassword']!="" )
    {
    $id=$_POST["txtid"];
    $uname=$_POST["txtname"];
    $pwd=$_POST["txtpassword"];
    $uemail=$_POST["txtemail"];
    
    $sql="update user set name='$uname',email='$uemail',password='$pwd' where id='$id'";
            $result=mysqli_query($conn,$sql);
    
            if($result)
            {
                header("Location:registerDataSelect.php");
                exit();
            }
            else
            {
                header("Location:registerDataSelect.php?error=Data intrept.");
                exit();    
            }
   
}
else
{
    header("Location:registretion.php?error=Data Blank.");
    exit();    
}
}
?>