<?php 


$sql = "SELECT * FROM shop";

$sql = "SELECT * FROM test_image";

$sql ="SELECT id FROM image_test WHERE id = item_id" ; 

$result = mysqli_query($con, $sql);


$image_id = $result;





?>

<img src="<?php echo'file_display.php?id=$image_id'?>">


<?php echo'.$row['image_id'].'?>