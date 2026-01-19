@extends('layouts.master')


@section('content')
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