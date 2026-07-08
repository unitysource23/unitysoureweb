<footer class="bg-[#236734] text-white font-poppins">
    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Company -->
            <div>
                <h2 class="text-xl font-semibold mb-6 border-l-4 border-white pl-3">
                {{ __('messages.cta_title') }}
                </h2>

                <p class="text-green-100 leading-8">
                    {{ __('messages.cta_desc') }}
                </p>
            </div>

            <!-- Address -->
            <div>
                <h3 class="text-xl font-semibold mb-6 border-l-4 border-white pl-3">
                    {{ __('messages.address') }}
                </h3>

                <div class="flex items-start gap-4">

                    <div
                        class="w-12 h-12 rounded-lg bg-green-600 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-location-dot text-xl"></i>
                    </div>

                    <div class="text-green-100 leading-7">
                        {{ __('messages.address_line1') }}<br>
                        {{ __('messages.address_line2') }}<br>
                        {{ __('messages.address_line3') }}
                    </div>

                </div>
            </div>

            <!-- Contact -->
            <div>

                <h3 class="text-xl font-semibold mb-6 border-l-4 border-white pl-3">
                    {{ __('messages.contact') }}
                </h3>

                <div class="space-y-5">

                    <div class="flex items-center gap-4">

                        <div class="w-11 h-11 rounded-lg bg-green-600 flex items-center justify-center">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div>
                            <p>+95 976 50 70 160</p>
                            
                        </div>

                    </div>

                    <div class="flex items-center gap-4">

                        <div class="w-11 h-11 rounded-lg bg-green-600 flex items-center justify-center">
                            <i class="fas fa-clock"></i>
                        </div>

                        <p>{{ __('messages.working_hours') }}</p>

                    </div>

                    <div class="flex items-center gap-4">

                        <div class="w-11 h-11 rounded-lg bg-green-600 flex items-center justify-center">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <a href="mailto:unitysourceteam@gmail.com"
                            class="hover:underline break-all">
                            unitysourceteam@gmail.com
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-green-500 mt-12 pt-6">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <p class="text-green-200 text-sm">
                    © {{ date('Y') }} Unity Source. All Rights Reserved.
                </p>

                <div class="flex gap-4">

                    <a href="#"
                        class="w-10 h-10 rounded-full border border-green-300 flex items-center justify-center hover:bg-white hover:text-[#236734] transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#"
                        class="w-10 h-10 rounded-full border border-green-300 flex items-center justify-center hover:bg-white hover:text-[#236734] transition">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="#"
                        class="w-10 h-10 rounded-full border border-green-300 flex items-center justify-center hover:bg-white hover:text-[#236734] transition">
                        <i class="fab fa-telegram"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</footer>