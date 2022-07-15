<?php
include "conn.php";
if(isset($_GET['id']))
{
   $id=$_GET['id'];
  $query="SELECT * FROM `category` WHERE `id`='$id'";
  $run=mysqli_query($conn,$query);
 $rows=mysqli_fetch_assoc($run);
  unlink($rows['img']);

  $deleted="DELETE FROM `category` WHERE `id`='$id'";
  $del=mysqli_query($conn,$deleted);
  if($del)
  {
    echo "<script>location.href='pb_cat.php'</script>";
  }
  else{
      echo "sorry not deleted";
  }
}


?>