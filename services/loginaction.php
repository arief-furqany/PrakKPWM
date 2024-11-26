<?php

include "../services/database.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //placing holder untuk input sql
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("s", $username);
    $stmt ->execute();

    $result = $stmt->get_result();

    if ($result -> num_rows > 0) {
        $user = $result -> fetch_assoc();

        if ($password == $users ['password']) {
            $_SESSION['username'] = $username;
            echo "login berhasil";
            exit;
        } else {
            echo "password salah";
        }

    }else {
        echo"usename tidak ditemukan";
    }

    $stmt->close();
    $conn->close();
}


?>