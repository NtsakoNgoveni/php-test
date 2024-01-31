<?php 
include("task1_solution.php");

class Product {
    private $products;
    private $search_product;

    public function __construct($products, callable $search_product = null) {
        $this->search_product = $search_product ?? "get_product";
        $this->products = $products;
    }

    public function setSearchProduct(callable $search_product){
        $this->search_product = $search_product;
    }

    public function getProduct($productId){
        $productDetails = call_user_func($this->search_product, $this->products, $productId);
        return $productDetails;
    }
}
//The code below is for testing purposes.

/*echo "Task 2 test \n";
$products = [
    ['id' => 101, 'name' => 'Product 1', 'price' => 99.99],
    ['id' => 102, 'name' => 'Product 2', 'price' => 75.00],
    ['id' => 103, 'name' => 'Product 3', 'price' => 120.00],
];
$test_product = new Product($products);
$test_product_details = $test_product->getProduct(103);


echo 'Product Name: ' . $test_product_details['name'] . "\n";
echo 'Product Price: ' . $test_product_details['price'] . "\n";
*/
?>