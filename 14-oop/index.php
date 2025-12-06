<?php 
///https://www.youtube.com/watch?v=MwtEjIpqIKQ&t=67s
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/ProductBook.php';
require_once 'classes/ProductNet.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$productBook = new ProductBook("40 хадис",450,250);
$productNet = new ProductNet("Asus",45000,"inter X6920");

echo debug($productBook);
echo debug($productNet);

echo $productBook->getProduct();
echo $productNet->getProduct();

$productBook1 = new Product("Чынгыз Айтматов 'Жамиля'",450,250);

debug($productBook1);
?>    




</body>
</html>