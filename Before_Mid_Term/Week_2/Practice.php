<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Example 1 of while loop <br>";
    $i = 1;
    while ($i <= 15) {
        echo "<br> $i";
        $i++;
    }
    echo "<br> ------------------------";
    echo "<br> Example 2 of while loop <br>";
    $count = 1;
    while ($count <= 12){
        echo "$count times 12 is ". $count * 12 . "<br>";
        ++$count;
    }
    
    echo "<br> ------------------------";
    echo "<br> Example of do while loop";
    $result = 1;
    $n = 5;
    do {
        $result *= $n;
        echo "<br> the value of n is $n and the result is $result";
        $n--;
    } while ($n > 0);
    echo "<br> Result: $result";

    echo "<br> ------------------------";
    echo "<br> Example 1  of break statement";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo "<br> $i";
    }
    echo "<br> ------------------------";
    echo "<br> Example 1 of continue statement";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        echo "<br> $i";
    }
        echo "<br> ------------------------";
        echo "<br> Example of nested loop";
        for ($i = 1; $i <= 3; $i++) {
            echo "<br> Outer loop iteration: $i";
            for ($j = 1; $j <= 5; $j++) {
                echo "<br> $i * $j = " . ($i * $j);
                echo "<br>  Inner loop iteration: $j";
            }
        }
    ?>
</body>
</html>