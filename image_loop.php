<?php include'connection.php'?>

<?php $query = mysql_query("select * from `blob`"); // SELECT IMAGES FROM DATABASE


$images = array();
while ($row = mysql_fetch_assoc($query)) {      //stores the images as an array
  $images[] = $row['image'];
}                 



foreach ($images as $image) {
  echo '<img src="data:image/jpeg;base64,'. base64_encode($image) .'" />';
}

?>