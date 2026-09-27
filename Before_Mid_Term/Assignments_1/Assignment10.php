<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Write a program that prints prime numbers from 10 to 50. 
     
    for ($num = 10; $num <= 50; $num++) {

        $isPrime = true;

        if ($num < 2) {
            $isPrime = false;
        } else {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo $num . " ";
        }
    }

    ?>
</body>
</html>