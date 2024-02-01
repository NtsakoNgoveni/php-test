<?php
/*
 * get_product - Retrives the details of the product with a matching productId
 * products - A multi dimensional array where each element is an array of a product and its details
 * productId - The ID of the product that should be retrieved
 * Return - On succes returns product details or empty, on failure throws exception
*/

function get_product($products, $productId) {
    $productDetails = [];
    $counter = 0;
    foreach ($products as $product) {
        if($product['id'] == $productId) {
            $counter++;
            $productDetails = $product;

            if($counter > 1) {
                throw new Exception("Multiple products with the same ID");
            }
        }
    }
    return $productDetails;
}

$products = [
    ['id' => 101, 'name' => 'Product 1', 'price' => 99.99],
    ['id' => 102, 'name' => 'Product 2', 'price' => 75.00],
    ['id' => 103, 'name' => 'Product 3', 'price' => 120.00],
];

$productId = 103;
$product = get_product($products, $productId);

if(count($product) > 0) {
    echo 'Product Name: ' . $product['name'] . "\n";
    echo 'Product Price: ' . $product['price'] . "\n";
} else {
    echo "Product is not available";
}

?>