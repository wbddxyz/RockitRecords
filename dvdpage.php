<!--- DVD PAGE-->


<html>
<head>
<title>
DVD page
</title>
<meta name="keywords" content="add to cart, buy, rock, music, rock blues, vinyls, Live , DVDS ">
<meta name="description" content=" Our stock includes dvds from many different sub genres of rock including live dvds of performances ">


</head>

<?php include'header.php' ?>









</head>


<!--navbar end-->





<!--top cds etc-->








<h2> </h2>

<?php include 'connection.php'?>
<div class="row">
<div class="container">


<div style="box-shadow: #ccc 1px 1px 1px;" class="col-md-2 sidenav">
<?php include'sidenav.php'?>
</div>



<div class="col-md-10">
<div class="image">

      <img height="250" width="800" src="images/vinyl2.gif" alt="" />
      
      <h2><span>Music DVDS <br><br> <br/></span></h2>

</div>
</div>







<div class="row">



<div class="col-md-8">

</div>


<div class="container">

<?php

mysql_set_charset( 'utf8', $con );
$sql = "SELECT item_name, item_price, item_id FROM shop WHERE item_type = 'DVD'";
$result= mysqli_query ($con, $sql);

if(mysqli_num_rows($result) > 0)
{
	echo'<div class="container"> 
      
	  <br> <br>
	  
        
	
	<br>
  
   ';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	echo  '<div class="col-md-3 cd-list""><br><br><tr><th></th><th></th></tr><tr><td>'.$row['item_name'].'</td>&nbsp;&nbsp;</strong><td>£'.$row['item_price'].'</strong></td></tr><tr><td>'.$row['details'].'</td>
	
	
	
	
	
	

	
	
	
	
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

</div>

</div>
</div>

<div class="row">

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

<div class="col-md-4">
</div>

</div>






<!--end of top cds etc-->









</div>






<br>
<br>

<div class="row">

<div class="col-md-6">

<!--shop php script -->


	
	

	
	</div>
	
	
	
	<div class="col-md-6">
	
	</div>
	
	
	
	
	
	
	
	
	
	
	</div>
	</div>
	<!-- Carousel -->




</div><!--column close-->



</div><!--container close-->


</div><!--row close-->

<!--slideshow-->







<!--footer-->

<br>
<br>
			

	
			<div class="row">
			<div class="container">
			<?php include'footer.php'?>
			
			
			</div>

			






</div>

<!--footer close-->





</body>




















</html>