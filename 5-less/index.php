<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    //array
    //[]
   /* $k = array('G',"55t"=>1,58);
    //echo $k["cool"];
    

    $nu = array_keys($k);
    print_r($nu);*/

   /* $arr2 = [
        1,
        2,
        [
            'banana',
           ['orange'],
            'apple'
        ],
        4,
        ['cat'],
        6,
        7,
        8,
        9,
        10,];

echo "<pre>";

print_r($arr2);

echo "</pre>";
*//*
$arr3 = [
	3 => 'Ivanov',
    'Pupkin',
	4 => 'Petrov',
	"7t" => 'Sidorov',

	'Pupkin'
];

echo "<pre>";

print_r($arr3);

echo "</pre>";*/

$goods = [
	[
		'title' => 'Nokia',
		'price' => 100,
		'description' => 'Description'
	],
	[
		'title' => 'iPad',
		'price' => 200,
		'description' => 'Description'
	]
];

echo "<pre>";
print_r($goods);
echo "</pre>";

echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];

/*
 openserver instrall apt
/*
https://www.youtube.com/watch?v=oTxMNQ2b3Lg**/


?>
    
</body>
</html>

