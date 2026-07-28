@extends('layouts.master')
@section('title', 'Partner')
@section('css')
    <style>
        body{
            font-family: 'poppins', sans-serif !important;
        }
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
<section class="relative w-full overflow-hidden bg-slate-50 font-poppins">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start pt-2 sm:pt-4">

            <!-- Left Content -->
            <div class="lg:col-span-6 text-center lg:text-left py-4 lg:py-8">

                <!-- Breadcrumb -->
                <nav class="flex items-center justify-center lg:justify-start gap-2 text-xs sm:text-sm text-gray-500 mb-4 sm:mb-6">
                    <a href="#" class="hover:text-green-600 transition-colors">
                        Home
                    </a>
                    <span>&gt;</span>
                    <span class="text-gray-700 font-medium">
                        Partnership
                    </span>
                </nav>

                <!-- Heading -->
                <h1 class="text-2xl sm:text-4xl lg:text-[40px] font-bold text-slate-900 leading-snug sm:leading-[1.3] mt-2 mb-4 sm:mb-5 tracking-tight">
                    Partnership That <br class="hidden sm:block">
                    Creates
                    <span class="text-green-600">More Value</span>
                    Together
                </h1>

                <!-- Description -->
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed sm:leading-8 mb-6 sm:mb-7 max-w-xl mx-auto lg:mx-0">
                    At Unity Source, we believe strong partnerships lead to greater innovation,
                    better solutions and shared success.
                </p>

                <!-- Button -->
                <a href="#"
                    class="inline-flex items-center gap-2.5 bg-green-600 hover:bg-green-700 text-white font-medium px-5 sm:px-6 py-3 sm:py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 group">

                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M18.5 13c-1.3 0-2.4.8-2.8 2H13c-.6 0-1.1-.2-1.5-.6l-3.3-3.3 1.4-1.4 2.8 2.8c.2.2.5.3.8.3h3.8c.4 1.2 1.5 2 2.8 2 1.7 0 3-1.3 3-3s-1.3-3-3-3c-1.1 0-2.1.6-2.6 1.5H13c-.9 0-1.8.4-2.4 1l-1.4 1.4-1.4-1.4C7.2 9.8 6.3 9.4 5.4 9.4H3.5C2.1 9.4 1 10.5 1 11.9v2.2c0 .8.4 1.6 1.1 2l3.4 2c.8.5 1.8.8 2.7.8h3.3c.9 0 1.8-.4 2.4-1l2.8-2.8c.4 1.2 1.5 2 2.8 2 1.7 0 3-1.3 3-3s-1.3-3-3-3z"/>
                    </svg>

                    <span>Become a Partner</span>

                    <svg class="w-4 h-4 stroke-current stroke-2 fill-none group-hover:translate-x-1 transition-transform"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>

                </a>

            </div>

            <!-- Right Image -->
            <div class="lg:col-span-6 flex justify-end overflow-visible lg:pt-16">

                <div class="relative w-full lg:-ml-20">

                    <img
                        src="{{ asset('images/partner1.png') }}"
                        alt="Partner"
                        class="w-full max-w-[1400px] h-auto object-contain ml-auto">

                </div>

            </div>

        </div>
    </div>

</section>

