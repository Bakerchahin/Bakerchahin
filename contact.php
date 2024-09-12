<?php
require_once 'connection.php';

if(isset($_sessio['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    //$id=$_POST['id'];
    $feedback=$_POST['feedback'];

    $sql=" INSERT INTO feedback (name, email, id, feedback) VALUES ('$name', '$email','', '$feedback') ";
    mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BOM - Beqaa Online Mayor</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Beqaa Online Mayor" name="keywords">
        <meta content="Beqaa Online Mayor" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="header-top row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand">
                                <a href="">
                                    BOM
                                    <!-- <img src="img/logo.png" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>70695988</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>bom14612@gmail.com</a>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="index.php" class="nav-item nav-link">Home</a>
                                        
                                        <a href="service.php" class="nav-item nav-link">Service</a>
                                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                                        <div class="nav-item dropdown">
                                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                                            <div class="dropdown-menu">
                                                <a href="login.php" class="dropdown-item">Login</a>
                                                <a href="logout.php" class="dropdown-item">Log Out</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <p>Contact Us</p>
                        <h2>Find Your Answer / Send Message</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form method="post" action="contact.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" placeholder="Your Name" name="name" required />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" placeholder="Your Email" name="email" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" placeholder="Message" name="feedback" required ></textarea>
                                    </div>
                                    <div><button class="btn" type="submit" name="submit" >Send Message</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->

            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>You Might Ask</p>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <img src="img\you-might-ask.jpg" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> Individual Card
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <li>Two pictures with a white background.</li>
                                            <li>A copy of an old registration or ID card.</li>
                                            <li>Request form for obtaing a registration from the mayor.</li>
                                            <li>The presence of the person concerned (If the person concerned is a minor, his/her parent must be present).</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> Family Card
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <li>A copy of an individual card or ID card.</li>
                                            <li>A request form for issuing a family registration from the mayor.</li>
                                            <li>A family member or legal representative must be present.</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> Can I obtain an individual card or family card from the capital Beirut if my place of birth is ouyside Beirut?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            No, it's not possible.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Can I apply to obtain a new ID in Beirut if my place of registration is outside Beirut?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Yes, after you obtain a new individual card from your place of registration , you can do so, and you can receive it in Beirut as well.
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <a class="btn" href="contact.php">Ask more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>LIU Khiara, West Beqaa, Lebanon</p>
                                <p><i class="fa fa-phone-alt"></i>70695988</p>
                                <p><i class="fa fa-envelope"></i>bom14612@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="service.php">Our Services</a>
                                <a href="contact.php">Contact Us</a>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
