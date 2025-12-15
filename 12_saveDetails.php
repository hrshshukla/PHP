<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $toast = '<div class="toast-container position-fixed top-0 end-0 p-3">
      <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
         <div class="d-flex">
            <div class="toast-body">
               Your email: ' . $email . ' and ' . $pass . ' submitted successfully.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
      </div>
   </div>';

    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $database = "harsh";

    // connecting to DB
    $connection = mysqli_connect($servername, $username, $password, $database);

    // checking if connected or not  
    if (!$connection)
        die("Sorry yaar!!" . mysqli_connect_error());
    echo "Connection successfull!! \n";


    $insertQuery = "INSERT INTO details ( email, password)
                    VALUES ('$email', '$pass')";
                    
    // $affectedRows = myslqli_affected_rows($connection); --> tell about how many rows affected after insertion/deletion of data 

    $result = mysqli_query($connection, $insertQuery); // returns boolean value
    echo $result ? "Database operation done successfully" . "$toast" : die("Database operation  failed >> " . mysqli_error($connection));
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>