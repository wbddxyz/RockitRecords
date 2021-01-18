<html>
<head>
</head>

<body>
<?php include'connection.php'?>



<?php include'header.php'?>               <!-- Header -- >



                                   












<!---------------- MAIN CONTENT starts  -------------------------------------->


<div class="row">
<div class="container">



<div style="box-shadow: #ccc 1px 1px 1px;" id="morenav" class="col-md-2">

<?php include 'sidenav.php'?>



</div>

<div class="col-md-10">
<?php

mysql_set_charset( 'utf8', $con );
$sql = "SELECT item_name, item_price, item_id FROM shop WHERE item_type = 'vinyl'";
$result= mysqli_query ($con, $sql);

if(mysqli_num_rows($result) > 0)
{
	echo'<div class="container"> 
      
	  <br> <br>
	  
        
	
	<br>
  
   ';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	echo  '<table class="table table-nonfluid""><br><br><tr><th>product</th><th>price</th></tr><tr><td>'.$row['item_name'].'</td>&nbsp;&nbsp;</strong><td>£'.$row['item_price'].'</strong></td></tr><tr><td>'.$row['details'].'</td>
	
	
	
	
	
	

	
	
	
	
	<tr><td><a href="added.php?id=' . $row['item_id'].'"><button class=" btn btn-default">add to cart</a></button><td></tr></div>
	';
	}
	echo'</div></div>';
	mysqli_close($con);
	}
	else
	{
	echo '<p>There are no goods for sale.</p>';
	}
	?>

</div>




</div>        <!-------------- end of first row ------------------------->



<div class="row">


<div class="col-md-2">
</div>


<br>
<br>
<div style="box-shadow: #ccc 1px 1px 1px; "   class="col-md-4">







  </div>
  
  










<div style="box-shadow: #ccc 1px 1px 1px;" class="col-md-4">








</div>


</div>

								
								
								</div>

<!--end of top cds etc-->









</div>



<br>
<br>
<br>


                                                            <!-- column seperation row -->
<div  class="row">
<div class="col-md-4">

</div>


                                                          <!----------seperator end------------->






																
																
																
																
													



																</div>






</div><!-- slideshow row close-->

<!--slideshow end-->


<!--offers----------> 


<br>

<br>
<br>


<div class="row">


<br><br>
<div class="col-md-3">

</div>


<div class="col-md-3">

</div>


<div class="col-md-3">

</div>




<div class="col-md-3">

</div>

<!--offers close--> 





<!--footer-->

<br>
<br>
<br>
<br>


			<div class="row">

										<div style="border: 1px solid #E4E4E4;" class="col-md-10 col-md-offset-1">
										

										<ul><li><a href="#"> </a></li> <li><a href="adminlogin.php">Admin </a> </li> <li><a href="#"> </a> </li> </ul>
</div>






</div>

<!--footer close-->



</div>

</body>




















</html>