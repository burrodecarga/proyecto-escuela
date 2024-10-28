<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Proyecto José Luis Garzón</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('frontend.nav')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="p-0 mb-5 container-fluid">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-1.jpg') }}" alt="">
                <div class="top-0 position-absolute start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="mb-3 text-primary text-uppercase animated slideInDown">Best Online Courses
                                </h5>
                                <h1 class="text-white display-3 animated slideInDown">The Best Online Learning Platform
                                </h1>
                                <p class="pb-2 mb-4 text-white fs-5">Vero elitr justo clita lorem. Ipsum dolor at sed
                                    stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                    eirmod elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-2.jpg') }}" alt="">
                <div class="top-0 position-absolute start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="mb-3 text-primary text-uppercase animated slideInDown">Best Online Courses
                                </h5>
                                <h1 class="text-white display-3 animated slideInDown">Get Educated Online From Your Home
                                </h1>
                                <p class="pb-2 mb-4 text-white fs-5">Vero elitr justo clita lorem. Ipsum dolor at sed
                                    stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                    eirmod elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="pt-3 text-center service-item">
                        <div class="p-4">
                            <i class="mb-4 fa fa-3x fa-graduation-cap text-primary"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="pt-3 text-center service-item">
                        <div class="p-4">
                            <i class="mb-4 fa fa-3x fa-globe text-primary"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="pt-3 text-center service-item">
                        <div class="p-4">
                            <i class="mb-4 fa fa-3x fa-home text-primary"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="pt-3 text-center service-item">
                        <div class="p-4">
                            <i class="mb-4 fa fa-3x fa-book-open text-primary"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('frontend/img/about.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="bg-white section-title text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to eLEARNING</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                        amet</p>
                    <div class="mb-4 row gy-2 gx-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International
                                Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International
                                Certificate</p>
                        </div>
                    </div>
                    <a class="px-5 py-3 mt-2 btn btn-primary" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="py-5 container-xxl category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('frontend/img/cat-1.jpg') }}" alt="">
                                <div class="bottom-0 px-3 py-2 text-center bg-white position-absolute end-0"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('frontend/img/cat-2.jpg') }}" alt="">
                                <div class="bottom-0 px-3 py-2 text-center bg-white position-absolute end-0"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="overflow-hidden position-relative d-block" href="">
                                <img class="img-fluid" src="{{ asset('frontend/img/cat-3.jpg') }}" alt="">
                                <div class="bottom-0 px-3 py-2 text-center bg-white position-absolute end-0"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="overflow-hidden position-relative d-block h-100" href="">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('frontend/img/cat-4.jpg') }}" alt="" style="object-fit: cover;">
                        <div class="bottom-0 px-3 py-2 text-center bg-white position-absolute end-0"
                            style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('frontend/img/course-1.jpg') }}" alt="">
                            <div class="bottom-0 mb-4 w-100 d-flex justify-content-center position-absolute start-0">
                                <a href="#" class="flex-shrink-0 px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 px-3 btn btn-sm btn-primary"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="p-4 pb-0 text-center">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="py-2 text-center flex-fill border-end"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="py-2 text-center flex-fill border-end"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="py-2 text-center flex-fill"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('frontend/img/course-2.jpg') }}" alt="">
                            <div class="bottom-0 mb-4 w-100 d-flex justify-content-center position-absolute start-0">
                                <a href="#" class="flex-shrink-0 px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 px-3 btn btn-sm btn-primary"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="p-4 pb-0 text-center">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="py-2 text-center flex-fill border-end"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="py-2 text-center flex-fill border-end"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="py-2 text-center flex-fill"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('frontend/img/course-3.jpg') }}" alt="">
                            <div class="bottom-0 mb-4 w-100 d-flex justify-content-center position-absolute start-0">
                                <a href="#" class="flex-shrink-0 px-3 btn btn-sm btn-primary border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 px-3 btn btn-sm btn-primary"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="p-4 pb-0 text-center">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="py-2 text-center flex-fill border-end"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="py-2 text-center flex-fill border-end"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="py-2 text-center flex-fill"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="px-3 text-center bg-white section-title text-primary">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img/team-4.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="px-1 pt-2 bg-light d-flex justify-content-center">
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-sm-square btn-primary" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="px-3 text-center bg-white section-title text-primary">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle"
                        src="{{ asset('frontend/img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle"
                        src="{{ asset('frontend/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle"
                        src="{{ asset('frontend/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 border rounded-circle"
                        src="{{ asset('frontend/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="pt-5 mt-5 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="pt-2 d-flex">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Gallery</h4>
                    <div class="pt-2 row g-2">
                        <div class="col-4">
                            <img class="p-1 img-fluid bg-light" src="{{ asset('frontend/img/course-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="p-1 img-fluid bg-light" src="{{ asset('frontend/img/course-2.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="p-1 img-fluid bg-light" src="{{ asset('frontend/img/course-3.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="p-1 img-fluid bg-light" src="{{ asset('frontend/img/course-2.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="p-1 img-fluid bg-light" src="{{ asset('frontend/img/course-3.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="p-1 img-fluid bg-light" src="{{ asset('frontend/img/course-1.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3 text-white">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="mx-auto position-relative" style="max-width: 400px;">
                        <input class="py-3 border-0 form-control w-100 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="text-center col-md-6 text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
