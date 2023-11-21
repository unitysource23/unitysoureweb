<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite('resources/css/app.css')
        <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
        <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
        <!-- Include compiled CSS -->


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>


    <body class="font-jakarta">
        <section class="home ">
            <div>
                {{--  nav start   --}}
                <nav class=" py-2 px-4 bg-white md:px-10 text-sm sticky top-0 shadow-sm ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/fav_icon.png') }}" class="w-12" alt="">
                            <h1 class="text-md md:text-lg font-semibold text-primary">Unity Source</h1>
                        </div>
                        <div class=" hidden sm:block ">
                            <div class="flex items-center gap-5">
                                <ul class="flex items-center gap-10 text-primary font-semibold">
                                    <li>
                                        <a href="">Home</a>
                                    </li>
                                    <li>
                                        <a href="">Partnership</a>
                                    </li>
                                    <li>
                                        <a href="">About</a>
                                    </li>
                                    <li>
                                        <a href="">Contact</a>
                                    </li>
                                </ul>
                                <div class="border px-2 py-1 rounded-md" id="language-btn">
                                    <h1 class="text-paraColor text-sm md:text-base font-medium cursor-pointer">English
                                        <span><i class="fa-solid fa-angle-down"></i></span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="sm:hidden" id="menuButton">
                            <i class="fa-solid fa-bars cursor-pointer"></i>
                        </div>
                    </div>
                    <div class=" hidden absolute top-[100%] w-[100%] left-0 z-[9999] bg-white shadow-md"
                        id="additionalFilter">
                        <div class="flex flex-col mt-5 gap-5 px-3 pb-3">
                            <ul class="flex flex-col  gap-10 text-primary font-semibold">
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>
                                    <a href="">Partnership</a>
                                </li>
                                <li>
                                    <a href="">About</a>
                                </li>
                                <li>
                                    <a href="">Contact</a>
                                </li>
                            </ul>
                            <div class="border px-2 w-20 py-1 rounded-md">
                                <h1 class="text-paraColor text-sm md:text-base font-medium">English <span><i
                                            class="fa-solid fa-angle-down"></i></span></h1>
                            </div>
                        </div>
                    </div>
                </nav>

                {{--  language dropdown start   --}}
                <div class=" absolute top-16   right-5">
                    <div id="language-menu"
                        class="bg-white hidden   text-sm rounded-lg text-paraColor text-sm md:text-base  py-2 shadow-md w-[150px]">
                        <div class="px-3  border-b py-2">
                            <input type="radio" name="" class="hidden" id="">
                            <label for="" class="font-semibold">English</label>
                        </div>
                        <div class="px-3 py-2">
                            <input type="radio" name="" class="hidden" id="">
                            <label for="" class="font-semibold">Myanmar</label>
                        </div>
                    </div>

                </div>
                {{--  language dropdown end  --}}
            </div>

            {{--  home section start   --}}
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

            {{--  our applications   --}}
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

            {{--  fast move start   --}}

            <div class="mx-10  mt-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <div class="col-span-1 flex items-center ">
                        <div class=" text-center lg:text-right">
                            <h1 class="font-bold text-lg lg:text-2xl">Smart Life</h1>
                            <h1 class="font-semibold text-primary text-base lg:text-xl mb-5">Hire Purchase Services
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


                        <div class=" swiper-button-next">
                            <i class="fa-solid fa-arrow-right-long   "></i>
                        </div>

                    <div class="swiper-button-prev">
                        <div>
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </div>
                    </div>

                </div>
                <div class="text-center mt-5">
                    <a href="" class=" text-primary">
                        Expore More <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>

            </div>

            {{--  Our Client start   --}}
            <div class="mx-10 h-screen mt-14">
                <h1 class="text-center font-bold text-lg lg:text-2xl mb-7 ">Our Clients</h1>
                <div class="grid grid-cols-2 gap-10">
                    <div class="col-span-1">
                        <div class="relative cursor-pointer img-hover-zoom ">
                            <img src="{{ asset('images/work.jpg') }}" class="-z-10" alt="">
                            <div class="w-4/5 bg-primary h-[100px] absolute -bottom-12 left-[10%]  z-50  mx-auto ">
                                <div class="px-4 py-2">
                                    <h1 class="text-white  text-xl mb-1 ">
                                        Fast move Distribution Software
                                    </h1>
                                    <h1 class="text-sm text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div>
                            <img src="{{ asset('images/home.jpg') }}" class="" alt="">
                        </div>
                    </div>

                </div>

            </div>




        </section>
        </section>
        <script src="{{ asset('js/fontawesome.js') }}"></script>
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/language.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
        </script>
    </body>

    </html>
