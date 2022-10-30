 <!DOCTYPE html>
 <html lang="en" style="background-image:url('nilesh.jpg')">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  rel="stylesheet">
	<title> Select </title>
 </head>
  
<center><h1> Update product</h1> </center>
<hr size="5px" color="black"> <br>
 </html>
<?php
			$connect=mysqli_connect("localhost","root","","admin");
			if(mysqli_connect_errno())
			{
				echo "Cannot connect  Database".mysqli_connect_error();
			} 
			else
			{
				if(isset($_REQUEST['cid']))
				{
					$del = $_REQUEST['cid'];
					$delete="delete from add_category where category_id='$del'";
					mysqli_query($connect,$delete);
				}
				
				$q ="select * from add_category";
				$result=mysqli_query($connect,$q);	
				//echo "<br><br><br><br><br><br><br>";
				echo "<table align='center'  border='3' width='40%' height='50%' cellpadding='15' cellspacing='7' class='table'>
				
					<tr>
							<th>category_id</th>
							<th>category_name</th>	
							<th>Update</th>		
					</tr>";
				while($row=mysqli_fetch_object($result))
				{	
					echo "
					<tr>
							<td align='center'>".$row->category_id."</td>
							<td align='center'>".$row->category_name."</td>
						
							<td align='center'><a href='select_category.php?cid=$row->category_id'>Update</a></td>
					</tr>
					";
				}	
				echo "
				
					<tr>
							<td align='center' colspan='3'><a href='Dashboard.php'  class='a1'>Go To Dashboard</a></td>
					</tr>
					</table >";
			}
?>
