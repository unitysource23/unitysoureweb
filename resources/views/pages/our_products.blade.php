@extends('layouts.master')
@section('title', 'Our Products')
@section('css')
@endsection
@section('content')
    <section class="our products">
        <div class="bg-[#f2fcf5] mt-5 sm:mt-8 lg:mt-10">
            <div class="mx-4 sm:mx-6 lg:mx-20">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">Get Started with Our Products</h1>
                <div class="swiper mySwiper3 py-5 sm:py-8">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
                                <div class="col-span-1 md:col-span-2 flex justify-center">
                                    <img src="{{ asset('images/smart-life.png') }}" class="max-w-[300px] sm:max-w-[400px] mx-auto" alt="">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex flex-col gap-3 text-center">
                                        <h1 class="font-semibold text-lg sm:text-xl md:text-2xl">Smart Life</h1>
                                        <h1 class="font-semibold text-primary text-sm sm:text-base md:text-lg">Hire Purchase Services</h1>
                                        <button class="bg-primary w-40 sm:w-56 text-white rounded-full px-4 sm:px-5 py-2 text-sm sm:text-lg">Use Demo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
                                <div class="col-span-1 md:col-span-2 relative flex justify-center">
                                    <img src="{{ asset('images/fast-move-1.png') }}" class="max-w-[300px] sm:max-w-[400px] mx-auto" alt="">
                                    <img src="{{ asset('images/fast-move.png') }}" class="absolute top-16 sm:top-20 left-4 sm:left-8 max-w-[250px] sm:max-w-[350px] mx-auto" alt="">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex flex-col gap-3 text-center">
                                        <h1 class="font-semibold text-lg sm:text-xl md:text-2xl">Smart Life</h1>
                                        <h1 class="font-semibold text-primary text-sm sm:text-base md:text-lg">Hire Purchase Services</h1>
                                        <button class="bg-primary w-40 sm:w-56 text-white rounded-full px-4 sm:px-5 py-2 text-sm sm:text-lg">Use Demo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            },
        });
        var swiper = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }
            },
        });
    </script>
@endsection