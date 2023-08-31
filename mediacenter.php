<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Center - Natural Honey of Lebanon</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
// include header.php file
$page='mediacenter';include ('header.php');
?>
        <section class="main">
            <img src="images/1.png" id="bk1">
            <img src="images/2.png" id="bk1">
            <div class="text-box">
                <h1>Natural Honey <br>Of Lebanon</h1>
                <p>100% Natural</p>
            </div>
            <img src="images/60.png" id="bk6">
            <img src="images/7.png" id="bk7">

        </section>
        <section class="page-title">
            <h1>Media Center</h1>
        </section>
        <section class="li-mc">
            <div class="li-mc-gallery">
                <div class="li-mc-btn">
                    <ul>
                        <li><a href="">Youtube</a></li>
                        <li><a href="">Social Media</a></li>
                        <li><a href="">E-News</a></li>
                    </ul>
                </div>

        </section>
        <?php
// include footer.php file
include ('footer.php');
?>
        <script>
            var galcontent1 = document.getElementById("galcontent1");
            var galcontent2 = document.getElementById("galcontent2");
            var galcontent3 = document.getElementById("galcontent3");
            var galbtn1 = document.getElementById("galbtn1");
            var galbtn2 = document.getElementById("galbtn2");
            var galbtn3 = document.getElementById("galbtn3");

            function openCTN1() {
                galcontent1.style.transform = "translateX(0px)";
                galcontent2.style.transform = "translateX(150%)";
                galcontent3.style.transform = "translateX(150%)";
                galcontent1.style.transitionDelay = "0.3s";
                galcontent2.style.transitionDelay = "0s";
                galcontent3.style.transitionDelay = "0s";

            }

            function openCTN2() {
                galcontent1.style.transform = "translateX(150%)";
                galcontent2.style.transform = "translateX(0)";
                galcontent3.style.transform = "translateX(150%)";
                galcontent1.style.transitionDelay = "0s";
                galcontent2.style.transitionDelay = "0.3s";
                galcontent3.style.transitionDelay = "0s";
            }

            function openCTN3() {
                galcontent1.style.transform = "translateX(150%)";
                galcontent2.style.transform = "translateX(150%)";
                galcontent3.style.transform = "translateX(0)";
                galcontent1.style.transitionDelay = "0s";
                galcontent2.style.transitionDelay = "0s";
                galcontent3.style.transitionDelay = "0.3s";
            }
        </script>
</body>