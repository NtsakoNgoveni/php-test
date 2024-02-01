<?php
/*
 * start_get_product - Get the product with the matching productId
 * sheetId - Is the ID of the google sheet with the list of products
 * search_function - A callable function that contains the search functionality.
 * Return - On succes return the product associative array. On failure throws error.
*/
include("task3_solution.php");

function start_get_product($sheetId, $productId, callable $search_function = null) {
    $products = get_products_data($sheetId);
    $product_obj = new Product($products);

    $product = $product_obj->getProduct($productId);

    if(count($product) > 0) {
        echo 'Product Name: ' . $product['name'] . "\n";
        echo 'Product Price: ' . $product['price'] . "\n";
    } else {
        echo "Product is not available";
    }
}
//Comment this
start_get_product("1BYojOzsQ08cD3K5UNAUYd0vUoxOJoQvxPnfiJbubQ2o", 101);

?>