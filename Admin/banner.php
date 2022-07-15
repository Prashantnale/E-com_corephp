<?php
include "sidler.php";
include "conn.php";
?>
  <div class="ml-0 table-responsive mt-3">
  <table class="table table-hover">
<tr>
<th>Img</th>
<th>Edit</th>

</tr>
<tr>
<?php
$queryp="SELECT * FROM `sider` WHERE 1";
$run=mysqli_query($conn,$queryp);

while($row=mysqli_fetch_assoc($run))
{

?>
<td><a href="<?=$row['sider'];?>"><img src="<?=$row['sider'];?>" alt="img"  height="70px" width="100px"></a></td>
<td><a href="baneredit.php?id=<?=$row['id'];?>&img=<?=$row['sider'];?>" class="btn btn-success">Edit</a></td>

</tr>
<?php }?>
</table>
</div>

<!-- ++++++++++ -->

<?php
include "futher.php";
?>