<!doctype html>

<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon/favicon.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <!-- fontawesome -->
        <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
        <!-- aos -->
        <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
        <!-- custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <title>GAS</title>
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm static-top fy-3">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#"><span class="primary">G</span>AS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bolder active" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="about">Tentang GAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="#">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="#">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bolder" href="#">Karir</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="btn btn-primary" href="#">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active bg-white">
                    <img src="assets/img/c1.jpg" class="d-block w-100 carousel-img" alt="..." />
                </div>
            </div>
        </div>
        <!-- end carousel -->

        <!-- about us -->
        <div class="about-us mt-5">
            <div class="container">
                <div class="title-container text-center ">
                    <h2 class="fw-bold">{{ $about->judul }}</h2>
                </div>
                <div class="row mt-12 justify-content-center">
                    <div class="col-md-6 text-center" data-aos="fade-left">
                        <p>
                            {{$about->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about us -->

        <!-- services -->
        <div class="services mt-5 bg-light py-5">
            <div class="container">
                <div class="title-container text-center">
                    <h2 class="fw-bold">SERVICES</h2>
                </div>
                <p class="text-center mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
                    aliquam.
                </p>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fa fa-book fa-lg fa-3x"></i>
                                </div>
                                <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                    nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fa fa-book fa-lg fa-3x"></i>
                                </div>
                                <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                    nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fa fa-book fa-lg fa-3x"></i>
                                </div>
                                <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                    nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fa fa-book fa-lg fa-3x"></i>
                                </div>
                                <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                    nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fa fa-book fa-lg fa-3x"></i>
                                </div>
                                <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                    nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fa fa-book fa-lg fa-3x"></i>
                                </div>
                                <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                    nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!-- end services -->

        <!-- portfolio us -->
        <div class="portfolio-us mt-5">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">PORTFOLIO</h2>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled d-flex portfolio-filters">
                        <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
                        <li data-filter=".filter-web" class="py-2 px-4">Web</li>
                        <li data-filter=".filter-design" class="py-2 px-4">Design</li>
                        <li data-filter=".filter-photo" class="py-2 px-4">Photography</li>
                    </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="mansory portfolio-container">
                            <div class="mansory-sizer"></div>
                            <div class="mansory-item m-2 portfolio-item filter-web">
                                <img src="assets/img/p1.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-design">
                                <img src="assets/img/p2.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-design">
                                <img src="assets/img/p3.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-web">
                                <img src="assets/img/p4.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-design">
                                <img src="assets/img/p5.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-photo">
                                <img src="assets/img/p6.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-web">
                                <img src="assets/img/p7.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-web">
                                <img src="assets/img/p8.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-photo">
                                <img src="assets/img/p9.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-web">
                                <img src="assets/img/p10.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-design">
                                <img src="assets/img/p11.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mansory-item m-2 portfolio-item filter-design">
                                <img src="assets/img/p12.jpg" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end portfolio us -->

        <!-- clients -->
        <div class="clients mt-5">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">CLIENTS</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b1.svg" class="img-fluid brand-image" alt="" />
                    </div>
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b2.svg" class="img-fluid brand-image" alt="" />
                    </div>
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b3.svg" class="img-fluid brand-image" alt="" />
                    </div>
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b4.svg" class="img-fluid brand-image" alt="" />
                    </div>
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b5.svg" class="img-fluid brand-image" alt="" />
                    </div>
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b6.svg" class="img-fluid brand-image" alt="" />
                    </div>
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b7.svg" class="img-fluid brand-image" alt="" />
                    </div>
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="assets/img/b8.svg" class="img-fluid brand-image" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- end clients -->

        <!-- footer -->
        <footer class="mt-5">
            <div class="footer-top bg-dark text-white p-5 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">COMPANY</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repeliat
                                consequuntur magnam commodi voluptatem quas? Itaque quo obcaecati
                                perspiciatis quaerat ullam!
                            </p>
                            <strong>Phone</strong> : <span>+628382223170 </span>
                            <br />
                            <strong>Email</strong> : <span>info@company.org </span>
                        </div>
                        <div class="col-md-2">
                            <h4 class="fw-bold">Our Services</h2>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Web Development
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Web Design
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Online Marketting
                                    </a>
                                </li>
                                    <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Graphic Design
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Photography
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h4 class="fw-bold">Useful Links</h2>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Services
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Portfolio
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">Join Our Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                                <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                                Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-down bg-darker text-white px-5 py-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="copyright">
                                &copy; Copyright <strong>Company</strong>. All Right Reserved
                            </div>
                            <div class="credits">
                                Design by me
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="social-links float-end">
                                <a href="" class="mx-2">
                                    <i class="fab fa-facebook fa-2x"></i>
                                </a>
                                <a href="" class="mx-2">
                                    <i class="fab fa-twitter fa-2x"></i>
                                </a>
                                <a href="" class="mx-2">
                                    <i class="fab fa-instagram fa-2x"></i>
                                </a>
                                <a href="" class="mx-2">
                                    <i class="fab fa-youtube fa-2x"></i>
                                </a>
                                <a href="" class="mx-2">
                                    <i class="fab fa-linkedin fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer  -->

        <!-- to top -->
        <a href="#" class="btn-to-top p-3">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- end to top -->

        <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/fontawesome/js/all.min.js"></script>
        <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
        <script src="assets/vendor/aos/dist/aos.js"></script>
        <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>

</html>