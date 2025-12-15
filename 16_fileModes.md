Perfect 👍
I’ll show you **short PHP examples for each mode** so you can actually see how the file content changes.
To keep it simple, assume we are working with a file named `demo.txt`.

---

### 1. `r` → Read only

```php
file_put_contents("demo.txt", "Hello World"); // preset content

$fp = fopen("demo.txt", "r");
echo fread($fp, filesize("demo.txt"));
fclose($fp);
```

**Output:**

```
Hello World
```

---

### 2. `r+` → Read & Write (no truncate)

```php
file_put_contents("demo.txt", "Hello World");

$fp = fopen("demo.txt", "r+");
fwrite($fp, "Hi"); // overwrites from start
rewind($fp);
echo fread($fp, filesize("demo.txt"));
fclose($fp);
```

**Output:**

```
Hillo World
```

---

### 3. `w` → Write only (truncate)

```php
file_put_contents("demo.txt", "Old Data");

$fp = fopen("demo.txt", "w");
fwrite($fp, "New");
fclose($fp);

echo file_get_contents("demo.txt");
```

**Output:**

```
New
```

---

### 4. `w+` → Read & Write (truncate)

```php
file_put_contents("demo.txt", "Old Data");

$fp = fopen("demo.txt", "w+");
fwrite($fp, "Fresh");
rewind($fp);
echo fread($fp, filesize("demo.txt"));
fclose($fp);
```

**Output:**

```
Fresh
```

---

### 5. `a` → Append (write only)

```php
file_put_contents("demo.txt", "Line1");

$fp = fopen("demo.txt", "a");
fwrite($fp, "\nLine2");
fclose($fp);

echo file_get_contents("demo.txt");
```

**Output:**

```
Line1
Line2
```

---

### 6. `a+` → Append + Read

```php
file_put_contents("demo.txt", "Start");

$fp = fopen("demo.txt", "a+");
fwrite($fp, "\nEnd");
rewind($fp); // move pointer back for reading
echo fread($fp, filesize("demo.txt"));
fclose($fp);
```

**Output:**

```
Start
End
```

---

### 7. `x` → Create new (fail if exists)

```php
// First delete demo.txt manually if it exists
$fp = fopen("demo.txt", "x");
fwrite($fp, "Created New File");
fclose($fp);

echo file_get_contents("demo.txt");
```

**Output (if file doesn’t exist):**

```
Created New File
```

If file already exists → **Warning + FALSE**.

---

### 8. `x+` → Create new + Read/Write

```php
// Ensure demo.txt is deleted first
$fp = fopen("demo.txt", "x+");
fwrite($fp, "New Content");
rewind($fp);
echo fread($fp, filesize("demo.txt"));
fclose($fp);
```

**Output:**

```
New Content
```

---

### 9. `c` → Create if not exists, overwrite without truncating

```php
file_put_contents("demo.txt", "ABCDE");

$fp = fopen("demo.txt", "c");
fwrite($fp, "XY"); // overwrite only first 2 chars
fclose($fp);

echo file_get_contents("demo.txt");
```

**Output:**

```
XYCDE
```

---

### 10. `c+` → Read & Write (same as c)

```php
file_put_contents("demo.txt", "12345");

$fp = fopen("demo.txt", "c+");
fwrite($fp, "00");
rewind($fp);
echo fread($fp, filesize("demo.txt"));
fclose($fp);
```

**Output:**

```
00345
```

---

### 11. `e` → Close-on-exec (special flag)

This is system-specific and not visible in normal output. It prevents file descriptor from leaking into `exec()` calls. You usually don’t see a difference unless running on POSIX systems.

```php
$fp = fopen("demo.txt", "w+e"); 
fwrite($fp, "Exec Safe");
fclose($fp);
```

**Output (file content):**

```
Exec Safe
```

*(the `e` flag effect is internal, not in output)*

---

