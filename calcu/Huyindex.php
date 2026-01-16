<?php
if (!isset($_POST['Input1'])) {
    include 'template/form.html.php';
} else {
    $Input1 = $_POST['Input1'];
    $Input2 = $_POST['Input2'];
//Area
    $result = $Input1 * $Input2; 
    $output = 'The result area is: ' . htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
    include 'template/welcome.html.php';
//Perimeter
    $result =($Input1 + $Input2) * 2;
    $output = 'The result perimeter is: ' . htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
    include 'template/welcome.html.php';
//Average
    $result =($Input1 + $Input2) / 2;
    $output = 'The result average is: ' . htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
    include 'template/welcome.html.php';
//BMI
    $result = $Input1 / ($Input2 * $Input2);
    $output = 'The result BMI is: ' . htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
    include 'template/welcome.html.php';
//TotalMinute
        $result = ($Input1*60) + $Input2;
        $output = 'The result total minute is: ' . htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
        include 'template/welcome.html.php';
//FindMaxValue
        $result = max($Input1 , $Input2);
        $output = 'The result max value is: ' . htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
        include 'template/welcome.html.php'; 
    }
?>
