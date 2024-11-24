<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi database</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "prak3")
    if ($conn_>connection_error) {
        die("koneksi gagal:" . conn->connection_error);
    }

    ?>
    </body>
</html>