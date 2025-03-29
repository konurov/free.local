<?php
if (isset($_POST['name']) and isset($_POST['age']) and isset($_POST['ageold'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $ageold = $_POST['ageold'];
    $old = $age - $ageold;
    echo "Hello, " . htmlspecialchars($name)."<br>";
    echo "old , " . htmlspecialchars($old);
}
?>