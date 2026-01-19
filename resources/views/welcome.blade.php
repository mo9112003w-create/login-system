@extends('layouts.master')


@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <!-- الصورة على الشمال -->
                <div class="col-lg-5">
                    <img src="img/about.jpg" alt="About Us" class="rounded w-100" style="height: 500px; object-fit: cover;">
                </div>

                <!-- النص على اليمين -->
                <div class="col-lg-7 text-end">
                    <div class="mb-3">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">من نحن</h5>
                        <h1 class="display-4">أفضل رعاية طبية لك ولعائلتك</h1>
                    </div>
                    <p>
                        نقدم أفضل الخدمات الطبية بأحدث التقنيات وبأعلى جودة ممكنة لضمان راحتكم وسلامتكم.
                        فريقنا مؤهل لتقديم الرعاية المثلى لجميع أفراد الأسرة.
                    </p>

                    <!-- المميزات -->
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">مؤهلين<small class="d-block text-primary">أطباء</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">طوارئ<small class="d-block text-primary">خدمات</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">دقيقة<small class="d-block text-primary">اختبارات</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">مجانية<small class="d-block text-primary">سيارة إسعاف</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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

    <!-- Appointment Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">

                <!-- نص دعائي على اليسار -->
                <div class="col-lg-6 mb-5 mb-lg-0 text-end">
                    <div class="text-end">
                        <h1 class="d-inline-block text-white text-uppercase border-bottom border-5">الحجز</h1>
                        <h1 class="display-4">احجز موعداً لعائلتك</h1>
                    </div>
                    <p class="text-white mb-5">
                        نقدم أفضل الخدمات الطبية مع أحدث التقنيات لضمان راحتكم وسلامتكم. فريقنا مستعد لتقديم الرعاية الأمثل
                        لكل أفراد الأسرة.
                    </p>
                </div>

                <!-- نموذج الحجز على اليمين -->
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">احجز موعدك</h1>

                        <!-- عرض رسالة نجاح -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">

                                <!-- اختيار القسم -->
                                <div class="col-12 col-sm-6">
                                    <select name="pricing_plan_id" class="form-select bg-light border-0"
                                        style="height: 55px;">
                                        <option selected>اختر القسم</option>
                                        @foreach($plans as $plan)
                                            <option value="{{ $plan->id }}">{{ $plan->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- الاسم -->
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="اسمك"
                                        style="height: 55px;">
                                </div>

                                <!-- رقم الهاتف -->
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="phone" class="form-control bg-light border-0"
                                        placeholder="رقم الهاتف" style="height: 55px;">
                                </div>

                                <!-- زر الحجز -->
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">احجز الآن</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5" style="background: #f8f9fa;">
        <div class="container">

            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                    الباقات الطبية
                </h5>
                <h1 class="display-4">برامج طبية مميزة</h1>
            </div>

            <div class="row g-4">

                @forelse ($plans as $plan)
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing-card text-center p-4 rounded shadow-sm">

                            <div class="pricing-icon mb-3">
                                <i class="fa {{ $plan->icon }} text-primary fa-3x"></i>
                            </div>

                            <h3>{{ $plan->title }}</h3>

                            <p class="price">
                                <span>EGP{{ $plan->price }}</span>
                            </p>

                            <ul class="list-unstyled mt-3 mb-4">
                                <li>{{ $plan->feature1 }}</li>
                                <li>{{ $plan->feature2 }}</li>
                                <li>{{ $plan->feature3 }}</li>
                                <li>{{ $plan->feature4 }}</li>
                            </ul>

                            <a href="Apointment" class="btn btn-primary rounded-pill py-2 px-4">
                                اشترك الآن
                            </a>

                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <p>لا توجد باقات متاحة حاليًا</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <style>
        .pricing-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .pricing-card .price {
            font-size: 24px;
            font-weight: bold;
            color: #0d6efd;
        }

        .pricing-card ul li {
            margin: 10px 0;
            font-size: 14px;
        }
    </style>


    <!-- فريق الأطباء Start -->
    <div class="container-fluid py-5" style="background: #f8f9fa;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">أطباؤنا</h5>
                <h1 class="display-4">أخصائيون صحيون مؤهلون</h1>
            </div>

            <div class="row g-4">
                @forelse($doctors as $doctor)
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card bg-light rounded shadow-sm overflow-hidden">
                            <img src="{{ $doctor->photo }}" class="img-fluid" style="height: 300px; object-fit: cover;">
                            <div class="p-4 text-center">
                                <h3>{{ $doctor->name }}</h3>
                                <h4 class="text-primary fst-italic mb-3">{{ $doctor->specialty }}</h4>
                                <h6 class="text-primary fst-italic mb-3">{{ $doctor->discarded }}</h6>
                                <div class="d-flex justify-content-center mt-3">
                                    @if($doctor->twitter)
                                        <a href="{{ $doctor->twitter }}"
                                            class="btn btn-primary btn-lg-square rounded-circle me-2"><i
                                                class="fab fa-twitter"></i></a>
                                    @endif
                                    @if($doctor->facebook)
                                        <a href="{{ $doctor->facebook }}"
                                            class="btn btn-primary btn-lg-square rounded-circle me-2"><i
                                                class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if($doctor->linkedin)
                                        <a href="{{ $doctor->linkedin }}" class="btn btn-primary btn-lg-square rounded-circle"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>لا يوجد أطباء حالياً.</p>
                @endforelse

            </div>
        </div>
    </div>
    <!-- فريق الأطباء End -->

    <style>
        .team-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .team-card h3 {
            margin-bottom: 0.5rem;
        }

        .team-card h6 {
            font-size: 0.9rem;
        }

        .team-card p {
            font-size: 0.85rem;
        }

        .btn-lg-square {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }
    </style>















@endsection