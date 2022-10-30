<?php

	$connect=mysqli_connect("localhost","root","","admin");
	if(mysqli_connect_errno())
	{
		echo "cannot connect database".mysqli_connect_errno();
	}
	
	
		$pd = $_GET['pid'];
		$se = mysqli_query($connect, "select * from add_product where P_id='$pd'");
		while ($row = mysqli_fetch_assoc($se)){
?>


<html style="background-image:url('nilesh.jpg')">
<head><br>

<title>UPDATE  PRODUCT</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  rel="stylesheet">
</head>
<center>
<body style="background-image:url(image.jpg);background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed">
<form method='post' >
<table border="2px" height="50%" width="40%" align="center">
<!--bordercolor="green"--> 
<tr>

<td>
<table height="97%" width="98%" align="center" bgcolor="white" cellspacing="4" cellpadding="5" border="2" bordercolor="red">
<tr>
<th colspan="2" align="center" >
<font size="5" color="purple"><b>UPDATE  PRODUCT</b></font>
</th>
</tr>
<tr>
	<th> Product id :</th>
	<th><input type="text" name="P_id" value="<?php echo $row['P_id'] ?>"></th>
</tr>
<tr>
	<th>Enter New Product Name :</th>
	<th><input type="text" name="P_name" value="<?php echo $row['P_name'] ?>"></th>
</tr>
<tr>

<th>Enter New Price :</th>
<th><input type="text" name="P_price" value="<?php echo $row['P_price'] ?>"></th>

</tr>
<tr>

<th>Enter New descreption:</th>
<th><input type="text" name="P_description" value="<?php echo $row['P_description'] ?>"></th>

</tr>
<tr>

<th>Enter New  Product Category:</th>
<th><input type="text" name="P_category" value="<?php echo $row['P_category'] ?>"></th>

</tr>
<tr>

<th>Enter New Product Image :</th>
<th><input type="file" name="P_image" value="<?php echo $row['P_image'] ?>"></th>

</tr>
<tr>

<th>Enter new Product company :</th>
<th><input type="text" name="P_company" value="<?php echo $row['P_company'] ?>"></th>

</tr>

<tr>

<!--<th> </th>-->
<th colspan="2"><input type="submit" value="Update" name="u"  size="10pxl "></th>

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
	if(isset($_POST['u']))
		{
			$pid=$_POST["P_id"];
			$name=$_POST["P_name"];
			$price=$_POST["P_price"];
			$desc=$_POST["P_description"];
			$category=$_POST["P_category"];
			$img=$_POST["P_image"];
			$compny=$_POST["P_company"];
			
			$q="update add_product set 	P_name='$name',P_price='$price',P_description='$desc',P_category='$category',P_image='$img',P_company='$compny' where P_id='$pd'";
			
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
