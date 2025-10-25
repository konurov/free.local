<?php 
// http://ie2.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples
error_reporting(-1);
require_once 'classes/Student.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart</title>
</head>
<body>
    <?php 
     
        $pro = new Student("Konurov Sanjar", "INIT","Сис. админ","INIT-13","mail.com",705416468);
        /*$pro->name = "Konurov Sanjar";
         $pro->faculty = "INIT";
        $pro->program = "Сис. админ";
        $pro->group = "INIT-13";
        $pro->email = "mail.com";
        $pro->phon = 705416468;*/
   
        $pro1 = new Student("Taakaibek k Aisuluu","INIT","Сис. админ","INIT-13","mail.com",705416468);
      /*  $pro1->name = "Taakaibek k Aisuluu";
         $pro1->faculty = "INIT";
        $pro1->program = "Сис. админ";
        $pro1->group = "INIT-13";
        $pro1->email = "mail.com";
        $pro1->phon = 705416468;*/
    
         echo "<br>";
        echo $pro->Hello();
         echo "<br>";
        echo $pro1->Hello();
        
       


        //var_dump($pro);
    ?>
 </body>
</html>