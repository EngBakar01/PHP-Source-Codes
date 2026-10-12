# PHP Functions, File Inclusion and Form Handling
This folder contains PHP practices from **Web Application Development - PHP & MySQL**, covering functions, external files, HTML forms, CSS and form processing.

---

# Practice #1: Internal Function Calling
## Description
This practice demonstrates how to define and call a PHP function multiple times within the same file.
### Example
```php
function Sum() {
    $num = 0;
    $num++;
    return $num;
}
echo "Call 1: " . Sum() . "<br>";
echo "Call 2: " . Sum() . "<br>";
echo "Call 3: " . Sum() . "<br>";
```
### Explanation
- `Sum()` creates a local variable, increments it and returns `1`.
- Each call starts with a new local `$num`, so the three calls each return `1`.

## Screenshot
![Internal Function Calling](Example%201_Internal%20File.png)

---

# Practice #2: External and Internal Function Calling
## Description
This practice demonstrates calling functions from another PHP file and passing arguments to a function.
### Example (Internal File)
```php
function sums($x, $y) {
    return $x + $y;
}
echo sums(10, 20); // 30
include "index.php";
```
### Example (External File: index.php)
```php
echo "External call 1: " . sums(30, 40) . "<br>";
echo "External call 2: " . sums(50, 60) . "<br>";
```
### Explanation
- `sums()` accepts two parameters and returns their sum.
- `include` executes the external file, which can call the function already defined in the main file.
- The external calls return `70` and `110`.

## Screenshots
![Internal Function Code](Example%202_Internal%20File.png)
![External Function Code](Example%202_External%20File.png)

---

# Practice #3: Include and Require Statements
## Description
PHP provides four ways to load another PHP file.
### Example
```php
include "index.php";
include_once "index.php";
require "index.php";
require_once "index.php";
```
### Explanation
- `include` loads a file; a missing file produces a warning.
- `require` loads a file; a missing file causes a fatal error.
- `include_once` and `require_once` avoid loading the same file more than once.
- Repeating `include` or `require` repeats executable output, but can cause a redeclaration error if the file defines a function again.

---

# Practice #4: Checking If a Function Exists
## Description
This practice uses `function_exists()` to check whether a function has been defined.
### Example
```php
if (function_exists("sums")) {
    echo "Function Exist";
} else {
    echo "Function Not Exist";
}
```
### Explanation
The output is `Function Exist` only if `sums()` has been defined or loaded. With the function definition commented out in your supplied main file, the output is `Function Not Exist`.

## Screenshot
![Checking Function Exists](Example%203_Checking%20File%20Exist.png)

---

# Practice #5: HTML Form and CSS Styling
## Description
This practice creates a registration form with a name, password, information box, gender selection and buttons.
### Example
```html
<form action="" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <textarea name="info"></textarea>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <button type="submit">Register</button>
    <button type="reset">Reset Form</button>
</form>
```
### Explanation
- `method="post"` sends form values to PHP through the request body.
- CSS styles the form width, border, spacing, inputs and buttons.
- Radio inputs sharing `name="gender"` allow one gender selection.
- Submit sends the form; Reset restores the initial input values.

## Screenshots
![HTML Form Code](Form%20HTML%20Code.png)
![Form CSS Part 1](Form%20CSS%201.png)
![Form CSS Part 2](Form%20CSS%202.png)

---

# Practice #6: Processing Form Data with PHP
## Description
This practice reads submitted form values using the PHP `$_POST` superglobal.
### Example
```php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h1>Form Data</h1>";
    echo "Name: " . htmlspecialchars($_POST["name"] ?? "") . "<br>";
    echo "Info: " . htmlspecialchars($_POST["info"] ?? "") . "<br>";
    echo htmlspecialchars($_POST["gender"] ?? "Select Gender");
}
```
### Explanation
- `$_POST` receives values from the form after submission.
- `??` provides a fallback for missing fields, such as an unselected gender.
- `htmlspecialchars()` escapes user input before displaying it as HTML.
- Your screenshot also echoes the password; avoid displaying passwords in real applications.

## Screenshot
![PHP Form Processing](Form%20PHP%20Code.png)

---

# Summary
These practices explain **PHP functions, parameters, file inclusion, `function_exists()`, form design, CSS styling and POST request handling**. Run the examples separately when needed, and place the eight screenshot files beside this README so the images appear correctly on GitHub.


# PHP Form Handling Practices

These practices demonstrate how to create an HTML registration form, style it using CSS, and process submitted data using **PHP**.

---

# Practice #4: Creating an HTML Form

## Description

This practice demonstrates how to create a registration form using HTML elements.

The form collects the user's name, password, additional information, and gender.

### Example

```html
<form action="" method="post">
    <label>Enter Full Name</label>
    <input type="text" name="name">

    <label>Enter Password</label>
    <input type="password" name="pass">

    <textarea name="info"></textarea>

    <div class="gender">
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
    </div>

    <button type="submit">Register</button>
    <button type="reset">Reset Form</button>
</form>
```

### Explanation

- `method="post"` sends form data using the POST method.
- `input type="text"` accepts the user's name.
- `input type="password"` hides the typed characters.
- `textarea` accepts additional information.
- `radio` allows the user to select one gender option.
- `submit` sends the form, while `reset` clears its fields.

## Screenshot

![Form HTML Code](Form%20HTML%20Code.png)

---

# Practice #5: Styling the Form Using CSS

## Description

This practice demonstrates how to style the registration form using CSS properties.

CSS improves the form's layout, spacing, borders, and appearance.

### Example

```css
form {
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

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
}

.gender {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
```

### Explanation

- `width` controls the form's size.
- `margin: 100px auto` centers the form horizontally.
- `padding` adds space inside elements.
- `border-radius` creates rounded corners.
- `display: flex` arranges elements in a flexible layout.
- `justify-content: center` centers items horizontally.

## Screenshots

![Form CSS Code 1](Form%20CSS%201.png)

![Form CSS Code 2](Form%20CSS%202.png)

---

# Practice #6: PHP Form Data Processing

## Description

This practice demonstrates how to receive and display submitted HTML form data using PHP's `$_POST` superglobal array.

### Example

```php
<?php
echo "<h1>Form Data</h1>";

echo "First Name is: " . $_POST["name"] . "<br>";
echo "Password is: " . $_POST["pass"] . "<br>";
echo "Info is: " . $_POST["info"] . "<br>";

if (!empty($_POST["gender"])) {
    echo $_POST["gender"];
} else {
    echo "Select Gender";
}
?>
```

### Explanation

- `$_POST["name"]` retrieves the submitted name.
- `$_POST["pass"]` retrieves the password.
- `$_POST["info"]` retrieves the textarea content.
- `$_POST["gender"]` retrieves the selected gender.
- `!empty()` checks whether the gender field contains a value.
- `echo` displays the submitted information.

**Important Note:** The example follows the original practice code. In a real application, check `$_SERVER["REQUEST_METHOD"]` before reading submitted data, escape displayed user input, and never display passwords in plain text.

## Screenshot

![Form PHP Code](Form%20PHP%20Code.png)

---

# Summary

These practices demonstrate important web development concepts:

1. **HTML Forms** – collecting user information.
2. **CSS Styling** – improving form appearance and layout.
3. **PHP `$_POST`** – receiving submitted form data.
4. **Form Validation** – checking whether a field contains a value.
5. **Form Buttons** – submitting and resetting form fields.

These concepts provide a foundation for building interactive web applications using **HTML, CSS, PHP, and MySQL**.