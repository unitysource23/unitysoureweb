@extends('layouts.master')
@section('title', 'About')
@section('css')
    <style>
        .arrow-shape {
            clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%);
        }
    </style>
@endsection
@section('content')
    <section class="px-4 sm:px-6 lg:px-12 py-12">
        <div class="relative w-full h-[200px] sm:h-[200px] md:h-[200px] lg:h-[250px] overflow-hidden rounded-2xl">
            <img src="{{ asset('images/abt-us-banner.jpg') }}" alt="About Us Banner"
                class="absolute inset-0 w-full h-full object-cover opacity-100 object-center">

            <div class="relative z-10 flex items-center h-full px-6 sm:px-10 text-white">
                <div>
                    <h2 class="text-3xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                        About Us
                    </h2>
                </div>
            </div>
        </div>
    </section>
        {{-- mission vision start --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 sm:px-8 py-12 bg-white items-stretch">
            <style>
                .equal-card {
                    display: flex;
                    flex-direction: column;
                    justify-content: start;
                    height: 100%;
                }
            </style>
            <div class="relative">
                <div class="absolute inset-0 top-3 left-3 bg-white rounded-3xl border border-black/20"></div>
                <div class="relative z-10 bg-[#4387AA] text-white rounded-3xl px-6 py-10 shadow-md equal-card">
                    <div class="flex justify-center mb-5">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Our Mission</h3>
                    <div class="w-16 h-1 bg-white mx-auto mb-4 rounded"></div>
                    <ul class="text-base font-light leading-relaxed tracking-wide space-y-3 list-none pl-6">
                        <li
                            class="relative before:absolute before:content-['•'] before:left-0 before:top-0 before:text-white before:text-lg before:leading-none pl-5 text-white/90">
                            It must be easy and simple to use for users.
                        </li>
                        <li
                            class="relative before:absolute before:content-['•'] before:left-0 before:top-0 before:text-white before:text-lg before:leading-none pl-5 text-white/90">
                            It must be fast, smooth, and good for users.
                        </li>
                        <li
                            class="relative before:absolute before:content-['•'] before:left-0 before:top-0 before:text-white before:text-lg before:leading-none pl-5 text-white/90">
                            It must be up to date with the times.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 top-3 left-3 bg-white rounded-3xl border border-black/20"></div>
                <div class="relative z-10 bg-[#F39C12] text-white rounded-3xl px-6 py-10 shadow-md equal-card">
                    <div class="flex justify-center mb-5">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Our Vision</h3>
                    <div class="w-16 h-1 bg-white mx-auto mb-4 rounded"></div>
                    <ul class="text-base font-light leading-relaxed tracking-wide space-y-3 list-none pl-6">
                        <li
                            class="relative before:absolute before:content-['•'] before:left-0 before:top-0 before:text-white before:text-lg before:leading-none pl-5 text-white/90">
                            We must successfully establish ourselves as a trusted IT Solution Provider for businesses.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 top-3 left-3 bg-white rounded-3xl border border-black/20"></div>
                <div class="relative z-10 bg-[#18A689] text-white rounded-3xl px-6 py-10 shadow-md equal-card">
                    <div class="flex justify-center mb-5">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h2v12H4V6zm6 4h2v8h-2v-8zm6-6h2v14h-2V4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Our Values</h3>
                    <div class="w-16 h-1 bg-white mx-auto mb-4 rounded"></div>
                    <ul class="text-base font-light leading-relaxed tracking-wide space-y-3 list-none pl-6">
                        <li
                            class="relative before:absolute before:content-['•'] before:left-0 before:top-0 before:text-white before:text-lg before:leading-none pl-5 text-white/90">
                            If users have difficulties, they must help with full sympathy.
                        </li>
                        <li
                            class="relative before:absolute before:content-['•'] before:left-0 before:top-0 before:text-white before:text-lg before:leading-none pl-5 text-white/90">
                            Provide service to users with sincerity.
                        </li>
                        <li
                            class="relative before:absolute before:content-['•'] before:left-0 before:top-0 before:text-white before:text-lg before:leading-none pl-5 text-white/90">
                            Accountability to users must provide service with full responsibility.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- meet the team start --}}
        <div>
            <div class="bg-[#f2fcf5] mt-10 sm:mt-20 md:mt-30 lg:mt-20 xl:mt-30">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">Our Professional
                    Team</h1>
                <div class="swiper mySwiper2" style="max-height: 400px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM3.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM2.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM1.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM4.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM5.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM6.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div
                        class="swiper-button-next outline outline-gray-400 outline-1 text-gray-600 hover:text-gray-800 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div
                        class="swiper-button-prev outline outline-gray-400 outline-1 text-gray-600 hover:text-gray-800 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>

                </div>
            </div>
        </div>

        <div class="">
            <div class="px-4 sm:px-6 lg:px-10">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl mt-10 mb-6 sm:my-12">
                    How we build good to great business
                </h1>

                <!-- Background Image Section -->
                <div class="relative bg-no-repeat bg-center bg-contain lg:bg-cover py-12 sm:py-16 lg:py-20">
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-12 max-w-7xl mx-auto px-2 sm:px-4">
                        <div class="bg-white p-5 sm:p-6 rounded-lg sm:rounded-xl shadow-md text-center">
                            <img src="{{ asset('images/research.png') }}" alt="Research Icon"
                                class="w-16 lg:w-24 mx-auto mb-4" />
                            <h2 class="font-semibold text-lg md:text-xl mb-2 text-black">Research</h2>
                            <p class="text-sm text-gray-700 leading-snug">
                                We are constantly researching and exploring market needs.
                            </p>
                        </div>
                        <div class="bg-white p-5 sm:p-6 rounded-lg sm:rounded-xl shadow-md text-center">
                            <img src="{{ asset('images/concepts.png') }}" alt="Concept and Design Icon"
                                class="w-16 lg:w-24 mx-auto mb-4" />
                            <h2 class="font-semibold text-lg md:text-xl mb-2 text-black">Concept & Design</h2>
                            <p class="text-sm text-gray-700 leading-snug">
                                Easy to use and have a modern technology advance.
                            </p>
                        </div>
                        <div class="bg-white p-5 sm:p-6 rounded-lg sm:rounded-xl shadow-md text-center">
                            <img src="{{ asset('images/develop.png') }}" alt="Develop Icon"
                                class="w-16 lg:w-24 mx-auto mb-4" />
                            <h2 class="font-semibold text-lg md:text-xl mb-2 text-black">Develop & Test</h2>
                            <p class="text-sm text-gray-700 leading-snug">
                                Built and published with senior professionals.
                            </p>
                        </div>
                        <div class="bg-white p-5 sm:p-6 rounded-lg sm:rounded-xl shadow-md text-center">
                            <img src="{{ asset('images/design.png') }}" alt="Production Icon"
                                class="w-16 lg:w-24 mx-auto mb-4" />
                            <h2 class="font-semibold text-lg md:text-xl mb-2 text-black">Production</h2>
                            <p class="text-sm text-gray-700 leading-snug">
                                Produced only with the best quality.
                            </p>
                        </div>
                    </div>
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
