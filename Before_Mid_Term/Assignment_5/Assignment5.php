<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // write that finds the reverse of the given number from 1 to 5 like 5 to 1 do't use built in function such as strev function
    $number = 12345;
    echo "The Given number is: " . $number . "<br>";
    $reverse = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $reverse = ($reverse * 10) + $digit;
        $number = (int)($number / 10);
    }
    echo "Reverse of the given number is: " . $reverse;
    ?>
</body>
</html>