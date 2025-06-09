  {{--  nav start   --}}
  <nav class=" py-4 px-4 bg-white md:px-10 text-sm sticky top-0 shadow-sm z-[99999] ">
      <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
              {{-- <img src="{{ asset('images/fav_icon.png') }}" class="w-12" alt=""> --}}
              <h1 class="text-md md:text-2xl font-extrabold text-primary ml-10">Unity Source Logo</h1>
          </div>
          <div class=" hidden sm:block ">
              <div class="flex items-center gap-5">
                  <ul class="flex items-center gap-10 text-primary text-base font-normal">
                      <li>
                          <a href="{{ route('home') }}">Home</a>
                      </li>
                      <li>
                          <a href="{{ route('partner') }}">Partnership</a>
                      </li>
                      <li>
                          <a href="{{ route('about_us') }}">About</a>
                      </li>
                      <li>
                          <a href="">Contact</a>
                      </li>
                  </ul>
                  <div class="border border-primary w-[120px] px-5 py-0 rounded-md cursor-pointer language-toggle">
                      <div class="grid grid-cols-2 items-center">
                          <h1 class="text-primary text-sm md:text-base cursor-pointer">Eng</h1>
                          <span class="justify-self-end">
                              <i class="text-primary fa-solid fa-angle-down cursor-pointer"></i>
                          </span>
                      </div>
                  </div>

              </div>
          </div>
          <div class="sm:hidden" id="menuButton">
              <i class="fa-solid fa-bars cursor-pointer"></i>
          </div>
      </div>
      <div class=" hidden absolute top-[100%] w-[100%] left-0 z-[9999] bg-white shadow-md" id="additionalFilter">
          <div class="flex flex-col mt-5 gap-5 px-3 pb-3">
              <ul class="flex flex-col  gap-10 text-primary font-semibold">
                  <li>
                      <a href="{{ route('home') }}">Home</a>
                  </li>
                  <li>
                      <a href="{{ route('partner') }}">Partnership</a>
                  </li>
                  <li>
                      <a href="{{ route('about_us') }}">About</a>
                  </li>
                  <li>
                      <a href="">Contact</a>
                  </li>
              </ul>
              <div class="border px-2 w-20 py-1 rounded-md cursor-pointer language-toggle">
                  <h1 class="text-paraColor text-sm md:text-base font-medium">
                      {{ __('messages.language') }} <span><i class="fa-solid fa-angle-down"></i></span>
                  </h1>
              </div>
          </div>
      </div>
  </nav>

  {{--  language dropdown start   --}}
  <div class="absolute top-16 right-5 z-[9999]">
      <div id="language-menu"
          class="bg-white hidden text-sm rounded-lg text-paraColor md:text-base py-2 shadow-md w-[150px]">
          <div class="px-3 border-b py-2">
              <a href="{{ route('lang.switch', 'en') }}" class="font-semibold block cursor-pointer">English</a>
          </div>
          <div class="px-3 py-2">
              <a href="{{ route('lang.switch', 'my') }}" class="font-semibold block cursor-pointer">မြန်မာ</a>
          </div>
      </div>
  </div>
  {{--  language dropdown end  --}}

  <script>
      const toggles = document.querySelectorAll('.language-toggle');
      const menu = document.getElementById('language-menu');

      toggles.forEach(toggle => {
          toggle.addEventListener('click', (e) => {
              e.stopPropagation(); // prevent click from bubbling up
              menu.classList.toggle('hidden');
          });
      });

      document.addEventListener('click', (e) => {
          const isClickOnToggle = [...toggles].some(toggle => toggle.contains(e.target));
          if (!isClickOnToggle && !menu.contains(e.target)) {
              menu.classList.add('hidden');
          }
      });
  </script>
