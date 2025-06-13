@extends('layouts.master')
@section('title', 'Partner')
@section('css')
    <style>
        .text-primary li::marker {
            color: #128100;
        }
    </style>
@endsection

@section('content')
    <section class="partner">
        <div class="px-4 py-8 sm:px-6 lg:px-10">

            {{--  Our Successful Partners --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-20 items-center">
                <div>
                    <div class="font-bold text-3xl sm:text-4xl mb-5">
                        <p class="text-black">Our Successful</p>
                        <p class="text-black">Partners'</p>
                        <p class="text-black">Business Industry</p>
                    </div>
                    <ul class="list-inside list-disc grid grid-cols-1 sm:grid-cols-2 gap-4 text-primary text-base mt-10">
                        <li class="text-black">Academic HR</li>
                        <li class="text-black">Vocational IT</li>
                        <li class="text-black">Cloud Server Support</li>
                        <li class="text-black">ERP Solution Support</li>
                    </ul>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/handshake.jpg') }}" alt="Partnership" class="max-w-full h-auto mt-10 rounded-lg border-4 border-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300">
                </div>
            </div>

            {{--  Our Partner Programme --}}
            <div class="mb-16">
                <h1 class="font-bold text-2xl sm:text-3xl text-black text-center">Our Partner Program</h1>
                <div class="flex justify-center my-2">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-bold text-xl sm:text-2xl text-black mb-6">Benefits</h2>
                            <div class="flex flex-col gap-6">
                                @foreach (['To achieve mutual benefit in both businesses', 'To help businesses run more efficiently with the help of technology'] as $benefit)
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="bg-primary w-8 h-8 rounded-full flex items-center justify-center text-white">
                                            <i class="fa-solid fa-check text-sm"></i>
                                        </div>
                                        <p class="text-black text-base text-justify">{{ $benefit }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/Benefits.png') }}" alt="Benefits" class="max-w-full h-auto">
                    </div>
                </div>
            </div>

            {{-- Partners --}}
            <div class="bg-gray-50 py-10 px-4 sm:px-10">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Card Template -->
                        @php
                            $cards = [
                                ['img' => 'Partner 1.png', 'title' => 'IT STUDENTS'],
                                ['img' => 'Partner 2.png', 'title' => 'ODOO ERP'],
                                ['img' => 'Partner 3.png', 'title' => 'HR STUDENTS'],
                                ['img' => 'Partner 4.png', 'title' => 'CLOUD SERVERS'],
                            ];
                        @endphp

                        @foreach ($cards as $card)
                            <div
                                class="bg-white text-center rounded-2xl shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                <div class="p-6">
                                    <img src="{{ asset('images/' . $card['img']) }}" alt="{{ $card['title'] }}"
                                        class="w-40 sm:w-48 md:w-56 h-40 sm:h-48 md:h-56 object-cover mx-auto mb-6 shadow-lg" />
                                    <h2 class="text-xl font-semibold text-gray-800">{{ $card['title'] }}</h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')
    <script></script>
@endsection
