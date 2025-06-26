<footer id="footer" class="bg-green-700 text-white text-sm px-6 py-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- Address -->
        <div>
            <h4 class="font-semibold mb-1 flex items-center gap-2">
                <i class="fas fa-map-marker-alt"></i> {{ __('messages.address') }}
            </h4>
            <p>
                {{ __('messages.address_line1') }}<br>
                {{ __('messages.address_line2') }}<br>
                {{ __('messages.address_line3') }}
            </p>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="font-semibold mb-1 flex items-center gap-2">
                <i class="fa-solid fa-tty"></i> {{ __('messages.contact') }}
            </h4>
            <p><i class="fas fa-phone mr-1"></i> +95 976 50 70 160<br>
                <i class="fas fa-phone mr-1"></i> +95 996 50 70 160
            </p>
            <p class="mt-2"><i class="fas fa-clock mr-1"></i> {{ __('messages.working_hours') }}</p>
            <p class="mt-1">
                <i class="fas fa-envelope mr-1"></i>
                <a href="mailto:unitysourceteam@gmail.com" class="underline">unitysourceteam@gmail.com</a>
            </p>
        </div>

    </div>
</footer>
