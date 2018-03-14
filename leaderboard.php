<?php 
include 'includes/db_connect.php';
 ?>
<!DOCTYPE html>
<meta http-equiv="Refresh" content="#">
<html>
<head>
	<title>Leaderboard</title>
        
</head>
<body>
        <?php 
                include("header.php")
         ?>
<?php  
				
			$sql = 'SELECT `Teamname`,`levels`,`date` FROM `members` ORDER BY `levels` DESC, `date` ASC';
			mysqli_select_db($mysqli,'secure_login');
			$retval = mysqli_query($mysqli,$sql);



			if(! $retval)
			{
				die('Could not get data :'.mysqli_error());
			}

                ?>
                <div style="padding-top: 5%;">
                <table class=" table " border="1" style="width: 50%;" align="center">
                       
                        <tr >
                                <td class="table-dark">
                                        Rank
                                </td>
                                <td class="table-dark">
                                        Teamname
                                </td>
                                <td class="table-dark">
                                        Level
                                </td>
                                <td class="table-dark">
                                        Timestamp
                                </td>
                        </tr>
                <?php $i=1;
                while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
                {
                	?>
                	<tr>
                                <td>
                                        <?php echo $i; ?>
                                </td>
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

                	<?php $i++;} ?>
                </table>
                </div>
</body>
</html>