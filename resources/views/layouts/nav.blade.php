  {{--  nav start   --}}
  <nav class=" py-4 px-4 bg-white md:px-10 text-sm sticky top-0 shadow-sm z-[99999] ">
      <div class="flex items-center justify-between h-9 px-10">
          <div style="display: flex; justify-content: flex-end; align-items: center; padding-right: 50px;">
              <img src="{{ asset('images/unityLogo.png') }}" style="height: 65px; width: auto;" alt="Unity Logo">
          </div>
          <div class=" hidden sm:block ">
              <div class="flex items-center gap-5">
                  <ul class="flex items-center gap-10 text-black text-base font-medium">
                      <li>
                          <a href="{{ route('home') }}"
                              class="{{ request()->routeIs('home') ? 'text-green-600 font-semibold' : '' }}">Home</a>
                      </li>
                      <li>
                          <a href="{{ route('partner') }}"
                              class="{{ request()->routeIs('partner') ? 'text-green-600 font-semibold' : '' }}">Partnership</a>
                      </li>
                      <li>
                          <a href="{{ route('about_us') }}"
                              class="{{ request()->routeIs('about_us') ? 'text-green-600 font-semibold' : '' }}">About</a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="sm:hidden" id="menuButton">
              <i class="fa-solid fa-bars cursor-pointer"></i>
          </div>
      </div>
      <div class=" hidden absolute top-[100%] w-[100%] left-0 z-[9999] bg-white shadow-md" id="additionalFilter">
          <div class="flex flex-col mt-5 gap-5 px-3 pb-3">
              <ul class="flex flex-col gap-10 text-black font-semibold">
                  <li>
                      <a href="{{ route('home') }}"
                          class="{{ request()->routeIs('home') ? 'text-green-600' : '' }}">Home</a>
                  </li>
                  <li>
                      <a href="{{ route('partner') }}"
                          class="{{ request()->routeIs('partner') ? 'text-green-600' : '' }}">Partnership</a>
                  </li>
                  <li>
                      <a href="{{ route('about_us') }}"
                          class="{{ request()->routeIs('about_us') ? 'text-green-600' : '' }}">About</a>
                  </li>
              </ul>
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
              <a href="{{ route('lang.switch', 'my') }}" class="font-semibold block cursor-pointer">Burmese</a>
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
