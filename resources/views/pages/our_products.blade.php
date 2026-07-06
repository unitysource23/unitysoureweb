@extends('layouts.master')

@section('title', 'Our Products')

@section('css')
@endsection

@section('content')
<section class="our-products">
    <div class="bg-[#f2fcf5]">
        <div class="mx-4 sm:mx-6 lg:mx-20">
            
            <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl lg:text-4xl py-5 sm:py-8 text-gray-800">
                {{ __('messages.our_products_title') }}
            </h1>

            <!-- Product 1 -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-10 py-8 sm:py-12">
                
                <div class="flex-1 flex justify-center">
                    <img src="{{ asset('images/smart-life.png') }}" class="max-w-[280px] sm:max-w-[360px] w-full drop-shadow-xl" alt="Smart Life">
                </div>
               
                <div class="flex-1 flex justify-center">
                    <div class="flex flex-col items-center gap-4 text-center max-w-md mx-auto">
                        <h2 class="font-bold text-xl sm:text-2xl md:text-3xl text-gray-900 tracking-tight">
                            {{ __('messages.smart_life') }}
                        </h2>
                        <span class="inline-block bg-primary/10 text-primary font-semibold text-xs sm:text-sm px-4 py-1.5 rounded-full uppercase tracking-wider">
                            {{ __('messages.hire_purchase') }}
                        </span>
                        <p class="text-gray-500 text-sm sm:text-base leading-relaxed mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facere, natus possimus, alias deserunt veniam, dolor adipisci dolores ad rem eveniet expedita aperiam ducimus sed vitae! Earum minus hic quae.
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-300 my-10 max-w-md mx-auto"></div>

            <!-- Product 2 -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-10 py-8 sm:py-12">
                
                <div class="flex-1 relative flex justify-center items-center min-h-[300px]">
                    <img src="{{ asset('images/fast-move-1.png') }}" class="max-w-[280px] sm:max-w-[360px] w-full relative z-10 drop-shadow-xl" alt="Fast Move Base">
                    <img src="{{ asset('images/fast-move.png') }}" class="absolute top-10 left-2 sm:left-8 max-w-[200px] sm:max-w-[280px] w-1/2 drop-shadow-xl" alt="Fast Move Overlay">
                </div>
                
                <div class="flex-1 flex justify-center">
                    <div class="flex flex-col items-center gap-4 text-center max-w-md mx-auto">
                        <h2 class="font-bold text-xl sm:text-2xl md:text-3xl text-gray-900 tracking-tight">
                            {{ __('messages.mobile_shop') }}
                        </h2>
                        <span class="inline-block bg-primary/10 text-primary font-semibold text-xs sm:text-sm px-4 py-1.5 rounded-full uppercase tracking-wider">
                            {{ __('messages.hire_purchase') }}
                        </span>
                        <p class="text-gray-500 text-sm sm:text-base leading-relaxed mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facere, natus possimus, alias deserunt veniam, dolor adipisci dolores ad rem eveniet expedita aperiam ducimus sed vitae! Earum minus hic quae.
                        </p>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</section>
@endsection

@section('script')

@endsection