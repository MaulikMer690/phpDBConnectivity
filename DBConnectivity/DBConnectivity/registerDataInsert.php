<?php

if($_POST['txtname']!="" && $_POST['txtemail']!="" && $_POST['txtpassword']!="" && $_POST['txtc_password']!="")
{

    include("conn.php");
    $uname=$_POST["txtname"];
    $pwd=$_POST["txtpassword"];
    $uemail=$_POST["txtemail"];
    $cpwd=$_POST["txtc_password"];
    
    if($pwd == $cpwd)
    {
            session_start();

            $sql="INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '$uname','$uemail','$pwd')";
            $result=mysqli_query($conn,$sql);
    
            if($result)
            {
                $_SESSION['username'] = $uemail;
                header("Location:index.php");
                exit();
            }
            else
            {
                header("Location:registretion.php?error=Data intrept.");
                exit();    
            }
    }
    else
    {
        header("Location:registretion.php?error=Password cant match.");
        exit();    
    }
}
else
{
    header("Location:registretion.php?error=Data Blank.");
    exit();    

}

?>