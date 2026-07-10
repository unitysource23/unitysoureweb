<footer class="bg-[#236734] text-white font-poppins border-t border-green-800">
    <div class="max-w-7xl mx-auto px-6 py-10 md:py-12">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-12">

            <div class="flex flex-col">
                <h2 class="text-xl font-semibold mb-6 border-l-4 border-white pl-3 tracking-wide">
                    {{ __('messages.cta_title') }}
                </h2>
                <p class="text-green-100/90 leading-relaxed text-sm md:text-base">
                    {{ __('messages.cta_desc') }}
                </p>
            </div>

            <div class="flex flex-col">
                <h3 class="text-xl font-semibold mb-6 border-l-4 border-white pl-3 tracking-wide">
                    {{ __('messages.address') }}
                </h3>

                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-lg bg-green-600 flex items-center justify-center flex-shrink-0 shadow-inner">
                        <i class="fas fa-location-dot text-lg"></i>
                    </div>
                    <div class="text-green-100/90 leading-relaxed text-sm md:text-base">
                        {{ __('messages.address_line1') }}<br>
                        {{ __('messages.address_line2') }}<br>
                        {{ __('messages.address_line3') }}
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:col-span-2 lg:col-span-1">
                <h3 class="text-xl font-semibold mb-6 border-l-4 border-white pl-3 tracking-wide">
                    {{ __('messages.contact') }}
                </h3>

                <div class="space-y-4">
                    <div class="flex items-center gap-4 group">
                        <div class="w-11 h-11 rounded-lg bg-green-600 flex items-center justify-center flex-shrink-0 shadow-inner group-hover:bg-green-500 transition-colors duration-200">
                            <i class="fas fa-phone text-sm"></i>
                        </div>
                        <a href="tel:+959765070160" class="text-green-100/90 text-sm md:text-base hover:text-white transition-colors duration-200">
                            +95 976 50 70 160
                        </a>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-lg bg-green-600 flex items-center justify-center flex-shrink-0 shadow-inner">
                            <i class="fas fa-clock text-sm"></i>
                        </div>
                        <p class="text-green-100/90 text-sm md:text-base">
                            {{ __('messages.working_hours') }}
                        </p>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-11 h-11 rounded-lg bg-green-600 flex items-center justify-center flex-shrink-0 shadow-inner group-hover:bg-green-500 transition-colors duration-200">
                            <i class="fas fa-envelope text-sm"></i>
                        </div>
                        <a href="mailto:unitysourceteam@gmail.com" class="text-green-100/90 text-sm md:text-base hover:underline break-all group-hover:text-white transition-colors duration-200">
                            unitysourceteam@gmail.com
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="border-t border-green-700/60 mt-12 pt-6">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-green-200/80 text-xs md:text-sm text-center sm:text-left">
                    &copy; {{ date('Y') }} Unity Source. All Rights Reserved.
                </p>
            </div>
        </div>

    </div>
</footer>