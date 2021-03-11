<?php

        require_once("connection.php");
		
		$no=$_GET['GetID'];
		$query="select * from product where no='".$no."'";
		$result=mysqli_query($con,$query);
		
		while($row=mysqli_fetch_assoc($result))
		{
			$no=$row['no'];
			$name=$row['name'];
			$price=$row['price'];
			$details=$row['details'];
			$publish=$row['publish'];
		}
	   		 
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" a href="CSS/bootstrap.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<title>Edit Product</title>
</head>
<body class="bg-dark">

	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-body">
					
						<form action="update.php" method="post">
						
						<h2 class="bg-success text-white text-center"> Edit Product </h2>	
							<input type="text" class="form-control mb-2" placeholder="Enter No" name="no" value="<?php echo $no ?>">
							<input type="text" class="form-control mb-2" placeholder="Enter Name" name="name" value="<?php echo $name ?>">
							<input type="text" class="form-control mb-2" placeholder="Enter Price" name="price" value="<?php echo $price ?>">
							<input type="text" class="form-control mb-2" placeholder="Enter Details" name="details" value="<?php echo $details ?>">
							Publish:
							<input type="radio" name="publish" value="yes">Yes
							<input type="radio" name="publish" value="no">No
							<br><br>
							<button class="pull-right"><a href="index.php?GetID=">Back</a>
							<button class="pull-right" name="update">Update</button>
							
							
						</form>
						
					</div>
				</div>
			</div>
		</div>
	
	</div>
	
</body>
</html>

