@extends('layouts.master')
@section('title', 'About')
@section('content')
    <section class="relative w-full h-[30vh] sm:h-[40vh] lg:h-[50vh] overflow-hidden">
        <img src="{{ asset('images/business-people.jpg') }}" alt="About Us Banner"
            class="absolute inset-0 w-full h-full object-cover object-center z-0" />

        <div class="absolute inset-0 bg-black bg-opacity-40 z-0"></div>

        <div class="relative z-10 flex items-center justify-center h-full">
            <h1 class="text-white text-2xl sm:text-3xl lg:text-4xl font-extrabold text-center">
                {{ __('messages.about_us_title') }}
            </h1>
        </div>
    </section>

<!-- Mission | Vision | Values -->
<section class="relative py-28 overflow-hidden bg-white">

    <div class="absolute top-[-200px] right-[-100px] w-[600px] h-[600px] bg-green-100/50 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-[-200px] left-[-100px] w-[500px] h-[500px] bg-green-50/60 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle, #16a34a 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">

            <!-- Values -->
            <div class="lg:col-span-5 lg:row-span-2 group">
                <div class="relative h-full rounded-2xl bg-gray-50 border border-gray-100 p-8 lg:p-10 flex flex-col transition-all duration-700 hover:bg-white hover:border-green-200 hover:shadow-[0_0_60px_rgba(22,163,74,0.06)]">

                    <div class="absolute top-0 left-8 right-8 h-[2px] bg-gradient-to-r from-transparent via-green-500 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

                    <div class="flex items-start gap-6">
                        <div class="relative w-14 h-14 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center flex-shrink-0 group-hover:bg-green-100 group-hover:scale-110 transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-1">
                                {{ __('messages.values') }}
                            </h3>
                        </div>
                    </div>

                    <div class="flex-1 space-y-5 mt-5">
                        <div class="flex gap-4 items-start group/item">
                            <div class="mt-3.5 w-2 h-2 rounded-full bg-green-500/50 flex-shrink-0 group-hover/item:shadow-[0_0_10px_rgba(22,163,74,0.5)] transition-shadow duration-300"></div>
                            <p class="text-gray-500 leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.value_1') }}</p>
                        </div>
                        <div class="flex gap-4 items-start group/item">
                            <div class="mt-1.5 w-2 h-2 rounded-full bg-green-400/40 flex-shrink-0 group-hover/item:shadow-[0_0_10px_rgba(22,163,74,0.5)] transition-shadow duration-300"></div>
                            <p class="text-gray-500 leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.value_2') }}</p>
                        </div>
                        <div class="flex gap-4 items-start group/item">
                            <div class="mt-1.5 w-2 h-2 rounded-full bg-green-300/40 flex-shrink-0 group-hover/item:shadow-[0_0_10px_rgba(22,163,74,0.5)] transition-shadow duration-300"></div>
                            <p class="text-gray-500 leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.value_3') }}</p>
                        </div>
                         <div class="flex gap-4 items-start group/item">
                            <div class="mt-1.5 w-2 h-2 rounded-full bg-green-300/40 flex-shrink-0 group-hover/item:shadow-[0_0_10px_rgba(22,163,74,0.5)] transition-shadow duration-300"></div>
                            <p class="text-gray-500 leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.value_4') }}</p>
                        </div>
                         <div class="flex gap-4 items-start group/item">
                            <div class="mt-1.5 w-2 h-2 rounded-full bg-green-300/40 flex-shrink-0 group-hover/item:shadow-[0_0_10px_rgba(22,163,74,0.5)] transition-shadow duration-300"></div>
                            <p class="text-gray-500 leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.value_5') }}</p>
                        </div>
                    </div>

                    <div class="mt-10 h-1 w-full rounded-full bg-gray-100 overflow-hidden">
                        <div class="h-full w-0 group-hover:w-full bg-gradient-to-r from-green-500 to-emerald-500 rounded-full transition-all duration-1000 ease-out"></div>
                    </div>
                </div>
            </div>

            <!-- Mission -->
            <div class="lg:col-span-7 group">
                <div class="relative rounded-2xl bg-gray-50 border border-gray-100 p-8 lg:p-10 transition-all duration-700 hover:bg-white hover:border-green-200 hover:shadow-[0_0_60px_rgba(22,163,74,0.06)]">

                    <div class="absolute top-0 left-8 right-8 h-[2px] bg-gradient-to-r from-transparent via-green-500 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

                    <div class="flex items-start gap-6">
                        <div class="relative w-14 h-14 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center flex-shrink-0 group-hover:bg-green-100 group-hover:scale-110 transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.58-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-1">
                                {{ __('messages.mission') }}
                            </h3>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-3 gap-5 mt-4">
                        <div class="rounded-xl bg-white border border-gray-100 p-5 hover:border-green-200 hover:shadow-[0_4px_20px_rgba(22,163,74,0.06)] transition-all duration-500 group/item">
                            <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center mb-4">
                                <span class="text-green-500 text-sm font-bold">i</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.mission_1') }}</p>
                        </div>
                        <div class="rounded-xl bg-white border border-gray-100 p-5 hover:border-green-200 hover:shadow-[0_4px_20px_rgba(22,163,74,0.06)] transition-all duration-500 group/item">
                            <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center mb-4">
                                <span class="text-green-500 text-sm font-bold">ii</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.mission_2') }}</p>
                        </div>
                        <div class="rounded-xl bg-white border border-gray-100 p-5 hover:border-green-200 hover:shadow-[0_4px_20px_rgba(22,163,74,0.06)] transition-all duration-500 group/item">
                            <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center mb-4">
                                <span class="text-green-500 text-sm font-bold">iii</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed group-hover/item:text-gray-700 transition-colors duration-300">{{ __('messages.mission_3') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="lg:col-span-7 group">
                <div class="relative rounded-2xl bg-gradient-to-r from-green-50/80 to-emerald-50/80 border border-green-100 p-8 lg:p-10 transition-all duration-700 hover:border-green-300 hover:shadow-[0_0_60px_rgba(22,163,74,0.08)]">

                    <div class="absolute top-0 left-8 right-8 h-[2px] bg-gradient-to-r from-green-500 via-emerald-400 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

                    <div class="flex flex-col sm:flex-row gap-8 items-start">
                        <div class="flex-1">
                             <div class="flex items-start gap-6">
                        <div class="relative w-14 h-14 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center flex-shrink-0 group-hover:bg-green-100 group-hover:scale-110 transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-1">
                                {{ __('messages.vision') }}
                            </h3>
                        </div>
                    </div>

                            <p class="mt-3 text-gray-500 leading-[32px] max-w-lg group-hover:text-gray-700 transition-colors duration-300 ">
                                {{ __('messages.vision_1') }}
                            </p>
                        </div>

                        <!-- Decorative orbital element -->
                        <div class="hidden sm:flex items-center justify-center w-32 h-32 flex-shrink-0 relative">
                            <div class="absolute w-full h-full rounded-full border border-green-200/60 animate-[spin_20s_linear_infinite]">
                                <div class="absolute -top-1.5 left-1/2 -translate-x-1/2 w-3 h-3 rounded-full bg-green-500 shadow-[0_0_10px_rgba(22,163,74,0.4)]"></div>
                            </div>
                            <div class="absolute w-3/4 h-3/4 rounded-full border border-emerald-200/60 animate-[spin_15s_linear_infinite_reverse]">
                                <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_8px_rgba(52,211,153,0.4)]"></div>
                            </div>
                            <div class="w-4 h-4 rounded-full bg-gradient-to-br from-green-500 to-emerald-500 shadow-[0_0_20px_rgba(22,163,74,0.3)]"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom decorative line -->
        <div class="mt-16 flex items-center gap-4">
            <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
            <div class="flex gap-2">
                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                <div class="w-2 h-2 rounded-full bg-green-400"></div>
                <div class="w-2 h-2 rounded-full bg-emerald-400"></div>
            </div>
            <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
        </div>

    </div>
