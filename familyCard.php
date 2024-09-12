<?php
require_once 'connection.php';

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $fatherN=$_POST['fatherN'];
    $motherN=$_POST['motherN'];
    $nbOfKids=$_POST['nbOfKids'];
    $pob=$_POST['pob'];
    $religion=$_POST['religion'];
    $por=$_POST['por'];
    $martial=$_POST['martial'];
    $governate=$_POST['governate'];
    $neighborhood=$_POST['neighborhood'];
    $phoneNb=$_POST['phoneNb'];
    $type=$_POST['type'];
    $email=$_POST['email'];



    $sql= "INSERT INTO orders (fname, lname, fatherN, motherN, por, pob, religion, governate, martial, nbOfKids, neighborhood, phoneNb, type, email) VALUES ('$fname','$lname', '$fatherN', '$motherN', '$por', '$pob', '$religion', '$governate', '$martial', '$nbOfKids', '$neighborhood', '$phoneNb', '$type', '$email') ";
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
                            <h2>Family Card</h2>
                        </div>
                        <div class="col-12">
                            
                            <a href="service.php">Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- Data Start -->
            <div class="data">
                <div class="input-container">
                    <form action="familyCard.php" method="post">

                        <label>Document Type:</label>
                        <select name="type">
                            <option>Select</option>
                            <option>Personal ID</option>
                            <option>Individual Card</option>
                            <option>Family Card</option>
                            <option>Birth Certificate</option>
                        </select>

                        <label for="email" class="name">Email:</label>
                        <input placeholder="Enter email" type="email" name="email" class="input">
                        <div class="underline"></div>

                        <label for="fname" class="name">First Name:</label>
                        <input placeholder="Enter your first name" type="text" name="fname" class="input">
                        <div class="underline"></div>
                    
                        <label for="lname" class="name">Last Name:</label>
                        <input placeholder="Enter your family name" type="text" name="lname" class="input"  >
                        <div class="underline"></div>
            
                        <label for="fatherN" class="name">Father Name:</label>
                        <input placeholder="Enter father's name" type="text" name="fatherN" class="input"  >
                        <div class="underline"></div>
                
                        <label for="motherN" class="name">Mother's Full Name:</label>
                        <input placeholder="Enter mother's full name" type="text" name="motherN" class="input"  >
                        <div class="underline"></div>
                
                        <label for="pob" class="name">Place of Birth:</label>
                        <input placeholder="Enter place of birth" type="text" name="pob" class="input">
                        <div class="underline"></div>
                    
                        <label for="martial" class="name">Martial Status:</label>
                        <input placeholder="Enter your martial state" type="text" name="martial" class="input">
                        <div class="underline"></div>

                        <label for="nbOfKids" class="name">Number of kids:</label>
                        <input placeholder="Enter number of kids" type="number" name="nbOfKids" class="input">
                        <div class="underline"></div>
                        <label for="religion" class="name">Religion:</label>
                        <select id="religion" name="religion">
                            <option>Muslim-Sunni</option>
                            <option>Muslim-Shia</option>
                            <option>Dorzi</option>
                            <option>Christian-Orthodox</option>
                            <option>Christian-Catholic</option>
                            <option>Alawi</option>
                        </select>

                        <label for="governate" class="name">Governate:</label>
                        <input placeholder="Enter your governate" type="text" name="governate" class="input">
                        <div class="underline"></div>

                        <label for="por" class="name">Place of Residence:</label>
                        <input placeholder="Enter place of residence" type="text" name="por" class="input">
                        <div class="underline"></div>

                        <label for="neighborhood" class="name">Neighborhood:</label>
                        <input placeholder="Enter your neighborhood" type="text" name="neighborhood" class="input">
                        <div class="underline"></div>
                        
                        <label for="phoneNb" class="name">Phone Number:</label>
                        <input placeholder="Enter your phone number" type="tel" name="phoneNb" class="input">
                        <div class="underline"></div>

                        <button class="btn-apply" name="submit">Submit</button>
                    </form>
                </div>
                <div class="id-sample">
                    <label class="id-img-header">Sample of Family Card</label>
                    <img class="img-card" src="img\family-card.jpg">
                </div> 
            </div>
        </div>
            <!-- Data End -->


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

<style>

    .data{
        box-sizing: border-box;
        box-shadow: 2px 2px 7px 0 rgb(0, 0, 0, 0.2);
        border: 8px;
        height: fit-content;
        width: 1200px;
        margin: 50px;
        padding: 50px;
        display: flex;
        flex-wrap: wrap;
    }
    .input-container {
  position: relative;
  margin: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #333;
}

.input[type="text"] {
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  color: #333;
  width: 200px;
  outline: none;
}



.input[type="text"]:focus + .underline {
  width: 100%;
}

@keyframes floating-label {
  0% {
    transform: translateY(0);
    opacity: 1;
  }

  100% {
    transform: translateY(-25px);
    opacity: 0;
  }
}

.input[type="text"]:placeholder-shown + label {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
  font-size: 14px;
  color: #777;
  pointer-events: none;
  transition: transform 0.3s, font-size 0.3s, color 0.3s;
}

.input[type="text"]:focus:not(:placeholder-shown) + label {
  transform: translateY(-25px);
  font-size: 12px;
  background-color: #4158D0;
  background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
  animation: floating-label 0.3s forwards;
}
.btn-apply {
  --clr-font-main: hsla(0 0% 20% / 100);
  --btn-bg-1: hsla(194 100% 69% / 1);
  --btn-bg-2: hsla(217 100% 56% / 1);
  --btn-bg-color: hsla(360 100% 100% / 1);
  --radii: 0.5em;
  cursor: pointer;
  padding: 0.9em 1.4em;
  margin-top: 15px;
  margin-bottom: 15px;
  min-width: 120px;
  min-height: 44px;
  font-size: var(--size, 1rem);
  font-family: "Segoe UI", system-ui, sans-serif;
  font-weight: 500;
  transition: 0.8s;
  background-size: 280% auto;
  background-image: linear-gradient(325deg, var(--btn-bg-2) 0%, var(--btn-bg-1) 55%, var(--btn-bg-2) 90%);
  border: none;
  border-radius: var(--radii);
  color: var(--btn-bg-color);
  box-shadow: 0px 0px 20px rgba(71, 184, 255, 0.5), 0px 5px 5px -1px rgba(58, 125, 233, 0.25), inset 4px 4px 8px rgba(175, 230, 255, 0.5), inset -4px -4px 8px rgba(19, 95, 216, 0.35);
}

.btn-apply:hover {
  background-position: right top;
}

.btn-apply:is(:focus, :focus-visible, :active) {
  outline: none;
  box-shadow: 0 0 0 3px var(--btn-bg-color), 0 0 0 6px var(--btn-bg-2);
}

@media (prefers-reduced-motion: reduce) {
  .btn-apply {
    transition: linear;
  }
}

.img-card{
    height: 350px;
    width: 500px;
}
.id-sample{
    margin-left: 50px;
}


</style>