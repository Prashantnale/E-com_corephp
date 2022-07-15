<?php
 include "sidler.php";
include "conn.php";
if(isset($_GET['id']))
{
   $id=$_GET['id'];
   $p_name=$_GET['p_name'];
   $p_brand=$_GET['p_brand'];
   $p_mrp=$_GET['p_mrp'];
   $p_sale_price=$_GET['p_sale_price'];
   $p_categary=$_GET['p_categary'];
   $p_discrtion=$_GET['p_discrtion'];
   $p_img=$_GET['p_img'];
}
?>
<div class="ml-0 table-responsive px-5 pt-3">
    <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <input type="hidden" class="form-control" name="a" id="formGroupExampleInput" value="<?=$id;?>" placeholder="">
</div>
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">product Name</label>
  <input type="text" class="form-control" name="b" id="formGroupExampleInput" value="<?=$p_name;?>" placeholder="Enter product Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">product Categaroy</label>
  <select name="c" class="form-select" aria-label="Default select example">

  <option selected>Open this select menu</option>
  <?php
   $p_c="SELECT * FROM `category` WHERE 1";
   $pc=mysqli_query($conn,$p_c);
  while($rops=mysqli_fetch_assoc($pc))
  {
  ?>
  <option value="<?=$rops['id'];?>"<?php
  $ss=$rops['id'];
  if($ss==$p_categary)
  {
     $kk="selected";
  }
  else{
   $kk="";
  }
  
  ?><?=$kk;?>><?=$rops['categaroy'];?></option>
  <?php }?>
</select>


</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">product Brand</label>
  <select name="d" class="form-select" aria-label="Default select example">


  <option selected>Open this select menu</option>
  <?php
   $c="SELECT * FROM `p_brand` WHERE 1";
   $cc=mysqli_query($conn,$c);
  while($r=mysqli_fetch_assoc($cc))
  {
  ?>
  <option value="<?=$r['id'];?>"
  <?php
   $ssa=$r['id'];
   if($ssa==$p_brand)
   {
      $kka="selected";
   }
   else{
    $kka="";
   }
  ?>
  
 <?=$kka;?>><?=$r['Brand'];?></option>
  <?php }?>


</select>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">product MRP</label>
  <input type="number" name="e" class="form-control" id="formGroupExampleInput"  value="<?=$p_mrp;?>" placeholder="Enter product MRP">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">product sale Price</label>
  <input type="number" name="f" class="form-control" id="formGroupExampleInput2" value="<?=$p_sale_price;?>"  placeholder="Enter product sale Price">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">product Discription</label>
  <textarea name="g" id="" cols="30" rows="10" class="form-control"><?=$p_discrtion;?></textarea>
</div>
<div class="mb-3">
<img src="<?=$p_img;?>" alt="" width="200px" height="200px"><br><br>
  <label for="formGroupExampleInput" class="form-label">product Img</label>
  <input type="file"  name="img" class="form-control" id="formGroupExampleInput"  value="<?=$p_img;?>" placeholder="Enter product Img">
</div>
<div class="mb-3">
  <input type="submit" value="submited" name="click" class="btn btn-success">
</div>
    </form>

</div>

<?php
if(isset($_POST['click']))
{
  $id=$_POST['a'];
$name=$_POST['b'];
$brand=$_POST['d'];
$mrp=$_POST['e'];
$smrp=$_POST['f'];
$cat=$_POST['c'];
$dis=$_POST['g'];
$names=$_FILES['img']['name'];
$tname=$_FILES['img']['tmp_name'];
$folder="img/".$names;
move_uploaded_file($tname,$folder);

if($name!="" && $brand!="" && $mrp!="" && $smrp!="" && $cat!="" && $dis!="" && $folder!="" && $id!="")
{

  if(!$tname)
  {
    $query="UPDATE `prodect` SET `p_name`='$name',`p_brand`='$brand',`p_categary`='$cat',`p_mrp`='$mrp',`p_sale_price`='$smrp',`p_discrtion`='$dis' WHERE `p_id`='$id'";
  }
  else{
    $query="UPDATE `prodect` SET `p_name`='$name',`p_brand`='$brand',`p_categary`='$cat',`p_mrp`='$mrp',`p_sale_price`='$smrp',`p_discrtion`='$dis',`p_img`='$folder' WHERE `p_id`='$id'";
  }
  
    $run=mysqli_query($conn,$query);
    if($run)
    {
     echo "<script>location.href='index.php';</script>";
    }
    else{
        echo "eorr";
    }

}
}
include "futher.php";

?>