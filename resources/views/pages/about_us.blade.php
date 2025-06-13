@extends('layouts.master')
@section('title', 'About')
@section('css')
@endsection
@section('content')
    <section class="about">
        {{-- mission vision start --}}
        <div class="mx-auto w-full px-4 lg:px-6 mt-6 lg:mt-12 grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
            <div class="relative text-center bg-white p-4 sm:p-5 rounded-lg sm:rounded-xl border-2 border-purple-300 shadow-md hover:border-purple-500 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 sm:hover:-translate-y-2">
                <div class="absolute -top-10 sm:-top-12 left-1/2 transform -translate-x-1/2 w-20 sm:w-24 h-20 sm:h-24 bg-gradient-to-br from-purple-500 to-purple-700 rounded-full flex items-center justify-center border-4 border-white">
                    <svg class="w-10 sm:w-12 h-10 sm:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold mt-12 sm:mt-14 mb-2 sm:mb-3 text-purple-800">Mission</h2>
                <ul class="text-sm text-gray-700 text-left mx-auto max-w-[200px] sm:max-w-[220px] list-disc pl-4 sm:pl-5 space-y-1 sm:space-y-2">
                    <li>It must be easy and simple for users to use.</li>
                    <li>It must be fast, smooth, and good for users to experience.</li>
                    <li>It must be up to date with the times for users to benefit.</li>
                </ul>                
            </div>
            <div class="relative text-center bg-white p-4 sm:p-5 rounded-lg sm:rounded-xl border-2 border-cyan-300 shadow-md hover:border-cyan-500 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 sm:hover:-translate-y-2">
                <div class="absolute -top-10 sm:-top-12 left-1/2 transform -translate-x-1/2 w-20 sm:w-24 h-20 sm:h-24 bg-gradient-to-br from-cyan-500 to-cyan-700 rounded-full flex items-center justify-center border-4 border-white">
                    <svg class="w-10 sm:w-12 h-10 sm:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold mt-12 sm:mt-14 mb-2 sm:mb-3 text-cyan-800">Vision</h2>
                <ul class="text-sm text-gray-700 text-left mx-auto max-w-[200px] sm:max-w-[220px] list-disc pl-4 sm:pl-5 space-y-1 sm:space-y-2">
                    <li>We must successfully establish ourselves as a trusted IT Solution Provider for businesses.</li>
                </ul> 
            </div>
            <div class="relative text-center bg-white p-4 sm:p-5 rounded-lg sm:rounded-xl border-2 border-orange-300 shadow-md hover:border-orange-500 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 sm:hover:-translate-y-2">
                <div class="absolute -top-10 sm:-top-12 left-1/2 transform -translate-x-1/2 w-20 sm:w-24 h-20 sm:h-24 bg-gradient-to-br from-orange-500 to-orange-700 rounded-full flex items-center justify-center border-4 border-white">
                    <svg class="w-10 sm:w-12 h-10 sm:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold mt-12 sm:mt-14 mb-2 sm:mb-3 text-orange-800">Values</h2>
                <ul class="text-sm text-gray-700 text-left mx-auto max-w-[200px] sm:max-w-[220px] list-disc pl-4 sm:pl-5 space-y-1 sm:space-y-2">
                    <li>If users have difficulties, they must help with full sympathy.</li>
                    <li>Provide service to users with sincerity and sincerity.</li>
                    <li>Accountability to users must provide service with full responsibility.</li>
                </ul> 
            </div>
        </div>

        {{-- meet the team start --}}
        <div>
            <div class="bg-[#f2fcf5] mt-10 sm:mt-20 md:mt-30 lg:mt-20 xl:mt-30">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">Our Professional Team</h1>
                <div class="swiper mySwiper2" style="max-height: 400px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM3.png') }}" class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM2.png') }}" class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM1.png') }}" class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM4.png') }}" class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM5.png') }}" class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM6.png') }}" class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next outline outline-gray-400 outline-1 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev outline outline-gray-400 outline-1 text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="px-4 sm:px-6 lg:px-10">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">
                    How we build good to great business
                </h1>

                <!-- Background Image Section -->
                <div class="relative mt-6 sm:mt-8 lg:mt-10 bg-no-repeat bg-center bg-contain lg:bg-cover h-auto py-10 sm:py-12 lg:py-20" style="background-image: url('{{ asset('images/map.png') }}');">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-10 max-w-7xl mx-auto px-2 sm:px-4">
                        <div class="bg-white p-4 sm:p-5 rounded-lg sm:rounded-xl shadow-md text-center">
                            <h1 class="font-semibold text-base sm:text-lg md:text-xl mb-2 text-black">Research</h1>
                            <p class="text-sm text-gray-700 leading-snug">
                                We are constantly researching and exploring market needs.
                            </p>
                            <img src="{{ asset('images/research.png') }}" alt="Research Icon" class="w-12 sm:w-16 lg:w-24 mx-auto mb-2 sm:mb-4" />
                        </div>
                        <div class="bg-white p-4 sm:p-5 rounded-lg sm:rounded-xl shadow-md text-center">
                            <h1 class="font-semibold text-base sm:text-lg md:text-xl mb-2 text-black">Concept & Design</h1>
                            <p class="text-sm text-gray-700 leading-snug">
                                We are constantly researching and exploring market needs.
                            </p>
                            <img src="{{ asset('images/concepts.png') }}" alt="Concept and Design Icon" class="w-12 sm:w-16 lg:w-24 mx-auto mb-2 sm:mb-4" />
                        </div>
                        <div class="bg-white p-4 sm:p-5 rounded-lg sm:rounded-xl shadow-md text-center">
                            <h1 class="font-semibold text-base sm:text-lg md:text-xl mb-2 text-black">Develop & Test</h1>
                            <p class="text-sm text-gray-700 leading-snug">
                                Built and published with senior professionals.
                            </p>
                            <img src="{{ asset('images/develop.png') }}" alt="Develop Icon" class="w-12 sm:w-16 lg:w-24 mx-auto mb-2 sm:mb-4" />
                        </div>
                        <div class="bg-white p-4 sm:p-5 rounded-lg sm:rounded-xl shadow-md text-center">
                            <h1 class="font-semibold text-base sm:text-lg md:text-xl mb-2 text-black">Production</h1>
                            <p class="text-sm text-gray-700 leading-snug">
                                Produced only with the best quality.
                            </p>
                            <img src="{{ asset('images/design.png') }}" alt="Production Icon" class="w-12 sm:w-16 lg:w-24 mx-auto mb-2 sm:mb-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- get started with our app --}}
        <div class="bg-[#f2fcf5] mt-5 sm:mt-8 lg:mt-10">
            <div class="mx-4 sm:mx-6 lg:mx-20">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">Get Started with Our Apps</h1>
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