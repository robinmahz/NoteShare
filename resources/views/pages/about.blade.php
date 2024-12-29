@extends('layouts.frontend.app')
@section('content')
<body class="bg-gray-100">

    <!-- Hero Banner -->
    <header class="relative bg-center bg-cover h-96" style="background-image: url('{{ asset('images/banner/banner.jpg') }}');">
        <div class="absolute inset-0 opacity-75 bg-gradient-to-b from-black to-transparent"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white" data-aos="zoom-in">
            <h1 class="mb-4 text-5xl font-bold">About Us</h1>
            <p class="max-w-xl text-lg">
                Discover more about our story, our mission, and the values that drive us forward.
            </p>
        </div>
    </header>

    <!-- About Section -->
    <section class="px-6 py-16 md:px-20 ">
        <div class="grid items-center grid-cols-1 gap-12 md:grid-cols-2">
            <!-- Image Section -->
            <div class="shadow-2xl rounded-lg" data-aos="fade-right">
                <div class="overflow-hidden rounded-lg">
                  <div class="relative w-full h-full">
                    <img src="{{ asset('images/about us/aboutus.jpg') }}" alt="Our Team" class="object-cover w-full h-full">
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                  </div>
                </div>
              </div>


            <!-- Text Section -->
            <div data-aos="fade-left">
                <h2 class="mb-6 text-3xl font-bold text-gray-800 md:text-4xl">Our Mission</h2>
                <p class="mb-4 leading-relaxed text-gray-600">
                    We believe in making a difference by empowering individuals and businesses through innovative solutions.
                    Our team is committed to delivering exceptional value, building trust, and creating impactful experiences
                    for our clients and communities.
                </p>
                <p class="leading-relaxed text-gray-600">
                    With a focus on excellence and a passion for progress, we strive to inspire and drive success in everything
                    we do.
                </p>
            </div>
        </div>
    </section>


    <!-- AOS Initialization -->
    <script>
        AOS.init({
            duration: 1200,
            easing: 'ease-in-out',
            once: true,
        });
    </script>

@endsection
