@extends('layouts.frontend.app')
@section('content')
<div class="container px-4 py-8 mx-auto">
    <!-- Developers Section -->
    <div class="mb-4">
        <h2 class="mb-6 text-3xl font-bold text-center text-gray-800">Developers</h2>
        <div class="flex justify-center gap-6">
                                                                             <!-- Developer Card -->
            {{-- new card design--}}
            <div class="transition-transform duration-300 bg-white shadow-lg w-72 rounded-xl hover:scale-105 hover:shadow-2xl">
                <!-- Image Section -->
                <div class="relative w-full h-56 overflow-hidden rounded-t-xl group">
                    <img src="{{('images/contributer/developer.png')}}"
                         alt="Developer 2"
                         class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black via-transparent to-transparent group-hover:to-primary group-hover:to-transparent">
                    </div>
                </div>
                <!-- Content Section -->
                <div class="relative p-6 text-center">
                    <h3 class="mt-1 text-xl font-semibold text-center text-gray-800 ">Robin Maharjan</h3>
                    <p class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                        <a href="facebook.com"> <img src="{{('images/logo/facebook.png')}}" alt="Facebook Logo" class="w-8 h-8"></a>
                          <a href="instagram.com"><img src="{{('images/logo/instagram.png')}}" alt="Instagram Logo" class="w-8 h-8"></a>
                          <a href="x.com"><img src="{{('images/logo/x.png')}}" alt="X Logo" class="w-8 h-8"></a>
                          <a href="linkedin.com"><img src="{{('images/logo/linkedin.png')}}" alt="LinkedIn Logo" class="w-8 h-8"></a>
                      </p>
                </div>
            </div>

            <div class="transition-transform duration-300 bg-white shadow-lg w-72 rounded-xl hover:scale-105 hover:shadow-2xl">
                <!-- Image Section -->
                <div class="relative w-full h-56 overflow-hidden rounded-t-xl group">
                    <img src="{{('images/contributer/developer.png')}}"
                         alt="Developer 2"
                         class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black via-transparent to-transparent group-hover:to-primary group-hover:to-transparent">
                    </div>
                </div>
                <!-- Content Section -->
                <div class="relative p-6 text-center ">
                    <h3 class="text-xl font-semibold text-center text-gray-800 ">Kamal Joshi</h3>
                    <p class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                        <a href="facebook.com"> <img src="{{('images/logo/facebook.png')}}" alt="Facebook Logo" class="w-8 h-8"></a>
                          <a href="instagram.com"><img src="{{('images/logo/instagram.png')}}" alt="Instagram Logo" class="w-8 h-8"></a>
                          <a href="x.com"><img src="{{('images/logo/x.png')}}" alt="X Logo" class="w-8 h-8"></a>
                          <a href="linkedin.com"><img src="{{('images/logo/linkedin.png')}}" alt="LinkedIn Logo" class="w-8 h-8"></a>
                      </p>
                </div>
            </div>

            <!-- Add more developer cards as needed -->
        </div>
    </div>

    <!-- Divider -->
    <div class="my-12 border-t border-gray-300"></div>

    <!-- Contributors Section -->
    <div>
        <h2 class="mb-6 text-3xl font-bold text-center text-gray-800">Contributors</h2>
        <div class="flex justify-center gap-6">
            <!-- Contributor Card -->
            <div class="transition-transform duration-300 bg-white shadow-lg w-72 rounded-xl hover:scale-105 hover:shadow-2xl">
                <!-- Image Section -->
                <div class="relative w-full h-56 overflow-hidden rounded-t-xl group">
                    <img src="{{('images/contributer/developer.png')}}"
                         alt="Developer 2"
                         class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black via-transparent to-transparent group-hover:to-primary group-hover:to-transparent">
                    </div>
                </div>
                <!-- Content Section -->
                <div class="relative p-6 text-center">
                    <h3 class="mt-1 mb-1 text-xl font-semibold text-center text-gray-800">contributer 1</h3>
                    <p class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                      <a href="facebook.com"> <img src="{{('images/logo/facebook.png')}}" alt="Facebook Logo" class="w-8 h-8"></a>
                        <a href="instagram.com"><img src="{{('images/logo/instagram.png')}}" alt="Instagram Logo" class="w-8 h-8"></a>
                        <a href="x.com"><img src="{{('images/logo/x.png')}}" alt="X Logo" class="w-8 h-8"></a>
                        <a href="linkedin.com"><img src="{{('images/logo/linkedin.png')}}" alt="LinkedIn Logo" class="w-8 h-8"></a>
                    </p>
                </div>
            </div>

            <!-- Add more contributor cards as needed -->
        </div>
    </div>
</div>

@endsection
