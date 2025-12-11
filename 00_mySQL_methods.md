### (1) Make connection
```php
mysqli_connect($servername, $username, $password, $database);
```

### (2) Handle connection error 
```php
mysqli_connect_error();
```

### (3) Handle return data 
```php
$result = mysqli_query($connection, $fetchQuery); //returns mysqli_result object (key value pairs)
$allRows = mysqli_num_rows($result); // number of rows 

if ($allRows > 0) {
    while( $row = mysqli_fetch_array($result)) {
        echo $row["email"] ." : ". $row["password"] ."\n";
        $data[] = $row;
    }
}

```
