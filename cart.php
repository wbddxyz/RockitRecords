

<?php include'connection.php'?>

<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
foreach($_POST['qty'] as $item_id => $item_qty)
{
#checking values are integers
$id = (int)$item_id;
$qty = (int)$item_qty;
$pp_checkout_btn="";

#change quantity or delete if zero 
if ($qty == 0)
{unset($_SESSION['cart'][$id]);}
elseif ($qty > 0)
{$_SESSION['cart'][$id]['quantity'] = $qty;



}
}
}
$total = 0;
if(!empty($_SESSION['cart']))
{
$query = "SELECT * FROM shop WHERE item_id IN ("; foreach($_SESSION['cart'] as $id => $value)
{$query .= $id.',';}
$query = substr($query, 0, -1).') ORDER BY item_id ASC';
$result = mysqli_query($con, $query);
}
else{echo "0";}
#form starts here
echo '<form action="cart.php" method="POST"> <table>
<tr> <th  colspan="5">Items in your cart</th></tr><tr>';

while($row = mysqli_fetch_assoc($result))
{
	#calculations 
	$subtotal = $_SESSION['cart'][$row['item_id']]['quantity']
	* $_SESSION['cart'][$row[item_id]]['price'];
	$total += $subtotal;
	
	echo"<tr><td>{$row['item_name']}</td>
	<td><input type=\"text\" size=\"3\" name=\"qty[{$row['item_id']}]\"></td>
	<td>@ {$row['item_price']} = </td>
	<td>".number_format($subtotal, 2)."</td></tr>";
}
echo '<tr><td>
Total = '.number_format($total, 2).'</td></tr>
</table>
	';
	
	mysqli_close($con);
	echo '<p><a href="shop_updated1.php">Shop</a> | <a href="checkout.php?total='.$total.'">Checkout</a></p>';
	
	
	?>

	
	



