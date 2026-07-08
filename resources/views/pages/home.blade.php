@extends('layouts.master')
@section('title', 'Home')
@section('css')

@endsection
@section('content')

<section class="home ">
<section class="relative overflow-hidden bg-[#fafafa] font-poppins">

    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-green-100 rounded-full blur-3xl opacity-40"></div>

    <div class="max-w-7xl mx-auto px-6 pt-20 pb-12">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>

                <h1 class="text-3xl sm:text-3xl md:text-3xl lg:text-4xl font-extrabold tracking-tight text-gray-900 leading-tight sm:leading-tight md:leading-[1.35] lg:leading-[1.35] mb-12">
                    {{ __('messages.tagline') }} <br>
                    <span class="text-green-600 inline-block mt-1 sm:mt-2 md:mt-3">{{ __('messages.tagline1') }}</span>
                </h1>

                <p class="text-gray-500 text-lg leading-8 mb-8">
                   {{ __('messages.text1') }}
                </p>

                <div class="flex gap-4">
                    <a href="#" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition-colors">
                        {{ __('messages.explore') }} →
                    </a>
                    <a href="#" class="px-6 py-3 rounded-xl border border-gray-300 text-gray-700 font-semibold hover:bg-gray-50 transition-colors flex items-center gap-2">
                       {{ __('messages.contact') }}  <span>📞</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 w-full">
    
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-green-100 text-green-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636a9 9 0 010 12.728m0 0l-1.414-1.414m1.414 1.414L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-1.414-1.414M12 18.75V21m-6-11.25a6 6 0 0112 0v1.5H6v-1.5zm-3 6.75h18" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM9 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                        </div>
                        <div> 
                            <h4 class="font-bold text-gray-800 text-sm md:text-base whitespace-nowrap">{{ __('messages.local') }} </h4>
                            <p class="text-xs text-gray-400 mt-0.5 md:text-sm whitespace-nowrap">{{ __('messages.here') }}</p>
                        </div>
                    </div>
    
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-green-100 text-green-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-sm md:text-base whitespace-nowrap">{{ __('messages.secure') }}</h4>
                            <p class="text-xs text-gray-400 mt-0.5 md:text-sm whitespace-nowrap">Safe data and reliable</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-6">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-green-100 text-green-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.63 8.41m5.96 5.96a14.92 14.92 0 01-8.9 4.19m8.9-4.19L15 13.7M9.63 8.41a14.93 14.93 0 00-4.19 8.9m4.19-8.9L8.4 9.6M7 21l2-2m-2 2H5m2 0v-2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-sm md:text-base whitespace-nowrap">Fast & Efficient</h4>
                            <p class="text-xs text-gray-400 mt-0.5 md:text-sm whitespace-nowrap">Save time, do more</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="relative flex justify-center lg:justify-end">
                <img src="{{ asset('images/dash.webp') }}" class="w-full max-w-[530px] rounded-3xl shadow-2xl border border-gray-100 bg-white" alt="Dashboard Preview">
                
                <div class="absolute -top-6 right-4 bg-white rounded-2xl shadow-xl px-6 py-4 border border-gray-50">
                    <div class="flex items-center gap-4">
                        <div>
                            <p class="text-xs font-medium text-gray-400">New Customers</p>
                            <h2 class="text-2xl font-black text-gray-800">+168</h2>
                            <p class="text-[10px] text-gray-400">this month</p>
                        </div>
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-green-500 text-white shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.97 5.97 0 00-.75-2.906m-.014 2.906a5.986 5.986 0 01-3.558-2.504M15.021 5a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 my-10">
        <div class="bg-white rounded-[30px] shadow-sm border border-gray-100/80 py-8 px-10 grid grid-cols-2 md:grid-cols-4 gap-8 justify-items-center items-center">
            
            <div class="text-center md:text-left flex items-center gap-4">
                <div class="flex items-center justify-center w-12 h-12 rounded-2xl bg-green-100 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800">500+</h3>
                    <p class="text-sm text-gray-400 font-medium">Happy Clients</p>
                </div>
            </div>

            <div class="text-center md:text-left flex items-center gap-4">
                <div class="flex items-center justify-center w-12 h-12 rounded-2xl bg-green-100 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-10.5v10.5" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800">12+</h3>
                    <p class="text-sm text-gray-400 font-medium">Products</p>
                </div>
            </div>

            <div class="text-center md:text-left flex items-center gap-4">
                <div class="flex items-center justify-center w-12 h-12 rounded-2xl bg-green-100 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 003-3V7.5a3 3 0 00-3-3h-9a3 3 0 00-3 3v8.25a3 3 0 003 3m9 0v1.5a.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75v-1.5m6-10.5V3a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75v5.25" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.47 11.22a.75.75 0 000 1.06l2.25 2.25a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06l-2.25 2.25z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.477 12.89L17 21l-5-2.5L7 21l1.523-8.11" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800">6+</h3>
                    <p class="text-sm text-gray-400 font-medium">Years Experience</p>
                </div>
            </div>

            <div class="text-center md:text-left flex items-center gap-4">
                <div class="flex items-center justify-center w-12 h-12 rounded-2xl bg-green-100 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800">99%</h3>
                    <p class="text-sm text-gray-400 font-medium">Customer Satisfaction</p>
                </div>
            </div>

        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 pt-12 pb-24">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-base font-bold text-green-600 uppercase tracking-widest block mb-3">Our Products</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Complete Software Solutions for Every Business</h2>
            <p class="text-gray-400 text-sm md:text-base">Explore our range of software products designed to simplify your business operations.</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            
            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/dd1.jpg" class="max-h-full max-w-[160px] object-contain" alt="Unity POS">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Unity POS</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Complete POS solution for retail & restaurant businesses.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/dd2.jpg" class="max-h-full max-w-[160px] object-contain" alt="Smart Life">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Smart Life</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Hire Purchase and Installment Management System.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/dd3.jpg" class="max-h-full max-w-[160px] object-contain" alt="Recruiter">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Recruiter</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Advanced recruitment and applicant tracking system.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/dd4.jpg" class="max-h-full max-w-[160px] object-contain" alt="CHTY HR">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">CHTY HR</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Human Resource Management Software for your organization.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/d5.png" class="max-h-full max-w-[160px] object-contain" alt="Fast Move">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Fast Move</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Distribution and Delivery System Software.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/dd6.png" class="max-h-full max-w-[160px] object-contain" alt="Mobile Shop">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Mobile Shop</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Mobile Shop and inventory management system.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/unityhr.png" class="max-h-full max-w-[160px] object-contain" alt="Unity HR">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Unity HR</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Human Resource management suite for enterprise.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/pos.png" class="max-h-full max-w-[160px] object-contain" alt="POS System">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">POS System</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Point of Sale System for retail management.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/mobile.png" class="max-h-full max-w-[160px] object-contain" alt="Mobile Fix">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Mobile Fix</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Phone Service and Repair Management platform.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex flex-col">
                    <div class="h-24 flex items-center justify-center mb-5">
                        <img src="images/dd7.png" class="max-h-full max-w-[160px] object-contain" alt="Product 10">
                    </div>
                    <h3 class="font-bold text-gray-800 text-base mb-2 text-left">Other Solution</h3>
                    <p class="text-sm text-gray-400 leading-relaxed text-left">Custom software solution tailored for your specific business needs.</p>
                </div>
                <div class="flex justify-start">
                    <a href="#" class="text-green-600 font-semibold text-xs mt-6 inline-flex items-center gap-1 hover:underline">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="px-4 max-w-7xl mx-auto text-center bg-gray-50/30">
    <div class="mb-12 max-w-2xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-7 tracking-tight">
            Why Choose Unity Source?
        </h2>
        <p class="text-sm md:text-sm text-gray-500 font-medium">
            We are committed to providing the best solutions and support for your business growth.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-6 mt-16 max-w-5xl mx-auto">
        
        <div class="flex flex-col items-center text-center px-4">
            <div class="w-12 h-12 flex items-center justify-center text-green-600 mb-4 bg-green-50 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0ZM4.5 16.5h7.5" />
                </svg>
            </div>
            <h4 class="font-bold text-gray-900 text-sm md:text-base mb-2">Local Expertise</h4>
            <p class="text-sm text-gray-400 leading-relaxed max-w-[220px]">
                We understand local business needs and provide the right solutions.
            </p>
        </div>

        <div class="flex flex-col items-center text-center px-4">
            <div class="w-12 h-12 flex items-center justify-center text-green-600 mb-4 bg-green-50 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.418-4.03 8.25-9 8.25a9.865 9.865 0 0 1-4.908-1.293L3 21l1.615-4.843C3.294 14.742 3 13.413 3 12c0-4.418 4.03-8.25 9-8.25s9 3.832 9 8.25Z" />
                </svg>
            </div>
            <h4 class="font-bold text-gray-800 text-sm md:text-base mb-2">Reliable Support</h4>
            <p class="text-sm text-gray-400 leading-relaxed max-w-[220px]">
                Our team is always ready to support you whenever you need help.
            </p>
        </div>

        <div class="flex flex-col items-center text-center px-4">
            <div class="w-12 h-12 flex items-center justify-center text-green-600 mb-4 bg-green-50 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
            </div>
            <h4 class="font-bold text-gray-800 text-sm md:text-base mb-2">Secure & Safe</h4>
            <p class="text-sm text-gray-400 leading-relaxed max-w-[220px]">
                Your data security is our top priority with advanced protection.
            </p>
        </div>

        <div class="flex flex-col items-center text-center px-4 mb-8">
            <div class="w-12 h-12 flex items-center justify-center text-green-600 mb-4 bg-green-50 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.717 12 12 12c-.717 0-1.536-.22-2.121-.659-1.172-.879-1.172-2.303 0-3.182 1.172-.879 3.07-.879 4.242 0M12 3c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 18.523 2 13 6.477 3 12 3Z" />
                </svg>
            </div>
            <h4 class="font-bold text-gray-800 text-sm md:text-base mb-2">Affordable Pricing</h4>
            <p class="text-sm text-gray-400 leading-relaxed max-w-[220px]">
                High quality software solutions at the best value for your business.
            </p>
        </div>

    </div>
