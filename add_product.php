


<?php session_start();?>

<?php





if(isset($_SESSION['admin'])){

echo "";
}
else
{
	header("location:adminlogin.php");
	echo "you need to log in or register to view this page";
}







?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>








  <?php include'connection.php'?>  
	  
<?php 

$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$item_id = $_POST['item_id'];
$item_type = $_POST['item_type'];


//set variable
$sql="INSERT INTO shop (item_name, item_price, item_id, item_type)
VALUES ('$item_name', '$item_price', '$item_id', '$item_type')";

//if data not inserted into table show error or "1 record added" if successful.
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo ''.$row['item_name'].' has been added to the products table  click <a href="controlpanel.php"> here </a> to add more products' ;

?>




</body>
</html>