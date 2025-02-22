<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    error_reporting(-1);
   /* $light='red';
    if( $light != 'green' ){
        if( 5 > 3 ){
            echo '<p>5 > 3</p>';
        }
    }*/
  /*  $k1 = 150; //$
    $k2 = 9530; //$

    $p = 352; //$

   /* if($k1 >= $p){
        echo "<h1>1-адамдыкы жасалат-$k1$</h1>";
    }elseif($k2 >= $p){
      echo "<h1>2-адамдыкы жасалат-$k2$</h1>";
    }
    else{
        echo "<h1>Жасалбайт</h1>";
    }
*/
/*
if($k1 >= $p){
    if($k2 >= $p){
        echo "<h1>2-адамдыкы жасалат-$k2$</h1>";
      }else{
        echo "<h1>1-адамдыкы жасалат-$k1$</h1>";
      }
}else{
    echo "<h1>Жасалбайт</h1>";
}*/

    $k1 = 10050; //$
    $k2 = 9530; //$

    $p = 352; //$

    if($k1 >= $p or $k2 >= $p){
        if($k2 >= $k1){
            echo "<h1>2-адамдыкы жасалат-$k2$</h1>";
          }else{
            echo "<h1>1-адамдыкы жасалат-$k1$</h1>";
          }
    }else{
        echo "<h1>Жасалбайт</h1>";
    }

/*
if($k1 >= $k2 and $k1 >= $p){
    echo "<h1>1-адамдыкы жасалат-$k1$</h1>";
}elseif($k2 >= $p){
    echo "<h1>2-адамдыкы жасалат-$k2$</h1>";
}else{
    echo "<h1>Жасалбайт</h1>";
}*/






?>
</body>
</html>

