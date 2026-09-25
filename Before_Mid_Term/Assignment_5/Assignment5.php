<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // write that finds the reverse of the given number from 1 to 5 like 5 to 1 do't use strev use loop
    $number = 12345;
    $reverse = 0;
    while ($number > 0) {
        $remainder = $number % 10;
        $reverse = ($reverse * 10) + $remainder;
        $number = (int)($number / 10);
    }
    echo "Reverse of the given number is: " . $reverse;
    ?>
</body>
</html>