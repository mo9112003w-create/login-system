@extends('layouts.master')

@section('content')
   <!-- تواصل معنا Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">هل لديك أي أسئلة؟</h5>
                <h1 class="display-4">لا تتردد في التواصل معنا</h1>
            </div>
            <div class="row g-5 mb-5">

                <!-- العنوان -->
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                            style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">العامريه - عبدالقادر-بحري-شارع مدرسه سيدي عبد القادر امام مسجد الفاروق</h6>
                    </div>
                </div>

                <!-- الهاتف -->
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                            style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">01211197358</h6>
                    </div>
                </div>

                <!-- البريد الإلكتروني -->
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                            style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">info@example.com</h6>
                    </div>
                </div>

            </div>

            <!-- الخريطة -->
<div class="row">
    <div class="col-12" style="height: 500px;">
        <div class="position-relative h-100">
            <!-- موقع مستشفى دار السلام التخصصية - العامرية (عبد القادر) -->
            <iframe class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3415.3045233182!2d29.8242080!3d31.1292020!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9ede9719adbdb%3A0x6f029641e120c1da!2z2YXYs9iq2LTZgdmJINiv2KfYsSDYp9mE2LPZhNin2YUg2KfZhNiq2K7YtdmB2YrZhw!5e0!3m2!1sar!2seg!4v1714607000000!5m2!1sar!2seg"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
</div>
</div>

            <!-- نموذج التواصل -->
            <!--<div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0">
                        <form>
                            <div class="row g-3">-->

                                <!-- الاسم -->
                                <!--<div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="اسمك"
                                        style="height: 55px;">
                                </div>-->

                                <!-- البريد الإلكتروني -->
                                <!-- <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="بريدك الإلكتروني"
                                        style="height: 55px;">
                                </div>-->

                                <!-- الموضوع -->
                                <!-- <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="الموضوع"
                                        style="height: 55px;">
                                </div>-->

                                <!-- الرسالة -->
                                <!-- <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="5"
                                        placeholder="رسالتك"></textarea>
                                </div>-->

                                <!-- زر الإرسال -->
                                <!-- <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">إرسال الرسالة</button>
                                </div>-->

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- تواصل معنا End -->
@endsection
