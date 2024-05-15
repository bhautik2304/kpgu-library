@extends('layouts.home-layout')
{{-- @section('title') --}}

@section('content')
    <!-- =======================
                                                                                                Main Banner START -->
    <section class="py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
                            <!-- Card item START -->
                            <div class="card overflow-hidden h-400px h-sm-600px rounded-0"
                                style="background-image:url(students/assets/images/category/hotel/06.jpg); background-position: center left; background-size: cover;">
                                <!-- Background dark overlay -->
                                <div class="bg-overlay bg-dark opacity-3"></div>
                                <!-- Card image overlay -->
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-11 col-lg-7">
                                                <h6 class="text-white fw-normal mb-0">20/05/2024</h6>
                                                <!-- Title -->
                                                <h1 class="text-white display-6">💖 Culturel Events</h1>
                                                <a href="#" class="btn btn-primary mb-0">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="card overflow-hidden h-400px h-sm-600px bg-parallax text-center rounded-0"
                                data-jarallax-video="https://www.youtube.com/watch?v=j56YlCXuPFU">
                                <!-- Background dark overlay -->
                                <div class="bg-overlay bg-dark opacity-3"></div>
                                <!-- Card image overlay -->
                                <div class="card-img-overlay d-flex align-items-center">
                                    <div class="container w-100 my-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-11 col-lg-8">
                                                <!-- Title -->
                                                <h1 class="text-white">Ai Seminar Master Class</h1>
                                                <a href="#" class="btn btn-dark mb-0">Register Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                Main Banner END -->

    <!-- =======================
                                                                                                Special offer START -->
    <section class="pb-0">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="mb-0">Campus Upcomming Event</h3>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                <div class="tiny-slider-inner mb-8" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false"
                    data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-sm="1">

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="students/assets/images/offer/06.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">Spa Package Offer</a></h6>
                                    <small>Valid through Dec 2022</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="students/assets/images/offer/07.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">Elevate Your Stay</a></h6>
                                    <small>Valid through Feb 2023</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="students/assets/images/offer/08.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">Pass Holder Package</a></h6>
                                    <small>Valid through Feb 2023</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->

                    <!-- Offer card START -->
                    <div>
                        <div class="card">
                            <img src="students/assets/images/offer/05.jpg" class="card-img" alt="">
                            <!-- Card body -->
                            <div class="position-absolute top-100 start-50 translate-middle w-100">
                                <div class="card-body text-center bg-mode shadow rounded mx-4 p-3">
                                    <h6 class="card-title mb-1"><a href="#">2023 Golf Tournament Package</a></h6>
                                    <small>Valid through Jan 2021</small>
                                    <div class="mt-2"><a href="#" class="btn btn-sm btn-dark mb-0">View Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer card END -->
                </div>
            </div>
            <!-- Slider END -->
        </div>
    </section>
    <!-- =======================
                                                                                                Special offer END -->

    <!-- =======================
                                                                                            Near by START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Explore Book Category</h2>
                </div>
            </div>

            @php
                use App\Models\{auther, book, bookcategory, student, User};
            @endphp

            <div class="row g-4 g-md-5">
                @foreach (bookcategory::all() as $category)
                    <!-- Card item START -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card bg-transparent text-center p-1 h-100">
                            <!-- Image -->
                            <img src="{{ asset('storage/' . $category->img) }}" class="rounded-circle" alt="">

                            <div class="card-body p-0 pt-3">
                                <h5 class="card-title"><a href="#" class="stretched-link">{{ $category->name }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Row END -->
        </div>
    </section>
    <!-- =======================
                                                                                            Near by END -->

    <section class="pt-0">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Explore Books</h2>
                </div>
            </div>
            <div class="row g-4">
                @foreach (book::all() as $book)
                    <!-- Card item START -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow p-2 pb-0 h-100">
                            <!-- Overlay item -->
                            <div class="position-absolute top-0 start-0 z-index-1 m-4">
                                <div class="badge bg-danger text-white">30% Off</div>
                            </div>

                            <!-- Slider START -->
                            <div class="tiny-slider arrow-round arrow-xs arrow-dark rounded-2 overflow-hidden">
                                <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false"
                                    data-items="1">
                                    <!-- Image item -->
                                    <div><img src="{{ asset('storage/' . $book->book_img_small) }}" alt="Card image">
                                    </div>
                                </div>
                            </div>
                            <!-- Slider END -->

                            <!-- Card body START -->
                            <div class="card-body px-3 pb-0">
                                <!-- Rating and cart -->
                                <div class="d-flex justify-content-between mb-3">
                                    <a href="#" class="badge bg-dark text-white"><i
                                            class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a>
                                    <a href="#" class="h6 mb-0 z-index-2"><i class="bi fa-fw bi-bookmark"></i></a>
                                </div>

                                <!-- Title -->
                                <h5 class="card-title"><a href="hotel-detail.html">{{ $book->name }}</a></h5>

                                {{-- <!-- List -->
                                <ul class="nav nav-divider mb-2 mb-sm-3">
                                    <li class="nav-item">Air Conditioning</li>
                                    <li class="nav-item">Wifi</li>
                                    <li class="nav-item">Kitchen</li>
                                    <li class="nav-item">Pool</li>
                                </ul> --}}
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START-->
                            {{-- <div class="card-footer pt-0">
                                <!-- Price and Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <!-- Price -->
                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-normal text-success mb-0 me-1">$750</h5>
                                        <span class="mb-0 me-2">/day</span>
                                        <span class="text-decoration-line-through">$1000</span>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="hotel-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View
                                            Detail<i class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Card item END -->
                @endforeach
            </div>
    </section>
@endsection
