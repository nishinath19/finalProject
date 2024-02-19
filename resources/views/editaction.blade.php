<?php



// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['update'])) {
    $id = $crud->escape_string($_POST['id']);
    $product_name = $crud->escape_string($_POST['product_name']);
    $description = $crud->escape_string($_POST['description']);
    $price = $crud->escape_string($_POST['price']);
    $stock_quantity = $crud->escape_string($_POST['stock_quantity']);

    echo "ID: $id<br>";
    echo "Product Name: $product_name<br>";
    echo "Description: $description<br>";
    echo "Price: $price<br>";
    echo "Stock Quantity: $stock_quantity<br>";

    if($product_name) {
        echo "Product name is set. No update performed.";
        echo "<br/><a href='index.php'>Go Back</a>";
		
        $sql = "UPDATE products_table SET product_name='$product_name', description='$description', price='$price', stock_quantity='$stock_quantity' WHERE id=$id";
        echo "SQL Query: $sql<br>";

        $result = $crud->execute($sql);

        if ($result) {
            echo "Update successful. Redirecting to index.php...";
            header("Location: index.php");
            exit(); // Ensure that the script stops executing after the redirection header
        } else {
            echo "Update failed.";
        }
    }
}
?>
