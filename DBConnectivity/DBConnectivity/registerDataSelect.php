<?php

include("master.php");

include("conn.php");
?>
<div class="text-center m-5" >

<?php

if(isset($_SESSION['username']))
{
  ?>
  <form action="registerDataSelect.php" method="post" >

<div class="dropdown m-5" >
  <label for="cars">Sort Data:</label>
  <select name="datasort" id="cars">
    <option disebled>--select--</option>
    <option value="id">Id</option>
    <option value="name">Name</option>
  </select>
  <input type="text" id="form3Example3c" class="form-control" name="txtsch" placeholder="name"/>
<br>
  <button type="submit" class="btn btn-primary btn-sm mb-1">Sort</button>
</form>
  
</div>

  <?php
      $sql="SELECT * FROM `user` ";


  if(isset($_POST['txtsch']))
  {
    $srt=$_POST["txtsch"];
      $sql="SELECT * FROM `user` where name='$srt'";
  }


  if(isset($_POST['datasort']))
  {
    $srt=$_POST["datasort"];
    if($srt=="id")
    {
      $sql="SELECT * FROM `user` ORDER BY id";
    }
    if($srt=="name")
    {
      $sql="SELECT * FROM `user` ORDER BY name";
    }
  }
  
  

    ?>
    <?php

$result=mysqli_query($conn,$sql);
      
if($result)
{
        ?>
        <table class="table">
          <tr>
            <th>
              Id
            </th>
            <th>
              Name
            </th>

            <th>
              Email
            </th>

            <th>
            Password
            </th>

          </tr>
          
          <?php
        while($row = mysqli_fetch_assoc($result))
        {
          
          ?>
          <tr>
            <td>
              <?php 
              echo $row['id']
              ?>
            </td>
            
            <td>
              <?php 
              echo $row['name']
              ?>
            </td>
            
            <td>
              <?php 
              echo $row['email']
              ?>
            </td>
            
            <td>
              <?php 
              echo $row['password']
              ?>  
            </td>
             <td>
             <a class="btn btn-primary" href="registerDataUpdate.php?id='<?php echo $row['id']?>'">Edit</a>
              &nbsp;
              <a class="btn btn-danger" href="delete.php?id='<?php echo $row['id']?>'">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
         </table>
         <?php    
  }

?>
</center>
</div>
    <?php
}
else
{  
    echo "<h1>User is Not Login.</h1>";
}

?>




  
