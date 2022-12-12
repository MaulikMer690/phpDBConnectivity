<?php
session_start();

include("conn.php");

if($_POST['txtemail']!="" && $_POST['txtpassword']!="" )
{
    $uname=$_POST["txtemail"];
    $pwd=$_POST["txtpassword"];
    
        $sql="SELECT * FROM `user` where email='$uname' and password='$pwd' ";
        $result=mysqli_query($conn,$sql);
    
        if($result)
        {
          while($row = mysqli_fetch_assoc($result))
          {
    
            $sqlemail=$row['email'];
            $sqlpwd=$row['password'];
          }
        }
        else
        {
            header("Location:login.php?error=Data intrept.");
            exit();    
        }
    if($uname == $sqlemail && $pwd == $sqlpwd)
    {
        
        $_SESSION['username'] = $uname;

        header("Location:index.php");
        exit();
    }
    else
    {
        header("Location:login.php?error=Incorrect credential.");
        exit();
    }

}
else{
    header("Location:login.php?error=Data Blank.");

    echo "Enter Username and Password";
}

?>