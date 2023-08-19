<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

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


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-5 px-lg-7 wow fadeIn" data-wow-delay="0.1s" style="position: fixed;">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="text-primary fw-bold m-0"><img src="img/logo.jpg"></h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse" style="padding: 0px 80px 0px 70px;">
            <a href="index.html" class="navbar-brand py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primary fw-bold m-0"><img src="img/logo.jpg"></h1>
            </a>
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#skill" class="nav-item nav-link">Skills</a>
                <a href="#service" class="nav-item nav-link">Services</a>
                <a href="#project" class="nav-item nav-link">Projects</a>
                <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
                <a href="logout.php" class="nav-item nav-link ">Logout</a>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <h1 class="display-3 mb-2" style="font-size: 55px;">ANJALIKA ABESEKARA</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="http://localhost/Thasi/my_cv.pdf" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/profile.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">05</h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0">of working experience as a web designer & developer</h3>
                    </div>
                    <p class="mb-4">
                        As a web developer and designer, I am dedicated to creating visually captivating and functional websites.
                         With expertise in HTML, CSS, and JavaScript, I build responsive and interactive websites that adapt 
                         seamlessly to different devices.</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Afordable Prices</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>High Quality Product</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">120</h2>
                    </div>
                    <p class="mb-4">
                        Grateful clients who appreciated the visually stunning and user-friendly websites we crafted, 
                        resulting in successful collaborations and happy partnerships</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">100</h2>
                    </div>
                    <p class="mb-0">
                        Successfully delivered web projects that impressed clients, showcasing exceptional design and functionality, 
                        leading to satisfied clients and positive outcomes.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4">Proficient in various web programming languages like HTML, CSS,
                         JavaScript, and more, leveraging them to build interactive and dynamic websites..</p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Angular JS</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Wordpress</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Web Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023 - Present</p>
                                    <h6 class="mb-0">WebCentric Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Developer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022 - Present</p>
                                    <h6 class="mb-0">SET Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Program Mananger</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023 - present</p>
                                    <h6 class="mb-0">WIFSS - RUSL</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Member</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2021 - Present</p>
                                    <h6 class="mb-0">IEEE Student Branch</h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Bsc in IT, Computer Science</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2024</p>
                                    <h6 class="mb-0">Rajarata University of Sri Lanka</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Certified Tester Foundation Level</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022</p>
                                    <h6 class="mb-0">ISTQB</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->

    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="#contact">Hire Me</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-crop-alt fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Web Development</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$100</span></h6>
                            <span>
                                With expertise in HTML, CSS, JavaScript, and backend technologies, I create 
                                responsive and high-performance websites that exceed clients' expectations.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code-branch fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Web Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$100</span></h6>
                            <span>
                                As a skilled web designer, I use captivating visuals, harmonious color schemes, 
                                and intuitive interfaces to craft memorable user experiences and stunning websites.                            
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">App Development</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$100</span></h6>
                            <span>
                                Specializing in mobile app development for iOS and Android, I build feature-rich, 
                                user-friendly applications that cater to clients' unique needs and requirements.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-laptop-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">App Designing</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$100</span></h6>
                            <span>With a keen eye for aesthetics and usability, I design striking app interfaces,
                                 ensuring seamless user interactions and an engaging mobile experience.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter=".first">All Projects</li>
                        <li class="mx-3" data-filter=".second">Customize</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s" style="position: relative; height: 863.974px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <?php
                        require 'functions.php';
                        connectDatabase();
                        $connection = new mysqli('localhost', 'root','', 'portfolio');
                        $query = "SELECT * FROM project";
                        $query_run = mysqli_query($connection,$query);

                        while ($row = mysqli_fetch_assoc($query_run)) {
                            
                            $html = '
                            <div class="col-lg-4 col-md-6 portfolio-item first">
                                <div class="portfolio-img rounded overflow-hidden">
                                    <img class="img-fluid" src="'.$row['image'].'" alt="">
                                    <div class="portfolio-btn">
                                    </div>
                                    <div>
                                        <h4>
                                            '.$row['title'].'
                                        </h4>
                                        <p>
                                            '.$row['description'].'
                                        </p>
                                    </div>
                                </div>
                            </div>';
                            echo $html;
                        }
                    ?>
                    <div class="row">
                        <div class="col-3 portfolio-item second" style="padding-top: 50px;">
                            <div id="add_project_form" class="col- add" style="display:block;">
                                <div class="portfolio-img rounded overflow-hidden table-responsive">
                                    <form id="project_form" method="post" action="functions.php" enctype="multipart/form-data">
                                    <div class="col">
                                        <div class="row py-1 px-lg-5">
                                            <h4>Add Project</h4>
                                        </div>
                                        <div class="row py-1 px-lg-5">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="p_title" name= 'p_title'placeholder="Project Title">
                                                <label class="px-3" for="name">Project Title</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 px-lg-5">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="p_description" name= 'p_description'placeholder="Description">
                                                <label class="px-3" for="email">Description</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 px-lg-5">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" id="p_image" name="p_image">
                                                <label class="px-3" for="p_image">Image</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 px-lg-5">
                                            <div class="form-floating">
                                                <button class="btn btn-primary py-3 px-5" type="submit" name="send" value="click">Save Project</button>
                                            </div>
                                        </div>
                                        <div id="projectresponseContainer"></div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-9 portfolio-item second" style="padding-top: 50px;" >
                            <div class="portfolio-img rounded ">
                                <div class="col add">
                                    <div class="portfolio-img rounded">
                                        <div class="col">
                                            <div class="row py-1 px-lg-5">
                                                <h4>All Projects</h4>
                                                <div style="max-height: 400px; overflow-y: auto;">
                                                    <table class="table table-stripped">
                                                        <thead>
                                                            <tr>
                                                                <td>Title</td>
                                                                <td style="width:400px;">Description</td>
                                                                <td style="width:150px;">Image</td>
                                                                <td>Action</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        $table = mysqli_query($connection,'SELECT * FROM project');
                                                        while($row = mysqli_fetch_array($table))
                                                            {?>
                                                                <tr id="<?php echo $row['id'];?>">
                                                                    <td data-bs-target="title"><?php echo $row['title'] ?></td>
                                                                    <td data-bs-target="description"><?php echo $row['description'] ?></td>
                                                                    <td data-bs-target="image"><img style="width: 50%;height:50%;padding:0px;" src="<?php echo $row['image'] ?>"></td>
                                                                    <td>
                                                                        <div class="row">
                                                                            <div class="col-6  px-sm-1">
                                                                                <a href="#" data-role="update" data-id="<?php echo $row['id'];?>">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#videoModal">
                                                                                    Edit 
                                                                                    <span></span>
                                                                                    </button>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-6 px-sm-1">
                                                                                <a href="#" data-role="delete" data-id="<?php echo $row['id'];?>">
                                                                                    <button type="button" class="btn btn-danger">
                                                                                    Delete
                                                                                    </button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <?php        
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
    <!-- Projects End -->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-7" id="testimonial">
        <div class="container-fluid py-5">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">
                                Outstanding web developer! Created a flawless website with innovative features, 
                                impressive responsiveness, and a user-friendly interface. Highly recommended!</p>
                            <hr class="w-25 mx-auto">
                            <h5>Ms. Sheela</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">
                                Top-notch app developer! Developed an intuitive and feature-rich mobile app that exceeded 
                                our expectations. Professional, reliable, and delivered on time.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Mr. John</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">
                                Exceptional talent in both web and app development. Delivered 
                                two remarkable projects that elevated our online presence. A pleasure to work with!</p>
                            <hr class="w-25 mx-auto">
                            <h5>Mr Nelson</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">123/A Maralanda, 6th Mile Post, Mawathagama, Sri Lanka</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+94 12 345 6789</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">anjalikaabesekara1996@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/anjalika-abesekara"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/anjalika-abesekara"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/anjalika-abesekara"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/anjalika-abesekara"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-4">Reach out for exciting projects, collaborations, or just to say hello. Let's create something amazing together. Pleace Contact me</p>
                    
                    <form id="contact_form" method="post" action="functions.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name= 'name'placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name= 'email'placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name= 'subject'placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name= 'message'style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="send" value="click">Send Message</button>
                            </div>
                            <div id="responseContainer"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
            </div>
        </div>
    </div>
    <!-- Map End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-secondary" href="#">DevAnjalika.com</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom text-secondary" >DevAnjalika</a>
                        <br>Distributed By: <a class="border-bottom" target="_blank">DevAnjalika</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0" style="max-width:50%;max-height:50%;">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Project</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 10%;">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="p_id" name= 'p_id'placeholder="Project ID">
                                        <label for="p_id">Project ID</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="title" name= 'title'placeholder="Project Title">
                                        <label for="name">Project Title</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="description" name= 'description'placeholder="Description">
                                        <label for="description">Description</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="image" name= 'image'placeholder="Image">
                                        <label for="subject">Image</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary py-3 px-5" type="submit" id="p_update" value="click">Update</button>
                                </div>
                                <div id="responseContainer"></div>
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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