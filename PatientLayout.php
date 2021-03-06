<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Family Wellness Center</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-----css jquey-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!---CSS for font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <!----css file for swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!----JS and css for glightbox-->
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div class="row">
        <div class="container-fluid overflow-hidden">
            <div class="row vh-100 overflow-auto">
                <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
                    <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3
                        pt-2 text-white">
                        <a href="/"
                            class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <?php echo "Family Wellness Center"; ?>
                        </a>
                        <div class="dropdown py-sm-4 sm-auto ms-auto ms-sm-0 flex-shrink-1">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28"
                                    class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">Patient Name</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#demo">
                            Expand Menu</button>
                        <div id="demo" class="collapse">
                            <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
                                id="menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link px-sm-0 px-2">
                                        <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">
                                            <font color="white">Home</font>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a onclick="window.open('reqest.php')" data-bs-toggle="collapse"
                                        class="nav-link px-sm-0 px-2">
                                        <i class="fas fa-calendar"></i><span class="ms-1 d-none d-sm-inline">
                                            <font color="white">Schedule
                                                Appointment</font>
                                        </span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-sm-0 px-2">
                                        <i class="fas fa-file-medical"></i><span class="ms-1 d-none d-sm-inline">
                                            <font color="white">View
                                                Record</font>
                                        </span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-sm-0 px-2">
                                        <i class="fas fa-calendar-check"></i><span class="ms-1 d-none d-sm-inline">
                                            <font color="white">View
                                                Scheduled
                                                Appointment</font>
                                        </span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-sm-0 px-2">
                                        <i class="fas fa-comment-dots"></i><span class="ms-1 d-none d-sm-inline">
                                            <font color="white">Feedback </font>
                                        </span></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>

                <div class="col col-sm-10" style="padding:0px; padding-right:0px;">
                    <div id="topbar" class="d-flex align-items-center bg-warning">
                        <div class="d-flex justify-content-between">
                            <div class="contact-info d-flex align-items-center">
                                <i class="bi bi-envelope"></i> <a
                                    href="mailto:contact@familywc.org">contact@familywc.org</a>
                                <i class="bi bi-phone"></i> +91 1234567890
                            </div>
                        </div>
                    </div>
                    <img src="images/slider-image1.jpg" class="img-fluid" alt="Responsive image" width="100%">

                    <!-- ======= Testimonials Section ======= -->
                    <section id="testimonials" class="testimonials">
                        <div class="container">

                            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <img src="assets/img/testimonials/testimonials-4.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Pankaj Dhole</h3>
                                                <h4>Patient</h4>
                                                <p>
                                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> It is our good
                                                    fortune that Dr. Naik practices in Aurangabad. I felt safe getting a
                                                    treatment from Dr.Naik and he even made me smile in times of
                                                    trouble. I am
                                                    very grateful to Family Wellness Center and its staff.
                                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End testimonial item - -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <img src="assets/img/testimonials/testimonials-4.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>???????????? ??????????????? </h3>
                                                <h4>???????????????????????? </h4>
                                                <p>
                                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> ??????????????? ?????????????????????
                                                    ????????????????????? ????????? ??????, ???????????? ????????????????????? ??????????????????????????? ????????????????????? ???????????? ???????????? ????????????
                                                    ???????????????????????? ????????????????????? ??? ?????????????????????????????? ?????????????????? ???????????? ???????????? ??????????????? ?????????????????????
                                                    ???????????????????????? ????????? ???????????? ?????????.
                                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <! End testimonial item -- -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <img src="assets/img/testimonials/testimonials-2.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Nikita Jain</h3>
                                                <h4>Patient</h4>
                                                <p>
                                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>Very ethical
                                                    and technologically advanced clinical care. This hospital is setting
                                                    up an example of excellent health care to Marathwada area and yes we
                                                    can assure
                                                    and happy that our health is in safe hand. Very talented and
                                                    experience doctor team noticed here, congratulations to all of us
                                                    and best wishes for Family Wellness Center team
                                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End testimonial item -- -->


                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <img src="assets/img/testimonials/testimonials-2.jpg"
                                                    class="testimonial-img" alt="">
                                                <h3>Aarati Patil</h3>
                                                <h4>Patient</h4>
                                                <p>
                                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Family
                                                    Wellness Center provides good medical treatment.
                                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- - End testimonial item -- -->

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </section>
                    <!-- End Testimonials Section -->


                </div>

            </div>
        </div>
    </div>
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top" style="background-color: black;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-4 footer-contact">
                        <h4 style="color: rgb(255, 102, 0);"><b>Family Wellness Center</b></h4>
                        <p>
                            Near Deogiri College <br> Railway Station Road<br> Aurangabad MH <br><br>
                            <strong>Phone:</strong> +91 1234567890<br>
                            <strong>Email:</strong> contact@familywc.org<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 footer-links">
                        <h4 style="color: rgb(13, 255, 0);">Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.html">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#faq">FAQ</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 footer-links">
                        <h4 style="color: rgb(13, 255, 0);">Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Ambulance</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">ICU</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Pathology</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Radiology</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Casualty</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Family Wellness Center</span></strong>. All Rights Reserved
                </div>
                <div class="credits">

                    Designed by <a href="index.html">E-Health Tracking</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=+919960930629&text=Hello! Family Wellness Center"
                    target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>

            </div>
        </div>
    </footer>
    <!-- End Footer -->


    </main>
    <!-- End #main -->



    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- JS file for swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




    <!----JS file for counter-->
    <script src="assets/files/purecounter/purecounter.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>