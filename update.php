<?php
	
	require_once("connection.php");
	
	if(isset($_POST['update']))
	{
		$no=$_POST['no'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$details=$_POST['details'];
		$publish=$_POST['publish'];
		
		
		$query="update product set no='".$no."', name='".$name."', price='".$price."', details='".$details."', publish='".$publish."' where no='".$no."'";
		$result=mysqli_query($con,$query);
		
		if($result)
		{
			header("location:index.php");
		}
		else
		{
			echo 'Please Check Your Query';
		}
	}
	else
	{
		header("location:index.php");
	}
	
	

?>