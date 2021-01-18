<?php include'connection.php'?>

<?php
//set sql query to a variable
$sql = "SELECT item_name FROM DVD";
$sql ="SELECT image from image_test WHERE name = item_name";

//use query function to get data from database and set to variable
$result = mysqli_query($con, $sql);

//if statement - number of rows greater then 0
if (mysqli_num_rows($result) > 0) 
{
    
	// output data of each row using associative array and while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> <table class='table'> <tr><td><a href='/products/".$row['item_name']".php'> <b>". $row["id"]. " </b></a></td></tr> <tr><td><a href='dvdpage.php'>  <b>" . $row["item_name"]. "</b></a></td></tr></table>";
											}
} else {
    echo "0 results";
}

//mysqli_close($con);
 ?> 
