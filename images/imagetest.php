<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include'new_connection.php'?>
<?php header('Content-type: images/JPG');
$sql = "SELECT image FROM products";
while($row = mysql_fetch_array($query)){
echo $row['image'];
}
?>
</body>
</html>