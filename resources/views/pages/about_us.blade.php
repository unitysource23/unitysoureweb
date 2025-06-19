@extends('layouts.master')
@section('title', 'About')
@section('content')
    <section class="relative w-full h-[60vh] sm:h-[70vh] lg:h-[80vh] overflow-hidden">
        <img src="{{ asset('images/business-people.jpg') }}" alt="About Us Banner"
            class="absolute inset-0 w-full h-full object-cover object-center" />

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 flex items-center justify-center h-full">
            <h1 class="text-white text-3xl sm:text-4xl lg:text-6xl font-extrabold text-center">
                About Us
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
                <h3 class="text-xl font-bold mb-2 text-yellow-600">Values</h3>
                <div class="w-12 h-1 mx-auto mb-4 bg-yellow-600 flex-shrink-0"></div>
                <ul class="text-gray-600 text-sm space-y-2 text-left flex-grow">
                    <li style="list-style-type:square">If users have difficulties, they must help with full sympathy.</li>
                    <li style="list-style-type:square">Provide service to users with sincerity.</li>
                    <li style="list-style-type:square">Accountability to users must provide service with full
                        responsibility.</li>
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
                <h3 class="text-xl font-bold mb-2 text-blue-600">Mission</h3>
                <div class="w-12 h-1 mx-auto mb-4 bg-blue-600 flex-shrink-0"></div>
                <ul class="text-gray-600 text-sm space-y-2 text-left flex-grow">
                    <li style="list-style-type:square">It must be easy and simple to use for users.</li>
                    <li style="list-style-type:square">It must be fast, smooth, and good for users.</li>
                    <li style="list-style-type:square">It must be up to date with the times.</li>
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
                <h3 class="text-xl font-bold mb-2 text-indigo-600">Vision</h3>
                <div class="w-12 h-1 mx-auto mb-4 bg-indigo-600 flex-shrink-0"></div>
                <ul class="text-gray-600 text-sm space-y-2 text-left flex-grow">
                    <li style="list-style-type:square">We must successfully establish ourselves as a trusted IT Solution
                        Provider for businesses.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Meet The Team -->
    <section class="bg-green-50 py-12">
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
    </section>

    <section class="px-4 sm:px-6 lg:px-10 py-12">
        <h2 class="text-center font-bold text-2xl lg:text-4xl mb-10">How we build good to great business</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            {{-- Research  --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/research.png" alt="Research Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">Research</h3>
                <p class="text-gray-700 text-sm">We are constantly researching and exploring market needs.</p>
            </div>
            {{-- Concept & Design --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/concepts.png" alt="Concept & Design Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">Concept & Design</h3>
                <p class="text-gray-700 text-sm">Easy to use and have a modern technology advance.</p>
            </div>
            {{-- Develop & Test --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/develop.png" alt="Develop & Test Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">Develop & Test</h3>
                <p class="text-gray-700 text-sm">Built and published with senior professionals.</p>
            </div>
            {{-- Production --}}
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <img src="images/design.png" alt="Production Icon" class="w-16 lg:w-24 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-black mb-2">Production</h3>
                <p class="text-gray-700 text-sm">Produced only with the best quality.</p>
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
