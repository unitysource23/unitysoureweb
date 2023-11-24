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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.2/font/bootstrap-icons.min.css" integrity="sha512-D1liES3uvDpPrgk7vXR/hR/sukGn7EtDWEyvpdLsyalQYq6v6YUsTUJmku7B4rcuQ21rf0UTksw2i/2Pdjbd3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

            <div class="bg-primary text-white py-5 text-center font-semibold text-xl">
                <h1>About Us</h1>
            </div>

            {{--  mission vision start   --}}

            <div class="relative  mx-auto w-full lg:w-3/4  mt-10 lg:mt-20 ">
                <img src="{{ asset('images/mission.png') }}" class="" alt="">
                <div class="bg-white absolute w-20 -top-4 left-8  md:-top-3 md:left-12 lg:-top-3 lg:left-12 xl:-top-2 xl:left-24 md:w-36 text-center py-1 md:py-4 font-semibold text-lg text-[#EDBB30]">Mission</div>
                <div class="bg-white absolute w-20 -top-4 left-48  md:-top-3 md:left-[430px] lg:-top-3 lg:left-96 xl:-top-2 xl:left-[550px] md:w-36 text-center py-1 md:py-4 font-semibold text-lg text-[#21B9BF]">Goals</div>
                <div class="bg-white absolute w-18 top-[55px] left-32 md:w-32 md:top-[120px] md:left-[230px] lg:top-[110px] lg:left-[230px] xl:top-[160px] xl:left-[310px] text-center py-1 md:py-4 font-semibold md:text-lg text-[#F77432]">Vision</div>
                <div class="bg-white absolute w-18 top-[55px] left-[288px] md:w-32 md:top-[120px] md:left-[570px] lg:top-[110px] lg:left-[590px] xl:top-[160px] xl:left-[750px] text-center py-1 md:py-4 font-semibold md:text-lg text-[#82B21E]">Values</div>

                <h1 class="w-[100px] absolute top-36 left-3 md:w-[150px] md:top-72  md:left-10 lg:w-[180px] lg:top-80 lg:left-10 xl:top-96 xl:left-16 text-xs md:text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam error, numquam voluptatum! Modi, ex id! Sed, sint
                </h1>
                <h1 class="w-[90px] absolute top-52 left-28 md:w-[150px] md:top-[400px]  md:left-60 lg:w-[180px] lg:top-[400px] lg:left-60 xl:top-[520px] xl:left-72 text-xs md:text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam error, numquam
                </h1>
                <h1 class="w-[90px] absolute top-40 left-[200px] md:w-[150px] md:top-[280px]  md:left-[420px] lg:w-[160px] lg:top-[280px] lg:left-[420px] xl:top-[370px] xl:left-[530px] text-xs md:text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam error, numquam
                </h1>
                <h1 class="w-[80px] absolute top-52 left-[300px] md:w-[150px] md:top-[400px]  md:left-[650px] lg:w-[180px] lg:top-[400px] lg:left-[580px] xl:top-[520px] xl:left-[700px] text-xs md:text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore labore quo repellendus eaque nam error, numquam
                </h1>
            </div>

            {{--  meet the teamm start   --}}
            <div>
                <div class=" mx-5 lg:mx-10 h-screen bg-[#ecffe8] mt-32">
                    <h1 class="text-center font-bold text-lg lg:text-2xl mb-7 ">Meet The Team</h1>
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide px-6">
                                <div class="relative group">
                                    <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww" class="h-[500px] w-full object-cover mx-auto "  alt="">
                                    <div class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                        <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                        <h1 class="text-white text-center font-thin ">Managing Director</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-6">
                                <div class="relative group">
                                    <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww" class="h-[500px] w-full object-cover mx-auto "  alt="">
                                    <div class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                        <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                        <h1 class="text-white text-center font-thin ">Managing Director</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-6">
                                <div class="relative group">
                                    <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww" class="h-[500px] w-full object-cover mx-auto "  alt="">
                                    <div class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                        <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                        <h1 class="text-white text-center font-thin ">Managing Director</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-6">
                                <div class="relative group">
                                    <img src="https://images.unsplash.com/photo-1627161683077-e34782c24d81?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlJTIwd29ya2VyfGVufDB8fDB8fHww" class="h-[500px] w-full object-cover mx-auto "  alt="">
                                    <div class="bg-black  transition-all duration-700 opacity-70 h-[0px] group-hover:h-[100px]   w-full absolute bottom-0">
                                        <h1 class="text-white text-center mt-5">U Win Maung</h1>
                                        <h1 class="text-white text-center font-thin ">Managing Director</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                          <div class=" swiper-button-next outline outline-gray-400 outline-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                              </svg>
                        </div>
                        <div class="swiper-button-prev outline outline-gray-400 outline-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                              </svg>
                        </div>

                    </div>

                </div>
            </div>


            <div class="mx-5 lg:mx-10  ">
                <h1 class="text-center font-bold text-lg lg:text-2xl mb-7 ">How we build good to great business</h1>
                <h1 class="text-center px-32">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis quibusdam ea dicta maxime non hic. Assumenda beatae excepturi, voluptatem odio corrupti mollitia! Quam quod tenetur ipsa dicta repellendus minus molestias.</h1>
            </div>

            <div style="background-image: url({{ asset('images/map.png') }})" class=" mt-48 h-[300px] bg-no-repeat w-full ">
                <div class="relative ">
                    <div class="absolute -top-24 left-20">
                        <img src="{{ asset('images/research.png') }}" alt="">
                        <h1 class="font-semibold text-2xl text-center">Research</h1>
                        <h1 class="text-center">Research short para</h1>
                    </div>
                    <div class="absolute top-0 left-[400px]">
                        <h1 class="font-semibold text-2xl text-center">Concept</h1>
                        <h1 class="text-center">Concept short para</h1>
                        <img src="{{ asset('images/concepts.png') }}" alt="">

                    </div>
                    <div class="absolute -top-24 left-[700px]">
                        <img src="{{ asset('images/design.png') }}" alt="">
                        <h1 class="font-semibold text-2xl text-center">Design</h1>
                        <h1 class="text-center">Design short para</h1>
                    </div>
                    <div class="absolute top-10 left-[1050px]">
                        <h1 class="font-semibold text-2xl text-center">Develop & Test</h1>
                        <h1 class="text-center">Concept short para</h1>
                        <img src="{{ asset('images/develop.png') }}" alt="">

                    </div>

                </div>

            </div>



            {{--  <x-footer/>  --}}



        </section>
        </section>
        <script src="{{ asset('js/fontawesome.js') }}"></script>
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/language.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
                        slidesPerView: 3,
                        spaceBetween: 30
                    }

                },



            });
        </script>
    </body>

    </html>

