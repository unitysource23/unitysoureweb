{{-- nav start --}}
<nav class="py-4 px-4 bg-white md:px-10 text-sm sticky top-0 shadow-sm z-[99999] font-poppins">
    <div class="flex items-center justify-between min-h-[36px] max-w-7xl mx-auto relative">
        <div class="flex items-center">
            <img src="{{ asset('images/unityLogo.png') }}" class="h-10 sm:h-12 md:h-13 lg:h-16 lg:ml-5 w-auto object-contain" alt="Unity Logo">
        </div>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex items-center gap-10">
            <ul class="flex items-center gap-8 text-black text-base font-medium">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-600 font-bold underline underline-offset-[16px]' : 'hover:text-green-600 transition' }}">{{ __('messages.home') }}</a></li>
                <li><a href="{{ route('partner') }}" class="{{ request()->routeIs('partner') ? 'text-green-600 font-bold' : 'hover:text-green-600 transition' }}">{{ __('messages.partnership') }}</a></li>
                <li><a href="{{ route('our_products') }}" class="whitespace-nowrap {{ request()->routeIs('our_products') ? 'text-green-600 font-bold' : 'hover:text-green-600 transition' }}">{{ __('messages.products') }}</a></li>
                <li><a href="{{ route('about_us') }}" class="whitespace-nowrap {{ request()->routeIs('about_us') ? 'text-green-600 font-bold' : 'hover:text-green-600 transition' }}">{{ __('messages.about_us') }}</a></li>
            </ul>

            @php
                $currentLocale = App::getLocale();
                $languages = [
                    'en' => ['label' => 'English', 'flag' => 'https://flagcdn.com/w40/gb.png'],
                    'my' => ['label' => 'မြန်မာ', 'flag' => 'https://flagcdn.com/w40/mm.png'],
                ];
            @endphp

            <div class="relative">
                <div class="flex items-center justify-between w-[140px] border border-gray-300 rounded-md px-3 py-1.5 cursor-pointer language-toggle-desktop bg-white hover:border-green-600 transition">
                    <div class="flex items-center gap-2">
                        <img src="{{ $languages[$currentLocale]['flag'] }}" class="w-5 h-4 object-cover rounded-sm" alt="flag">
                        <span class="text-sm text-gray-700 font-medium">{{ $languages[$currentLocale]['label'] }}</span>
                    </div>
                    <i class="fa-solid fa-angle-down text-gray-500 transition-transform duration-200" id="desktop-arrow"></i>
                </div>
                <div id="language-menu" class="absolute hidden top-full right-0 mt-2 bg-white rounded-lg shadow-lg border border-gray-100 w-[150px] z-[9999] text-sm py-1">
                    <a href="{{ route('lang.switch', 'en') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 text-gray-700 font-medium"><img src="https://flagcdn.com/w40/gb.png" class="w-5 h-4 object-cover rounded-sm" alt="English"> <span>English</span></a>
                    <a href="{{ route('lang.switch', 'my') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 text-gray-700 font-medium"><img src="https://flagcdn.com/w40/mm.png" class="w-5 h-4 object-cover rounded-sm" alt="Burmese"> <span>မြန်မာ</span></a>
                </div>
            </div>
        </div>

        {{-- Mobile Menu Button --}}
        <div class="md:hidden flex items-center p-2 text-gray-700 hover:text-green-600 transition cursor-pointer" id="menuButton" style="font-size: 24px; min-width: 40px; min-height: 40px; justify-content: center; z-index: 100000;">
            <i class="fa-solid fa-bars" id="menuIcon"></i>
        </div>
    </div>

    {{-- Mobile Dropdown Menu --}}
    <div class="absolute top-full w-full left-0 z-[99999] bg-white shadow-lg border-t border-gray-100" id="additionalFilter" style="display: none;">
        <div class="flex flex-col gap-6 p-6">
            <ul class="flex flex-col gap-4 text-black font-semibold text-base">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-600' : 'hover:text-green-600' }} block py-1">{{ __('messages.home') }}</a></li>
                <li><a href="{{ route('partner') }}" class="{{ request()->routeIs('partner') ? 'text-green-600' : 'hover:text-green-600' }} block py-1">{{ __('messages.partnership') }}</a></li>
                <li><a href="{{ route('our_products') }}" class="{{ request()->routeIs('our_products') ? 'text-green-600' : 'hover:text-green-600' }} block py-1">{{ __('messages.products') }}</a></li>
                <li><a href="{{ route('about_us') }}" class="{{ request()->routeIs('about_us') ? 'text-green-600' : 'hover:text-green-600' }} block py-1">{{ __('messages.about_us') }}</a></li>
            </ul>
            <hr class="border-gray-100">
            <div class="relative w-[140px] self-start">
                <div class="flex items-center justify-between border border-green-600 rounded-md px-3 py-1.5 cursor-pointer language-toggle-mobile bg-white hover:shadow-sm">
                    <div class="flex items-center gap-2">
                        <img src="{{ $languages[$currentLocale]['flag'] }}" class="w-5 h-4 object-cover rounded-sm" alt="flag">
                        <span class="text-sm text-green-700 font-medium">{{ $languages[$currentLocale]['label'] }}</span>
                    </div>
                    <i class="fa-solid fa-angle-down text-green-600 text-xs transition-transform duration-200" id="mobile-arrow"></i>
                </div>
                <div id="language-menu-mobile" class="absolute hidden top-full mt-2 left-0 bg-white rounded-lg shadow-lg border border-gray-100 w-full z-[9999] text-sm py-1">
                    <a href="{{ route('lang.switch', 'en') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 text-gray-700 font-medium"><img src="https://flagcdn.com/w40/gb.png" class="w-5 h-4 object-cover rounded-sm" alt="English"> <span>English</span></a>
                    <a href="{{ route('lang.switch', 'my') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-50 text-gray-700 font-medium"><img src="https://flagcdn.com/w40/mm.png" class="w-5 h-4 object-cover rounded-sm" alt="Burmese"> <span>မြန်မာ</span></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var menuBtn = document.getElementById('menuButton');
        var mobileMenuArea = document.getElementById('additionalFilter');
        var menuIcon = document.getElementById('menuIcon');

        if (menuBtn && mobileMenuArea) {
            menuBtn.onclick = function (event) {
                event.stopPropagation(); 
                
                if (mobileMenuArea.style.display === 'none' || mobileMenuArea.style.display === '') {
                    mobileMenuArea.style.display = 'block';
                    if(menuIcon) {
                        menuIcon.className = 'fa-solid fa-xmark'; 
                    }
                } else {
                    mobileMenuArea.style.display = 'none';
                    if(menuIcon) {
                        menuIcon.className = 'fa-solid fa-bars'; 
                    }
                }
            };

            mobileMenuArea.onclick = function (event) {
                event.stopPropagation();
            };
        }

        document.onclick = function () {
            if (mobileMenuArea) {
                mobileMenuArea.style.display = 'none';
                if(menuIcon) {
                    menuIcon.className = 'fa-solid fa-bars';
                }
            }
        };
    });
</script>