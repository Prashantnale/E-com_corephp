<?php
include "sidler.php";
include "conn.php";
?>
<div class="ml-0 table-responsive px-5 pt-3">
    <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" class="form-control" name="a" id="formGroupExampleInput" placeholder="Enter product Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Brend Name</label>
  <input type="text" name="b" class="form-control" id="formGroupExampleInput" placeholder="Enter product MRP">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Brend Img</label>
  <input type="file"  name="img" class="form-control" id="formGroupExampleInput" placeholder="Enter product Img">
</div>
<div class="mb-3">
  <input type="submit" value="submited" name="click" class="btn btn-success">
</div>
    </form>

</div>

<?php
if(isset($_POST['click']))
{
$name=$_POST['a'];
$brand=$_POST['b'];
$aname=$_FILES['img']['name'];
$tname=$_FILES['img']['tmp_name'];
$folder="img/".$aname;
move_uploaded_file($tname,$folder);

if($name!="" && $brand!="" && $folder!="")
{
    $query="INSERT INTO `p_brand`(`name`, `Brand`, `img`) VALUES ('$name','$brand','$folder')";
    $run=mysqli_query($conn,$query);
    if($run)
    {
     echo "<script>location.href='pa_brend.php';</script>";
    }
    else{
        echo 0;
    }

}
}
include "futher.php";

?>