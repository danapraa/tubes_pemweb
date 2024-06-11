<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page Kesehatan Mental</title>
    <link rel="stylesheet" href="styles/style_login.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
    session_start();
    ?>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="action/login_proses.php" method="POST">
                <h1>Buat Akun Anda!!!</h1>
                <input type="text" name="name" placeholder="Username" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <div class="form-group">
                    <label for="role">Sebagai : </label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="dokter">Dokter</option>
                        <option value="pasien">Pasien</option>
                    </select>
                </div>
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="action/login_proses.php" method="POST">
                <h1>LOGIN</h1>
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <div class="form-group">
                    <label for="role">Sebagai : </label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="dokter">Dokter</option>
                        <option value="pasien">Pasien</option>
                    </select>
                </div>
                <button type="submit" name="login">LogIn</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Sudah punya akun? Siahkan LogIn</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hallo, Selamat Datang!</h1>
                    <p>
                        Belum punya akun? Tambahkan akun
                    </p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/login.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php
            if (isset($_SESSION['error'])) {
                echo "Swal.fire({
                    title: 'Error',
                    text: '" . $_SESSION['error'] . "',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });";
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo "Swal.fire({
                    title: 'Success',
                    text: '" . $_SESSION['success'] . "',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });";
                unset($_SESSION['success']);
            }
            ?>
        });
    </script>
</body>
</html>
