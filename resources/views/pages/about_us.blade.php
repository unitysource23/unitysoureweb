@extends('layouts.master')
@section('title', 'About')
@section('css')

@endsection
@section('content')
    <section class="about ">


        <div class="bg-primary text-white py-5 text-center font-bold text-3xl">
            <h1>About Us</h1>
        </div>

        {{--  mission vision start   --}}

        <div class="relative  mx-auto w-full lg:w-3/4 lg:mt-10">
            <img src="{{ asset('images/mission.png') }}" class="" alt="">
            <div
                class="bg-white absolute w-20 -top-4 left-8  md:-top-3 md:left-12 lg:-top-3 lg:left-12 xl:-top-2 xl:left-24 md:w-36 text-center py-1 md:py-4 font-semibold text-lg text-[#EDBB30]">
                Mission</div>
            <div
                class="bg-white absolute w-20 -top-4 left-48  md:-top-3 md:left-[430px] lg:-top-3 lg:left-96 xl:-top-2 xl:left-[550px] md:w-36 text-center py-1 md:py-4 font-semibold text-lg text-[#21B9BF]">
                Goals</div>
            <div
                class="bg-white absolute w-18 top-[55px] left-32 md:w-32 md:top-[120px] md:left-[230px] lg:top-[110px] lg:left-[230px] xl:top-[160px] xl:left-[310px] text-center py-1 md:py-4 font-semibold md:text-lg text-[#F77432]">
                Vision</div>
            <div
                class="bg-white absolute w-18 top-[55px] left-[288px] md:w-32 md:top-[120px] md:left-[570px] lg:top-[110px] lg:left-[590px] xl:top-[160px] xl:left-[750px] text-center py-1 md:py-4 font-semibold md:text-lg text-[#82B21E]">
                Values</div>

            <h1
                class="w-[100px] absolute top-36 left-3 md:w-[150px] md:top-72  md:left-10 lg:w-[180px] lg:top-80 lg:left-10 xl:top-96 xl:left-16 text-xs md:text-sm">
                <ul>
                    <li>It must be easy and simple to use for users.</li>
                    <li>It must be fast, smooth, and good for users.</li>
                    <li>It must be up to date with the times.</li>
                </ul>
            </h1>
            <h1
                class="w-[90px] absolute top-52 left-28 md:w-[150px] md:top-[400px]  md:left-60 lg:w-[180px] lg:top-[400px] lg:left-60 xl:top-[520px] xl:left-72 text-xs md:text-sm">
                We must successfully establish ourselves as a trusted IT Solution Provider for businesses.
            </h1>
            <h1
                class="w-[80px] absolute top-52 left-[300px] md:w-[150px] md:top-[400px]  md:left-[650px] lg:w-[180px] lg:top-[400px] lg:left-[580px] xl:top-[520px] xl:left-[700px] text-xs md:text-sm">
                If users have difficulties, they must help with full sympathy. Provide service to users with sincerity and
                sincerity. Accountability to users must provide service with full responsibility.
            </h1>
        </div>

        {{--  meet the teamm start   --}}
        <div>
            <div class="bg-[#f2fcf5] lg:mt-60 xl:mt-60">
                <h1 class="text-center font-bold text-lg lg:text-4xl py-10">Our Professional Team</h1>
                <div class="swiper mySwiper2" style="max-height: 400px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-6">
                            <div class="relative group w-[90%] max-w-[280px] mx-auto">
                                <img src="{{ asset('images/TM1.png') }}" class="h-[300px] w-full object-cover mx-auto"
                                    alt="">
                                <div
                                    class="bg-black overflow-hidden transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px] w-full absolute bottom-0">
                                    <h1 class="text-white text-center mt-5">Ko Aungnaing Phyoe</h1>
                                    <h1 class="text-white text-center font-thin">Developer</h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-6">
                            <div class="relative group w-[90%] max-w-[280px] mx-auto">
                                <img src="{{ asset('images/TM2.png') }}" class="h-[300px] w-full object-cover mx-auto "
                                    alt="">
                                <div
                                class="bg-black overflow-hidden transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px] w-full absolute bottom-0">
                                    <h1 class="text-white text-center mt-5">Ko Ye Wint Kyaw</h1>
                                    <h1 class="text-white text-center font-thin ">Developer</h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-6">
                            <div class="relative group w-[90%] max-w-[280px] mx-auto">
                                <img src="{{ asset('images/TM3.png') }}" class="h-[300px] w-full object-cover mx-auto "
                                    alt="">
                                <div
                                class="bg-black overflow-hidden transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px] w-full absolute bottom-0">
                                    <h1 class="text-white text-center mt-5">Ko Phyo Thura Oo</h1>
                                    <h1 class="text-white text-center font-thin ">Developer</h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-6">
                            <div class="relative group w-[90%] max-w-[280px] mx-auto">
                                <img src="{{ asset('images/TM4.png') }}" class="h-[300px] w-full object-cover mx-auto "
                                    alt="">
                                <div
                                class="bg-black overflow-hidden transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px] w-full absolute bottom-0">
                                    <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                    <h1 class="text-white text-center font-thin ">Managing Director</h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-6">
                            <div class="relative group w-[90%] max-w-[280px] mx-auto">
                                <img src="{{ asset('images/TM5.png') }}" class="h-[300px] w-full object-cover mx-auto "
                                    alt="">
                                <div
                                class="bg-black overflow-hidden transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px] w-full absolute bottom-0">
                                    <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                    <h1 class="text-white text-center font-thin ">Managing Director</h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-6">
                            <div class="relative group w-[90%] max-w-[280px] mx-auto">
                                <img src="{{ asset('images/TM6.png') }}" class="h-[300px] w-full object-cover mx-auto "
                                    alt="">
                                <div
                                class="bg-black overflow-hidden transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px] w-full absolute bottom-0">
                                    <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                    <h1 class="text-white text-center font-thin ">Managing Director</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class=" swiper-button-next outline outline-gray-400 outline-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev outline outline-gray-400 outline-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="mx-5 lg:mx-10  ">
                <h1 class="text-center font-bold text-lg lg:text-4xl py-10">How we build good to great business
                </h1>
            </div>

            <div style="background-image: url({{ asset('images/map.png') }})" class=" mt-32 h-[300px] bg-no-repeat w-full ">
                <div class="relative grid grid-cols-1">
                    <div class="absolute -top-20 left-4 md:left-8 lg:-top-6 xl:-top-16 xl:left-16 text-center">
                        <div class="bg-white p-3 rounded-xl shadow-md w-[180px] md:w-[220px] lg:w-[240px] xl:w-[260px]">
                            <img src="{{ asset('images/research.png') }}"
                                class="w-[60px] md:w-[80px] lg:w-[90px] xl:w-[100px] mx-auto mb-3" alt="Research Icon" />
                            <h1 class="font-semibold text-base md:text-lg xl:text-xl text-black mb-1">Research</h1>
                            <p class="text-xs md:text-sm text-gray-700 leading-snug">
                                We are constantly researching and exploring market needs to provide relevant and innovative
                                IT solutions.
                            </p>
                        </div>
                    </div>
                    <div
                        class="absolute top-12 left-4 md:-top-20 md:left-[200px] lg:-top-16 lg:left-[280px] xl:top-0 xl:left-[370px] text-center">
                        <div class="bg-white p-3 rounded-xl shadow-md w-[180px] md:w-[220px] lg:w-[240px] xl:w-[260px]">
                            <h1 class="font-semibold text-base md:text-lg xl:text-xl text-black mb-2">Concept & Design</h1>
                            <p class="text-xs md:text-sm text-gray-700 leading-snug mb-3">
                                We are constantly researching and exploring market needs.
                            </p>
                            <img src="{{ asset('images/concepts.png') }}"
                                class="w-[60px] md:w-[80px] lg:w-[90px] xl:w-[100px] mx-auto"
                                alt="Concept and Design Icon" />
                        </div>
                    </div>
                    <div
                        class="absolute -top-20 left-[200px] md:left-[350px] lg:-top-6 lg:left-[500px] xl:-top-16 xl:left-[650px] text-center">
                        <div class="bg-white p-3 rounded-xl shadow-md w-[180px] md:w-[220px] lg:w-[240px] xl:w-[260px]">
                            <h1 class="font-semibold text-base md:text-lg xl:text-xl text-black mb-2">Production</h1>
                            <p class="text-xs md:text-sm text-gray-700 leading-snug mb-3">
                                Produced only with the best quality.
                            </p>
                            <img src="{{ asset('images/design.png') }}"
                                class="w-[60px] md:w-[80px] lg:w-[90px] xl:w-[100px] mx-auto" alt="Production Icon" />
                        </div>
                    </div>
                    <div
                        class="absolute top-12 left-[200px] md:-top-16 md:left-[550px] lg:-top-16 lg:left-[730px] xl:top-4 xl:left-[960px] text-center">
                        <div class="bg-white p-3 rounded-xl shadow-md w-[180px] md:w-[220px] lg:w-[240px] xl:w-[260px]">
                            <h1 class="font-semibold text-base md:text-lg xl:text-xl text-black mb-2">Develop & Test</h1>
                            <p class="text-xs md:text-sm text-gray-700 leading-snug mb-3">
                                Built and published with senior professionals.
                            </p>
                            <img src="{{ asset('images/develop.png') }}"
                                class="w-[60px] md:w-[80px] lg:w-[90px] xl:w-[100px] mx-auto" alt="Develop Icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  get started with our app   --}}
        <div class=" bg-[#f2fcf5] mt-5">
            <div class="mx-10 lg:mx-20">
                <h1 class="text-center font-bold text-lg lg:text-4xl py-10">Get Started with Our Apps</h1>
                <div class="swiper mySwiper3  py-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 gap-5">
                                <div class="col-span-1 md:col-span-2">

                                    <img src="{{ asset('images/smart-life.png') }}" class="mx-auto" alt="">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex flex-col gap-3">
                                        <h1 class="font-semibold text-lg md:text-3xl">Smart Life</h1>
                                        <h1 class="font-semibold text-primary lg:text-lg">Hire Purchase Services
                                        </h1>
                                        <button class="bg-primary w-56 text-white rounded-full px-5 py-2 text-lg">Use
                                            Demo</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 gap-5">
                                <div class="col-span-1 md:col-span-2">

                                    <img src="{{ asset('images/fast-move-1.png') }}" class="mx-auto w-[500px]"
                                        alt="">
                                    <img src="{{ asset('images/fast-move.png') }}"
                                        class="mx-auto absolute top-[80px] left-10 w-[450px]" alt="">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="flex flex-col gap-3">
                                        <h1 class="font-semibold text-lg md:text-3xl">Smart Life</h1>
                                        <h1 class="font-semibold text-primary lg:text-lg">Hire Purchase Services
                                        </h1>
                                        <button class="bg-primary w-56 text-white rounded-full px-5 py-2 text-lg">Use
                                            Demo</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{--  <div class="swiper-slide">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-y-10 gap-5">
                            <div class="col-span-1 md:col-span-2">

                                <img src="{{ asset('images/fast-move-1.png') }}" class="mx-auto w-[500px] relative" alt="">
                                <img src="{{ asset('images/fast-move.png') }}" class="mx-auto w-[500px] absolute top-9 left-10" alt="">
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="flex flex-col gap-3">
                                    <h1 class="font-semibold text-lg md:text-3xl">Fast Move</h1>
                                    <h1 class="font-semibold text-primary lg:text-lg">Distribution System</h1>
                                    <button class="bg-primary w-56 text-white rounded-full px-5 py-2 text-lg">UseDemo Version</button>
                                </div>
                            </div>

                        </div>
                    </div>  --}}

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
            slidesPerView: 3,
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
                    spaceBetween: 20
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
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


            {{--  breakpoints: {

            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },

            768: {
                slidesPerView: 1,
                spaceBetween: 30
            }

        },  --}}



        });
    </script>
@endsection
