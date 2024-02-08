<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yeni insanlarla tanışmak için hemen üye ol!">
    <meta name="keywords" content="tanışma, arkadaşlık, flört, yeni insanlarla tanışma, yeni insanlarla flört, yeni insanlarla arkadaşlık, yeni insanlarla tanışma uygulaması, yeni insanlarla flört uygulaması, yeni nesil insanlarla arkadaşlık uygulaması">
    <meta name="author" content="NewMeet">
    <title>NEWMEET - Yeni Nesil Tanışma Uygulaması</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="public/newmeet-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div class="container">
        <div class="header">
            <!-- <h1>NEWMEET</h1> -->
            <div class="logo">
                <img src="public/newmeet-logo.png" alt="NewMeet Logo">
            </div>
            <p>Yeni Nesil Tanışma Uygulaması</p>
        </div>
        <div class="main">
            <div class="main-inner">
                <h2>Yeni insanlarla tanışmak için hemen üye ol!</h2>
                <img src="public/yuzuk.png" alt="Yüzük">
                <!--<button>
                    <span class="button-inner">Hemen İndir!</span>
                </button> -->
                <a href="public/newmeet-afis.png" download>
                    <button href="public/newmeet-afis.png" id="downloadButton">
                        Hemen İndir!
                    </button>
                </a>
            </div>
        </div>

    </div>

    <footer>
        <div class="footer">
            <p>
                ©
                <?php
                    echo date("Y");
                ?>
                NewMeet. Tüm hakları saklıdır.
            </p>
        </div>
    </footer>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>