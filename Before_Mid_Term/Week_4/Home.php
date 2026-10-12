<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // include "index.php";

    // // Example 1: of Internal and Internal Function Calling
    // function Sum() {
    //      $num = 0;
    //     $num++;
    //     return $num;
    //     // echo $num . " -- ";
    // }

    // echo "Internal Function calling 1 -- " . Sum() . "<br>"; // Internal call 1
    // echo "Internal Function calling 2 -- " . Sum() . "<br>"; // Internal call 2
    // echo "Internal Function calling 3 -- " . Sum() . "<br>"; // Internal call 3

    // // Example 2: of External and Internal Function Calling
    
    // // 3 include will display 3 times the output of the function Sum() because include will include the file multiple times.
    // include "index.php";
    // include "index.php";
    // include "index.php";

    // // 2 include_once will display 1 time the output of the function Sum() because include_once will include the file only once.
    // include_once "index.php";
    // include_once "index.php";

    // // 3 require will display 3 times the output of the function Sum() because require will include the file multiple times.
    // require "index.php";
    // require "index.php";
    // require "index.php";

    // // 2 require_once will display 1 time the output of the function Sum() because require_once will include the file only once.
    // require_once "index.php";
    // require_once "index.php";


    // function sums ($x, $y) {
    //      $sum = $x + $y;
    //      return $sum;
    // }
    // echo " Internal Function Calling 1: Sum of x and y is equal " . sums(10, 20) . "<br>";


    // Example 3: of Function Exist or Not
    if (function_exists("sums")) {
        echo "Function Exist";
    } else {
        echo "Function Not Exist";
    }
    ?>
</body>
</html>