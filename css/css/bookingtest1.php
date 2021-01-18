
<html>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>

<!-- html form starts here -->
<form action="bookingscript.php" method="post">
 
<!-- remember to include connection file --> 
<?php include'connection.php'?>
<!-- php embedded in the hmtl -->
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Titillium+Web::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>




















</head>

<body>


<div class="container">
<div class="row">

<div class="col-md-12">

 <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#"> </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="ticketbookinghome.html">Home</a></li>
            <li><a href="bookingtest.php">Ticket booking</a></li><li><a href="page 3.html">Showings'</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="registration_page.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login1.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

</div>


<!-- html form starts here -->

<br></br>

<div class="jumbotron">
</div>
 <br></br>
<!-- remember to include connection file --> 
<?php include'connection.php'?>
<!-- php embedded in the hmtl -->
<?php
$sql = "SELECT Event_title FROM Events";
$result = mysqli_query($con, $sql);

echo "<select name='film'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" .$row['Event_title'] ."'>" .$row['Event_title'] ."</option>";
}
echo "</select>";
?>
<!-- end of php -->



<div class="page-header">
   <h1>Ticket booking page 
      <small>book your tickets here !</small>
   </h1>
</div>
<p></p>






<form action="bookingscript.php" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="bookdate">bookdate</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="bookdate" placeholder="Enter bookdate">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tickets">tickets</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="booktickets" placeholder="enter desired number of tickets">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
    
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<!-- html form ends here -->

<?php include'connection.php'?>
<?php
//set sql query to a variable
$sql = "SELECT Event_title, event_date FROM Events";

//use query function to get data from database and set to variable
$result = mysqli_query($con, $sql);

//if statement - number of rows greater then 0
if (mysqli_num_rows($result) > 0) 
{
    
	// output data of each row using associative array and while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo " <table class='table'><td><b> film title:</b></td> <tr><td> ". $row["Event_title"]. " </td></tr> <td>  <b>event date:</b></td><tr><td> " . $row["event_date"]. "</td></tr></table>";
											}
} else {
    echo "0 results";
}

//mysqli_close($con);
 ?> 




</body>
</html>
