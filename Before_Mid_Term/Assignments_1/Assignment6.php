<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Write a program that calculates lowest common multiplier (LCM) of two positive integer numbers (for example, LCM of 8 and 12 = 24). 
    $a = 8;
    $b = 12;
    $max = max($a, $b);
    while (true) {
        if ($max % $a == 0 && $max % $b == 0) {
            echo "LCM of " . $a . " and " . $b . " is: " . $max;
            break;
        }
        $max++;
    }
    ?>
</body>
</html>