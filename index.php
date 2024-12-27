<?php include("path.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include(ROOT_PATH . "/app/include/header.php");?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include(ROOT_PATH . "/app/include/navbar.php");?>
    
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php include(ROOT_PATH . "/app/include/carousel.php");?>
    <!-- Carousel End -->


    <!-- Service Start -->
    <?php include(ROOT_PATH . "/app/include/services.php");?>
    <!-- Service End -->


    <!-- About Start -->
    <?php include(ROOT_PATH . "/app/include/about.php");?>
    <!-- About End -->


    <!-- Categories Start -->
    <?php include(ROOT_PATH . "/app/include/categories.php");?>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <?php include(ROOT_PATH . "/app/include/course.php");?>
    <!-- Courses End -->


    <!-- Team Start -->
    <?php include(ROOT_PATH . "/app/include/team.php");?>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <?php include(ROOT_PATH . "/app/include/feedback.php");?>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <?php include(ROOT_PATH . "/app/include/footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>