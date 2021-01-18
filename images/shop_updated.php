<html>

<?php include'header.php' ?>









</head>


<!--navbar end-->





<!--top cds etc-->








<h2> </h2>

<?php include 'connection.php'?>
<div class="row">


<div class="col-md-2">
<?php include'sidenav.php'?>
</div>
<div class="col-md-10">
<img src="images/vinyl2.gif">
</div>

<div class="row">
<?php

mysql_set_charset( 'utf8', $con );
$sql = "SELECT item_name, item_price, item_id FROM shop";
$result= mysqli_query ($con, $sql);

if(mysqli_num_rows($result) > 0)
{
	echo'<div class="container"> 
      
        Product  &nbsp;&nbsp;Price
	
	<br>
  
   ';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	echo  '<div class="col-md-2"><br><br><ol><li>'.$row['item_name'].'</strong>£'.$row['item_price'].'</strong></li></ol>
	
	
	
	
	<br><br>

	
	
	
	
	<a href="added.php?id=' . $row['item_id'].'"><button class=" btn btn-default">add to cart</a></button></br></div>
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

</div>


<div class="col-md-4">
<h2>  </h2>





</div>




<div class="col-md-4">
<h2></h2>


<ul>

<li>

</li>


<li>


</li>





</ul>

</div>






<!--end of top cds etc-->









</div>






<br>
<br>

<div class="row">

<div class="col-md-6">

<!--shop php script -->


	
	

	
	</div>
	</div>
	</div>
	<!-- Carousel -->




</div><!--column close-->






</div><!--row close-->

<!--slideshow-->







<!--footer-->

<br>
<br>
			<div class="row">

										<div style="border: 1px solid #E4E4E4;" class="col-md-10 col-md-offset-1">

footer info
</div>






</div>

<!--footer close-->





</body>




















</html>