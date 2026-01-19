@extends('layouts.master')

@section('content')
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
                                    <select name="pricing_plan_id" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>اختر القسم</option>
                                        @foreach($plans as $plan)
                                            <option value="{{ $plan->id }}">{{ $plan->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('pricing_plan_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- الاسم -->
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="اسمك" style="height: 55px;" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- رقم الهاتف -->
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="phone" class="form-control bg-light border-0" placeholder="رقم الهاتف" style="height: 55px;" value="{{ old('phone') }}">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
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
@endsection
