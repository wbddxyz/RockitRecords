<?php include 'connection.php'?>
<?php

$res=mysql_query("select * from shop");


	echo "<table>";
	while ($row=mysql_fetch_array($res))
	{
	echo"<tr>";
	echo"<td>";?><img src="<?php echo $row["images1"];?>" height="100" width="100"> <?php echo "<td>";
	echo"<td>";echo $row["name"];echo"</td>";
	
	echo"</tr>";
	
	}
	echo"</table>";
	
	?>