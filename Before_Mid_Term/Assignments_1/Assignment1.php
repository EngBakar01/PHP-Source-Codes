<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 20;
    $num2 = 30;
    $num3 = 40;
    $largest = $num1;
    if ($num2 > $largest) {
        $largest = $num2;
    }
    if ($num3 > $largest) {
        $largest = $num3;
    }
    $smallest = $num1;
    if ($num2 < $smallest) {
        $smallest = $num2;
    }
    if ($num3 < $smallest) {
        $smallest = $num3;
    }
    echo "The largest number is: " . $largest . "<br>";
    echo "The smallest number is: " . $smallest . "<br>";
    ?>
</body>
</html>