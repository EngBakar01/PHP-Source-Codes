# PHP Array Practices

This folder contains PHP programming practices demonstrating how to create, modify, access, and display arrays.

The practices cover:

* Numeric index arrays
* `var_dump()`
* `print_r()`
* `foreach` loops
* Adding array elements
* Associative arrays
* Accessing key/value pairs

---

# Practice #1: Numeric Index Array

## Description

This practice demonstrates how to create a **numeric index array** in PHP.

A numeric array uses numbers as its indexes, starting from `0`.

### Example

```php
$Collection = array();

$Collection[0] = 2;
$Collection[1] = "Abukar Ibrahim";
$Collection[2] = 30.04;
```

### Explanation

The array contains three elements:

```text
Index 0 → 2
Index 1 → Abukar Ibrahim
Index 2 → 30.04
```

An element can be accessed using its index:

```php
echo $Collection[1];
```

Output:

```text
Abukar Ibrahim
```

---

# Practice #2: Displaying Arrays with var_dump()

## Description

This practice demonstrates the `var_dump()` function.

`var_dump()` displays detailed information about a variable, including its data type and value.

### Example

```php
var_dump($Collection);
```

It can display information such as:

```text
int
string
float
```

This function is commonly useful when debugging PHP programs.

---

# Practice #3: foreach Loop with Array

## Description

This practice demonstrates how to use a `foreach` loop to display every element of an array.

### Example

```php
foreach ($Collection as $value) {
    echo "$value <br>";
}
```

### Explanation

The `foreach` loop goes through each array element one by one.

For the `$Collection` array, it displays:

```text
2
Abukar Ibrahim
30.04
```

---

# Practice #4: Creating and Adding Array Elements

## Description

This practice demonstrates how to create an array with values and add a new element.

### Example

```php
$numbers = array(2, "Abukar Ibrahim", 30.04);

$numbers[] = "New Item";
```

The empty brackets `[]` add a new element to the end of the array.

The array becomes:

```text
2
Abukar Ibrahim
30.04
New Item
```

---

# Practice #5: print_r() Function

## Description

This practice demonstrates the `print_r()` function for displaying array contents in a readable format.

### Example

```php
echo "<pre>";

print_r($numbers);

echo "</pre>";
```

`print_r()` displays the array structure, including indexes and values.

The `<pre>` HTML tag helps make the output easier to read in the browser.

---

# Practice #6: Associative Array

## Description

This practice demonstrates an **associative array**.

Unlike numeric arrays, associative arrays use named **keys** instead of numeric indexes.

### Example

```php
$person = array(
    "ID" => "101",
    "name" => "Abukar Ibrahim",
    "age" => 30,
    "city" => "Mogadishu"
);
```

### Explanation

The array contains key/value pairs:

```text
ID   → 101
name → Abukar Ibrahim
age  → 30
city → Mogadishu
```

A value can be accessed using its key:

```php
echo $person["name"];
```

Output:

```text
Abukar Ibrahim
```

---

# Practice #7: Adding Elements to an Associative Array

## Description

This practice demonstrates how to add new key/value pairs to an associative array.

### Example

```php
$info["country"] = "Somalia";
$info["status"] = "Single";
```

The new elements are added using their keys.

For example:

```text
country → Somalia
status  → Single
```

---

# Practice #8: foreach with Associative Array

## Description

This practice demonstrates how to use `foreach` to display both the **key and value** of an associative array.

### Example

```php
foreach ($info as $key => $value) {
    echo "<br> $key: $value";
}
```

### Explanation

The `$key` contains the array key, while `$value` contains the value.

Example output:

```text
ID: 102
name: Omar Ibrahim
age: 10
city: Mogadishu
country: Somalia
status: Single
```

---

# Summary

These practices demonstrate important PHP array concepts:

1. **Numeric Arrays** – store values using numeric indexes.
2. **var_dump()** – displays detailed variable information.
3. **foreach** – loops through array elements.
4. **Adding Elements** – adds new values to an array.
5. **print_r()** – displays array contents in a readable format.
6. **Associative Arrays** – store data using named keys.
7. **Key/Value Access** – retrieves specific associative array values.

Arrays are important in PHP because they allow programmers to store and manage multiple values in a single variable.
