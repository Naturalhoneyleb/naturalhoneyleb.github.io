<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us - Natural Honey of Lebanon</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
// include header.php file
$page='Contact';include ('header.php');
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
        <h1>Contact us</h1>
    </section>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>We would be very happy when contacting us. Please do not hesitate to send any email or feedback about our products or our services.</p>
        </div>
        <div class="container-cnt">
            <div class="contactInfo">
                <div class="box-cnt">
                    <div class="icon-cnt"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="txt-cnt">
                        <H3>Address</H3>
                        <p>Lebanon-Beqaa<br>Zahle St.Michael Street</p>
                    </div>
                </div>
                <div class="box-cnt">
                    <div class="icon-cnt"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="txt-cnt">
                        <h3>Phone Wtsp</h3>
                        <p>+961 79 134 647</p>
                    </div>
                </div>
                <div class="box-cnt">
                    <div class="icon-cnt"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="txt-cnt">
                        <H3>Email</H3>
                        <p>natural.honey.leb@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form onsubmit="sendEmail(); reset(); return false;">
                    <h2>Send Message</h2>
                    <div class="inputbox-cnt">
                        <input id="name" type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox-cnt">
                        <input id="email" type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox-cnt">
                        <textarea id="message" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputbox-cnt">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
// include footer.php file
include ('footer.php');
?>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail() {
            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "natural.honey.leb@gmail.com",
                Password: "E6ECD922B8651819CDF1F8B89A214984C2F2",
                To: 'natural.honey.leb@gmail.com',
                From: 'natural.honey.leb@gmail.com',
                Subject: "New contact From Web",
                Body: "Name: " + document.getElementById("name").value +
                    "<br> Email: " + document.getElementById("email").value +
                    "<br> Email: " + document.getElementById("message").value

            }).then(
                message => alert("Message has been sent. Thank you for contacting us")
            );
        }
    </script>
</body>