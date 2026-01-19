<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>مستشفي دار السلام التخصصيه</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/2.jpeg" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Bootstrap RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!-- Template Styles -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .input-group input.form-control {
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }

        .input-group .btn {
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
            padding: 0.75rem 1.5rem;
        }

        a.text-light:hover {
            color: #0d6efd;
            text-decoration: underline;
        }
    </style>


    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
    <style>
        .price-carousel .owl-stage-outer {
            overflow: visible !important;
        }

        .price-carousel .owl-item {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Topbar -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body ps-3" href="#">
                            <i class="bi bi-telephone ms-2"></i> 01211197358
                        </a>

                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-body px-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="text-body px-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="text-body px-2" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="text-body ps-2" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0">
                <a href="#" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary">
                        <i class="fa fa-clinic-medical ms-2"></i>دار السلام
                    </h1>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto py-0">
                        <a href="welcome" class="nav-item nav-link active">الرئيسية</a>
                        <a href="about" class="nav-item nav-link">من نحن</a>
                        <a href="services" class="nav-item nav-link">الخدمات</a>
                        <a href="team" class="nav-item nav-link">فريق الاطباء</a>
                        <a href="pricing" class="nav-item nav-link">الأسعار</a>

                        <!--<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                صفحات
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">المدونة</a>
                                <a href="#" class="dropdown-item">تفاصيل المقال</a>
                                <a href="#" class="dropdown-item">فريق العمل</a>
                                <a href="#" class="dropdown-item">آراء العملاء</a>
                                <a href="#" class="dropdown-item">حجز موعد</a>
                            </div>
                        </div>-->

                        <a href="Apointment" class="nav-item nav-link">الحجز </a>
                        <a href="contact" class="nav-item nav-link">تواصل معنا</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Hero -->
    <div class="container-fluid hero-header d-flex align-items-center"
        style="min-height: 90vh; background-color: #003b7a;">
        <div class="container d-flex align-items-center">

            <!-- النص -->
            <div class="hero-text text-white" style="max-width: 600px;">
                <h5 class="text-uppercase border-bottom border-5 pb-2"
                    style="border-color: rgba(255, 255, 255, 0.3)!important;">
                    مرحباً بكم في دار السلام
                </h5>
                <h2 class="display-4 mb-3">
                    أفضل حلول الرعاية الصحية
                </h2>
                <h2 class="display-4 mb-3">
                    في مدينتك
                </h2>
            </div>
        </div>
    </div>

    <!--<div class="pt-2">
                        <a href="#" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">
                            ابحث عن طبيب
                        </a>
                        <a href="#" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">
                            حجز موعد
                        </a>
                    </div>-->
    </div>
    </div>
    </div>
    </div>

    <!-- Laravel Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 gy-4 align-items-start">

                <div class="col-lg-5 col-md-6">
                    <h4 class="text-primary mb-4">تواصل معنا</h4>
                    <p>نقدم أفضل الخدمات الطبية بأحدث التقنيات.</p>
                    <p><i class="fa fa-map-marker-alt text-primary ms-2"></i> الاسكندريه - العامريه </p>
                    <!--<p><i class="fa fa-envelope text-primary ms-2"></i>info@example.com</p>-->
                    <p><i class="fa fa-phone-alt text-primary ms-2"></i> 01211197358 </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">روابط سريعة</h4>
                    <a class="text-light d-block mb-2" href="welcome">الرئيسية</a>
                    <a class="text-light d-block mb-2" href="about">من نحن</a>
                    <a class="text-light d-block mb-2" href="services">الخدمات</a>
                    <a class="text-light d-block mb-2" href="team">فريق الاطباء</a>
                    <a class="text-light d-block" href="contact">تواصل معنا</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">النشرة البريدية</h4>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control p-3" placeholder="بريدك الإلكتروني">
                            <button class="btn btn-primary">اشتراك</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light text-center py-3">
        © 2026 جميع الحقوق محفوظة
    </div>


    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>