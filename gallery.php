<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Natural Honey of Lebanon</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="lightbox.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
// include header.php file
$page='gallery';include ('header.php');
?>
        <section class="main">
            <img src="images/1.png" id="bk1">
            <img src="images/2.png" id="bk1">
            <div class="text-box">
                <h1>Natural Honey <br>Of Lebanon</h1>
                <p>100% Natural</p>
            </div>
            <img src="images/6.png" id="bk6">
            <img src="images/7.png" id="bk7">

        </section>
        <section class="page-title">
            <h1>Gallery</h1>
        </section>
        <section class="hero-gallery">
            <div class="gallery">
                <div class="btn-gallery">
                    <button id="galbtn1" onclick="openCTN1()">Apiary</button>
                    <button id="galbtn1" onclick="openCTN2()">Products</button>
                    <button id="galbtn1" onclick="openCTN3()">Wood Work</button>
                </div>
                <div class="gallery-content0">
                    <div id="galcontent1" class="content-gallery">
                        <h1>Apiary</h1>
                        <p>Discover the beauty of our apiary in stunning gallery photos. Explore the world of bees!</p>
                        <div class="hexagon-gallery">
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/apiary/1.jpg" data-lightbox="models">
                                        <img src="gallery/apiary/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/apiary/2.jpg" data-lightbox="models">
                                        <img src="gallery/apiary/2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/apiary/3.jpg" data-lightbox="models">
                                        <img src="gallery/apiary/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/apiary/4.jpg" data-lightbox="models">
                                        <img src="gallery/apiary/4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/apiary/5.jpg" data-lightbox="models">
                                        <img src="gallery/apiary/5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/apiary/6.jpg" data-lightbox="models">
                                        <img src="gallery/apiary/6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/apiary/7.jpg" data-lightbox="models">
                                        <img src="gallery/apiary/7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="galcontent2" class="content-gallery">
                        <h1>Products</h1>
                        <p>Indulge in the beauty of our bee hive products through exquisite gallery photos. Enjoy!</p>
                        <div class="hexagon-gallery">
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/Products/1.jpg" data-lightbox="models">
                                        <img src="gallery/Products/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Products/2.jpeg" data-lightbox="models">
                                        <img src="gallery/Products/2.jpeg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/Products/3.jpeg" data-lightbox="models">
                                        <img src="gallery/Products/3.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Products/4.jpeg" data-lightbox="models">
                                        <img src="gallery/Products/4.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Products/5.jpeg" data-lightbox="models">
                                        <img src="gallery/Products/5.jpeg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/Products/6.jpeg" data-lightbox="models">
                                        <img src="gallery/Products/6.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Products/7.jpeg" data-lightbox="models">
                                        <img src="gallery/Products/7.jpeg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="galcontent3" class="content-gallery">
                        <h1>Wood Work</h1>
                        <p>Experience the artistry of our bee hive wood work through breathtaking gallery photos. Simply stunning.</p>
                        <div class="hexagon-gallery">
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/Wood work/1.jpg" data-lightbox="models">
                                        <img src="gallery/Wood work/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Wood work/2.jpg" data-lightbox="models">
                                        <img src="gallery/Wood work/2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/Wood work/3.jpg" data-lightbox="models">
                                        <img src="gallery/Wood work/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Wood work/4.jpg" data-lightbox="models">
                                        <img src="gallery/Wood work/4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Wood work/5.jpg" data-lightbox="models">
                                        <img src="gallery/Wood work/5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="hexagon">
                                <div class="hex">
                                    <a href="gallery/Wood work/6.jpg" data-lightbox="models">
                                        <img src="gallery/Wood work/6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="hex">
                                    <a href="gallery/Wood work/7.jpg" data-lightbox="models">
                                        <img src="gallery/Wood work/7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                galbtn2.style.color = "#e91e63";
                galbtn1.style.color = "#fff";
                galbtn3.style.color = "#fff";
            }

            function openCTN3() {
                galcontent1.style.transform = "translateX(150%)";
                galcontent2.style.transform = "translateX(150%)";
                galcontent3.style.transform = "translateX(0)";
                galcontent1.style.transitionDelay = "0s";
                galcontent2.style.transitionDelay = "0s";
                galcontent3.style.transitionDelay = "0.3s";
                galbtn3.style.color = "#e91e63";
                galbtn2.style.color = "#fff";
                galbtn1.style.color = "#fff";
            }
        </script>
</body>