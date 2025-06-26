{{-- nav start --}}
<nav class="py-4 px-4 bg-white md:px-10 text-sm sticky top-0 shadow-sm z-[99999] ">
    <div class="flex items-center justify-between h-9 px-10">
        <div style="display: flex; justify-content: flex-end; align-items: center; padding-right: 50px;">
            <img src="{{ asset('images/unityLogo.png') }}" style="height: 65px; width: auto;" alt="Unity Logo">
        </div>
        <div class="hidden sm:block">
            <div class="flex items-center gap-5">
                <ul class="flex items-center gap-10 text-black text-base font-medium">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-600 font-semibold' : '' }}">{{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('partner') }}" class="{{ request()->routeIs('partner') ? 'text-green-600 font-semibold' : '' }}">{{ __('messages.partnership') }}</a></li>
                    <li><a href="{{ route('our_products') }}" class="whitespace-nowrap {{ request()->routeIs('our_products') ? 'text-green-600 font-semibold' : '' }}">{{ __('messages.products') }}</a></li>
                    <li><a href="{{ route('about_us') }}" class="whitespace-nowrap {{ request()->routeIs('about_us') ? 'text-green-600 font-semibold' : '' }}">{{ __('messages.about_us') }}</a></li>
                </ul>

                @php
                    $currentLocale = App::getLocale();
                    $languages = [
                        'en' => ['label' => 'English', 'flag' => 'https://flagcdn.com/w40/gb.png'],
                        'my' => ['label' => 'မြန်မာ', 'flag' => 'https://flagcdn.com/w40/mm.png'],
                    ];
                @endphp

                <div class="relative">
                    <div class="flex items-center justify-between w-[140px] border border-primary rounded-md px-3 py-1 cursor-pointer language-toggle-desktop">
                        <div class="flex items-center gap-2">
                            <img src="{{ $languages[$currentLocale]['flag'] }}" class="w-5 h-4 object-cover" alt="flag">
                            <span class="text-sm text-primary font-medium">{{ $languages[$currentLocale]['label'] }}</span>
                        </div>
                        <i class="fa-solid fa-angle-down text-primary"></i>
                    </div>

                    <div id="language-menu" class="absolute hidden top-full right-0 mt-2 bg-white rounded-lg shadow-md w-[150px] z-[9999] text-sm">
                        <a href="{{ route('lang.switch', 'en') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                            <img src="https://flagcdn.com/w40/gb.png" class="w-5 h-4 object-cover" alt="English">
                            <span class="text-gray-800 font-medium">English</span>
                        </a>
                        <a href="{{ route('lang.switch', 'my') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                            <img src="https://flagcdn.com/w40/mm.png" class="w-5 h-4 object-cover" alt="Burmese">
                            <span class="text-gray-800 font-medium">မြန်မာ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sm:hidden" id="menuButton">
            <i class="fa-solid fa-bars cursor-pointer"></i>
        </div>
    </div>

    <div class="hidden absolute top-[100%] w-[100%] left-0 z-[9999] bg-white shadow-md" id="additionalFilter">
        <div class="flex flex-col mt-5 gap-5 px-3 pb-3">
            <ul class="flex flex-col gap-10 text-black font-semibold">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-600' : '' }}">{{ __('messages.home') }}</a></li>
                <li><a href="{{ route('partner') }}" class="{{ request()->routeIs('partner') ? 'text-green-600' : '' }}">{{ __('messages.partnership') }}</a></li>
                <li><a href="{{ route('our_products') }}" class="{{ request()->routeIs('our_products') ? 'text-green-600' : '' }}">{{ __('messages.products') }}</a></li>
                <li><a href="{{ route('about_us') }}" class="{{ request()->routeIs('about_us') ? 'text-green-600' : '' }}">{{ __('messages.about_us') }}</a></li>
            </ul>

            {{-- ✅ FIXED: Mobile Language Dropdown Aligned with Toggle --}}
            <div class="relative w-[140px] self-start">
                <div class="flex items-center justify-between border border-green-600 rounded-md px-3 py-1 cursor-pointer language-toggle-mobile bg-white hover:shadow-md">
                    <div class="flex items-center gap-2">
                        <img src="{{ $languages[$currentLocale]['flag'] }}" class="w-5 h-4 object-cover rounded-sm" alt="flag">
                        <span class="text-sm text-green-700 font-medium">{{ $languages[$currentLocale]['label'] }}</span>
                    </div>
                    <i class="fa-solid fa-angle-down text-green-600 text-xs"></i>
                </div>

                <div id="language-menu-mobile" class="absolute hidden top-full mt-2 right-0 bg-white rounded-lg shadow-md w-full z-[9999] text-sm">
                    <a href="{{ route('lang.switch', 'en') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                        <img src="https://flagcdn.com/w40/gb.png" class="w-5 h-4 object-cover rounded-sm" alt="English">
                        <span class="text-gray-800 font-medium">English</span>
                    </a>
                    <a href="{{ route('lang.switch', 'my') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                        <img src="https://flagcdn.com/w40/mm.png" class="w-5 h-4 object-cover rounded-sm" alt="Burmese">
                        <span class="text-gray-800 font-medium">မြန်မာ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    const desktopToggle = document.querySelector('.language-toggle-desktop');
    const desktopMenu = document.getElementById('language-menu');

    const mobileToggle = document.querySelector('.language-toggle-mobile');
    const mobileMenu = document.getElementById('language-menu-mobile');

    if (desktopToggle && desktopMenu) {
        desktopToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            desktopMenu.classList.toggle('hidden');
            mobileMenu?.classList.add('hidden');
        });
    }

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
            desktopMenu?.classList.add('hidden');
        });
    }

    document.addEventListener('click', (e) => {
        if (!desktopToggle.contains(e.target) && !desktopMenu.contains(e.target)) {
            desktopMenu?.classList.add('hidden');
        }
        if (!mobileToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu?.classList.add('hidden');
        }
    });
</script>