<section class="mb-10 mt-5 bg-white font-poppins">
  <div class="max-w-6xl mx-auto">
    <p class="text-green-600 text-xs sm:text-sm md:text-base font-bold tracking-wider uppercase mb-3 sm:mb-4 md:mb-5">
        Partnership Programs
    </p>

    <h2 class="text-slate-900 text-2xl sm:text-2xl md:text-3xl lg:text-[30px] font-extrabold leading-tight sm:leading-snug tracking-tight mb-8 sm:mb-10 md:mb-12">
        Choose the Partnership That Fits You
    </h2>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-10">
      
      <!-- Card 1: Reseller Partner -->
      <div class="flex flex-col items-center justify-center text-center shadow-sm "> 
        <div class="w-18 h-18 rounded-full bg-green-100 text-green-600 flex items-center justify-center mb-10 p-4">
          <!-- Handshake Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m11 17 2 2a1 1 0 0 0 1.4 0l3.6-3.6a1 1 0 0 0 0-1.4l-2-2"></path>
            <path d="m22 11-1.5-1.5a1 1 0 0 0-1.4 0l-2 2a1 1 0 0 1-1.4 0l-3.3-3.3a1 1 0 0 0-1.4 0l-2.1 2.1a1 1 0 0 0 0 1.4l5 5a1 1 0 0 0 1.4 0l3.3-3.3a1 1 0 0 1 1.4 0l1.5 1.5a1 1 0 0 0 1.4 0l1.5-1.5a1 1 0 0 0 0-1.4Z"></path>
            <path d="M2 11l4.5-4.5a1 1 0 0 1 1.4 0l2.1 2.1"></path>
          </svg>
        </div>
        <h3 class="text-slate-900 font-bold text-base mb-5">Reseller Partner</h3>
      </div>

      <!-- Card 2: Implementation Partner -->
      <div class="flex flex-col items-center justify-center text-center shadow-sm">
        <div class="w-18 h-18 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center mb-10 p-4">
          <!-- Users Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
          </svg>
        </div>
        <h3 class="text-slate-900 font-bold text-base mb-5">Implementation Partner</h3>
      </div>

      <!-- Card 3: Technology Partner -->
      <div class="flex flex-col items-center justify-center text-center shadow-sm">
        <div class="w-18 h-18 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mb-10 p-4">
          <!-- Code Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="16 18 22 12 16 6"></polyline>
            <polyline points="8 6 2 12 8 18"></polyline>
          </svg>
        </div>
        <h3 class="text-slate-900 font-bold text-base mb-5">Technology Partner</h3>
      </div>

      <!-- Card 4: Referral Partner -->
      <div class="flex flex-col items-center justify-center text-center shadow-sm">
        <div class="w-18 h-18 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mb-10 p-4">
          <!-- Group Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
          </svg>
        </div>
        <h3 class="text-slate-900 font-bold text-base mb-5">Referral Partner</h3>
      </div>

    </div>
  </div>
</section>


</section>
    <section class="partner partner-background font-poppins">
        <div class="partner-overlay px-4 py-8 sm:px-6 lg:px-8">
            {{-- Our Partner Programme --}}
            <div class="mb-16">
                <h1 class="font-bold text-2xl sm:text-3xl text-black text-center font-poppins">{{ __('messages.partner_program') }}</h1>
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
<div class="py-4 px-4 sm:px-10 bg-slate-50 font-poppins"> 
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center mb-14">
            <h2 class="text-2xl font-bold md:text-3xl font-poppins text-slate-800 tracking-tight uppercase">Our Partners</h2>
            <div class="w-16 h-0.5 bg-slate-300 mx-auto mt-4 rounded-full"></div> 
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 justify-items-center">
            
            {{-- Card 1 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 1.png" alt="IT STUDENTS" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-bold font-poppins text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.it_students') }}</h3>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 2.png" alt="ODOO ERP" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-bold font-poppins text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.odoo_erp') }}</h3>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 3.png" alt="HR STUDENTS" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-bold font-poppins text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.hr_students') }}</h3>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/Partner 4.png" alt="CLOUD SERVERS" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-bold font-poppins text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.cloud_servers') }}</h3>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-500 ease-out w-full max-w-[280px]">
                <div class="overflow-hidden bg-slate-50">
                    <img src="images/v1.jpg" alt="RECIRUMENT SERVICE" class="w-full aspect-[4/3] object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-5 text-center">
                    <h3 class="text-base font-bold font-poppins text-slate-700 group-hover:text-slate-900 transition-colors duration-300">{{ __('messages.re_service') }}</h3>
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
