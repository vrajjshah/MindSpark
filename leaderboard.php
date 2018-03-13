<?php 
include 'includes/db_connect.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Leaderboard</title>
</head>
<body>
<?php  
				
			$sql = 'SELECT `Teamname`,`levels`,`date` FROM `members` ORDER BY `levels` DESC, `date` DESC';
			mysqli_select_db($mysqli,'secure_login');
			$retval = mysqli_query($mysqli,$sql);



			if(! $retval)
			{
				die('Could not get data :'.mysqli_error());
			}

                ?>
                <table border="1">
                <?php while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
                {
                	?>
                	<tr>
                		<td>
                			<?php echo "" .$row["Teamname"]; ?>
                		</td>
                		<td>
                			<?php echo "" .$row["levels"]; ?>
                		</td>
                		<td>
                			<?php echo "" .$row["date"]; ?>
                		</td>
                		
                		
                	</tr>
                	<?php } ?>
                </table>
</body>
</html>