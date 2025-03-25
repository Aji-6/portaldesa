<?php
// session login
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
function layout($title, $page)


{
    // include '../../config.php';
    include '../config.php';
    $result = mysqli_query($conn, "SELECT * FROM fasilitas_desa");
    // ---


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= htmlspecialchars($title) ?></title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/index.css">

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <style>
            body {
                display: flex;
                gap: 12px;
                font-family: Arial, Helvetica, sans-serif;
            }

            main {
                min-height: 200vh;
                flex: 1;
                background: oklch(0.985 0.002 247.839);
            }
        </style>
    </head>

    <body>

        <?php include '../components/sidebar.php'; ?>

        <main>
            <?php include $page; ?>
        </main>


    </body>

    </html>

<?php
}
?>