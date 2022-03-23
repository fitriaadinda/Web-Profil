<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/586fd0d7c1.js" crossorigin="anonymous"></script>
    <title>hi! There</title>
    <style>
    </style>
</head>

<body class="image-background">
    <div class="topnav" style="background-color: #fff;">
        <a onclick="openNav()"><i class="fab fa-solid fa-bars" style="font-size:26px"></i></a>
    </div>
    <div id="navBar" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- Overlay content -->
        <div class="overlay-content">
          <a href="home.php">Home</a>
          <a href="tentang-saya.php">Tentang Saya</a>
          <a href="portofolio.php">Portofolio</a>
          <a href="https://www.netflix.com/browse">Favorite</a>
          <a id="logout" href="#">Logout</a>
        </div>
    </div>
    <div class="content">
        <h1 style="font-size: 45px;">Hi! I'm <p style="color: #B7C3F6; display: inline;">Dindaaa.</p>
        </h1>
        <h3 style="margin-top: -20px;">Fitria Adinda Rahmawati,
            <p style="display: inline; font-weight: lighter; font-size: 18px;">I'm an student at Brawijaya University,
                I'am 21 Years old, <br>Birth on 13th June 2000. I'am from Lamongan. My Hobbies are <br> Watching Korean
                Dramas/Films, Drawing, Listening Music and Singing.</p>
        </h3>
        <a href="https://www.instagram.com/adindarhmm/"><i class="fab fa-brands fa-instagram"></i></a>
        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GFrJzlCcCQVtzKgLrjPXqfGpFPBfNNGVSTFdksmGXTQkCvDxplvvKdHtMrRnCRBwhZdF"
            class="ml-2 mr-2"><i class="fab fa-solid fa-envelope"></i></a>
        <a href="https://www.tiktok.com/@dindaaaat?lang=id-ID"><i class="fab fa-brands fa-tiktok"></i></a>
        <a href="https://www.linkedin.com/in/fitriaadindaa/"><i class="fab fa-brands fa-linkedin"></i></a>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="logout.js"></script>
    <script>
        function openNav() {
            document.getElementById("navBar").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("navBar").style.width = "0%";
        }
    </script>
    <?php 
    session_start();
    if (empty($_SESSION['username'])) {
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "Kamu harus login terlebih dahulu",
            timer: 2500,
            showConfirmButton: false
        }).then(res => {
            window.location.href = "login.php";
        });
        </script>';
    }
    ?>
</body>

</html>