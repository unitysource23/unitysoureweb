@extends('layouts.master')
@section('title', 'Home')
@section('css')

@endsection
@section('content')

<section class="home ">


    {{--  hero  start   --}}
    <div class="mx-10 xl:h-screen mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div>
                <img src="{{ asset('images/home section.png') }}" alt="">
            </div>
            <div class="flex items-center text-center md:text-right ">
                <div class="">
                    <button
                        class="text-primary text-sm lg:text-base mb-2 outline outline-1 outline-primary rounded-full px-3 lg:px-6 py-1 lg:py-2 tracking-wide font-semibold">View
                        our services and apps</button>
                    <h1 class="text-xl lg:text-3xl font-bold ">Your <span class="text-primary">All in One</span>
                    </h1>
                    <h1 class="text-xl lg:text-3xl font-bold mb-3">IT Solutions</h1>
                    <h1 class="text-paraColor text-sm lg:text-base">Lorem ipsum dolor sit amet consectetu
                        adipisicing elit. Repellatsunt quia maxime officia eum! Porro, suscipit. Placeat.

                    </h1>

                </div>

            </div>
        </div>
    </div>

    {{--  map two start   --}}
    <div class="mx-10 xl:h-screen mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="col-span-1 md:col-span-1  ">
                <div class="relative ">
                    <img src="{{ asset('images/country-map.png') }}" class="h-auto  mx-auto" alt="">
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
                        class="absolute top-60 md:top-56 lg:top-60 left-10 lg:left-7 xl:left-16 w-8"
                        alt="">
                </div>
            </div>
            <div class="col-span-1 md:col-span-2 flex items-center">

                <div>
                    <h1 class="font-semibold text-lg md:text-xl lg:text-2xl">Discover why many entrepreneurs
                        choose</h1>
                    <span
                        class="font-bold text-lg md:text-xl lg:text-2xl bg-gradient-to-r from-primary to-[#39c457] text-white ">Unity
                        Source to build their business
                    </span>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-10 lg:gap-y-32 mt-10    ">
                        <div class="border-[#29DC89] border-l-4 px-3 py-2">
                            <h1 class="font-bold text-lg lg:text-2xl">IT Solutions</h1>
                            <h1 class="text-paraColor text-sm md:text-base">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                                Esse, ea.</h1>
                        </div>
                        <div class="border-[#29DC89] border-l-4 px-3 py-2">
                            <h1 class="font-bold text-lg lg:text-2xl">Design Solutions</h1>
                            <h1 class="text-paraColor text-sm md:text-base">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                                Esse, ea.</h1>
                        </div>
                        <div class="border-[#29DC89] border-l-4 px-3 py-2">
                            <h1 class="font-bold text-lg lg:text-2xl">Consultancy</h1>
                            <h1 class="text-paraColor text-sm md:text-base">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                                Esse, ea.</h1>
                        </div>
                        <div class="border-[#29DC89] border-l-4 px-3 py-2">
                            <h1 class="font-bold text-lg lg:text-2xl">CMS</h1>
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
    <div class="mx-10 xl:h-screen mt-20  ">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="relative">
                <img src="{{ asset('images/Ellipse 12.png') }}" alt="">
                <div
                    class="bg-gray-300 w-full h-full xl:w-[550px] xl:h-[400px] rounded-lg shadow-xl absolute top-28 left-8">
                </div>
                <img src="{{ asset('images/smart-life.png') }}"
                    class="absolute top-32 w-[530px] h-[370px] left-10" alt="">
                <div class="flex items-center gap-2 absolute top-[117px] left-10">
                    <div class="bg-gray-600 w-2 h-2 rounded-full"></div>
                    <div class="bg-gray-600 w-2 h-2 rounded-full"></div>
                    <div class="bg-gray-600 w-2 h-2 rounded-full"></div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-center lg:text-left">
                    <h1 class="font-bold text-lg lg:text-2xl">Smart Life</h1>
                    <h1 class="font-semibold text-primary text-base lg:text-xl mb-5">Hire Purchase Services
                    </h1>
                    <h1 class="text-paraColor text-sm md:text-base text-justify mb-5">
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
                    <a href="" class="text-primary font-semibold">Fint Out More <i
                            class="fa-solid fa-arrow-right-long ml-2"></i></a>
                </div>

            </div>
        </div>

    </div>

    {{--  Fast Move  --}}

    <div class="mx-10  mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="col-span-1 flex items-center ">
                <div class=" text-center lg:text-right">
                    <h1 class="font-bold text-lg lg:text-2xl">Fast Move</h1>
                    <h1 class="font-semibold text-primary text-base lg:text-xl mb-5">
                        Distribution System Software
                    </h1>
                    <h1 class="text-paraColor text-sm md:text-base  mb-5">
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
        <h1 class="text-center font-bold text-lg lg:text-2xl mb-7 ">Our Partners</h1>
        <div class="swiper mySwiper  ">
            <div class="swiper-wrapper mx-16 mt-10 ">
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/ten1.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Ten</h1>
                            <h1 class="text-sm">E-commerce</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/red-hat.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Red Hat</h1>
                            <h1 class="text-sm">ICT Solution</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/infinity.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Ten</h1>
                            <h1 class="text-sm">E-commerce</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/ten1.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Ten</h1>
                            <h1 class="text-sm">E-commerce</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/red-hat.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Red Hat</h1>
                            <h1 class="text-sm">ICT Solution</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/infinity.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Ten</h1>
                            <h1 class="text-sm">E-commerce</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/ten1.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Ten</h1>
                            <h1 class="text-sm">E-commerce</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/red-hat.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Red Hat</h1>
                            <h1 class="text-sm">ICT Solution</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/infinity.png') }}" class="w-16 h-16" alt="">
                        <div>
                            <h1 class="font-semibold text-lg mb-2">Ten</h1>
                            <h1 class="text-sm">E-commerce</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            {{--  <div class=" swiper-button-next">
                    <i class="fa-solid fa-arrow-right-long   "></i>
            </div>
            <div class="swiper-button-prev">
                    <i class="fa-solid fa-arrow-left-long"></i>
            </div>  --}}

        </div>
        <div class="text-center mt-5">
            <a href="" class=" text-primary">
                Expore More <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>

    </div>

    {{--  Our Client start   --}}
    <div class=" mx-5 lg:mx-10 h-screen mt-14">
        <h1 class="text-center font-bold text-lg lg:text-2xl mb-7 ">Our Clients</h1>
        <div class="swiper mySwiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="col-span-1 relative group">
                        <div class=" cursor-pointer img-hover-zoom  ">
                            <img src="{{ asset('images/work.jpg') }}" class="" alt="">

                        </div>
                        <div class="w-4/5 fast-move group-hover:-translate-y-20 group-hover:duration-300 bg-primary h-[100px] absolute -bottom-12 left-[10%]  z-50  mx-auto ">
                            <div class="px-4 py-2">
                                <h1 class="text-white text-sm  lg:text-xl mb-1 ">
                                    Fast move Distribution Software
                                </h1>
                                <h1 class=" text-xs lg:text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-span-1 relative group">
                        <div class=" cursor-pointer img-hover-zoom  ">
                            <img src="{{ asset('images/work.jpg') }}" class="" alt="">

                        </div>
                        <div class="w-4/5 fast-move group-hover:-translate-y-20 group-hover:duration-300 bg-primary h-[100px] absolute -bottom-12 left-[10%]  z-50  mx-auto ">
                            <div class="px-4 py-2">
                                <h1 class="text-white text-sm  lg:text-xl mb-1 ">
                                    Fast move Distribution Software
                                </h1>
                                <h1 class=" text-xs lg:text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-span-1 relative group">
                        <div class=" cursor-pointer img-hover-zoom  ">
                            <img src="{{ asset('images/work.jpg') }}" class="" alt="">

                        </div>
                        <div class="w-4/5 fast-move group-hover:-translate-y-20 group-hover:duration-300 bg-primary h-[100px] absolute -bottom-12 left-[10%]  z-50  mx-auto ">
                            <div class="px-4 py-2">
                                <h1 class="text-white text-sm  lg:text-xl mb-1 ">
                                    Fast move Distribution Software
                                </h1>
                                <h1 class=" text-xs lg:text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-span-1 relative group">
                        <div class=" cursor-pointer img-hover-zoom  ">
                            <img src="{{ asset('images/work.jpg') }}" class="" alt="">

                        </div>
                        <div class="w-4/5 fast-move group-hover:-translate-y-20 group-hover:duration-300 bg-primary h-[100px] absolute -bottom-12 left-[10%]  z-50  mx-auto ">
                            <div class="px-4 py-2">
                                <h1 class="text-white text-sm lg:text-xl mb-1 ">
                                    Fast move Distribution Software
                                </h1>
                                <h1 class=" text-xs lg:text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <div class="bg-[#DEFFD8] mb-10">
        <div class="text-center py-10">
            <h1 class="font-semibold text-base lg:text-xl mb-2">Jump-start your transformation journey now</h1>
            <h1 class="text-[#797979] text-xs lg:text-sm">We provide anything you could ask for- uniquely end-to-end solution provider as your trusted partner.</h1>
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
