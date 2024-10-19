@extends('layouts.master')
@section('title', 'Home')
@section('css')

@endsection
@section('content')

    <section class="home ">
        {{--  hero  start   --}}
        <div class="mx-0 xl:h-screen mt-5">
            <div class="flex flex-row justify-between items-center">
                <!-- First Image Section -->
                <div class="w-[1500px] h-[600px] mt-0">
                    <img src="{{ asset('images/dashboard.png') }}" class="w-full h-full ml-[-75px]" alt="">
                    {{-- <div class="w-[800px] h-[600px] bg-gray-500">img</div> --}}
                </div>
                <!-- Text Section -->
                <div class="flex justify-start items-start text-right px-20 pb-20">
                    <div>
                        <button
                            class="text-primary text-xl lg:text-xl mb-2 outline outline-1 outline-primary rounded-full px-3 lg:px-6 py-1 lg:py-2 tracking-wide font-extrabold">
                            View our services and apps
                        </button>
                        <h1 class="text-xl lg:text-7xl font-bold">
                            we make <span class="text-primary">all of your business </span>
                        </h1>
                        <h1 class="text-xl lg:text-7xl font-bold mb-10">needs</h1>
                    </div>
                </div>
            </div>
            <!-- Background Image Section -->
            <div class="m-w-full h-screen mt-20">
                <img src="{{ asset('images/bg-image.png') }}" class="absolute w-full h-auto object-cover mt-[-300px]"
                    alt="">
            </div>
        </div>

        {{--  map two start   --}}
        <div class="mx-10 xl:h-screen mt-20" style="margin-top: 250px;">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 justify-start items-start">
                <div class="col-span-1 md:col-span-1">
                    <div class="relative">
                        <img src="{{ asset('images/country-map.png') }}" class="h-[650px]  mx-auto" alt="">
                        <img src="{{ asset('images/greenpeople.png') }}"
                            class="absolute top-60 md:top-44 lg:top-60 right-20 md:right-14   lg:right-20 xl:right-32 w-10"
                            alt="">
                        <img src="{{ asset('images/greenpeople.png') }}"
                            class="absolute top-60 md:top-44 lg:top-24 right-20 md:right-14   lg:right-32 xl:right-44 w-10"
                            alt="">
                        <img src="{{ asset('images/greenpeople.png') }}"
                            class="absolute top-60 md:top-32 lg:top-48 right-20 md:right-32   lg:right-48 xl:right-64 w-8"
                            alt="">
                        <img src="{{ asset('images/greenpeople.png') }}"
                            class="absolute top-60 md:top-56 lg:top-60 left-10 lg:left-7 xl:left-16 w-8" alt="">
                    </div>

                </div>
                <div class="col-span-1 md:col-span-2 flex items-center">
                    <div>
                        <h1 class="font-bold text-xl md:text-xl lg:text-3xl mb-2">Discover why many entrepreneurs
                            choose</h1>
                        <span
                            class="font-bold text-xl md:text-xl lg:text-3xl bg-gradient-to-r from-primary to-[#39c457] text-white">Unity
                            Source to build their business
                        </span>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-10 lg:gap-y-32 mt-[170px]">
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">IT Solutions</h1>
                                <h1 class="text-paraColor text-sm md:text-base">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Esse, ea.</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">Design Solutions</h1>
                                <h1 class="text-paraColor text-sm md:text-base">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit.
                                    Esse, ea.</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">Consultancy</h1>
                                <h1 class="text-paraColor text-sm md:text-base">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit.
                                    Esse, ea.</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">CMS</h1>
                                <h1 class="text-paraColor text-sm md:text-base">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit.
                                    Esse, ea.</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{--  Smart Life   --}}
        <div class="mx-10 xl:h-screen mt-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="relative">
                    <img src="{{ asset('images/Ellipse 12.png') }}" alt="">
                    <div
                        class="bg-gray-300 w-full h-full xl:w-[600px] xl:h-[420px] rounded-xl shadow-xl absolute top-36 left-[50px]">
                    </div>
                    <img src="{{ asset('images/smart-life.png') }}"
                        class="absolute top-[158px] w-[585px] h-[400px] left-[57px]" alt="">
                    <div class="flex items-center gap-2 absolute top-[147px] left-[60px]">
                        <div class="bg-gray-500 w-2 h-2 rounded-full"></div>
                        <div class="bg-gray-500 w-2 h-2 rounded-full"></div>
                        <div class="bg-gray-500 w-2 h-2 rounded-full"></div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="text-center lg:text-left">
                        <h1 class="font-semibold text-lg lg:text-4xl">Smart Life</h1>
                        <h1 class="font-semibold text-primary text-base lg:text-2xl mb-5">Hire Purchase Services
                        </h1>
                        <h1 class="w-[500px] text-paraColor text-sm md:text-base text-left mb-5">
                            Our platform offers a effective solution to effortlessly
                            manage customer payments and monitor installment
                            plans. By providing businesses with powerful solution,
                            we simplify the process of keeping tabs on customer
                            payments and overseeing installment schedules.
                            Our user-friendly interface enhances operational
                            efficiency, allowing organizations to optimize their
                            workflows and achieve the best possible outcomes.
                            With our innovative platform, businesses can experience
                            smoother operations, improved financial management,
                            and enhanced customer satisfaction.
                        </h1>
                        <a href="" class="text-primary font-semibold">Find Out More <i
                                class="fa-solid fa-arrow-right-long ml-2"></i></a>
                    </div>

                </div>
            </div>

        </div>

        {{--  Fast Move  --}}
        <div class="mx-10 mt-20">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="col-span-1 flex items-center">
                    <div class="text-center lg:text-right">
                        <h1 class="font-semibold text-lg lg:text-4xl">Fast Move</h1>
                        <h1 class="font-semibold text-primary text-base lg:text-2xl mb-5">
                            Distribution System Software
                        </h1>
                        <h1 class="w-[550px] text-paraColor text-sm md:text-base text-right ml-[240px] mb-5">
                            Our Software is a tool that enables businesses to efficiently manage their supply chain
                            operations. It assists in automating tasks like inventory tracking, order processing,
                            and logistics management. This software enhances the distribution process by optimizing
                            inventory levels, minimizing order fulfillment time, and improving overall operational
                            accuracy. Its a crucial asset for businesses aiming to streamline their distribution
                            networks, reduce costs, and enhance customer satisfaction.
                        </h1>
                        <a href="" class="text-primary font-semibold"> <i
                                class="fa-solid fa-arrow-left-long mr-2"></i>Find Out More</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/Fast Move.png') }}" alt="">
                </div>
            </div>
        </div>

        {{-- Our Partner start   --}}
        <div class="mx-5 lg:mx-10 xl:mx-20 mt-20">
            <h1 class="text-center font-bold text-xl lg:text-4xl mb-7 ">Our Partners</h1>
            <div class="flex justify-center items-center text-center flex-row gap-10">
                <div class="bg-black w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/ten.png" class="w-[130px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/microsoft.png" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/red-hat.png" class="w-[70px]" alt="">
                    <h1 class="text-black font-black text-xl">Red Hat</h1>
                </div>
                <div class="bg-black w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/ten.png" class="w-[130px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/microsoft.png" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/red-hat.png" class="w-[70px]" alt="">
                    <h1 class="text-black font-black text-xl">Red Hat</h1>
                </div>
            </div>
            <div class="flex justify-center items-center text-center flex-row gap-10 mt-8 mr-[200px]">
                <div class="bg-black w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/ten.png" class="w-[130px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/microsoft.png" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/red-hat.png" class="w-[70px]" alt="">
                    <h1 class="text-black font-black text-xl">Red Hat</h1>
                </div>
                <div class="bg-black w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/ten.png" class="w-[130px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/microsoft.png" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/red-hat.png" class="w-[70px]" alt="">
                    <h1 class="text-black font-black text-xl">Red Hat</h1>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="" class=" text-primary">
                    Expore More <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>

        </div>

        {{--  Our Client start   --}}
        <div class="mx-5 lg:mx-10 mt-20 h-screen">
            <h1 class="text-center font-bold text-xl lg:text-4xl mb-7">Our Clients</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex justify-center items-center text-center flex-col">
                    <img src="images/clients_sample_1.png" alt="Client 1" class="w-[300px] h-auto mx-auto mb-4">
                    <p class="text-paraColor text-lg lg:text-lg w-[300px]">
                        Lorem ipsum dolor sit amet consectetur. Vitae enim ipsum nibh auctor varius volutpat consequat
                        vitae.
                        Donec at mauris tempor et turpis tellus pharetra.
                    </p>
                </div>

                <div class="flex justify-center items-center text-center flex-col">
                    <img src="images/clients_sample_2.png" alt="Client 2" class="w-[300px] h-auto mx-auto mb-4">
                    <p class="text-paraColor text-lg lg:text-lg w-[300px]">
                        Lorem ipsum dolor sit amet consectetur. Vitae enim ipsum nibh auctor varius volutpat consequat
                        vitae.
                        Donec at mauris tempor et turpis tellus pharetra.
                    </p>
                </div>

                <div class="flex justify-center items-center text-center flex-col">
                    <img src="images/clients_sample_3.png" alt="Client 3" class="w-[300px] h-auto mx-auto mb-4">
                    <p class="text-paraColor text-lg lg:text-lg w-[300px]">
                        Lorem ipsum dolor sit amet consectetur. Vitae enim ipsum nibh auctor varius volutpat consequat
                        vitae.
                        Donec at mauris tempor et turpis tellus pharetra.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-[#DEFFD8] mb-10 mt-[-200px]">
            <div class="text-center py-10">
                <h1 class="font-semibold text-base lg:text-xl mb-2">Jump-start your transformation journey now</h1>
                <h1 class="text-[#797979] text-xs lg:text-sm">We provide anything you could ask for- uniquely
                    end-to-end
                    solution provider as your trusted partner.</h1>
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
