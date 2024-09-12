<?php
require_once 'connection.php';

session_start();

if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==1)
{
   header("location:index.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BOM - Beqaa Online Mayor</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Cleaning Company Website Template" name="keywords">
        <meta content="Cleaning Company Website Template" name="description">

        <!-- Favicon -->
        <link href="c:\Users\user\OneDrive\Documents\Senior Project - BOM\img\header image.jpg" rel="icon">

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
            <div class="header home">
                <div class="container-fluid">
                    <div class="header-top row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand">
                                <a href="index.php">
                                    BOM
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>70695988</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:bom14612@gmail.com"><i class="fa fa-envelope"></i>bom14612@gmail.com</a>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="index.php" class="nav-item nav-link active">Home</a>
                                        <a href="service.php" class="nav-item nav-link">Service</a>
                                        <a href="contact.php" class="nav-item nav-link">Contact</a>
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
                    
                    <div class="hero row align-items-center">
                        <div class="col-md-7">
                            <h2>Best & Trusted</h2>
                            <h2><span>Online</span> Service</h2>
                            <a class="btn" href="service.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img\office.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="about-text">
                                <h2><span>Best Online Experience</span></h2>
                                <p>
                                    Online services, specially those provided by governments, have significantlly transformed the way we intreact with public institutions and access essential information. 
                                </p>
                                <p>
                                    Digital government services play a central role in communication and collaboration between policymakers and society. Even beyond crisis, embracing the future of digital goverment is essential for an effective inclusive, and accountable government.
                                </p>
                                <a class="btn" href="about.php">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <p>Our Services</p>
                        <h2>Provide Services in West Beqaa</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img\155263Image1-1180x677_d.jpg" alt="Service">
                                <h3>Individual Card</h3>
                                <p>
                                    Proof of all individual's personal data.
                                </p>
                                <a class="btn" href="individualCard.php">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img\id.jpeg" alt="Service">
                                <h3>Personal ID</h3>
                                <p>
                                    An identity document that proves a person's identity.
                                </p>
                                <a class="btn" href="id.php">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img\family-card.jpg" alt="Service">
                                <h3>Family Card</h3>
                                <p>
                                    Provides the number of members of one family.
                                </p>
                                <a class="btn" href="familyCard.php">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img\birth-certificate.png" alt="Service">
                                <h3>Birth Certificate</h3>
                                <p>
                                    Establishes your new born's identity and kinship to their parents.
                                </p>
                                <a class="btn" href="birthCertificate.php">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>Why Choose Us</p>
                                <h2>World Class Services</h2>
                            </div>
                            <p>
                                When it comes to online services, two critical factors stand out: speed and trust. Users expect fast responses, whether it's loading a webpage, processing transactions, or receiving customer support. A trusted service ensures data security, privacy, and reliability. Businesses that prioritize both speed and trust gain a competitive edge, fostering long-term relationships with their customers.
                            </p>
                            <a class="btn" href="service.php">Learn More</a>
                        </div>
                        <div class="col-md-7">
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img\prices.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Reasonable Prices</h3>
                                    <p>
                                        Prices here are suitable. And remember that pricing isn't just about numbers, it's about creating value and buliding lasting relationships with you. 
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img\quick service.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Quick & Best Services</h3>
                                    <p>
                                        It's through vulnerability that human beings create connections.The more vulnerable we can be with each other, the more that we'll trust each other.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            


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
            
            
            <!-- Pricing Plan Start -->
            <div class="price">
                <div class="container">
                    <div class="section-header">
                        <p>Pricing Plan</p>
                        <h2>No Extra Hidden Charges</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="price-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Individual Card</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small>$</small>4</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>2 photographs</li>
                                            <li>Copy of your Personal ID</li>
                                            <li>Request form for extracting registration from your local mayor</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href="individualCard.php"><i class="fa fa-shopping-cart"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price-item featured-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Personal ID</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small>$</small>20</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>2 new photographs </li>
                                            <li>Individual Card(date should not exceed 6 months) or copy of it</li>
                                            <li>A medical report, laboratory test, or true copy proving your blood type</li>
                                            <li>Original ID card if the request is related to "renewing an ID card"</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href="id.php"><i class="fa fa-shopping-cart"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-gift"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Family Card</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small>$</small>10</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>Copy of your Individual card or of your Personal ID</li>
                                            <li>Request form from your local mayor</li>
                                            <li>The applicant should enter all the data of the entire family</li>
                                            <li>The applicant should be person concerned or have a relative up to the 2nd degree</li>
                                            <li>Issue birth certificates for all family members or national ID card for those over 16 yo</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href="familyCard.php"><i class="fa fa-shopping-cart"></i>Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-gift"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Birth Certificate</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small>$</small>10</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>2 witnesses</li>
                                            <li>Copy of your Personal ID</li>
                                            <li>Request form for extracting registration from your local mayor</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href="birthCertificate.php">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing Plan End -->

            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="container">
                        <div class="section-header">
                            <p>Client Review</p>
                            <h2>Clients Say About Us</h2>
                        </div>
                        <div class="owl-carousel testimonials-carousel">
                        <?php 
                            $sql="SELECT * FROM feedback";
                            $rows=mysqli_query($con, $sql);
                            foreach($rows as $row){
                                echo "<div class='testimonial-item'>";
                                echo "<div class='testimonial-content'>";
                                echo "<p>".$row['feedback']."</p>";
                                echo "<h3>".$row['name']."</h3>";
                                echo "</div>";
                                echo "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->

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
