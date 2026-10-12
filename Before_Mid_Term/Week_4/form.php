<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        /* margin-top:20px; */
        justify-content: center;
        align-items: center;
        width: 350px;
        border: 1px solid black;
        margin: 100px auto;
        padding: 40px;
        border-radius: 10px;
    }
    form label {
        display: block;
        margin-bottom: 10px;
    }
    form input {
        width: 100%;
        padding: 5px;
        margin-bottom: 20px;
    }
    div {
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
    }
    textarea {
        width : 100%;
        height: 50px;
        margin-bottom: 20px
    }
    .gender {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;

    }
</style>
<body>
    <form action="" method="post">
        <label> Enter Full Name</label> 
        <input type="text" name="name">
        <label> Enter Password </label>
        <input type="password" name="pass">
        <textarea  name="info"></textarea>
        <div class="gender" id="gender">
            <div>
                <label> Male: </label>
                <input type="radio" name="gender" value="Male" >
            </div>
            <div>
                <label> Female:  </label>
                <input type="radio" name="gender" value="Female">
            </div>
        </div>
        <div>
            <button type="submit"> Register </button>
            <button type="reset"> Reset Form </button>
        </div>

    </form>
    <?php 
    echo "<h1>Form Data</h1>";
    echo "First Name is:" . $_POST["name"]. "<br>";
    echo "Password is:" . $_POST["pass"] . "<br>";
    echo "Info is:" . $_POST["info"] . "<br>";
    // echo "Gender is:" . $_POST["gender"] . "<br>";
    if (!empty($_POST['gender'])) {
        echo $_POST['gender'];
    } else {
        echo "Select Gender";
    }
    ?>
</body>
</html>