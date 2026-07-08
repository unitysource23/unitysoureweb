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
        }
    </style>
@endsection

@section('content')
<section class="relative w-full overflow-hidden mb-10 h-[250px] sm:h-[300px] md:h-[350px] lg:h-[420px] font-poppins">

    <img src="{{ asset('images/handshake2.jpg') }}"
         alt="Background"
         class="absolute inset-0 w-full h-full object-cover z-0 scale-105" />

    <div class="absolute inset-0 bg-black/50 z-0"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 h-full flex items-center">

        <div>

            <h1 class="text-white font-bold text-2xl sm:text-3xl md:text-4xl lg:text-[38px] leading-tight sm:leading-snug lg:leading-[1.5] flex flex-wrap gap-2 m-0 mb-4 lg:mb-10">

                <span>{{ __('messages.our_successful') }}</span>

                <span class="text-yellow-300">
                    {{ __('messages.partners') }}
                </span>

                <span class="text-blue-300">
                    {{ __('messages.business_industry') }}
                </span>

            </h1>

            <div class="w-14 sm:w-16 md:w-20 h-1 bg-yellow-400 rounded mt-4 sm:mt-6 lg:mt-10 mb-4 sm:mb-6 lg:mb-10"></div>

           <ul class="flex flex-wrap gap-3 sm:gap-4 lg:gap-5 text-white text-sm sm:text-base lg:text-lg font-medium">

                <li class="flex items-center gap-2">
                    <span class="text-white">●</span>
                        {{ __('messages.academic_hr') }}
                </li>

                <li class="flex items-center gap-2">
                    <span class="text-white">●</span>
                        {{ __('messages.vocational_it') }}
                </li>

                <li class="flex items-center gap-2">
                    <span class="text-white">●</span>
                        {{ __('messages.cloud_server') }}
                </li>

                <li class="flex items-center gap-2">
                    <span class="text-white">●</span>
                        {{ __('messages.erp_support') }}
                </li>

                <li class="flex items-center gap-2">
                    <span class="text-white">●</span>
                        {{ __('messages.re_solution') }}
                </li>

            </ul>
        </div>

    </div>

</section>

    <section class="partner partner-background font-poppins">
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
<div class="py-20 px-4 sm:px-10 bg-slate-50 font-poppins"> 
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center mb-14">
            <h2 class="text-2xl md:text-3xl font-semibold text-slate-800 tracking-tight uppercase">Our Partners</h2>
            <div class="w-16 h-0.5 bg-slate-300 mx-auto mt-4 rounded-full"></div> 
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 justify-items-center">
            
            {{-- Card 1 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 1.png" alt="IT STUDENTS" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-semibold text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.it_students') }}</h3>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 2.png" alt="ODOO ERP" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-semibold text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.odoo_erp') }}</h3>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 3.png" alt="HR STUDENTS" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-semibold text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.hr_students') }}</h3>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 4.png" alt="CLOUD SERVERS" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-semibold text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.cloud_servers') }}</h3>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/v1.jpg" alt="RECIRUMENT SERVICE" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-semibold text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.re_service') }}</h3>
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
