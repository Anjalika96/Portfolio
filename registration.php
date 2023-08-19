
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ProMan - Personal Portfolio HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Contact Start -->
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6" style="max-width:500px;max-height:1000px">
            <h1>User Registration</h1>
                <form id="register_form" method="post" action="functions.php">
                    <div class="row">
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name= 'username'placeholder="Username" required>
                                <label for="username" style="padding: 20px;">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password1" name= 'password1'placeholder="Password" required>
                                <label for="password1" style="padding: 20px;">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password2" name= 'password2'placeholder="Re Enter Password" required>
                                <label for="password2" style="padding: 20px;">Re Enter Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button class=" form-control btn btn-primary py-3 px-5" type="submit" name="register" value="click">
                                    <span style="color:black;">Register</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <a href="login.php" class=" form-control btn btn-secondary btn-block py-3 px-5 " role="button">
                                    <span style="color:black;">Login</span>
                                </a>
                            </div>
                        </div>
                        <div id="registration_responseContainer"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>   
    <!-- Contact End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>