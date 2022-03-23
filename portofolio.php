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

<body style="background-color: #fff;">
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

    <h3 style="text-align:center">My Recent Projects</h3>
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="img/1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/2.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/3.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/4.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/5.png" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
    <div style="padding-left: 80px;">
        <div class="main">
            <div class="row">
                <div class="column">
                    <div class="portofolio-content">
                        <img src="img/1.png" alt="Mountains" style="width:100%">
                        <h4>Blog</h4>
                        <p style="margin-top: -20px; font-size: 10px;">HTML,CSS,PHP,DB (Individu)</p>
                    </div>
                </div>
                <div class="column">
                    <div class="portofolio-content">
                        <img src="img/2.png" alt="Lights" style="width:100%">
                        <h4>Web E-Commerce</h4>
                        <p style="margin-top: -20px; font-size: 10px;">Vue Js (Team)</p>
                    </div>
                </div>
                <div class="column">
                    <div class="portofolio-content">
                        <img src="img/3.png" alt="Nature" style="width:100%">
                        <h4>Web E-Commerce</h4>
                        <p style="margin-top: -20px; font-size: 10px;">Laravel (Team)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="portofolio-content">
                        <img src="img/4.png" alt="Mountains" style="width:100%">
                        <h4>Blog</h4>
                        <p style="margin-top: -20px; font-size: 10px;">HTML, CSS (Individu)</p>
                    </div>
                </div>
                <div class="column">
                    <div class="portofolio-content">
                        <img src="img/5.png" alt="Nature" style="width:100%">
                        <h4>Aplikasi Kasir dan Sistem Manajemen Gudang Apotek</h4>
                        <p style="margin-top: -20px; font-size: 10px;">Laravel (Individu)</p>
                    </div>
                </div>
                <div class="column">
                    <div class="portofolio-content">
                        <img src="img/6.png" alt="Mountains" style="width:100%">
                        <h4>Digital Business Card THE NETWERK</h4>
                        <p style="margin-top: -20px; font-size: 10px;">Laravel (Team)</p>
                    </div>
                </div>
            </div>
        </div>
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
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
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