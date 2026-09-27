<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $colors = array(
        "Light" => array(
            "Red" => "Light Red",
            "Green" => "Light Green",
            "Blue" => "Light Blue"
        ),
        "Normal" => array(
            "Red" => "Normal Red",
            "Green" => "Normal Green",
            "Blue" => "Normal Blue"
        ),
        "Dark" => array(
            "Red" => "Dark Red",
            "Green" => "Dark Green",
            "Blue" => "Dark Blue"
        )
    );
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr style='background-color: #c0c2c0;'>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>";
    foreach ($colors as $shade => $color) {
        echo "<tr >";
        echo "<td style='background-color: #c0c2c0;'>$shade</td>";
        foreach ($color as $name => $value)
    {
        if ($shade == "Light" && $name == "Red")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Light" && $name == "Green")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Light" && $name == "Blue")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Normal" && $name == "Red")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Normal" && $name == "Green")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Normal" && $name == "Blue")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Dark" && $name == "Red")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Dark" && $name == "Green")
        {
            echo "<td>$value</td>";
        }
        elseif ($shade == "Dark" && $name == "Blue")
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
