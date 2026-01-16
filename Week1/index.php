<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Task 1
    function hello()
   {
         echo "Hello World! <br />";
   }
   ?>
<?php hello(); ?>

<?php

$Month = date("F");
echo "This current month is $Month <br />";
// Task 2
if ($Month == "n") {
  echo "It's August, so it's different weather.";
} else {
  echo "Not August, so at least not in the peak of the heat.<br />";
}

?>

<?php
// Task 3

function caculate($width, $height)
{
    $Rectangle = $width * $height; 
    return $Rectangle;
}
echo "The area of the rectangle is: " . caculate(20, 10);
?>
</body>
</html>