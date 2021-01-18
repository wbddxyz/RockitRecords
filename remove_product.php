
  <?php include'connection.php'?>  
	  
<?php 

$item_name = $_POST['item_name'];



//set variable



$sql="DELETE FROM shop WHERE item_name = $item_name";

$result = mysqli_query($sql, $con);


//if data not inserted into table show error or "1 record added" if successful.
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo ''.$row['item_name'].' has been removed from the products table  click <a href="controlpanel.php"> here </a> to remove more products' ;

?>