<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Smart UMKM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('landing_page/images/Logo Smart UMKM.png') }}" />
    <link href="{{ asset('landing_page/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('landing_page/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('landing_page/css/style.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="navbar">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="{{ asset('landing_page/images/Logo Smart UMKM.png') }}" alt="" class="logo-dark"
                    height="64" />
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#layanan" class="nav-link">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-1-bg" style="background-image: url({{ asset('landing_page/images/hero-1-bg-img.png') }})"
        id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h1 class="hero-1-title fw-bold text-shadow mb-4" data-aos="fade-right" data-aos-duration="2000">
                        Solusi Digital Terpercaya untuk UMKM
                    </h1>
                    <div class="w-75 mb-5 mb-lg-0">
                        <p class="text-muted mb-5 pb-5 font-size-17" data-aos="zoom-in-up" data-aos-duration="1000">
                            Transformasikan bisnismu dengan teknologi yang mudah dan andal, didukung tim ahli. Mulai
                            perjalanan digitalmu bersama kami!
                        </p>
                        <p data-aos="fade-up" data-aos-duration="2000">
                            <span class="font-size-20 me-2">🥳️</span>Dapatkan tips terbaru tentang transformasi digital
                            langsung di email Anda!
                        </p>
                        <div class="subscribe-form" data-aos="fade-up" data-aos-duration="3000">
                            <form action="#">
                                <input type="text" placeholder="Masukan email..." />
                                <button type="submit" class="btn btn-primary">Langganan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="mt-5 mt-lg-0" data-aos="fade-left" data-aos-duration="2000">
                        <img src="{{ asset('landing_page/images/hero-1.png') }}" alt=""
                            class="img-fluid d-block mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 align-self-center" data-aos="fade-right" data-aos-offset="300"
                    data-aos-duration="1000" data-aos-easing="ease-in-sine">
                    <div class="mb-4 mb-lg-0">
                        <h3 class="">Mengapa Memilih Kami?</h3>
                        <p class="text-muted mb-4">
                            Solusi inovatif dan dukungan penuh untuk transformasi digital bisnis Anda.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4 mt-md-5"
                                data-aos="fade-down-right" data-aos-duration="2000">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-collage"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4">
                                    Solusi Inovatif dan Terpersonalisasi
                                </h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">
                                    Produk yang disesuaikan dengan kebutuhan spesifik UMKM, dengan antarmuka yang mudah
                                    digunakan.
                                </p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-trending-up"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4">
                                    Dukungan Teknis 24/7
                                </h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">
                                    Layanan bantuan setiap saat, memastikan operasional Anda berjalan tanpa gangguan.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4" data-aos="fade-down-left"
                                data-aos-duration="2000">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-security"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4">
                                    Inovasi Berkelanjutan dan After-Sales Service
                                </h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">
                                    Pembaruan teknologi terus-menerus dengan dukungan purna jual yang handal.
                                </p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-database-lock"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4">
                                    Kemitraan Strategis
                                </h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">
                                    Kerja sama dengan berbagai pihak untuk mendukung digitalisasi UMKM di Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light feather-bg-img"
        style="background-image: url({{ asset('landing_page/images/features-bg-img.png') }})" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3" data-aos="zoom-in" data-aos-duration="2000">
                            Tentang Kami
                        </h3>
                        <p class="text-muted font-size-15" data-aos="zoom-in" data-aos-duration="2500">
                            SmartUMKM adalah mitra digital UMKM Indonesia. Kami menyediakan solusi teknologi inovatif
                            yang dirancang untuk membantu bisnis lokal tumbuh dan berkembang di era digital.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 align-self-center">
                    <div class="mb-4 mb-lg-0" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1000"
                        data-aos-easing="ease-in-sine">
                        <img src="{{ asset('landing_page/images/about-1.png') }}" alt=""
                            class="img-fluid d-block mx-auto" />
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 align-self-center" data-aos="fade-up" data-aos-duration="2000">
                    <p class="font-weight-medium text-uppercase mb-2">
                        <i class="mdi mdi-chart-bubble h2 text-primary me-1 align-middle"></i>
                        Seputar Kami
                    </p>
                    <h3 class="font-weight-semibold line-height-1_4 mb-4">
                        <b>Dedikasi</b> untuk <b>Transformasi</b> Digital <b>UMKM</b>
                    </h3>
                    <p class="text-muted font-size-15 mb-4">
                        SmartUMKM hadir untuk membantu UMKM di Indonesia berkembang melalui solusi digital yang inovatif
                        dan efisien. Kami berfokus pada pengembangan teknologi yang mudah digunakan dan sesuai dengan
                        kebutuhan spesifik bisnis Anda.
                    </p>
                    <div class="mt-5">
                        <a href="#" class="btn btn-primary me-2">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light" id="layanan">
        <div class="container" data-aos="zoom-in" data-aos-duration="2000">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Pilih Paket Layanan Kami</h3>
                        <p class="text-muted font-size-15">
                            Temukan solusi digital yang sesuai dengan kebutuhan bisnis Anda. Mulai perjalanan
                            transformasi digital dengan layanan terbaik dari SmartUMKM.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="2000">
                    <div class="pricing-box rounded text-center p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account h1"></i>
                        </div>
                        <h4 class="title mb-3">Starter Package</h4>
                        <h1 class="fw-bold mb-0">
                            <b><sup class="h4 me-2 fw-bold">Rp</sup>1.500.000</b>
                        </h1>
                        <p class="text-muted font-weight-semibold">/ Project</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Pembuatan Website Sederhana</li>
                            <li class="text-muted">Tampilan Responsif</li>
                            <li class="text-muted">Dukungan Teknis 1 Bulan</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary pr-btn">Pesan Sekarang</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="{{ asset('landing_page/images/pricing-bottom-bg.png') }}" alt=""
                                    class="img-fluid d-block mx-auto" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="3000">
                    <div class="pricing-box rounded text-center active p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account-multiple h1"></i>
                        </div>
                        <h4 class="title mb-3">Business Package</h4>
                        <h1 class="fw-bold mb-0">
                            <b><sup class="h4 me-2 fw-bold">Rp</sup>4.000.000</b>
                        </h1>
                        <p class="text-muted font-weight-semibold">/ Project</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Website E-Commerce</li>
                            <li class="text-muted">Integrasi Pembayaran</li>
                            <li class="text-muted">Dukungan Teknis 3 Bulan</li>
                        </ul>
                        <a href="#" class="btn btn-primary pr-btn">Pesan Sekarang</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="{{ asset('landing_page/images/pricing-bottom-bg.png') }}" alt=""
                                    class="img-fluid d-block mx-auto" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="2000">
                    <div class="pricing-box rounded text-center p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account-group h1"></i>
                        </div>
                        <h4 class="title mb-3">Premium Package</h4>
                        <h1 class="fw-bold mb-0">
                            <b><sup class="h4 me-2 fw-bold">Rp</sup>10.000.000</b>
                        </h1>
                        <p class="text-muted font-weight-semibold">/ Project</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Website Custom dengan Fitur Lengkap</li>
                            <li class="text-muted">Integrasi API dan Sistem Bisnis</li>
                            <li class="text-muted">Dukungan Teknis 6 Bulan</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary pr-btn">Pesan Sekarang</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="{{ asset('landing_page/images/pricing-bottom-bg.png') }}" alt=""
                                    class="img-fluid d-block mx-auto" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000"
                    data-aos-easing="ease-in-sine">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Hubungi Kami</h3>
                        <p class="text-muted font-size-15">
                            Ayo wujudkan ide digital Anda bersama SmartUMKM! Kami siap membantu menjawab semua
                            pertanyaan Anda dan memberikan solusi terbaik untuk bisnis Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 align-self-center">
                    <div class="custom-form mb-5 mb-lg-0">
                        <form method="post" name="myForm" onsubmit="" data-aos="fade-right"
                            data-aos-offset="300" data-aos-duration="1000" data-aos-easing="ease-in-sine">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama*</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Nama..." />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email*</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Email..." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Pesan*</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Pesan anda..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">
                                        Kirim Pesan
                                        <i class="icon-size-15 ms-2 icon" data-feather="send"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="contact-detail text-muted ms-lg-5" data-aos="fade-left" data-aos-offset="300"
                        data-aos-duration="1000" data-aos-easing="ease-in-sine">
                        <p class="">
                            <i class="icon-xs icon me-1" data-feather="mail"></i> :
                            <span>support@smartumkm.com</span>
                        </p>
                        <p class="">
                            <i class="icon-xs icon me-1" data-feather="link"></i> :
                            <span>www.smartumkm.com</span>
                        </p>
                        <p class="">
                            <i class="icon-xs icon me-1" data-feather="phone-call"></i> :
                            <span>(+62) 123 456 7890</span>
                        </p>
                        <p class="">
                            <i class="icon-xs icon me-1" data-feather="clock"></i> :
                            <span>9:00 AM - 6:00 PM</span>
                        </p>
                        <p class="">
                            <i class="icon-xs icon me-1" data-feather="map-pin"></i> :
                            <span>Midle Farm</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer" style="background-image: url({{ asset('landing_page/images/footer-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-5">
                        <img src="{{ asset('landing_page/images/Logo Smart UMKM.png') }}" alt=""
                            class="" height="100" />
                        <p class="text-white-50 my-4 font-size-15">
                            Solusi Digital untuk Kemajuan UMKM Indonesia. Bersama kami, wujudkan transformasi bisnis
                            Anda di era digital.
                        </p>
                        <ul class="list-inline footer-social-icon-content">
                            <li class="list-inline-item me-4">
                                <a href="#" class="footer-social-icon facebook"><i class=""
                                        data-feather="facebook"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#" class="footer-social-icon"><i class=""
                                        data-feather="twitter"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#" class="footer-social-icon"><i class=""
                                        data-feather="instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="footer-social-icon"><i class=""
                                        data-feather="linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-3">About Us</h6>
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link">Works</a></li>
                                <li><a href="#" class="footer-link">Strategy</a></li>
                                <li><a href="#" class="footer-link">Releases</a></li>
                                <li><a href="#" class="footer-link">Press</a></li>
                                <li><a href="#" class="footer-link">Mission</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-3">Customers</h6>
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link">Trending</a></li>
                                <li><a href="#" class="footer-link">Popular</a></li>
                                <li><a href="#" class="footer-link">Customers</a></li>
                                <li><a href="#" class="footer-link">Features</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-3">Support</h6>
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link">Developers</a></li>
                                <li><a href="#" class="footer-link">Support</a></li>
                                <li><a href="#" class="footer-link">Customer Service</a></li>
                                <li><a href="#" class="footer-link">Get Started</a></li>
                                <li><a href="#" class="footer-link">Guide</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-alt py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="text-white-50 font-size-15 mb-0">
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            © SmartUMKM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content login-page">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4">Welcome To SmartUMKM</h3>
                        <h4 class="text-uppercase text-primary"><b>Login</b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form>
                            <div class="form-group">
                                <label for="email">Username / Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="emailanda@gmail.com" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" />
                            </div>
                            <a href="#" class="float-end text-muted font-size-15">Lupa Password.?</a>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                <label class="custom-control-label font-size-15" for="customCheck1">Remember
                                    Me</label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                    <i class="icon-size-15 icon ms-1" data-feather="arrow-right-circle"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content login-page">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4">Welcome To SmartUMKM</h3>
                        <h4 class="text-uppercase text-primary"><b>Register</b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form>
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control" id="username"
                                    placeholder="Enter Name" />
                            </div>
                            <div class="form-group">
                                <label for="email2">Email</label>
                                <input type="email" class="form-control" id="email2"
                                    placeholder="emailanda@gmail.com" />
                            </div>
                            <div class="form-group">
                                <label for="password2">Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="Password" />
                            </div>
                            <a href="#" class="float-end text-muted font-size-15">Lupa Password.?</a>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                <label class="custom-control-label font-size-15" for="customCheck2">Remember
                                    Me</label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                    <i class="icon-size-15 icon ms-1" data-feather="arrow-right-circle"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('landing_page/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/gumshoe.polyfills.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/feather.js') }}"></script>
    <script src="{{ asset('landing_page/js/unicons.js') }}"></script>
    <script src="{{ asset('landing_page/js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
