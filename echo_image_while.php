<?php include'header.php'?> 


<div class="row">
<?php 

$sql ="SELECT image from image_test WHERE id = mysqli_num_rows";

//use query function to get data from database and set to variable
$result = mysqli_query($con, $sql);

//if statement - number of rows greater then 0
if (mysqli_num_rows($result) > 0) 
{
    
	// output data of each row using associative array and while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> <table class='table'> <tr><td> <img src='file_display.php?id=1'<b>". $row["id"]. " </b></a></td></tr> <tr><td><a href='dvdpage.php'>  <b>" . $row["item_name"]. "</b></a></td></tr></table>";
											}
} else {
    echo "0 results";
}


?>