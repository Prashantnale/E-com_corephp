<?php
include "sidler.php";
include "conn.php";
?>
<div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right display-bolck">
                                <li class="breadcrumb-item">
                                <a href="pb_catinsert.php" class="btn btn-info">Add category</a>
                                </li>
                            </ol>
                        </div>
                        </div>
  <div class="ml-0 table-responsive">
  <table class="table table-hover">
<tr>
<th>Sr.no</th>
<th>Name</th>
<th>category</th>
<th>Img</th>
<th>Edit</th>
<th>Deleted</th>

</tr>
<tr>
<?php
$i=1;
$queryp="SELECT * FROM `category` WHERE 1";
$run=mysqli_query($conn,$queryp);

while($row=mysqli_fetch_assoc($run))
{

?>
<td><?=$i;?></td>
<td><?=$row['name'];?></td>
<td><?php 
 echo $pp=$row['categaroy'];
?></td>
<td><a href="<?=$row['img'];?>"><img src="<?=$row['img'];?>" alt="img"  height="70px" width="100px"></a></td>
<td><a href="pb_catedit.php?id=<?=$row['id'];?>&name=<?=$row['name'];?>&brand=<?=$row['categaroy'];?>&img=<?=$row['img'];?>" class="btn btn-success">Edit</a></td>


<td><a href="pb_catdedeted.php?id=<?=$row['id'];?>" onclick="return confirm('do you shor this dedeted????')" class="btn btn-danger">Deleted</a></td>
</tr>
<?php $i++; }?>
</table>
</div>

<!-- ++++++++++ -->

<?php
include "futher.php";
?>