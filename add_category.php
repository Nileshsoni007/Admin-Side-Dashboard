<html style="background-image:url('nilesh.jpg')">
<head><br><br>

<title>add_category</title>

</head>
<center>
<body style="background-image:url(image.jpg);background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed">
<center><h1> Add Category </center></h1>
<hr size="5px" color="black"> <br>
<form method='post' >
<table border="2px" height="50%" width="35%" align="center"
<!--bordercolor="green"-->
<tr>

<td>
<table height="85%" width="85%" align="center" bgcolor="white" cellspacing="4" cellpadding="5" border="2" bordercolor="red">

<tr>
	<th>Category Name :</th>
	<td>
	<select align='center'  name= "category_name"> 
	
		<option value="rigatoni">Rigatoni</option>
		<option value="dave">Dave</option>
		<option value="pumpernickel">Pumpernickel</option>
		<option value="reeses">Reeses</option>
	</select>
	</td>
</tr>
<tr>

<!--<th> </th>-->
<th colspan="2"><input type="submit" value="ADD" name="s"  size="10pxl "><a href='Dashboard.php' color='red'>Go To Dashboard</a></th>
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
			$name=$_POST["category_name"];
			$q=("insert into add_category(category_name) values('$name')");
			
		   if(mysqli_query($connect,$q))
		   {
				echo "<center><font color='green'>Data Inserted Sucessfully</font></center>";
		   }
		   else
		   {
				echo "<center><font color='red'>Data Not Inserted Sucessfully</font></center>";
		   }		
		}
	}

?>




