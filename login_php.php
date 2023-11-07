<?php

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["txtLogin"];
    $password = $_POST["txtPassword"];

    $sql = "SELECT id, role FROM user WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        header("Location: userbd.php");
                session_start();
                $_SESSION["id"] = intval($row["id"]);
                $_SESSION["role"] = intval($row["role"]);
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }

    $stmt->close();
}

$conn->close();
?>