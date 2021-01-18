<!-- add product --> 


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

<?php include'admin_header.php' ?>



<div class="container">

<title> control panel</title>



<div class="row">    
<div class="container">
<div style="box-shadow: #ccc 1px 1px 1px;" class="col-md-2 sidenav">


<?php include'sidenav.php'?>

</div>

<div class="col-md-8">
<br>
<br>
<br>
<div class="container">
<br>
<br>
<br>

<div class="row">
<div class="col-md-4">
</div>





<div class="col-md-4 controlpanel">
<p class="add_product_form">Use this interface to insert products into the shop table or <a class="add_product_form" href="controlpanel"><b>Return to the admin control panel</b></a></p>
<div class="container">
  <h2 class="add_product_form">Add product</h2>
  <br>
  <br>
  <br>
  <form action="add_product.php" method="POST" role="form">
<div class="row"> 

<br>

<div class="col-xs-4">  
   <div class="form-group sm">
      <label class="add_product_form" for="item_name">Item name</label>
      <input class="add_product_form_input" name="item_name" type="text" class="form-control" id="item_name" placeholder="Enter item name">
   </div>
	</div>
	</div><!--end of form row 1 -->
   <div class="col-xs-4">  <div class="form-group">
      <label class="add_product_form" for="item_price">Item price</label>
	 
	 
      <input class="add_product_form_input" name="item_price" type="text" class="form-control" id="item_price" placeholder="Enter the price of the item ">
	  
	  
	  <div class="col-xs-4">
<label class="add_product_form" for="item_type"> choose the item type in regards to format</label>
<select name="item_type">
<option>DVD</option>
<option>vinyl</option>
<option>CD</option>
</select>
</div>
</div><!-- end of row 3 -->
	  <button type="submit" class="btn btn-default">Submit</button>
    </div>
	
	</div><!--end of row 2 -->
	
	
	
	
	
  </form>
</div>



</div>



</div>

</div>
</div>


</div>

<div class="col-md-2">
</div>

<div class="row">
<div class="col-md-12">

</div>



</div>



</div>







<?php include'footer.php'?>
</div>