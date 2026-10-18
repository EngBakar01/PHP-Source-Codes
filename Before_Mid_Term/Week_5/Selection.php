<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Single Select Option -->
    <!-- <form action="" method="post">
        <select name="Districts"  >
            <option value="" selected disabled> Select One District </option>
            <option value="Hodan"> Hodan </option>
            <option value="Kaaraan "> Kaaraan </option>
            <option value="Ceelasha"> Ceelasha </option>
            <option value="Wadajir"> Wadajir </option>
            <option value="Dharkeynley"> Dharkenley </option>
            <option value="Darusalaam"> Darusalaam </option> 
        </select>
        <hr>
        <input type="submit" name="submit" value="Register">
    </form> -->

    <!-- // Multiple  Select Option -->
    <form action="" method="post">
        <select name="Districts[]"  multiple>
            <option value="" selected disabled> Select Multiple Districts </option>
            <option value="Hodan"> Hodan </option>
            <option value="Kaaraan "> Kaaraan </option>
            <option value="Ceelasha"> Ceelasha </option>
            <option value="Wadajir"> Wadajir </option>
            <option value="Dharkeynley"> Dharkenley </option>
            <option value="Darusalaam"> Darusalaam </option> 
        </select>
        <hr>
        <input type="submit" name="submit" value="Register">
    </form>
    <?php 
    // // Single selection 
    // if(!empty($_POST['Districts']))
    // {
    //     echo "Selected District: " . $_POST['Districts'];
    // }
    // else
    // {
    //     echo "No District Selected";
    // }

// Multiple selection
    if (!empty($_POST['Districts']))
    {
        echo "Selected District: ";
        foreach($_POST['Districts'] as $district)
        {
            echo  $district . " . &nbsp; ";
        }
    }
    else
    {
        echo "No Districts Selected";
    }
    
    ?>
</body>
</html>