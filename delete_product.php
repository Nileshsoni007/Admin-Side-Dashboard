 <!DOCTYPE html>
 <html lang="en" style="background-image:url('nilesh.jpg')">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  rel="stylesheet">
	<title> Select </title>
	
 </head>
 <body>
 <form method="post">
 
 </form>
 </body>
  
<center><h1> Delete Product</h1> </center>
<hr size="5px" color="black"> <br>
 </html>
<?php
echo " <body>";
	
			$connect=mysqli_connect("localhost","root","","admin");
			if(mysqli_connect_errno())
			{
				echo "Cannot connect  Database".mysqli_connect_error();
			} 
			else
			{
				if(isset($_REQUEST['pid']))
				{
					$del = $_REQUEST['pid'];
					$delete="delete from add_product where P_id='$del'";
					mysqli_query($connect,$delete);
				}
				
				$q ="select * from add_product";
				$result=mysqli_query($connect,$q);	
				//echo "<br><br><br><br><br><br><br>";
				echo "<table align='center'  border='3' width='40%' height='50%' cellpadding='15' cellspacing='7' class='table'>
				
					<tr>
							<th>P_id</th>
							<th>P_name</th>
							<th>P_price</th>
							<th>P_description</th>
							<th>P_category</th>
							<th>P_image</th>
							<th>P_company</th>
							<th>Delete</th>
							<th>Update</th>	
					</tr>";
					//$number=1;
					//<td align='center'>".$number."</td>-->
				while($row=mysqli_fetch_object($result))
				{	
					echo "
					<tr>
							<td align='center'>".$row->P_id."</td>
							
							<td align='center'>".$row->P_name."</td>
							<td align='center'>".$row->P_price."</td>
							<td align='center'>".$row->P_description."</td>
							<td align='center'>".$row->P_category."</td>
							<td align='center'>".$row->P_image."</td>
							<td align='center'>".$row->P_company."</td>
							<td align='center'><a href='delete_product.php?pid=$row->P_id'>Delete</a></td>
							<td align='center'><a href='select_product.php?pid=$row->P_id'>Update</a></td>
					</tr>";
					//$number++;
				}	
				
				echo "
				
				<tr >
							<td align='center' colspan='9'><a href='Dashboard.php'  class='a1'>Go To Dashboard</a></td>
				</tr>
					</table >";
					
			}
			echo " </body>";
?>
