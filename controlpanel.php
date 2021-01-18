




<?php session_start();?>
<?php





if(isset($_SESSION['admin'])){

echo "logged in as admin";
}
else
{
	header("location:adminlogin.php");
	echo "you need to log in or register to view this page";
}







?>
<div class="row">


<?php include'admin_header.php' ?>
<head><title> control panel</title></head>



<div class="container">

<div class="col-md-12 controlpanel_main">



<div class="row">

<div class="col-md-2 sidenav">
<?php include'sidenav.php'?>


</div>
<div class="col-md-1">
</div>




<div class="col-md-4 add_product_image">
<p>Use this interface to insert products into the shop table</p>

  <a href="add_product_form.php"> <h2 class="addproduct">Add product</h2> <img width="100" height="100" class="add_product_image" src="images/add_product.png"><h1></h1></a>
 
  
  
 </div>
<div class="col-md-4 remove_product_image">
 <a href="remove_product_form.php"><h2 class="removeproduct">Remove product<h2> <img width="100" height="100" class="remove_product_image" src="images/remove_product"> <h1></h1></a>

</div>
</div>




</div>




</div>







<div class="row">
<div class="col-md-12">



<?php include'footer.php'?>
</div>
</div>
</div>