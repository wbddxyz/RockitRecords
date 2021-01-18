<?php include'connection.php'?>

<?php
//set sql query to a variable
$sql = "SELECT item_id, item_name FROM shop WHERE item_type = 'vinyl'";

//use query function to get data from database and set to variable
$result = mysqli_query($con, $sql);

//if statement - number of rows greater then 0
if (mysqli_num_rows($result) > 0) 
{
    
	// output data of each row using associative array and while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> <div class='list-group'><ol type='1'><li class='list-group-item'><a href='shop_updated1.php'> <strong>". $row["item_id"]. " </strong></a></li> <li class='list-group-item'> <a href='shop_updated1.php'> <strong>" . $row["item_name"]. "</strong></a></li> </ol></div>";
											}
} else {
    echo "0 results";
}

 

//mysqli_close($con);
 ?> 
