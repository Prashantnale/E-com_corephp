<?php
include "sidler.php";
include "conn.php";
if(isset($_GET['id']))
{
$name=$_GET['id'];
$img=$_GET['img'];
}
?>
<div class="ml-0 table-responsive px-5 pt-3">
    <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">id</label>
  <input type="text" class="form-control" name="a" value="<?=$name;?>">
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
$name=$_POST['a'];
$aname=$_FILES['img']['name'];
$tname=$_FILES['img']['tmp_name'];
$folder="img/".$aname;
move_uploaded_file($tname,$folder);

if($name!="" && $folder!="")
{

    if(!$tname)
    {
        $query="UPDATE `logo` SET WHERE `id`='$name'";
    }
    else
    {
        $query="UPDATE `logo` SET `logo`='$folder' WHERE `id`='$name'";
    }
    
    $run=mysqli_query($conn,$query);
    if($run)
    {
     echo "<script>location.href='logo.php';</script>";
    }
    else{
        echo 0;
    }

}
}
include "futher.php";

?>