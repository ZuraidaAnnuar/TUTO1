
<?php

        require_once("connection.php");
		
		$no=$_GET['GetID'];
		$query="select * from product where no='".$no."'";
		$result=mysqli_query($con,$query);
	   		 
	
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
	<title>Show Product</title>
</head>

<body class="bg-dark">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-body">
					
						<br>

							<form action="index.php?ID=<?php echo $no ?>" method="post">
								<table width="500" border="1">
								<h2 class="bg-success text-white text-center"> Show Product </h2>	
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Price(RM)</th>
									<th>Details</th>
									<th>Publish</th>

								</tr>
				
								<?php
									while($row=mysqli_fetch_array($result)){
								?>
								<tr>
									<td><?php echo $row["no"]; ?></td>
									<td><?php echo $row["name"]; ?></td>
									<td><?php echo $row["price"]; ?></td>
									<td><?php echo $row["details"]; ?></td>
									<td><?php echo $row["publish"]; ?></td>
    
								</tr>
								<?php
								}
								?>

								</table>
								<br>
								<button class="pull-right"><a href="index.php?GetID=">Back</a>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
</body></html>