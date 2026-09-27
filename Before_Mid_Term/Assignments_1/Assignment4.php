<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Write a program that prints numbers divisible by 2 and 5 at the same time from 50 to 2.
    for ($i = 50; $i >= 2; $i--) {
        if ($i % 2 == 0 && $i % 5 == 0) {
            echo $i . "<br>";
        }
    }     
    ?>
</body>
</html>
