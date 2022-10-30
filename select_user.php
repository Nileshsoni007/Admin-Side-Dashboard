<?php

	$connect=mysqli_connect("localhost","root","","admin");
	if(mysqli_connect_errno())
	{
		echo "cannot connect database".mysqli_connect_errno();
	}
	
	
		$cd = $_GET['cid'];
		$se = mysqli_query($connect, "select * from add_category where category_id='$cd'");
		while ($row = mysqli_fetch_assoc($se)){
?>


<html>
<head><br>

<title>select category</title>
<!--<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  rel="stylesheet"> -->
</head>
<center>

<body>
<form method='post' >
<table border="2px" height="60%" width="40%" align="center">
<!--bordercolor="green"-->
<tr>

<td>
<table height="90%" width="95%" align="center" bgcolor="white" cellspacing="4" cellpadding="5" border="2" bordercolor="red">
<tr>
<th colspan="4" align="center" >
<font size="5" color="purple">Update Category</font>
</th>
</tr>
<tr>
	<th> category_id :</th>
	<th><input type="text" name="category_id" value="<?php echo $row['category_id'] ?>"></th>
</tr>
<tr>
	<th>Category Name :</th>
	<td>
	<select align='center'  name= "category_name" value="<?php echo $row['category_name'] ?>"> 
	
		<option value="Shoes">Shoes</option>
		<option value="Laptop">Laptop</option>
		<option value="Mouse">Pumpernickel</option>
		<option value="reeses">Reeses</option>
	</select>
	</td>
</tr>
<tr>

<!--<th> </th>-->
<th colspan="2"><input type="submit" value="Update" name="s"  size="10pxl "><a href='update_category.php'>View</a></th>

</tr>
</table>
</tr>
</td>
</table>

</center>
</form>
<center>

</body>
</center>
</html>
<?php
}
	if(isset($_POST['s']))
		{
			$cid=$_POST["category_id"];
			$cn=$_POST["category_name"];
			
			
			$q="update add_category set category_name='$cn' where category_id='$cid'";
			
			if(mysqli_query($connect,$q))
		    {
				echo "<center><font color='green'>Data Updated Sucessfully</font></center>";
				
		    }
		    else
		    {
				echo "<center><font color='red'>Data Not Updated Sucessfully</font></center>";
		    }		
		}
?>
