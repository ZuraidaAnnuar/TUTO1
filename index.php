<?php


if(isset($_POST['search']))
{
	$valueToSearch = $_POST['valueToSearch'];
	$query = "select * from product where name like '%".$valueToSearch."%'";
	$search_result = filterTable($query); 

}
else{
	$query = "select * from product";
	$search_result = filterTable($query);

}

function filterTable($query)
{
	$con = mysqli_connect("localhost","root","","zuraida_tuto1");
	$filter_Result = mysqli_query($con,$query);
	return $filter_Result;
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
	<title>Product</title>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col m-auto">
				<div class="card mt-5">
					<h2 class="bg-success text-white text-center"> Product </h2>
					
					
					<form action="index.php" method="post">
					<input type="submit" class="pull-right" name="search" value="Search">
					<input type="text" class="pull-right" name="valueToSearch" placeholder="Search">
					<br>

					

					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Price(RM)</th>
							<th>Details</th>
							<th>Publish</th>
							<th>Action</th>
							
						</tr>
						
						<?php 
								
								while($row=mysqli_fetch_array($search_result))
								{
									$no=$row['no'];
									$name=$row['name'];
									$price=$row['price'];
									$details=$row['details'];
									$publish=$row['publish'];

										
						?>
						
								<tr>
									<td><?php echo $no ?></td>
									<td><?php echo $name ?></td>
									<td><?php echo $price ?></td>
									<td><?php echo $details ?></td>
									<td><?php echo $publish ?></td>
									
																	
									<td>
									<button><a href="show.php?GetID=<?php echo $no ?>">Show</a>&nbsp;
									<button><a href="edit.php?GetID=<?php echo $no ?>">Edit</a>&nbsp;
									<button><a href="delete.php?Del=<?php echo $no ?>">Delete</a></td>
								</tr>
						<?php
								}
						?>
						
						
					</table>
					<button class="pull-right"><a href="index.php?GetID=">Back</a>
					<button class="pull-right"><a href="create.php?GetID=">Create New Product</a>	
					<br>
					</form>
				</div>
			</div>
		</div>
	
	</div>

</body>
</html>

