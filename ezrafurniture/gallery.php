<!DOCTYPE html>
<head>
    <title>Ezra Furniture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
<!--Navigaton-->
        <div class="para">
            <ul>
                <img class="logo" src="img/ezralogo.png" alt="Ezra Logo">
                <li><a href="index3.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact2.php">Contact Us</a></li>
            </ul>
        </div>
<!--Images of the gallery-->
<div class="bodee">
        <div class="grid-wrapper">
            <? //open php tag
                $directory = "galleryimages/"; 
                if(is_dir($directory))
                {
                        $opendirectory = opendir($directory); 
                        while (($image = readdir($opendirectory)) !== false)
                        {
                            if(($image == '.') || ($image == '..'))
                            { 
                                continue; 
                            }
                            echo "<div class='grid-item'>";
                                echo "<img src = 'galleryimages/".$image."'' id='myImg' class='picture' width='300' height='200' onclick='clickimg(this)'>";
                                ?><!--close php-->
                                <div id='modal01' class='modal' onclick='this.style.display="none"'>
                                    <span class='close'>&times;</span>
                                    <img class='modal-content' id='img01' style='max-width: 100%'>
                                </div>
                            </div>
                            <?
                        }
                        
                        closedir($opendirectory); 
            echo  "</div>"; 
                }
            ?><!--close-->
</div>
    <!--footer--> 
    <div class="footer">
        <div class="foot-wrapper">
            Ogden, Utah | Email: ezrafurnitureco@gmail.com 
            <a href="https://www.facebook.com/Ezra-Furniture-Co-113584100111323/" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/ezra.furniture.co/?hl=en" class="fa fa-instagram"></a>
            <a href="contact.html" class="fa fa-contact">Contact</a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>