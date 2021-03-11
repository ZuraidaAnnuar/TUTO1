<?php
	
	require_once("connection.php");
	
	if(isset($_GET['Del']))
	{
		$no=$_GET['Del'];
		$query="delete from product where no='".$no."'";
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

?>

