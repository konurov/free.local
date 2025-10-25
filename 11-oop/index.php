<?php 
// http://ie2.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples
error_reporting(-1);
require_once 'File.php';

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
    echo __DIR__;
    $file = new File(__DIR__ . '/file.txt');
    $file->write('Строка 1');
    $file->write('Строка 2');
    
    ?>
</body>
</html>