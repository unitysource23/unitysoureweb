<!
DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">

</head>
<body class="font-jakarta">
    <section>
        <nav class=" py-2 px-10 text-sm shadow-md">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/fav_icon.png') }}" class="w-12" alt="">
                    <h1 class="text-lg font-semibold text-primary">Unity Source</h1>
                </div>
                <div class=" hidden sm:block ">
                    <div class="flex items-center gap-5">
                        <ul class="flex items-center gap-10 text-primary font-semibold">
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">Partnership</a>
                            </li>
                            <li>
                                <a href="">About</a>
                            </li>
                            <li>
                                <a href="">Contact</a>
                            </li>
                        </ul>
                        <div class="border px-2 py-1 rounded-md">
                            <h1 class="text-paraColor font-medium">English <span><i class="fa-solid fa-angle-down"></i></span></h1>
                        </div>
                    </div>
                </div>
                <div class="sm:hidden">
                    <i class="fa-solid fa-bars"></i>
                </div>

            </div>
            <div class="flex flex-col mt-5 gap-5">
                <ul class="flex flex-col  gap-10 text-primary font-semibold">
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Partnership</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
                <div class="border px-2 py-1 rounded-md">
                    <h1 class="text-paraColor font-medium">English <span><i class="fa-solid fa-angle-down"></i></span></h1>
                </div>
            </div>

        </nav>
    </section>
<script src="{{ asset('js/fontawesome.js') }}"></script>

</body>
</html>
