<?php


include("conn.php");
session_start();

if(isset($_SESSION['username']))
{
    if($_GET['id']!="" )
    {
        $id=$_GET["id"];
        
    
                $sql="delete from user where id=".$id;
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
        header("Location:registerDataSelect.php?error=Id Blank.");
        exit();    
    
    }

}
else {
    header("Location:login.php?error=Id Blank.");

}
