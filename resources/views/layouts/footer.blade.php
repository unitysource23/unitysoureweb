<footer class="bg-green-700 text-white text-sm px-6 py-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Address -->
        <div>
            <h4 class="font-semibold mb-1">Address</h4>
            <p>Room No.(7–A), (7) floor<br>
            Mawyawadi Condo<br>
            8 Mile, Mayangone, Yangon</p>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="font-semibold mb-1">Contact</h4>
            <p>Marketing: +959 123456789<br>
            Sales: +959 123456789<br>
            Support: +959 123456789</p>
            <p class="mt-2">Support Hours: Mon–Fri, 9am–5pm (GMT+8)</p>
            <p class="mt-1">Billing: <a href="mailto:finance@unity.com" class="underline">finance@unity.com</a></p>
        </div>

        <!-- Company -->
        <div>
            <h4 class="font-semibold mb-1">Company</h4>
            <ul class="space-y-1">
                <li><a href="{{ route('about_us') }}">About Us</a></li>
                <li><a href="{{ route('partner') }}">Partner with Us</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>

        <!-- Social or Logo -->
        <div>
            <h4 class="font-semibold mb-1">Follow Us</h4>
            <a href="#" class="inline-block text-white hover:text-gray-200">
                <i class="fab fa-facebook text-lg"></i>
            </a>
        </div>
    </div>
</footer>
