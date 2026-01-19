@extends('layouts.master')

@section('content')

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

                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">
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

@endsection


<style>
.pricing-card {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}
.pricing-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
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


