<?php
include "sidler.php";
include "conn.php";
if(isset($_GET['id']))
{
$name=$_GET['name'];
$brand=$_GET['brand'];
$img=$_GET['img'];
}
?>
<div class="ml-0 table-responsive px-5 pt-3">
    <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" class="form-control" name="a" value="<?=$name;?>">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Brend Name</label>
  <input type="text" name="b" class="form-control" value="<?=$brand;?>">
</div>
<div class="mb-3">
    <img src="<?=$img;?>" alt="" width="150px" height="100px">
    <br>
  <label for="formGroupExampleInput" class="form-label">Brend Img</label>
  <input type="file"  name="img" class="form-control" value="<?=$img;?>">
</div>
<div class="mb-3">
  <input type="submit" value="submited" name="click" class="btn btn-success">
</div>
    </form>

</div>

<?php
if(isset($_POST['click']))
{
$id=$_GET['id'];
$name=$_POST['a'];
$brand=$_POST['b'];
$aname=$_FILES['img']['name'];
$tname=$_FILES['img']['tmp_name'];
$folder="img/".$aname;
move_uploaded_file($tname,$folder);

if($name!="" && $brand!="" && $folder!="" && $id!="")
{

    if(!$tname)
    {
        $query="UPDATE `p_brand` SET `name`='$name',`Brand`='$brand' WHERE `id`='$id'";
    }
    else
    {
        $query="UPDATE `p_brand` SET `name`='$name',`Brand`='$brand',`img`='$folder' WHERE `id`='$id'";
    }
    
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