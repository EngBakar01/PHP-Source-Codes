# PHP Loop Practices

This folder contains PHP programming practices demonstrating different types of **loops and loop control statements** covered in the course **Web Application Development - PHP & MySQL**.

The practices cover:

* `while` loop
* `do...while` loop
* `for` loop
* `break` statement
* `continue` statement
* Nested loops

---

# Practice #1: While Loop

## Description

This practice demonstrates how to use a `while` loop to repeatedly execute code while a condition is true.

### Example

```php
$i = 1;

while ($i <= 15) {
    echo "<br> $i";
    $i++;
}
```

### Explanation

The loop starts with `$i = 1` and continues while `$i` is less than or equal to `15`.

The `$i++` increases the value by `1` after every iteration.

Output:

```text
1
2
3
...
15
```

---

# Practice #2: While Loop with Calculation

## Description

This practice uses a `while` loop to calculate and display the multiplication table of `12`.

### Example

```php
$count = 1;

while ($count <= 12) {
    echo "$count times 12 is " . $count * 12 . "<br>";
    ++$count;
}
```

### Explanation

The loop runs from `1` to `12` and calculates:

```text
1 × 12 = 12
2 × 12 = 24
...
12 × 12 = 144
```

---

# Practice #3: Do...While Loop

## Description

This practice demonstrates a `do...while` loop.

A `do...while` loop executes its code **at least once** before checking the condition.

### Example

```php
$result = 1;
$n = 5;

do {
    $result *= $n;
    echo "<br> The value of n is $n and the result is $result";
    $n--;
} while ($n > 0);

echo "<br>Result: $result";
```

### Explanation

The program multiplies the numbers from `5` down to `1`.

The final result is:

```text
Result: 120
```

This is equivalent to:

```text
5 × 4 × 3 × 2 × 1 = 120
```

---

# Practice #4: For Loop

## Description

This practice demonstrates a `for` loop to generate the multiplication table of `12`.

### Example

```php
for ($count = 1; $count <= 12; $count++) {
    echo "<br> $count times 12 is " . $count * 12;
}
```

### Explanation

A `for` loop contains three main parts:

```text
Initialization → Condition → Increment
```

The loop starts at `1`, continues until `12`, and increases the counter by `1`.

---

# Practice #5: For Loop to Calculate Squares

## Description

This practice uses a `for` loop to calculate the square of numbers from `1` to `10`.

### Example

```php
for ($i = 1; $i <= 10; $i++) {
    echo "The Square of $i is " . $i * $i . "<br>";
}
```

### Explanation

A number is squared by multiplying it by itself.

For example:

```text
1² = 1
2² = 4
3² = 9
...
10² = 100
```

---

# Practice #6: Break Statement

## Description

This practice demonstrates the `break` statement.

`break` is used to **immediately stop a loop**.

### Example

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }

    echo "<br> $i";
}
```

### Explanation

The loop stops when `$i` becomes `5`.

Therefore, the output is:

```text
1
2
3
4
```

The number `5` and the remaining numbers are not printed.

---

# Practice #7: Continue Statement

## Description

This practice demonstrates the `continue` statement.

`continue` skips the current iteration and continues with the next iteration.

### Example

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }

    echo "<br> $i";
}
```

### Explanation

When `$i` equals `5`, `continue` skips that iteration.

The output is:

```text
1
2
3
4
6
7
8
9
10
```

Unlike `break`, `continue` does not stop the entire loop.

---

# Practice #8: Nested Loop

## Description

This practice demonstrates a **nested loop**, which means placing one loop inside another loop.

### Example

```php
for ($i = 1; $i <= 3; $i++) {

    echo "<br>Outer loop iteration: $i";

    for ($j = 1; $j <= 5; $j++) {
        echo "<br> $i * $j = " . ($i * $j);
        echo "<br>Inner loop iteration: $j";
    }
}
```

### Explanation

The outer loop runs `3` times.

For every outer-loop iteration, the inner loop runs `5` times.

Therefore:

```text
3 × 5 = 15
```

inner-loop iterations are executed.

Nested loops are commonly used for tables, matrices, patterns, and repeated data.

---

# Summary

These practices demonstrate important PHP loop concepts:

1. **While Loop** – repeats code while a condition is true.
2. **Do...While Loop** – executes code at least once before checking the condition.
3. **For Loop** – repeats code using initialization, condition, and increment.
4. **Break** – completely stops a loop.
5. **Continue** – skips the current iteration.
6. **Nested Loop** – places one loop inside another loop.

Loops are important in PHP because they allow programmers to execute repetitive tasks efficiently without writing the same code multiple times.
