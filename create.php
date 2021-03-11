
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
	<title>Product Form</title>
</head>
<body class="bg-dark">

	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto">
				<div class="card mt-5">
					<div class="card-title">
						
					</div>
					<div class="card-body">
					
						<form action="insert.php" method="post">
						
						<h3 class="bg-success text-white text-center"> Add New Product </h3>	
							<input type="text" class="form-control mb-2" placeholder="Enter No" name="no">
							<input type="text" class="form-control mb-2" placeholder="Enter Name" name="name">
							<input type="text" class="form-control mb-2" placeholder="Enter Price" name="price">
							<input type="text" class="form-control mb-2" placeholder="Enter Details" name="details">
							Publish:
							<input type="radio" name="publish" value="yes">Yes
							<input type="radio" name="publish" value="no">No
							<br><br>
							<button class="pull-right"> <a href="index.php?GetID=">Back </a>
							<button class="pull-right" name="submit">Submit</button>
							
						
						</form>
						
					</div>
				</div>
			</div>
		</div>
	
	</div>
	

</body>
</html>