<?php
	$connect=mysqli_connect("localhost","root","","admin");
	if(isset($_POST['s1']))
		{
			$username=$_POST['user_name'];
			$password=$_POST['password'];
			$q ="SELECT * FROM `login` WHERE `user_name`='$username' && `password`='$password'";
			if($row=mysqli_query($connect,$q))
			{	
				if(mysqli_num_rows($row)>0)
				{
					header("location:Dashboard.php");
				}
			}
			else
			{
				echo "Wrong Password and User Name ";
			}
		}

?>
<form method="post">

	<input id="user" type="text" class="input" name="user_name">
	<input id="pass" type="password" class="input" data-type="password" name="password">
	<input type="submit" class="button" value="Login" name="s1">
</form>

