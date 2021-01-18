<?php include'header.php'?>
<?php include 'connection.php'?>



<div class="row">
<div class="container">

<div style="box-shadow: #ccc 1px 1px 1px;" class="col-md-2 sidenav">
<?php include'sidenav.php'?>
</div>


<div class="col-md-10 sidenav">
<?php
session_start();




//if a value has been passed, assign the passed value to a variable called $id.
if (isset($_GET['id']))$id = $_GET['id'];



//select all items in the shop with the item ID that matches the ID posted 
$query = "SELECT * FROM shop WHERE item_id = $id";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
$row = mysqli_fetch_array($result, MYSQLI_ASSOC );

# Check if cart already contains one of the same product
if( isset($_SESSION['cart'][$id] )) 
{
# Add one more of this product.
$_SESSION['cart'][$id]['quantity']++;
echo'<p>Another '.$row["item_name"].' has been added to your cart</p>';
}
else
{
#or add one this product to the cart.
# add the quantity and price to a session array 
$_SESSION['cart'][$id]= array ('quantity' => 1, 'price' => $row['item_price'] ) ;
echo '<p>A '.$row["item_name"].' has been added to your cart</p>' ;
}
}
echo'<p><a href="cart.php">View cart</a></p><p>or </p><a href="shop_updated1.php">return to shop</a>';
?>
</div>
</div>
</div>