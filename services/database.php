<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi database</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "crud_db");
    if ($conn->connect_error) {
        die("koneksi gagal:" . $conn->connect_error);
    }

    ?>
    </body>
</html>