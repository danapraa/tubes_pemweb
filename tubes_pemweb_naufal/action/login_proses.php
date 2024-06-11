<?php
include '../db/connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND role = ?");
        $stmt->bind_param('ss', $username, $role);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                $_SESSION['status'] = 'logged_in';
                $_SESSION['success'] = "Anda berhasil login.";
                header('Location: ../index.php');
                exit();
            } else {
                $_SESSION['error'] = "Password salah.";
            }
        } else {
            $_SESSION['error'] = "Username atau role salah.";
        }
        $stmt->close();
    } elseif (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $name, $hashed_password, $role);

        try {
            if ($stmt->execute()) {
                $_SESSION['success'] = "Akun berhasil dibuat!";
            }
        } catch (mysqli_sql_exception $e) {
            if ($conn->errno == 1062) {
                $_SESSION['error'] = "Username sudah ada. Silakan pilih yang lain.";
            } else {
                $_SESSION['error'] = "Terjadi kesalahan: " . $e->getMessage();
            }
        }
        $stmt->close();
    }
    $conn->close();
    header('Location: ../login.php');
    exit();
}
?>
