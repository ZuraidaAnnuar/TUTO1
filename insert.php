<?php

	require_once("connection.php");

	if(isset($_POST['submit']))
	{
		if(empty($_POST['no']) || empty($_POST['name']) || empty($_POST['price']) || empty($_POST['details']) || empty($_POST['publish']))
		{
			echo 'Please Fill in the Blanks';
		}
		else
		{
			$no=$_POST['no'];
			$name=$_POST['name'];
			$price=$_POST['price'];
			$details=$_POST['details'];
			$publish=$_POST['publish'];
			
			$query = "insert into product (no,name,price,details,publish) values('$no','$name','$price','$details','$publish')";
			$result = mysqli_query($con,$query);
			
			if($result)
			{
				header("location:index.php");
			}
			else
			{
				echo 'Please Check Your Query';
			}
		}
	}
	else
	{
		header("location:index.php");
	}
	
?>