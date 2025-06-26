@extends('layouts.master')
@section('title', 'Partner')
@section('css')
    <style>
        .partner-background {
            background-image: url('{{ asset('images/handshake.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .partner-overlay {
            background-color: rgba(255, 255, 255, 0.9);
            /* light white overlay */
        }
    </style>
@endsection

@section('content')
    <section class="relative w-full overflow-hidden mb-10">
        <img src="{{ asset('images/handshake2.jpg') }}" alt="Background"
            class="absolute inset-0 w-full h-full object-cover z-0" />

        <div class="absolute inset-0 bg-black bg-opacity-40 z-0"></div>
        <div
            class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div>
                <div class="font-bold text-3xl sm:text-4xl text-white mb-6 space-y-1 leading-tight">
                    <p>{{ __('messages.our_successful') }}</p>
                    <p>{{ __('messages.partners') }}</p>
                    <p>{{ __('messages.business_industry') }}</p>
                </div>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-lg list-disc list-inside text-white font-bold">
                    <li>{{ __('messages.academic_hr') }}</li>
                    <li>{{ __('messages.vocational_it') }}</li>
                    <li>{{ __('messages.cloud_server') }}</li>
                    <li>{{ __('messages.erp_support') }}</li>
                </ul>
            </div>
            <div class="flex justify-center items-center">
            </div>
        </div>
    </section>

    <section class="partner partner-background">
        <div class="partner-overlay px-4 py-8 sm:px-6 lg:px-10">
            {{-- Our Partner Programme --}}
            <div class="mb-16">
                <h1 class="font-bold text-2xl sm:text-3xl text-black text-center">{{ __('messages.partner_program') }}</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-8">
                    <div class="flex items-center">
                        <div>
                            <h2 class="font-bold text-lg lg:text-3xl text-black mb-6">{{ __('messages.benefits') }}</h2>
                            <div class="flex flex-col gap-6">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 rounded-full flex items-center justify-center text-white">
                                        <i class="fa-solid fa-check text-xs sm:text-sm md:text-base"></i>
                                    </div>
                                    <p class="text-black text-base text-left">
                                        {{ __('messages.benefit_1') }}
                                    </p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="bg-primary w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 rounded-full flex items-center justify-center text-white">
                                        <i class="fa-solid fa-check text-xs sm:text-sm md:text-base"></i>
                                    </div>
                                    <p class="text-black text-base text-left">
                                        {{ __('messages.benefit_2') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/Benefits.png') }}" alt="Benefits" class="max-w-full h-auto">
                    </div>
                </div>
            </div>

            {{-- Partners --}}
            <div class="py-10 px-4 sm:px-10">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div
                            class="bg-white text-center rounded-2xl shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            <div class="p-6">
                                <img src="images/Partner 1.png" alt="IT STUDENTS"
                                    class="w-40 sm:w-48 md:w-56 h-40 sm:h-48 md:h-56 object-cover mx-auto mb-6 shadow-lg" />
                                <h2 class="text-xl font-semibold text-gray-800">{{ __('messages.it_students') }}</h2>
                            </div>
                        </div>
                        <div
                            class="bg-white text-center rounded-2xl shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            <div class="p-6">
                                <img src="images/Partner 2.png" alt="ODOO ERP"
                                    class="w-40 sm:w-48 md:w-56 h-40 sm:h-48 md:h-56 object-cover mx-auto mb-6 shadow-lg" />
                                <h2 class="text-xl font-semibold text-gray-800">{{ __('messages.odoo_erp') }}</h2>
                            </div>
                        </div>
                        <div
                            class="bg-white text-center rounded-2xl shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            <div class="p-6">
                                <img src="images/Partner 3.png" alt="HR STUDENTS"
                                    class="w-40 sm:w-48 md:w-56 h-40 sm:h-48 md:h-56 object-cover mx-auto mb-6 shadow-lg" />
                                <h2 class="text-xl font-semibold text-gray-800">{{ __('messages.hr_students') }}</h2>
                            </div>
                        </div>
                        <div
                            class="bg-white text-center rounded-2xl shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            <div class="p-6">
                                <img src="images/Partner 4.png" alt="CLOUD SERVERS"
                                    class="w-40 sm:w-48 md:w-56 h-40 sm:h-48 md:h-56 object-cover mx-auto mb-6 shadow-lg" />
                                <h2 class="text-xl font-semibold text-gray-800">{{ __('messages.cloud_servers') }}</h2>
                            </div>
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
