

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
 	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="col-lg-12">

		<h1 class="text-center">Display Table Data </h1>

		<table class="table table-hover table-bordered table-striped">
			<tr>
				<th>ID</th>
				<th>Name </th>
				<th>Category</th>
				<th>Size</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Images</th>
				<th>Delete</th>
				<th>Update</th>

			</tr>

			<?php
		include 'conn.php';	

		// $name =$_POST['name'];
		// $category = $_POST['category'];
		// $size = $_POST ['size'];
		// $quantity = $_POST['quantity'];
		// $price = $_POST['price'];
		// $image = $_POST['image']; //[name], [size] etc are the value of real name in input type 

		$q = "SELECT *FROM tbl_crud";

		$query = mysqli_query($con, $q);

		while ($res= mysqli_fetch_array($query)) {
			# code...
		
	

?>

			<tr>
				<td><?php echo $res['id'] ?></td>
				<td><?php echo $res['name'] ?> </td>
				<td><?php echo $res['category'] ?></td>
				<td><?php echo $res['size'] ?></td>
				<td><?php echo $res['quantity'] ?></td>
				<td><?php echo $res['price'] ?></td>
				<td><?php echo $res['image'] ?></td>
				<td> <button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
				<td> <button class="btn btn-primary"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
			</tr>

			<?php
		}
			?>
		</table>
	</div>	
	</div>

</body>
</html>