<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note Share</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    @include('components.frontend.layout.navbar')

    <section class="relative h-[15rem] overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Overlay for better contrast -->
        <img src="{{ asset('images/banner/banner.jpg') }}" class="w-full h-full object-cover object-center"
            alt="Homepage Banner">
        <h2 class="absolute text-white top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-5xl font-bold text-center"
            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
            Share Notes, Anywhere, Anytime.
        </h2>
    </section>

    @yield('content')
    @include('components.frontend.layout.footer')

</body>

</html>