</div>

</section>
        {{--  map two start   --}}
        <div class="mx-10 xl:h-screen mt-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 justify-start items-start">
                <div class="col-span-1 md:col-span-1">
                    <div class="relative">
                        <img src="{{ asset('images/country-map-1.jpg') }}" class="h-[650px] mx-auto" alt="">
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 flex items-center">
                    <div>
                        <h1 class="font-bold text-xl md:text-xl lg:text-3xl mb-2">{{ __('messages.why_choose') }}</h1>
                        <span
                            class="font-bold text-xl md:text-xl lg:text-3xl  from-primary to-[#39c457] text-black">{{ __('messages.unity_build') }}
                        </span>
                        <div class="grid grid-cols-2 md:grid-cols-2 gap-x-10 gap-y-10 lg:gap-y-32 mt-[70px]">
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.it') }}</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.business') }}</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.hr') }}</h1>
                            </div>
                            <div class="border-l-4 px-3 py-2"
                                style="border-image: linear-gradient(to bottom, #29DC89, #ACDF8D) 1;">
                                <h1 class="font-bold text-lg lg:text-3xl">{{ __('messages.service') }}</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Our Partner start   --}}
        <div class="mx-5 lg:mx-10 xl:mx-20 mt-10">
            <h1 class="text-center font-bold text-xl lg:text-4xl mb-7 ">{{ __('messages.clients') }}</h1>
            <div class="grid grid-cols-2 gap-6 mt-10 px-4 sm:flex sm:flex-wrap sm:justify-center">
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c1.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c2.jpg" class="w-[100px]" alt="">
                </div>
                <!--<div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c3.jpg" class="w-[100px]" alt="">
                </div>-->
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c4.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c5.jpg" class="w-[130px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c6.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c7.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c8.jpg" class="w-[100px]" alt="">
                </div>
                <!--<div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c9.jpg" class="w-[100px]" alt="">
                </div>-->
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c10.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c11.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c12.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c13.jpg" class="w-[100px]" alt="">
                </div>
                <!--<div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c14.jpg" class="w-[100px]" alt="">
                </div>-->
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c15.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c16.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c17.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c18.jpg" class="w-[100px]" alt="">
                </div>
                <!--<div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c19.jpg" class="w-[100px]" alt="">
                </div>-->
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c20.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c21.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c22.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c23.png" class="w-[100px]" alt="">
                </div>
                <!--<div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c24.jpg" class="w-[100px]" alt="">
                </div>-->
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c25.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c26.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c27.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c28.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c29.jpg" class="w-[100px]" alt="">
                </div>
                <!--<div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c30.jpg" class="w-[100px]" alt="">
                </div>-->
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c31.jpg" class="w-[100px]" alt="">
                </div>
                <div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c32.jpg" class="w-[100px]" alt="">
                </div>
                <!--<div class="bg-white w-[150px] h-[80px] rounded-[35px] flex justify-center items-center">
                    <img src="images/c33.jpg" class="w-[100px]" alt="">
                </div>-->
            </div>

            <div class="text-center mt-10 mb-10">
            </div>

        </div>

       <!-- <div class="bg-[#DEFFD8] mt-30" >
            <div class="text-center py-10">
                <h1 class="font-semibold text-base lg:text-xl mb-2">{{ __('messages.cta_title') }}</h1>
                <h1 class="text-[#797979] text-xs lg:text-sm">{{ __('messages.cta_desc') }}</h1>
            </div>
        </div>
        -->
    </section>
@endsection
@section('script')
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
        var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 2,
            spaceBetween: 10,

            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            breakpoints: {

                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                }

            },



        });
    </script>
@endsection
