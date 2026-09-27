<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//    Question 1.1: create a one dimensional array and initialize them
//    echo "Question 1.1:<br>";
   $numbers = Array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

   // Question 1.2: Print all elements in the array
    echo "Question 1.2:<br>";
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    var_dump($numbers);
    echo "</pre>";

   // Question 1.3: Calcuate the sum of all elements in the array
   echo "<br> Question 1.3:<br>";
   $sum = 0;
    foreach($numbers as $number)
    {
        $sum += $number;
    }
    echo "Sum of the numbers: " . $sum;

    // Question 1.4: Calculate and print the sum of all even numbers in the array
    echo "<br> <br>Question 1.4:<br>";
    $evenNumbers = array();
    foreach($numbers as $number)
    {
        if($number % 2 == 0)
        {
            $evenNumbers[] = $number;
        }
    }
        // echo "Even number found: " . $evenNumbers;
        $sum = 0;
        foreach($evenNumbers as $number)
        {
            $sum += $number;
        }
        var_dump($evenNumbers);
        echo "<br> Sum of even numbers: " . $sum;

        // Question 1.5: Calculate and print the sum of all odd numbers in the array
        echo "<br> <br>Question 1.5:<br>";
        echo "<br> <br>Question 1.4:<br>";
        $oddNumbers = array();
        foreach($numbers as $number)
        {
            if($number % 2 != 0)
            {
                $oddNumbers[] = $number;
            }
        }
            // echo "Even number found: " . $evenNumbers;
            $sum = 0;
            foreach($oddNumbers as $number)
            {
                $sum += $number;
            }
            var_dump($oddNumbers);
            echo "<br> Sum of even numbers: " . $sum . "<br>";

            // Question 1.6: Find the minimum element in the array and print its position
            echo "<br><br>Question 1.6:<br>";

            $min = $numbers[0];

            foreach($numbers as $index => $number)
            {
                if($number < $min)
                {
                    $min = $number;
                }
            }

            echo "Minimum element: " . $min . "<br>";

            foreach($numbers as $position => $number)
            {
                if($number == $min)
                {
                    echo "Position: " . $position . "<br>";
                }
            }

            // Question 1.7: Find the maximum element in the array and print its position
            echo "<br><br>Question 1.7:<br>";
            $max = $numbers[0];
            foreach($numbers as $index => $number)
            {
                if($number > $max)
                {
                    $max = $number;
                }
            }
            echo "Maximum element: " . $max . "<br>";
            foreach($numbers as $position => $number)
            {
                if($number == $max)
                {
                    echo "Position: " . $position . "<br>";
                }
            }


    


    ?>
</body>
</html>