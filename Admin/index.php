<?php
session_start();
$pn= $_SESSION['name'];
if($pn)
{

}
else
{
  echo "<script>location.href='login.php'</script>";     
}
include "sidler.php";
include "conn.php";
$query="SELECT * FROM `login` WHERE `username`='$pn'";
$data=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($data);
$i=1;
?> 
                  <div class="row">
                          <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-left display-bolck">
                          <li class="breadcrumb-item"><a href="" class="btn btn-info">Wel-Come <?=$rows['name']; ?></a></li>   
                          </ol>
                          </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right display-bolck">
                                <li class="breadcrumb-item">
                                <a href="p_insert.php" class="btn btn-info">Add prodect</a>
                                </li>
                            </ol>
                        </div>
                        </div>
  <div class="ml-0 table-responsive">
  <table class="table table-hover">
<tr>
<th>Sr.no</th>
<th>Name</th>
<th>Categaroy</th>
<th>Brand</th>
<th>MRP</th>
<th>sale Price</th>
<th>Discription</th>
<th>Img</th>
<th>Edit</th>
<th>Deleted</th>

</tr>
<tr>
<?php
$queryp="SELECT * FROM `prodect` WHERE 1";
$run=mysqli_query($conn,$queryp);

while($row=mysqli_fetch_assoc($run))
{

?>
<td><?=$i;?></td>
<td><?=$row['p_name'];?></td>
<td><?php 
$np=$row['p_categary'];
if($np==null)
{
  echo "--";
}
else{
  $pp=$row['p_categary'];
  $c_query="SELECT * FROM `category` WHERE `id`='$pp'";
  $caterg=mysqli_query($conn,$c_query);
  $rowss=mysqli_fetch_assoc($caterg);
  echo $rowss['categaroy'];
}
?></td>
<td>
<?php 
 $ps=$row['p_brand'];
 $c_que="SELECT * FROM `p_brand` WHERE `id`='$ps'";
 $ca=mysqli_query($conn,$c_que);
 $ro=mysqli_fetch_assoc($ca);
 echo $ro['Brand'];

?>
</td>
<td><?=$row['p_mrp'];?></td>
<td><?=$row['p_sale_price'];?></td>
<td><?=$row['p_discrtion'];?></td>
<td><a href="<?=$row['p_img'];?>"><img src="<?=$row['p_img'];?>" alt="img"  height="70px" width="100px"></a></td>
<td><a href="p_edit.php?id=<?=$row['p_id'];?>&p_name=<?=$row['p_name'];?>&p_brand=<?=$row['p_brand'];?>&p_mrp=<?=$row['p_mrp'];?>&p_sale_price=<?=$row['p_sale_price'];?>&p_categary=<?=$row['p_categary'];?>&p_discrtion=<?=$row['p_discrtion'];?>&p_img=<?=$row['p_img'];?> " class="btn btn-success">Edit</a></td>


<td><a href="p_dedeted.php?id=<?=$row['p_id'];?>" class="btn btn-danger" onclick="return confirm('do you shor this dedeted????')">Deleted</a></td>
</tr>
<?php $i++; }?>
</table>
</div>

<!-- ++++++++++ -->
 <?php
        include "futher.php";
        
?>