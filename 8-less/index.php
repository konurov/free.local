<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);
require_once 'funcs.php';
//$str = "Sanjar";
//file_put_contents('test.txt', $str, FILE_APPEND);
/*$array = [1, 2, 3, 17];

foreach ($array as $key=> $value) {
    echo "Current element of \$array:  $key.\n";
}*/

if(!empty($_POST)){
	save_mess();
	header("Location: {$_SERVER['PHP_SELF']}");
	exit;
}

//print_arr($messages);

/*if(isset($_POST['send'])){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}*/


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Contact us Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">\
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
      <div class="text">
         <a href="/8-less/page.php">Contact us Form</a>
      </div>
      <form action="index.php" method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="name"  required>
               <div class="underline"></div>
               <label for="">First Name</label>
            </div>
            
         </div>
        
         <div class="form-row">
         <div class="input-data textarea">
            <textarea rows="8" cols="80" name="text" required></textarea>
            <br />
            <div class="underline"></div>
            <label for="">Write your message</label>
            <br />
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  
                  <input type="submit" name="send" value="submit">
               </div>
            </div>
           
      </form>
      </div>

      
<!-- partial -->

</body>
</html>