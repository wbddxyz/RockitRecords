<?php include'connection.php'?>


<?php 






mysql_set_charset( 'utf8', $con );
$sql = "SELECT item_name, item_price, item_id FROM shop WHERE item_type = 'CD'";
$result= mysqli_query ($con, $sql);


if(mysqli_num_rows($result) > 0)

{
	echo'<div class="container c10"> 
      
	  <br> <br>
	  
        
	
	<br>
  
   ';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	echo  '<div class="col-md-3 cd-list""><br><br><tr><th>  <img width="200" height="200" src= "file_display.php?id='.$row['item_id'].'">

'; 	?>