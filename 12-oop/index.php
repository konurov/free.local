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
        
        
       
        $pro1 = new Student("Taakaibek k Aisuluu","INIT","Сис. админ","INIT-13","mail.com",705416468);
        
        $pro2 = new Student("Taakaibek k Aisuluu","INIT","Сис. админ","INIT-13","mail.com",705416468);
     
        echo Student::GetconutSUM();

        echo $pro->getPrototypeInfo();
    
         echo "<br>";
        echo $pro->Hello();
         echo "<br>";
        echo $pro1->Hello();
          echo "<br>";
        echo $pro2->Hello();
        
       


        //var_dump($pro);
    ?>
 </body>
</html>