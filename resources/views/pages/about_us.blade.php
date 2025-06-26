@extends('layouts.master')
@section('title', 'About')
@section('content')
    <section class="relative w-full h-[60vh] sm:h-[70vh] lg:h-[80vh] overflow-hidden">
        <img src="{{ asset('images/business-people.jpg') }}" alt="About Us Banner"
            class="absolute inset-0 w-full h-full object-cover object-center" />

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 flex items-center justify-center h-full">
            <h1 class="text-white text-3xl sm:text-4xl lg:text-6xl font-extrabold text-center">
                {{ __('messages.about_us_title') }}
            </h1>
        </div>
    </section>


    <!-- Mission, Vision, Values Cards -->
    <section class="py-12 px-4 sm:px-8 lg:px-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white shadow-lg rounded-xl p-6 relative flex flex-col h-full">
            <div class="absolute text-8xl font-bold text-black/10 top-4 left-4 select-none">01</div>
            <div class="text-center flex flex-col flex-grow">
                <div
                    class="w-12 h-12 mx-auto mb-4 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h2v12H4V6zm6 4h2v8h-2v-8zm6-6h2v14h-2V4z" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-yellow-600">{{ __('messages.values') }}</h3>
                <div class="w-12 h-1 mx-auto mb-4 bg-yellow-600 flex-shrink-0"></div>
                <ul class="text-gray-600 text-sm space-y-2 text-left flex-grow">
                    <li style="list-style-type:square">{{ __('messages.value_1') }}</li>
                    <li style="list-style-type:square">{{ __('messages.value_2') }}</li>
                    <li style="list-style-type:square">{{ __('messages.value_3') }}</li>
                </ul>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 relative flex flex-col h-full">
            <div class="absolute text-8xl font-bold text-black/10 top-4 left-4 select-none">02</div>
            <div class="text-center flex flex-col flex-grow">
                <div class="w-12 h-12 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6l4 2h-6V7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-blue-600">{{ __('messages.mission') }}</h3>
                <div class="w-12 h-1 mx-auto mb-4 bg-blue-600 flex-shrink-0"></div>
                <ul class="text-gray-600 text-sm space-y-2 text-left flex-grow">
                    <li style="list-style-type:square">{{ __('messages.mission_1') }}</li>
                    <li style="list-style-type:square">{{ __('messages.mission_2') }}</li>
                    <li style="list-style-type:square">{{ __('messages.mission_3') }}</li>
                </ul>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 relative flex flex-col h-full">
            <div class="absolute text-8xl font-bold text-black/10 top-4 left-4 select-none">03</div>
            <div class="text-center flex flex-col flex-grow">
                <div
                    class="w-12 h-12 mx-auto mb-4 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"
                            fill="none" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-indigo-600">{{ __('messages.vision') }}</h3>
                <div class="w-12 h-1 mx-auto mb-4 bg-indigo-600 flex-shrink-0"></div>
                <ul class="text-gray-600 text-sm space-y-2 text-left flex-grow">
                    <li style="list-style-type:square">{{ __('messages.vision_1') }}</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Meet The Team -->
    <section class="bg-green-50 py-12">
        <div>
            <div class="bg-[#f2fcf5] mt-10 sm:mt-20 md:mt-30 lg:mt-20 xl:mt-30">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">{{ __('messages.our_team') }}</h1>
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
    </section>

    <section class="px-4 sm:px-6 lg:px-10 py-12">
        <h2 class="text-center font-bold text-2xl lg:text-4xl mb-10">{{ __('messages.how_build') }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            {{-- Research  --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/research.png" alt="Research Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">{{ __('messages.research') }}</h3>
                <p class="text-gray-700 text-sm">{{ __('messages.research_desc') }}</p>
            </div>
            {{-- Concept & Design --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/concepts.png" alt="Concept & Design Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">{{ __('messages.concept_design') }}</h3>
                <p class="text-gray-700 text-sm">{{ __('messages.concept_desc') }}</p>
            </div>
            {{-- Develop & Test --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/develop.png" alt="Develop & Test Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">{{ __('messages.develop_test') }}</h3>
                <p class="text-gray-700 text-sm">{{ __('messages.develop_desc') }}</p>
            </div>
            {{-- Production --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/design.png" alt="Production Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">{{ __('messages.production') }}</h3>
                <p class="text-gray-700 text-sm">{{ __('messages.production_desc') }}</p>
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
