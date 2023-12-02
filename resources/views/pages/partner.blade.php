

@extends('layouts.master')
@section('title', 'Partner')
@section('css')

@endsection
@section('content')
<section class="partner">
    <div class="m-5 lg:m-10">
        {{--  our successful partners    --}}
        <div class="grid grid-cols-1 md:grid-cols-2 mb-10">
            <div class="flex items-center ">
                <div>
                    <div class="font-bold text-3xl mb-5">
                        <span class="text-primary">Our</span>
                        <span class="text-[#FCA139]">Successful </span>
                        <span class="text-primary">Partners</span>
                        <h1 class="text-[#D889E1]">Business Industry</h1>
                    </div>
                   <ul class="list-inside list-custom-disc  flex items-center flex-wrap gap-x-10 gap-y-5  ">
                    <li class=" text-[#898989] ">E-commerce</li>
                    <li class=" text-[#898989] ">Business Strategy</li>
                    <li class=" text-[#898989] ">Web Development</li>
                    <li class=" text-[#898989] ">E-commerce</li>
                    <li class=" text-[#898989] ">E-commerce</li>
                   </ul>
                </div>
            </div>


            <div>
                <img src="{{ asset('images/partnership.png') }}" alt="">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
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
                    <img src="{{ asset('images/infinity.png') }}" class="w-16 h-16" alt="">
                    <div>
                        <h1 class="font-semibold text-lg mb-2">Ten</h1>
                        <h1 class="text-sm">E-commerce</h1>
                    </div>
                </div>
            </div>
        </div>
        {{--  Our Partner Programme  --}}
        <div>
            <h1 class="font-bold text-2xl text-primary text-center">Our Partner Programme</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="flex items-center">
                    <div>
                        <h1 class="font-bold text-2xl text-primary mb-5">Benefits</h1>
                        <div class="flex flex-col gap-4">
                            <div class=" flex  items-center gap-3">
                                <div class="grow-1">
                                    <div class="bg-primary  w-7 h-7 rounded-full flex items-center justify-center text-white">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="text-justify  text-[#898989]">
                                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, magni. Nesciunt, asperiores facere quaerat dolores voluptatum odit culpa illo rem deserunt, </h1>
                                </div>
                            </div>
                            <div class=" flex  items-center gap-3">
                                <div class="grow-1">
                                    <div class="bg-primary  w-7 h-7 rounded-full flex items-center justify-center text-white">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="text-justify  text-[#898989]">
                                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, magni. Nesciunt, asperiores facere quaerat dolores voluptatum odit culpa illo rem deserunt, </h1>
                                </div>
                            </div>
                            <div class=" flex  items-center gap-3">
                                <div class="grow-1">
                                    <div class="bg-primary  w-7 h-7 rounded-full flex items-center justify-center text-white">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="text-justify  text-[#898989]">
                                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, magni. Nesciunt, asperiores facere quaerat dolores voluptatum odit culpa illo rem deserunt, </h1>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/Benefits.png') }}" alt="">
                </div>
            </div>
        </div>
        {{--  Choose from 4 Partner Type   --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
            <div class="bg-[#444B8C] text-white text-center">
                <div class="px-4 py-8">

                <h1 class="mb-10 text-lg font-semibold">Affiliates</h1>
                <p class="px-10 font-extralight">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eveniet architecto pariatur provident distinctio excepturi quas eos iusto. Vitae esse eos nulla quam, sunt voluptates quaerat. Maxime perferendis voluptatem sed.
                </p>
                </div>
            </div>
            <div class="bg-[#FC75B1] text-white text-center">
                <div class="px-4 py-8">

                <h1 class="mb-10 text-lg font-semibold">Resellers</h1>
                <p class="px-10 font-extralight">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eveniet architecto pariatur provident distinctio excepturi quas eos iusto. Vitae esse eos nulla quam, sunt voluptates quaerat. Maxime perferendis voluptatem sed.
                </p>
                </div>
            </div>
            <div class="bg-[#FEB236] text-white text-center">
                <div class="px-4 py-8">

                <h1 class="mb-10 text-lg font-semibold">Payroll Outsourcing</h1>
                <p class="px-10 font-extralight">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eveniet architecto pariatur provident distinctio excepturi quas eos iusto. Vitae esse eos nulla quam, sunt voluptates quaerat. Maxime perferendis voluptatem sed.
                </p>
                </div>
            </div>
            <div class="bg-[#00BBB3] text-white text-center">
                <div class="px-4 py-8">

                <h1 class="mb-10 text-lg font-semibold">App Partners</h1>
                <p class="px-10 font-extralight">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eveniet architecto pariatur provident distinctio excepturi quas eos iusto. Vitae esse eos nulla quam, sunt voluptates quaerat. Maxime perferendis voluptatem sed.
                </p>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
@section('script')
<script>

</script>
@endsection

