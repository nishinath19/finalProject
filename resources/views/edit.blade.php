<?php


// Get the ID from the URL and sanitize it
$id = $crud->escape_string($_GET['id']);

// Select data associated with this particular ID
$result = $crud->get_Data("SELECT * FROM products_table WHERE id=$id");

// Check if any data is returned
if ($result) {
    // Fetch the first row (assuming ID is unique)
    $res = $result[0];

    // Assign values to variables for better readability
    $product_name = $res['product_name'];
    $description = $res['description'];
    $price = $res['price'];
    $stock_quantity = $res['stock_quantity'];

    // HTML starts here
    ?>
    <html>
    <head>	
        <title>KHULNA SCOUT SHOP - Edit Product</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br/><br/>
        
        <form name="form1" method="post" action="editaction.php">
            <table border="0">
                <tr> 
                    <td>Product Name</td>
                    <td><input type="text" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>"></td>
                </tr>
                <tr> 
                    <td>Description</td>
                    <td><input type="text" name="description" value="<?php echo htmlspecialchars($description); ?>"></td>
                </tr>
                <tr> 
                    <td>Price</td>
                    <td><input type="text" name="price" value="<?php echo htmlspecialchars($price); ?>"></td>
                </tr>
                <tr> 
                    <td>Stock Quantity</td>
                    <td><input type="text" name="stock_quantity" value="<?php echo htmlspecialchars($stock_quantity); ?>"></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
    </html>
    <?php
} else {
    // Handle the case where no data is found for the given ID
    echo "No product found with the specified ID.";
}
?>
