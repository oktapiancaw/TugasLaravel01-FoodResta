@extends('layouts.user', ['title' => 'Foodresta'])

@section('content')
    
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Food Resta</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('login') }}">Sign in</a></li>
            <li><a class="btn btn-primary text-white" href="{{ route('register') }}">Sign Up</a></li>

        </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>

    </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

    <div class="container">
        <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <div>
            <h1>Let's Manage Your Data!</h1>
            <h2>Make your Data more neat and detailed without the need for manual counting</h2>
            <a href="{{ route('register') }}" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
            <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
        </div>
    </div>

    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
                <h3>Learn more about us</h3>
                <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p>
                <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperd</li>
                </ul>
                <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate tera noden carma palorp mades tera.
                </p>
            </div>
            </div>
        </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

        <div class="row">
            <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
                <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                    <h4>Modi sit est</h4>
                    <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
                </li>
                <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                    <h4>Unde praesentium sed</h4>
                    <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
                </li>
                <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                    <h4>Pariatur explicabo vel</h4>
                    <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
                </li>
                <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                    <h4>Nostrum qui quasi</h4>
                    <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
                </li>
            </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                <figure>
                    <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
                </div>
                <div class="tab-pane" id="tab-2">
                <figure>
                    <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
                </div>
                <div class="tab-pane" id="tab-3">
                <figure>
                    <img src="assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
                </div>
                <div class="tab-pane" id="tab-4">
                <figure>
                    <img src="assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
                </div>
            </div>
            </div>
        </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
            </div>
            </div>

        </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
                <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
                </div>

                <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                </div>
                </div>
                <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
                </div>
                <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
                </div>
                <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            </div>

        </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

  