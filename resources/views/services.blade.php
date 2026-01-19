@extends('layouts.master')


@section('content')
   <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-3" style="max-width: 500px;">
                <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5">خدماتنا</h2>
                <h1 class="display-4">أفضل الخدمات الطبية</h1>
            </div>

            <div class="row g-5">
                <!-- خدمة 1 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3">الرعاية الطارئة</h4>
                        <p class="m-0">نوفر رعاية طبية عاجلة لجميع الحالات الطارئة لضمان سلامتك.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- خدمة 2 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-procedures text-white"></i>
                        </div>
                        <h4 class="mb-3">العمليات الجراحية</h4>
                        <p class="m-0">نقوم بإجراء العمليات الجراحية بأعلى معايير الجودة والسلامة.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- خدمة 3 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3">الفحوصات الخارجية</h4>
                        <p class="m-0">نقدم فحوصات دقيقة لجميع الحالات لضمان تشخيص صحيح.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- خدمة 4 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-ambulance text-white"></i>
                        </div>
                        <h4 class="mb-3">خدمة الإسعاف</h4>
                        <p class="m-0">نوفر سيارات إسعاف مجهزة للتدخل السريع عند الحاجة.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- خدمة 5 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-pills text-white"></i>
                        </div>
                        <h4 class="mb-3">الأدوية والصيدلية</h4>
                        <p class="m-0">نوفر جميع الأدوية والخدمات الصيدلانية داخل المستشفى.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- خدمة 6 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-microscope text-white"></i>
                        </div>
                        <h4 class="mb-3">تحاليل الدم</h4>
                        <p class="m-0">نجري جميع اختبارات الدم بدقة لضمان نتائج موثوقة.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

@endsection