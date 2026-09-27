<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // w
$students = array(
        array(
            "Class" => "CA202",
            "Name" => "Mohamed Ahmed Ali",
            "Phone" => "0648440403",
            "Address" => "Laba Dhagax, Wardhiigley"
        ),
        array(
            "Class" => "CA207",
            "Name" => "Amina Nur Adan",
            "Phone" => "0646990276",
            "Address" => "Macmacaanka, Dharkeynley"
        ),
        array(
            "Class" => "CA202",
            "Name" => "Ahmed Abdi Jama",
            "Phone" => "0647223201",
            "Address" => "Taleex, Hodan"
        )
);

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr style='background-color: #c0c2c0;'>
        <th></th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>";

    foreach ($students as $student)
    {
        echo "<tr>";
        foreach ($student as $key => $value)
        {
            if ($key == "Class")
            {
                echo "<td style='background-color: #c0c2c0;'>$value</td>";
            }
            else
            {
                echo "<td>$value</td>";
            }
        }

        echo "</tr>";
    }

echo "</table>";
  ?>
</body>
</html>