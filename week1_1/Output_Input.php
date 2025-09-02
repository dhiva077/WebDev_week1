<?php
// ====== Output dasar ======
echo "<h3>Echo</h3>";
echo "Hello World <br><br>";

// ====== Debug dengan var_dump & print_r ======
echo "<h3>Debug Output</h3>";

$names = ["Mike", "John", "Sarah"];
$products = ["Laptop" => 15000, "Mouse" => 250];

echo "var_dump:<br>";
var_dump($names);
echo "<br><br>";

echo "print_r:<br>";
print_r($products);
echo "<br><br>";

// ====== Input via Form ======
echo "<h3>Input Form</h3>";
?>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    echo "Your name is: " . $name;
}
?>