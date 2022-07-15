<?php
include "sidler.php";
include "conn.php";
?>
<div class="ml-0 table-responsive px-5 pt-3">
    <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">product Name</label>
  <input type="text" class="form-control" name="b" id="formGroupExampleInput" placeholder="Enter product Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">product Categaroy</label>
  <select name="f" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php
   $p_c="SELECT * FROM `category` WHERE 1";
   $pc=mysqli_query($conn,$p_c);
  while($rops=mysqli_fetch_assoc($pc))
  {
  ?>
  <option value="<?=$rops['id'];?>"><?=$rops['categaroy'];?></option>
  <?php }?>
</select>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">product Brand</label>
  <select name="c" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php
   $c="SELECT * FROM `p_brand` WHERE 1";
   $cc=mysqli_query($conn,$c);
  while($r=mysqli_fetch_assoc($cc))
  {
  ?>
  <option value="<?=$r['id'];?>"><?=$r['Brand'];?></option>
  <?php }?>
</select>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">product MRP</label>
  <input type="number" name="d" class="form-control" id="formGroupExampleInput" placeholder="Enter product MRP">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">product sale Price</label>
  <input type="number" name="e" class="form-control" id="formGroupExampleInput2" placeholder="Enter product sale Price">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">product Discription</label>
  <textarea name="g" id="" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">product Img</label>
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
$name=$_POST['b'];
$brand=$_POST['c'];
$mrp=$_POST['d'];
$smrp=$_POST['e'];
$cat=$_POST['f'];
$dis=$_POST['g'];
$aname=$_FILES['img']['name'];
$tname=$_FILES['img']['tmp_name'];
$folder="img/".$aname;
move_uploaded_file($tname,$folder);

if($name!="" && $brand!="" && $mrp!="" && $smrp!="" && $cat!="" && $dis!="" && $folder!="")
{
    $query="INSERT INTO `prodect`(`p_name`, `p_brand`, `p_categary`, `p_mrp`, `p_sale_price`, `p_discrtion`, `p_img`) VALUES ('$name','$brand','$cat','$mrp','$smrp','$dis','$folder')";
    $run=mysqli_query($conn,$query);
    if($run)
    {
     echo "<script>location.href='index.php';</script>";
    }
    else{
        echo 0;
    }

}
}
include "futher.php";

?>