
<html>
<head>

<meta name="description" content="Rock out records specialise in selling in rock music in all its forms from indie to classic. Available in a range of formats from CD to vinyl">
<meta name="keywords" content="new releases, browse dvds, rock, new, releases, vinyls, browse, dvds, cds, ">
<meta name="author" content="Colin Anderson">

<title>Rock Out Records Homepage</title>
</head>

<body>



<?php include'header.php'?>               <!-- Header -- >



                                   












<!---------------- MAIN CONTENT starts  -------------------------------------->


<div class="row">
<div class="container block">



<div style="box-shadow: #ccc 1px 1px 1px;" id="morenav" class="col-md-2 sidenav">

<?php include 'sidenav.php'?>









</div>


<?php include'slideshow.php'?>




</div>        <!-------------- end of first row ------------------------->
</div>

<div class="container charts">


<div class="row">


<div class="col-md-4 chart-image">
<img src="images/recordplayer.png" class="img-responsive recordplayer" alt="image of a record player">


</div>
<div style="box-shadow: #ccc 1px 1px 1px; "   class="col-md-4 dvd-chart">

<h3 class="snav"> Top Dvds </h3>
<?php include'dvdchart_new.php'?>





  </div>
  
  










<div style="box-shadow: #ccc 1px 1px 1px;" class="col-md-4 vinyl-chart">



<h3 class="snav">Top Vinyls</h3>

<?php include'chart.php'?>




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


<!-- album images -->
<div class="container albums">


<br><br>

<div class="row">
<div class="col-md-3">
<a href="shop_updated1.php">
<h3>Bob Dylan</h3>
<img class="img-thumbnail" width="200px" height="200" alt="bob dylan album artwork" src="<?php echo'file_display.php?id=3'?>">
</a>
</div>


<div class="col-md-3"> <a href="cdpage.php">
<h3>Johnny Cash</h3>
<img class="img-thumbnail" width="200px" height="200" alt="johnny cash album artwork" src="images/album artwork/johnnycash.jpg"></a>
</div>


<div class="col-md-3">
<a href="dvdpage.php">
<h3>White stripes</h3>
<img class="img-thumbnail" width="200px" height="200" src="images/album artwork/whitestripes.jpg" alt="white stripes album artwork">

</a>


</div>

<div class="col-md-3">
<a href="shop_updated1.php"><h3>Rolling Stones</h3>
<img class="img-thumbnail" width="200px" height="200" alt="rolling stones album artwork" src="<?php echo'file_display.php?id=6'?>"></a>
</div>

</div>



</div>



</div>



<!-- album images end -->

<!--offers close--> 





<!--footer-->

<br>
<br>
<br>
<br>


			<div class="row">
			<div class="container">

		<?php include'footer.php'?>
</div>
</div>






</div>

<!--footer close-->



</div>

</body>




















</html>