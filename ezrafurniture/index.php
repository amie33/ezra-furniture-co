<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Contact Us</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr>
                        <?php
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill In The Blanks";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                        
                        ?>
                                            
                    </div>
                    <div class="card-body">
                        <form action="contact.php" method="post">
                            <input type="text" name="Name" placeholder="Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>