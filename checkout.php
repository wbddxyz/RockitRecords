<?php include 'connection.php'?>
<title> Checkout</title>
<?php include'admin_header.php'?>

<div class="row">

<div class="container">

<div class="col-md-2 sidenav">
<?php include'sidenav.php'?>
</div>

<div class="col-md-10 checkout">

<?php 
session_start();

if(isset($_GET['total'])
&&($_GET['total'] > 0)
&& (!empty($_SESSION['cart'])))
{

//inserts order details in to the orders table.
$query = "INSERT INTO orders (total) VALUES (".$_GET['total'].")";
$result = mysqli_query($con, $query);
$pp_checkout_btn="";

//insert a statement to retrieve the current order number.
$order_id = mysqli_insert_id($con);



//start paypal checkout button




//retrieve item details from shop table 
$query = "SELECT * FROM shop WHERE item_id IN ("; 
foreach ($_SESSION['cart'] as $id => $value)
{
//checkout assesmbly 






$query .= $id . ',';
}
$query = substr($query, 0 , -1) . ') ORDER BY item_id ASC';
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
$query1 = " INSERT INTO order_contents
(order_id, item_id, quantity, price)
VALUES ($order_id, ".$row['item_id'].",".
$_SESSION['cart'][$row['item_id']]['quantity'].",".
$_SESSION['cart'][$row['item_id']]['price'].")";
$result1 = mysqli_query($con, $query1);
}
echo "orders table and order_contents table have been updated<br>";
}
else
{echo '<p class="checkout">there are no items in your cart</p>';}

echo "<p>thanks for your order. Your order number is ".$order_id."</p>";
$_SESSION['cart'] = NULL;


$total =$_GET['total'];
$item_name =$_GET['item_name'];



?>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="colin_andersonx360-facilitator@live.co.uk">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value=" <?php echo $item_name?>">
<input type="hidden" name="amount" value="<?php echo $total;?>"> 
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal � The safer, easier way to pay online.">
</form>
</div>


			<div class="row">

										<?php include'footer.php'?>
</div>






</div>


</div>

