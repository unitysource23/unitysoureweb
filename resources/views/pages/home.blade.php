@extends('layouts.master')
@section('title', 'Home')
@section('css')

@endsection
@section('content')

    <section class="home ">
        {{--  hero  start   --}}
        <div class="w-full mt-5">
            <!-- Content Section -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-10 w-full max-w-[1300px] mx-auto px-4 mb-0">
                <!-- Logo Section -->
                <div class="flex flex-row flex-wrap justify-center gap-6 w-full lg:w-1/2 mt-6 lg:mb-0">
                <!-- logos -->
                    <div class="bg-white w-[180px] h-[100px] rounded-[35px] flex justify-center items-center shadow-xl">
                        <img src="images/d1.jpg" class="w-[100px]" alt="">
                    </div>
                    <div class="bg-white w-[180px] h-[100px] rounded-[35px] flex justify-center items-center shadow-xl">
                        <img src="images/d2.jpg" class="w-[100px]" alt="">
                    </div>
                    <div class="bg-white w-[180px] h-[100px] rounded-[35px] flex justify-center items-center shadow-xl">
                        <img src="images/d3.jpg" class="w-[100px]" alt="">
                    </div>
                    <div class="bg-white w-[180px] h-[100px] rounded-[35px] flex justify-center items-center shadow-xl">
                        <img src="images/d4.jpg" class="w-[100px]" alt="">
                    </div>
                    <div class="bg-white w-[180px] h-[100px] rounded-[35px] flex justify-center items-center shadow-xl">
                        <img src="images/d5.png" class="w-[130px]" alt="">
                    </div>
                    <div class="bg-white w-[180px] h-[100px] rounded-[35px] flex justify-center items-center shadow-xl">
                        <img src="images/d6.png" class="w-[100px]" alt="">
                    </div>
                    <div class="bg-white w-[180px] h-[100px] rounded-[35px] flex justify-center items-center shadow-xl">
                        <img src="images/d7.png" class="w-[100px]" alt="">
                    </div>
                </div>

                <!-- Text Section -->
                <div class="flex flex-col pb-10 mb-20 items-start text-right w-full lg:w-1/2 px-4">
                <h1 class="text-2xl lg:text-5xl font-bold leading-tight">
                    {{ __('messages.tagline') }}
                </h1>
                </div>
            </div>

            <!-- Background Image Section -->
            <div class="w-full mt-[-90px]">
                <img src="{{ asset('images/bg-image.png') }}" class="w-full h-auto object-cover" alt="Background Image">
            </div>
        </div>


        {{--  map two start   --}}
        <div class="mx-10 xl:h-screen mt-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 justify-start items-start">
                <div class="col-span-1 md:col-span-1">
                    <div class="relative">
                        <img src="{{ asset('images/country-map-1.jpg') }}" class="h-[650px] mx-auto" alt="">
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 flex items-center">
                    <div>
                        <h1 class="font-bold text-xl md:text-xl lg:text-3xl mb-2">{{ __('messages.why_choose') }}</h1>
                        <span
                            class="font-bold text-xl md:text-xl lg:text-3xl  from-primary to-[#39c457] text-black">{{ __('messages.unity_build') }}
                        </span>
                        <div class="grid grid-cols-2 md:grid-cols-2 gap-x-10 gap-y-10 lg:gap-y-32 mt-[70px]">
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.it') }}</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.business') }}</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.hr') }}</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.service') }}</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Our Partner start   --}}
        <div class="mx-5 lg:mx-10 xl:mx-20 mt-10">
            <h1 class="text-center font-bold text-xl lg:text-4xl mb-7 ">{{ __('messages.clients') }}</h1>
            <div class="grid grid-cols-2 gap-6 mt-10 px-4 sm:flex sm:flex-wrap sm:justify-center">
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c1.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c2.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c3.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c4.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c5.jpg" class="w-[130px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c6.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c7.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c8.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c9.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c10.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c11.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c12.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c13.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c14.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c15.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c16.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c17.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c18.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c19.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c20.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c21.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c22.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c23.png" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c24.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c25.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c26.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c27.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c28.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c29.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c30.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c31.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c32.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c33.jpg" class="w-[100px]" alt="">
                </div>
            </div>

            <div class="text-center mt-10 mb-10">
            </div>

        </div>

        <div class="bg-[#DEFFD8] mt-30" >
            <div class="text-center py-10">
                <h1 class="font-semibold text-base lg:text-xl mb-2">{{ __('messages.cta_title') }}</h1>
                <h1 class="text-[#797979] text-xs lg:text-sm">{{ __('messages.cta_desc') }}</h1>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 10,

            autoplay: {
                delay: 2500,
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
                    slidesPerView: 4,
                    spaceBetween: 40
                }
            },



        });
        var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 2,
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

                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                }

            },



        });
    </script>
@endsection
