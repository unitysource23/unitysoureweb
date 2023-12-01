

@extends('layouts.master')
@section('title', 'About')
@section('css')

@endsection
@section('content')
<section class="about ">


    <div class="bg-primary text-white py-5 text-center font-semibold text-xl">
        <h1>About Us</h1>
    </div>

    {{--  mission vision start   --}}

    <div class="relative  mx-auto w-full lg:w-3/4  mt-10 lg:mt-20  ">
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam
            error, numquam voluptatum! Modi, ex id! Sed, sint
        </h1>
        <h1
            class="w-[90px] absolute top-52 left-28 md:w-[150px] md:top-[400px]  md:left-60 lg:w-[180px] lg:top-[400px] lg:left-60 xl:top-[520px] xl:left-72 text-xs md:text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam
            error, numquam
        </h1>
        <h1
            class="w-[90px] absolute top-40 left-[200px] md:w-[150px] md:top-[280px]  md:left-[420px] lg:w-[160px] lg:top-[280px] lg:left-[420px] xl:top-[370px] xl:left-[530px] text-xs md:text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam
            error, numquam
        </h1>
        <h1
            class="w-[80px] absolute top-52 left-[300px] md:w-[150px] md:top-[400px]  md:left-[650px] lg:w-[180px] lg:top-[400px] lg:left-[580px] xl:top-[520px] xl:left-[700px] text-xs md:text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam
            error, numquam
        </h1>
    </div>

    {{--  meet the teamm start   --}}
    <div>
        <div class=" bg-[#f2fcf5] pb-5 mt-48 lg:mt-36">
            <h1 class="text-center font-bold text-lg  lg:text-2xl mb-5 py-4 ">Meet The Team</h1>
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide px-6">
                        <div class="relative group">
                            <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww"
                                class="h-[500px] w-full object-cover mx-auto " alt="">
                            <div
                                class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                <h1 class="text-white text-center font-thin ">Managing Director</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide px-6">
                        <div class="relative group">
                            <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww"
                                class="h-[500px] w-full object-cover mx-auto " alt="">
                            <div
                                class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                <h1 class="text-white text-center font-thin ">Managing Director</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide px-6">
                        <div class="relative group">
                            <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww"
                                class="h-[500px] w-full object-cover mx-auto " alt="">
                            <div
                                class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                <h1 class="text-white text-center font-thin ">Managing Director</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide px-6">
                        <div class="relative group">
                            <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww"
                                class="h-[500px] w-full object-cover mx-auto " alt="">
                            <div
                                class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                <h1 class="text-white text-center font-thin ">Managing Director</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class=" swiper-button-next outline outline-gray-400 outline-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg>
                </div>
                <div class="swiper-button-prev outline outline-gray-400 outline-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                </div>

            </div>

        </div>
    </div>

    <div class="">
        <div class="mx-5 lg:mx-10  ">
            <h1 class="text-center font-bold text-lg lg:text-4xl py-10">How we build good to great
                business
            </h1>
            <h1 class="text-center px-5 lg:px-32">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Blanditiis
                quibusdam ea dicta maxime non hic. Assumenda beatae excepturi, voluptatem odio corrupti
                mollitia!
                Quam quod tenetur ipsa dicta repellendus minus molestias.</h1>
        </div>

        <div style="background-image: url({{ asset('images/map.png') }})"
            class=" mt-48 h-[300px] bg-no-repeat w-full ">
            <div class="relative grid grid-cols-1 ">
                <div class="absolute -top-28 left-10  lg:-top-10 md:left-10 xl:-top-24 xl:left-20">
                    <img src="{{ asset('images/research.png') }}" class="w-[90px] md:w-[130px] lg:w-[180px] xl:w-auto mx-auto" alt="">
                    <h1 class="font-semibold text-base md:text-xl xl:text-2xl text-center">Research</h1>
                    <h1 class="text-sm md:text-base text-center">Research short para</h1>
                </div>
                <div class="absolute top-20 left-10 md:-top-24 md:left-[220px] lg:-top-20 lg:left-[300px] xl:top-0 xl:left-[400px]">
                    <h1 class="font-semibold text-base md:text-xl xl:text-2xl text-center">Concept</h1>
                    <h1 class="text-sm md:text-base text-center">Concept short para</h1>
                    <img src="{{ asset('images/concepts.png') }}" class="w-[90px] md:w-[130px] lg:w-[180px] xl:w-auto mx-auto" alt="">

                </div>
                <div class="absolute -top-28 left-[250px] md:left-[400px] lg:-top-10 lg:left-[550px] xl:-top-24 xl:left-[700px]">
                    <img src="{{ asset('images/design.png') }}" class="w-[90px] md:w-[130px] lg:w-[180px] xl:w-auto mx-auto" alt="">
                    <h1 class="font-semibold text-base md:text-xl xl:text-2xl text-center">Design</h1>
                    <h1 class="text-sm md:text-base text-center">Design short para</h1>
                </div>
                <div class="absolute top-20 left-[250px]  md:-top-20 md:left-[600px] lg:-top-20 lg:left-[800px] xl:top-10 xl:left-[1050px]">
                    <h1 class="font-semibold text-base md:text-xl xl:text-2xl text-center">Develop & Test</h1>
                    <h1 class="text-sm md:text-base text-center">Concept short para</h1>
                    <img src="{{ asset('images/develop.png') }}" class="w-[90px] md:w-[130px] lg:w-[180px] xl:w-auto mx-auto" alt="">
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

                                <img src="{{ asset('images/smart-life.png') }}" class="mx-auto"
                                    alt="">
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="flex flex-col gap-3">
                                    <h1 class="font-semibold text-lg md:text-3xl">Smart Life</h1>
                                    <h1 class="font-semibold text-primary lg:text-lg">Hire Purchase Services
                                    </h1>
                                    <button
                                        class="bg-primary w-56 text-white rounded-full px-5 py-2 text-lg">Usenn
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
                                <img src="{{ asset('images/fast-move.png') }}" class="mx-auto absolute top-[80px] left-10 w-[450px]"
                                    alt="">
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="flex flex-col gap-3">
                                    <h1 class="font-semibold text-lg md:text-3xl">Smart Life</h1>
                                    <h1 class="font-semibold text-primary lg:text-lg">Hire Purchase Services
                                    </h1>
                                    <button
                                        class="bg-primary w-56 text-white rounded-full px-5 py-2 text-lg">Usenn
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

    <div class="mx-10 lg:mx-20 mb-10">
        <h1 class="text-center font-bold text-lg lg:text-4xl py-10">What We Do</h1>
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5">
            <div class="group ">
                <div class="shadow-md h-[220px] group-hover:bg-[#f2fcf5]  p-10 rounded-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-code-square mx-auto mb-5" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                    </svg>
                    <h1 class="font-semibold text-lg mb-2">Build</h1>
                    <h1 class="text-sm mb-2">Help you build something</h1>
                    <div class="flex items-center justify-center">
                        <button class="font-semibold text-sm   flex items-center  overflow-hidden group">
                            <i class="fa-solid fa-arrow-right mr-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                            <h1 class="btn-text  transform -translate-x-3 group-hover:translate-x-3 transition duration-500 ease-in-out group-hover:text-primary">Learn More</h1>
                            <i class="fa-solid fa-arrow-right ml-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="group">
                <div class="shadow-md h-[220px] group-hover:bg-[#f2fcf5]  p-10 rounded-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-code-square mx-auto mb-5" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                    </svg>
                    <h1 class="font-semibold text-lg mb-2">Customise</h1>
                    <h1 class="text-sm mb-2">Customise a solution for your business</h1>
                    <div class="flex items-center justify-center">
                        <button class="font-semibold text-sm   flex items-center  overflow-hidden group">
                            <i class="fa-solid fa-arrow-right mr-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                            <h1 class="btn-text  transform -translate-x-3 group-hover:translate-x-3 transition duration-500 ease-in-out group-hover:text-primary">Learn More</h1>
                            <i class="fa-solid fa-arrow-right ml-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="group">
                <div class="shadow-md h-[220px] group-hover:bg-[#f2fcf5]  p-10 rounded-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-code-square mx-auto mb-5" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                    </svg>
                    <h1 class="font-semibold text-lg mb-2">Build</h1>
                    <h1 class="text-sm mb-2">Help you build something</h1>
                    <div class="flex items-center justify-center">
                        <button class="font-semibold text-sm   flex items-center  overflow-hidden group">
                            <i class="fa-solid fa-arrow-right mr-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                            <h1 class="btn-text  transform -translate-x-3 group-hover:translate-x-3 transition duration-500 ease-in-out group-hover:text-primary">Learn More</h1>
                            <i class="fa-solid fa-arrow-right ml-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="group">
                <div class="shadow-md h-[220px] group-hover:bg-[#f2fcf5]  p-10 rounded-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-code-square mx-auto mb-5" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                    </svg>
                    <h1 class="font-semibold text-lg mb-2">Build</h1>
                    <h1 class="text-sm mb-2">Help you build something</h1>
                    <div class="flex items-center justify-center">
                        <button class="font-semibold text-sm   flex items-center  overflow-hidden group">
                            <i class="fa-solid fa-arrow-right mr-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                            <h1 class="btn-text  transform -translate-x-3 group-hover:translate-x-3 transition duration-500 ease-in-out group-hover:text-primary">Learn More</h1>
                            <i class="fa-solid fa-arrow-right ml-3 transform -translate-x-3 group-hover:translate-x-3 transition duration-300 ease-in group-hover:text-primary"></i>
                        </button>
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

