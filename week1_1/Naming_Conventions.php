// PHP opening/closing tag
<?php
  echo "Hello World";
?>
// if no closing tag the rest of the file will be considered PHP

// Short syntax for PHP echo
<?= "Hello World" ?>

//Enable strict typing (first line of your PHP file)
<? declare(strict_types=1);

// Include a PHP file
require 'app/Product.php'

// Create a namespace
namespace App;

// Use a namespace
use App\Product;

$firstName = 'Mike'  // camelCase
function updateProduct() // camelCase
class ProductItem // StudlyCaps
const ACCESS_KEY = '123abc'; // all upper case with underscore separators
