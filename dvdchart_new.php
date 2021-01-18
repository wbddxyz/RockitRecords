<?php include'connection.php'?>

<?php
//set sql query to a variable
$sql = "SELECT  id, item_name FROM DVD";

//use query function to get data from database and set to variable
$result = mysqli_query($con, $sql);

//if statement - number of rows greater then 0
if (mysqli_num_rows($result) > 0) 
{
    
	// output data of each row using associative array and while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> <div class='list-group'><ol type='1'><li class='list-group-item'><a href='dvdpage.php'> <b>". $row["id"]. " </b></a></li> <li class='list-group-item'> <a href='dvdpage.php'> <b>" . $row["item_name"]. "</b></a></li> </ol></div>";
											}
} else {
    echo "0 results";
}

//mysqli_close($con);
 ?> 
