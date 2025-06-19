@extends('layouts.master')
@section('title', 'Our Products')
@section('css')
@endsection
@section('content')
    <section class="our-products">
        <div class="bg-[#f2fcf5] mt-5 sm:mt-8 lg:mt-10">
            <div class="mx-4 sm:mx-6 lg:mx-20">
                <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8">
                    Get Started with Our Products
                </h1>

                <div class="flex flex-col md:flex-row items-center justify-between gap-6 py-5 sm:py-8">
                    <div class="flex-1 flex justify-center">
                        <img src="{{ asset('images/smart-life.png') }}" class="max-w-[300px] sm:max-w-[400px]"
                            alt="Smart Life">
                    </div>
                    <div class="flex-1 flex justify-center">
                        <div class="flex flex-col gap-3 text-center">
                            <h2 class="font-semibold text-lg sm:text-xl md:text-2xl">Smart Life</h2>
                            <h3 class="font-semibold text-primary text-sm sm:text-base md:text-lg">Hire Purchase Services
                            </h3>
                            <button
                                class="bg-primary w-40 sm:w-56 text-white rounded-full px-4 sm:px-5 py-2 text-sm sm:text-lg">
                                Use Demo
                            </button>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-600 my-8"></div>

                <div class="flex flex-col md:flex-row items-center justify-between gap-6 py-5 sm:py-8 mt-10">
                    <div class="flex-1 relative flex justify-center">
                        <img src="{{ asset('images/fast-move-1.png') }}" class="max-w-[300px] sm:max-w-[400px]"
                            alt="Fast Move Base">
                        <img src="{{ asset('images/fast-move.png') }}"
                            class="absolute top-16 sm:top-20 left-4 sm:left-8 max-w-[250px] sm:max-w-[350px]"
                            alt="Fast Move Overlay">
                    </div>
                    <div class="flex-1 flex justify-center">
                        <div class="flex flex-col gap-3 text-center">
                            <h2 class="font-semibold text-lg sm:text-xl md:text-2xl">Smart Life</h2>
                            <h3 class="font-semibold text-primary text-sm sm:text-base md:text-lg">Hire Purchase Services
                            </h3>
                            <button
                                class="bg-primary w-40 sm:w-56 text-white rounded-full px-4 sm:px-5 py-2 text-sm sm:text-lg">
                                Use Demo
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
