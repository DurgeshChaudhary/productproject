<?php
	include 'conn.php';
	if (isset($_POST['submit'])) {
		$id = $_GET['id'];
		$name =$_POST['name'];
		$category = $_POST['category'];
		$size = $_POST ['size'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$image = $_POST['image']; //[name], [size] etc are the value of real name in input type 

		$q = "update tbl_curd set id = $id, name = '$name', category = '$category', size = '$size', quantity = '$quantity', price = '$price', image = '$image' where id = $id";

		$query = mysqli_query($con, $q);

		header('location:display.php');
	}
	else
	{
		$q = "SELECT *FROM tbl_crud";

		$query = mysqli_query($con, $q);

		while ($res= mysqli_fetch_array($query)) 
		{

		
		

	}

?>

<!DOCTYPE html>
 <html>
 <head>
 	<title> </title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
 	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<form method="POST">
			
			<h1><label> Update Products </label></h1>
		<div class="row">	
			<div class="form-group">
				<label>Product Name</label>
				<input type="text" name="name" placeholder="Enter Product Name" class="form-control form-control-lg" required="" value="<?php $res['name'];?>">
			</div>

			<div class="form-group">
				<label> Product Category</label>
				<input type="text" name="category" placeholder="Enter Product category" class="form-control form-control-lg" required=""><br>
			</div>

			<div class="form-group">
				<label> Product Size</label>
				<input type="text" name="size" placeholder="Enter Product size" class="form-control form-control-lg" required=""><br>
			</div>

			<div class="form-group">
				<label>Product Quantity</label>
				<input type="number" name="quantity" placeholder="Enter Product Quantity" class="form-control form-control-lg" required=""><br>
			</div>
			<div class="form-group">
				<label>Product Price</label>
				<input type="number" name="price" placeholder="Enter Product Price" class="form-control form-control-lg" required=""><br>
			</div>

			<div>
			<input type="file" name="image" value="Select images" accept=".jpg, .png">
		    </div>
			<br><br>


			<input type="submit" name="submit" value="Save" class="btn btn-primary"><br>

			<input type="button" name="submit" value="Exit" class="btn btn-danger"> <br>
	</div>
    
	</form>			
	</div>
	</div>	
	</div>
	
 </body>
 </html>
 <?php 
   }
 ?>