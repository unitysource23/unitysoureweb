  {{--  nav start   --}}
  <nav class=" py-4 px-4 bg-white md:px-10 text-sm sticky top-0 shadow-sm z-[99999] ">
      <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
              {{-- <img src="{{ asset('images/fav_icon.png') }}" class="w-12" alt=""> --}}
              <h1 class="text-md md:text-lg font-extrabold text-primary ml-10">Unity Source Logo</h1>
          </div>
          <div class=" hidden sm:block ">
              <div class="flex items-center gap-5">
                  <ul class="flex items-center gap-10 text-primary font-medium">
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
                  <div class="border px-8 py-0 rounded-md" id="language-btn">
                      <h1 class="text-primary text-sm md:text-base cursor-pointer">Eng
                          <span><i class=" text-primary fa-solid fa-angle-down"></i></span>
                      </h1>
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
              <div class="border px-2 w-20 py-1 rounded-md">
                  <h1 class="text-paraColor text-sm md:text-base font-medium">English <span><i
                              class="fa-solid fa-angle-down"></i></span></h1>
              </div>
          </div>
      </div>
  </nav>

  {{--  language dropdown start   --}}
  <div class=" absolute top-16   right-5">
      <div id="language-menu"
          class="bg-white hidden   text-sm rounded-lg text-paraColor md:text-base  py-2 shadow-md w-[150px]">
          <div class="px-3  border-b py-2">
              <input type="radio" name="" class="hidden" id="">
              <label for="" class="font-semibold">English</label>
          </div>
          <div class="px-3 py-2">
              <input type="radio" name="" class="hidden" id="">
              <label for="" class="font-semibold">Myanmar</label>
          </div>
      </div>

  </div>
  {{--  language dropdown end  --}}
