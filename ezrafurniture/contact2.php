<!DOCTYPE html>
<head>
    <title>Ezra Furniture</title>
    
    <link rel="stylesheet" href="style4.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
</head>
<body>
    <div class="parallax">
        <ul>
            <li class="logo"><img src="img/ezralogo.png" alt="Ezra Logo"></li>
            <li><a class="nav" href="index3.html">Home</a></li>
            <li><a class="nav" href="about.html">About</a></li>
            <li><a class="nav" href="gallery.php">Gallery</a></li>
            <li><a class="nav" href="contact2.php">Contact Us</a></li>
        </ul>
    </div>
    <div>
        <h3 class="cont">Contact Us!</h3>
        <p class="mes">You can contact us by...</p>
            <div class="container">
                <form class="contact-form" action="contact.php" method="POST">
                    <label for="fname">First Name:</label>
                    <input type="text" name="Fname" placeholder="First Name...">

                    <label for="email">Email:</label>
                    <input type="text" name="Email" placeholder="Your Email...">

                    <label for="subject">Subject:</label>
                    <input type="text" name="Subject" placeholder="Subject...">

                    <label for="message">Message:</label>
                    <textarea name="message" placeholder="Send us a message..." style="height:200px"></textarea>

                    <button class="btn btn-success" type="submit" name="submit">Send</button>

                </form>
            </div>
    </div>

    <div class="space"></div>

    <div>
        <footer class="thefoot">
            Ogden, Utah | Email: ezrafurnitureco@gmail.com 
            <a href="https://www.facebook.com/Ezra-Furniture-Co-113584100111323/" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/ezra.furniture.co/?hl=en" class="fa fa-instagram"></a>
        </footer>
    </div>

</body>