</section>

    <!-- Meet The Team -->
    <section class="bg-green-50 py-12">
        <div>
            <div class="bg-[#f2fcf5] mt-10 sm:mt-20 md:mt-30 lg:mt-20 xl:mt-30">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">
                    {{ __('messages.our_team') }}</h1>
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
                        <!--<div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM5.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>-->
                        <!--<div class="swiper-slide px-2 sm:px-4">
                            <div class="relative group w-full max-w-[250px] mx-auto">
                                <img src="{{ asset('images/TM6.png') }}"
                                    class="h-[250px] sm:h-[300px] w-full object-cover mx-auto" alt="">
                            </div>
                        </div>-->
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
            <div class="bg-white p-6 rounded-xl shadow text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/research.png" alt="Research Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">{{ __('messages.research') }}</h3>
                <p class="text-gray-700 text-sm">{{ __('messages.research_desc') }}</p>
            </div>
            {{-- Concept & Design --}}
            <div class="bg-white p-6 rounded-xl shadow text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/concepts.png" alt="Concept & Design Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">{{ __('messages.concept_design') }}</h3>
                <p class="text-gray-700 text-sm">{{ __('messages.concept_desc') }}</p>
            </div>
            {{-- Develop & Test --}}
            <div class="bg-white p-6 rounded-xl shadow text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <img src="images/develop.png" alt="Develop & Test Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">{{ __('messages.develop_test') }}</h3>
                <p class="text-gray-700 text-sm">{{ __('messages.develop_desc') }}</p>
            </div>
            {{-- Production --}}
            <div class="bg-white p-6 rounded-xl shadow text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
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
