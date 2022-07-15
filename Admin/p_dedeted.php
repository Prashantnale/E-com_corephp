<?php
include "conn.php";
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $query="SELECT * FROM `prodect` WHERE `p_id`='$id'";
  $run=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($run);
  unlink($row['p_img']);

  $deleted="DELETE FROM `prodect` WHERE `p_id`='$id'";
  $del=mysqli_query($conn,$deleted);
  if($del)
  {
    echo "<script>location.href='index.php'</script>";
  }
  else{
      echo "sorry not deleted";
  }


}


?>