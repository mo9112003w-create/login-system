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

@endsection