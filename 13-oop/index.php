<?php 

error_reporting(-1);
require_once 'classes/Product.php';

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

$productBook = new Product("40 хадис",450,null,250);
$productnet = new Product("Asus",45000,"inter X6920",null);

echo debug($productBook);
echo debug($productnet);

echo $productBook->getProduct('book');
echo $productnet->getProduct();
?>    




</body>
</html>