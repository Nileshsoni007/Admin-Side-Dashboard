<html style="background-image:url('nilesh.jpg')">
<head><br><br>

<title>Login Form</title>

</head>
<center>
<body style="background-image:url(image.jpg);background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed">
<center> <h1> Add Product </h1></center>
<hr size="5px" color="black"> <br>
<form method='post' enctype="multipart/form-data">
<table border="2px" height="60%" width="50%" align="center" > 
<!--bordercolor="green"-->
<tr>

<td>
<table height="90%" width="98%" align="center" bgcolor="white" cellspacing="4" cellpadding="5" border="2" bordercolor="red" background="nilesh.jpg">

<tr>

<th>Product Name :</th>
<th><input type="text" name="P_name"></th>

</tr>
<tr>

<th>Product Price :</th>
<th><input type="text" name="P_price"></th>

</tr>
<tr>

<th>Product descreption:</th>
<th><input type="text" name="P_description"></th>

</tr>
<tr>

<th>Product Category:</th>
<th><input type="text" name="P_category"></th>

</tr>
<tr>

<th>Product Image :</th>
<th>
	<input type="file" name="P_image"></th>
</th>

</tr>
<tr>

<th>Product company :</th>
<th><input type="text" name="P_company"></th>

</tr>

<tr>

<!--<th> </th>-->
<th  colspan="2"><input type="submit" value="submit" name="s"  size="10pxl ">
<a href='Dashboard.php'>Previous</a></th>


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
	$connect=mysqli_connect("localhost","root","","admin");
	if(mysqli_connect_errno())
	{
		echo "cannot connect database".mysqli_connect_errno();
	}
	else
	{
		if(isset($_POST['s']))
		{
			$name=$_POST["P_name"];
			$price=$_POST["P_price"];
			$desc=$_POST["P_description"];
			$category=$_POST["P_category"];
			$image=$_FILES["P_image"]["name"];
			$img=$_FILES["P_image"]["tmp_name"];
			$compny=$_POST["P_company"];
			move_uploaded_file($img,'move/'.$image);
			
			
			$q=("insert into add_product(P_name,P_price,P_description,P_category,P_image,P_company) 
			values('$name',$price,'$desc','$category','$image','$compny')");
			
			if(mysqli_query($connect,$q))
		    {
				echo "<center><font color='green'size='5px'><b><u>Data Inserted Sucessfully</u></b></font></center>";
		    }
		    else
		    {
				echo "<center><font color='red'>Data Not Inserted Sucessfully</font></center>";
		    }		
		}
	}
?>