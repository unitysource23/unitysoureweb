@extends('layouts.master')
@section('title', 'Partner')
@section('css')
    <style>
        .text-primary li::marker {
            color: #128100;
            /* Custom bullet color */
        }

        .hover\:scale-105 {
            transform: scale(1.05);
        }
    </style>
@endsection
@section('content')
    <section class="partner">
        <div class="m-5 lg:m-10">
            {{--  our successful partners    --}}
            <div class="grid grid-cols-1 md:grid-cols-2 mb-20">
                <div class="flex items-center ">
                    <div>
                        <div class="font-bold text-4xl mb-5">
                            <span class="text-black">Our</span>
                            <span class="text-black">Successful </span>
                            <span class="text-black">Partners'</span>
                            <h1 class="text-black">Business Industry</h1>
                        </div>
                        <ul class="list-inside list-custom-disc grid grid-cols-2 gap-4 text-primary">
                            <li class=" text-black ">Academy HR</li>
                            <li class=" text-black ">Vocational IT School</li>
                            <li class=" text-black ">Cloud Server Support</li>
                            <li class=" text-black ">ERP Solution Support</li>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/partnership1.png') }}" alt="Partnership"/>
                </div>
            </div>

            {{--  Our Partner Programme  --}}
            <div>
                <h1 class="font-bold text-3xl text-black text-center">Our Partner Programme</h1>
                <div class="flex items-center justify-center">
                    <hr class="w-52">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex items-center">
                        <div>
                            <h1 class="font-bold text-3xl text-black mb-10">Benefits</h1>
                            <div class="flex flex-col gap-8">
                                <div class=" flex  items-center gap-3">
                                    <div class="grow-1">
                                        <div
                                            class="bg-primary  w-9 h-9 rounded-full flex items-center justify-center text-white">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="text-justify text-base text-black">
                                        <h1>To achieve mutual benefit in both businesses </h1>
                                    </div>
                                </div>
                                <div class=" flex  items-center gap-3">
                                    <div class="grow-1">
                                        <div
                                            class="bg-primary  w-9 h-9 rounded-full flex items-center justify-center text-white">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="text-justify text-base text-black">
                                        <h1>To help businesses run more efficiently with the help of technology </h1>
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
            <div>
                <h1 class="font-bold text-3xl text-black text-center mb-10">Choose From 4 Partner Types</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <div
                        class="bg-[#444B8C] text-white text-center rounded-xl shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300">
                        <div class="px-6 py-6">
                            <img src="{{ asset('images/Partner 1.png') }}" alt="Affiliates"
                                class="w-36 h-36 mx-auto mb-4 rounded-full shadow-md object-cover" />
                            <h2 class="text-xl font-bold mb-2">IT STUDENTS</h2>
                        </div>
                    </div>

                    <div
                        class="bg-[#FC75B1] text-white text-center rounded-xl shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300">
                        <div class="px-6 py-6">
                            <img src="{{ asset('images/Partner 2.png') }}" alt="Resellers"
                                class="w-36 h-36 mx-auto mb-4 rounded-full shadow-md object-cover" />
                            <h2 class="text-xl font-bold mb-2">ODOO ERP</h2>
                        </div>
                    </div>

                    <div
                        class="bg-[#FEB236] text-white text-center rounded-xl shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300">
                        <div class="px-6 py-6">
                            <img src="{{ asset('images/Partner 3.png') }}" alt="Payroll Outsourcing"
                                class="w-36 h-36 mx-auto mb-4 rounded-full shadow-md object-cover" />
                            <h2 class="text-xl font-bold mb-2">HR STUDENTS</h2>
                        </div>
                    </div>

                    <div
                        class="bg-[#00BBB3] text-white text-center rounded-xl shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300">
                        <div class="px-6 py-6">
                            <img src="{{ asset('images/Partner 4.png') }}" alt="App Partners"
                                class="w-36 h-36 mx-auto mb-4 rounded-full shadow-md object-cover" />
                            <h2 class="text-xl font-bold mb-2">CLOUD SERVERS</h2>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

@endsection
@section('script')
    <script></script>
@endsection
