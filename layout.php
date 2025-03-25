<?php
// layout.php - Layout Utama
function layout($title, $page)
{
    include 'config.php';

?>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= htmlspecialchars($title) ?></title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/index.css">
        <link rel="stylesheet" href="style/profil.css">
        <link rel="stylesheet" href="style/infografis.css">
        <link rel="stylesheet" href="style/berita.css">
        <link rel="stylesheet" href="style/media-query.css">

        <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <style>
            body {
                background-color: #f3f4f6;
            }

            .hero {
                background-image: url("asset/bg/b2.jpeg");
                background-size: cover;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 500px;
                background-position: center;
                background-repeat: no-repeat;
                text-align: center;
                color: #fafbfa;

            }

            .hero h1 {
                font-size: 3rem;
            }
        </style>

    </head>

    <body>
        <?php include 'components/navbar.php'; ?>

        <main>
            <?php include $page; ?>
        </main>

        <?php include 'components/footer.php'; ?>


        <script>
            const menuIcon = document.getElementById("icon");
            const menuList = document.getElementById("nav-list");

            menuIcon.addEventListener("click", () => {
                menuList.classList.toggle("nav-links");

                if (!menuList.classList.contains("nav-links")) {
                    menuIcon.innerHTML = '<i class="ph ph-x"></i>';
                } else {
                    menuIcon.textContent = "";
                    menuIcon.innerHTML = '<i class="ph ph-list"></i>';
                }
            });
        </script>

    </body>

    </html>
<?php
}
?>