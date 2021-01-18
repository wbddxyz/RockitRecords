

<?php include'connection.php'; 'header.php' 












?>

<form id="paypal_form" class="paypal" action="payments.php" method="post">

    <input name="cmd" type="hidden" value="_xclick" />

    <input name="no_note" type="hidden" value="1" />

    <input name="lc" type="hidden" value="UK" />

    <input name="currency_code" type="hidden" value="GBP" />

    <input name="bn" type="hidden" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

    <input name="first_name" type="hidden" value="Customer's First Name" />

    <input name="last_name" type="hidden" value="Customer's Last Name" />

    <input name="payer_email" type="hidden" value="customer@example.com" />

    <input name="item_number" type="hidden" value="123456" />

    <input type="submit" value="Submit Payment" />
	


</form>
