<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Example of nested loop";
        for ($i = 1; $i <= 5; $i++) {
            echo "<br> Row is $i ,";
            for ($j = 1; $j <= 5; $j++) {
                echo "Column is  $j";
                echo " Result is " . ($i * $j) . "<br>";
                echo "<br> Row is $i ,";
            }
        }
    ?>
</body>
</html>