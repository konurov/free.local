<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart</title>
</head>
<body>
    <?php 
        class EmailName{
            private $name="sanjar";
            private $email = "s_konurov@mail.com";
            public $age = 18;


            function Hello($name,$age){
                echo "I`m ".$this->name=$name."<br>";
                echo "I`m ".$this->email."<br>";
                echo "I`m ".$this->age=$age."<br>";
            }
            function get_hello($name){
                return $this->name=$name;
            }

        }
        $pro = new EmailName();
        echo $pro->get_hello("Azima");
        echo "<br>";
        //$pro->name="Kerezbek";
        $pro->Hello("Kerezbek",35);
        

        
       

        echo $pro->$email="1223";


        //var_dump($pro);
    ?>
 </body>
</html>