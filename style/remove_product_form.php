<?php session_start();?>

<?php





if(isset($_SESSION['admin'])){

echo "logged in";
}
else
{
	header("location:adminlogin.php");
	echo "you need to log in or register to view this page";
}







?>
<?php include'admin_header.php' ?>


<div class="row">
<div class="container">


<div class="col-md-2 sidenav">
<?php include'sidenav.php'?>
</div>


<div class="col-md-4">


<!-- html form starts here -->
<form action="remove_product.php" method="post">
 
<!-- remember to include connection file --> 
<?php include'connection.php'?>
<!-- php embedded in the hmtl -->
<?php
$sql="SELECT * FROM shop";
$result=mysqli_query($con,$sql);
							
	if (mysqli_num_rows($result) > 0) {
								
			echo"<table class='remove_product_table'>
				<tr>
				<td> Product Name </td>
				<td> Description </td>
				<td> Price </td>
				<td> Delete Product </td>
				</tr><br>";
								
				while($row = mysqli_fetch_assoc($result)) {
				
				echo "<tr>
			     	<td>" . $row["item_name"]. "</td>
					<td>" . $row["description_column"]. "</td>
					<td>" . $row["item_price"]. "</td>
					<td><a  href='delete_product.php?  productID=$row[item_id]'>Delete Item</a> </td>
					</tr>";
								
								}
								echo"</table>";
							} 
?>
<!-- end of php -->
  <p>

  </p>

  </p>
</form>
</div>

<div class="col-md-6">

</div>
</div>
</div>
<div class="row">

<div class="col-md-12">
<?php include'footer.php'?>

</div>

</div>