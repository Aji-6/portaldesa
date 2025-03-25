<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Portal Desa</title>
    <link rel="stylesheet" href="style/login.css">

    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>


</head>

<body>
    <section>


        <div class="login-container">

            <h2>Login</h2>

            <?php if (isset($_SESSION['error'])) {
                echo "<p style='color:red; font-style:italic;'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            } ?>
            <form action="auth.php" method="post">
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                <label for="">Password</label>
                <div class="password">
                    <input type="password" id="password" name="password" placeholder="password">
                    <span class="eye-icon" id="togglePassword"><i class="ph ph-eye"></i></span>
                </div>
                <button type="submit">Login</button>

            </form>
            <a href="../index.php" class="kembali"><i class="ph ph-house-line"></i><span>Home</span></a>
        </div>
    </section>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            // Toggle type antara password dan text
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Ganti icon sesuai dengan kondisi
            if (type === 'password') {
                togglePassword.innerHTML = '<i class="ph ph-eye"></i>'; // Ikon untuk password tersembunyi
            } else {
                togglePassword.innerHTML = '<i class="ph ph-eye-slash"></i>'; // Ikon untuk password terlihat
            }
        });
    </script>
</body>

</html>