<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // write a program that compares three integer then specifies the largest number and the smallest number
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    $largest = max($num1, $num2, $num3);
    $smallest = min($num1, $num2, $num3);
    echo "The largest number is: " . $largest . "<br>";
    echo "The smallest number is: " . $smallest . "<br>";
    ?>

</body>
</html>