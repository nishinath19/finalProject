<?php 

// include_once("Classes/Crud.php");



if (isset($_POST['Submit']))
{
    
    $product_name = $crud->escape_string($_POST['product_name']);
    $description = $crud->escape_string($_POST['description']);
    $price = $crud->escape_string($_POST['price']);
    $stock_quantity = $crud->escape_string($_POST['stock_quantity']);

    
	
    if ($product_name != null)
    {
        $result = $crud->execute("INSERT INTO products_table(product_name,description,price,stock_quantity) VALUES('$product_name','$description','$price','$stock_quantity')");

        echo "<font color='green'>Product added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
    }
    
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHULNA SCOUT SHOP</title>
    <script type="text/javascript"></script>	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Tiro+Bangla&display=swap" rel="stylesheet">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

    

</head>
<body>
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="text">
						
						<div class="mt-5">
				
							<h1 class="text-black-50"> Add New Product in list</h1>
							<h5> Scout Goods</h5>
						</div>
						<form action="add_product.php" method="post" name="form1" >
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="product_name" class="form-control text-bg-dark">
								<span class="invalid-feedback"></span>
							</div>
							<div class="form-group">
								<label>Description</label>
								<input type="text" name="description" class="form-control text-bg-dark">
								<span class="invalid-feedback"></span>
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="price" class="form-control text-bg-dark">
								<span class="invalid-feedback"></span>
							</div>
							<div class="form-group">
								<label>Stock Quantity</label>
								<input type="text" name="stock_quantity" class="form-control text-bg-dark">
								<span class="invalid-feedback"></span>
							</div>
							<div class="form-group">
								<input type="submit" name="Submit" value="Add New Product" class="form-control text-bg-danger">
							</div>		
						</form>
						<div class="mt-5">
				
							<h1 class="text-black-50 text-center "><a href="index.php">Product List</a></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>