In PHP, `var_dump()` is a built-in function that **displays detailed information about a variable**, including:

* Its **type** (integer, string, array, object, etc.)
* Its **value**
* For arrays and objects, it also shows the **size** (number of elements or properties) and **structure** recursively.

It is very useful for **debugging**, especially when you want to see exactly what a variable contains.

---

### **Syntax**

```php
var_dump(mixed $variable);
```

* `$variable` → The variable you want to inspect.

---

### **Examples**

#### 1️⃣ Dumping a simple variable

```php
<?php
$age = 25;
var_dump($age);
?>
```

**Output:**

```
int(25)
```

Explanation:

* `int` → type
* `25` → value

---

#### 2️⃣ Dumping a string

```php
<?php
$name = "Harsh";
var_dump($name);
?>
```

**Output:**

```
string(5) "Harsh"
```

Explanation:

* `string(5)` → type and length of string
* `"Harsh"` → value

---

#### 3️⃣ Dumping an array

```php
<?php
$fruits = ["Apple", "Banana", "Cherry"];
var_dump($fruits);
?>
```

**Output:**

```
array(3) {
  [0]=>
  string(5) "Apple"
  [1]=>
  string(6) "Banana"
  [2]=>
  string(6) "Cherry"
}
```

Explanation:

* `array(3)` → array with 3 elements
* `[0]=> string(5) "Apple"` → key 0, type string, length 5, value "Apple"

---

#### 4️⃣ Dumping an object

```php
<?php
class Car {
    public $brand = "BMW";
    public $color = "Black";
}

$myCar = new Car();
var_dump($myCar);
?>
```

**Output:**

```
object(Car)#1 (2) {
  ["brand"]=>
  string(3) "BMW"
  ["color"]=>
  string(5) "Black"
}
```

Explanation:

* `object(Car)#1` → object of class `Car`, ID #1
* `(2)` → 2 properties
* Each property shows type and value

---

💡 **Tip:**
If you just want to see the value without type info, use `print_r()`.
If you want it in a readable format for browsers, wrap `var_dump()` with `<pre>` tags:

```php
echo "<pre>";
var_dump($fruits);
echo "</pre>";
```
