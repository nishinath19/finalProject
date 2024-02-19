<?php


// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Construct a query to retrieve data for the specific product ID
    $query = "SELECT * FROM products_table WHERE id = $id";
    
    // Execute the query
    $result = $crud->get_data($query);

    if($result) {
        // Check if any data is retrieved
        if(count($result) > 0) {
            // Display the product details
            $product = $result[0]; // Assuming there's only one result for a specific ID
            echo "<h1>Product Details</h1>";
            echo "<p><strong>Product Name:</strong> ".$product['product_name']."</p>";
            echo "<p><strong>Description:</strong> ".$product['description']."</p>";
            echo "<p><strong>Price:</strong> ".$product['price']."</p>";
            echo "<p><strong>Stock Quantity:</strong> ".$product['stock_quantity']."</p>";
        } else {
            echo "<p>No product found for the specified ID.</p>";
        }
    } else {
        echo "<p>Error retrieving product data.</p>";
    }
} else {
    echo "<p>No product ID specified.</p>";
}
?>
