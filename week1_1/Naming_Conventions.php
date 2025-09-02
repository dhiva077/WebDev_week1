<?php
// PHP opening/closing tag
echo "Hello World ";

// Short syntax for PHP echo
?>
<?= "Hello World (short syntax)" ?>
<?php

// function
function updateProduct() {
    echo " Product updated!";
}
updateProduct();

// class
class ProductItem {
    public function __construct() {
        echo " ProductItem created!";
    }
}
$item = new ProductItem();

// class dengan property
class Product {
    public $name = "Laptop";
}
$product = new Product();
echo " Name from Product class: " . $product->name;

// variable
$firstName = "Mike";

// constant
const ACCESS_KEY = "123abc";

echo " First name: $firstName";
echo " Access key: " . ACCESS_KEY;
?>