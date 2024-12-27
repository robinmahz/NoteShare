@extends('layouts.frontend.app')
@section('content')
    <div class="container px-4 py-8 mx-auto">
        <!-- Developers Section -->
        <div class="mb-4">
            <h2 class="mb-6 text-3xl font-bold text-center text-gray-800">Developers</h2>
            <div class="flex justify-center gap-6">
                <!-- Developer Card -->
                {{-- new card design --}}
                <div
                    class="transition-transform duration-300 bg-white shadow-lg w-72 rounded-xl hover:scale-105 hover:shadow-2xl">
                    <!-- Image Section -->
                    <div class="relative w-full h-56 overflow-hidden rounded-t-xl group">
                        <img src="{{ 'images/contributer/developer.png' }}" alt="Developer 2"
                            class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black via-transparent to-transparent group-hover:to-primary group-hover:to-transparent">
                        </div>
                    </div>
                    <!-- Content Section -->
                    <div class="relative p-6 text-center">
                        <h3 class="mt-1 text-xl font-semibold text-center text-gray-800 ">Robin Maharjan</h3>
                        <p
                            class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                            <a href="facebook.com"> <img src="{{ 'images/logo/facebook.png' }}" alt="Facebook Logo"
                                    class="w-8 h-8"></a>
                            <a href="instagram.com"><img src="{{ 'images/logo/instagram.png' }}" alt="Instagram Logo"
                                    class="w-8 h-8"></a>
                            <a href="x.com"><img src="{{ 'images/logo/x.png' }}" alt="X Logo" class="w-8 h-8"></a>
                            <a href="linkedin.com"><img src="{{ 'images/logo/linkedin.png' }}" alt="LinkedIn Logo"
                                    class="w-8 h-8"></a>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                viewBox="0 0 30 30" class="" stroke="red">
                                <path
                                    d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>

                        </p>
                    </div>
                </div>
                <!-- Content Section -->
                <div class="relative p-6 text-center">
                    <h3 class="mt-1 text-xl font-semibold text-center text-gray-800 ">Robin Maharjan</h3>
                    <p
                        class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                        <a href="facebook.com"> <img src="{{ 'images/logo/facebook.png' }}" alt="Facebook Logo"
                                class="w-8 h-8"></a>
                        <a href="instagram.com"><img src="{{ 'images/logo/instagram.png' }}" alt="Instagram Logo"
                                class="w-8 h-8"></a>
                        <a href="x.com"><img src="{{ 'images/logo/x.png' }}" alt="X Logo" class="w-8 h-8"></a>
                        <a href="github.com"><img src="{{ 'images/logo/github.png' }}" alt="LinkedIn Logo"
                                class="w-8 h-8"></a>
                        <a href="linkedin.com"><img src="{{ 'images/logo/linkedin.png' }}" alt="LinkedIn Logo"
                                class="w-8 h-8"></a>
                    </p>
                </div>
            </div>

            <div
                class="transition-transform duration-300 bg-white shadow-lg w-72 rounded-xl hover:scale-105 hover:shadow-2xl">
                <!-- Image Section -->
                <div class="relative w-full h-56 overflow-hidden rounded-t-xl group">
                    <img src="{{ 'images/contributer/developer.png' }}" alt="Developer 2"
                        class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black via-transparent to-transparent group-hover:to-primary group-hover:to-transparent">
                    </div>
                </div>
                <!-- Content Section -->
                <div class="relative p-6 text-center ">
                    <h3 class="text-xl font-semibold text-center text-gray-800 ">Kamal Joshi</h3>
                    <p
                        class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                        <a href="facebook.com"> <img src="{{ 'images/logo/facebook.png' }}" alt="Facebook Logo"
                                class="w-8 h-8"></a>
                        <a href="instagram.com"><img src="{{ 'images/logo/instagram.png' }}" alt="Instagram Logo"
                                class="w-8 h-8"></a>
                        <a href="x.com"><img src="{{ 'images/logo/x.png' }}" alt="X Logo" class="w-8 h-8"></a>
                        <a href="linkedin.com"><img src="{{ 'images/logo/linkedin.png' }}" alt="LinkedIn Logo"
                                class="w-8 h-8"></a>
                    </p>
                </div>
            </div>
            <!-- Content Section -->
            <div class="relative p-6 text-center ">
                <h3 class="text-xl font-semibold text-center text-gray-800 ">Kamal Joshi</h3>
                <p
                    class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                    <a href="facebook.com"> <img src="{{ 'images/logo/facebook.png' }}" alt="Facebook Logo"
                            class="w-8 h-8"></a>
                    <a href="instagram.com"><img src="{{ 'images/logo/instagram.png' }}" alt="Instagram Logo"
                            class="w-8 h-8"></a>
                    <a href="x.com"><img src="{{ 'images/logo/x.png' }}" alt="X Logo" class="w-8 h-8"></a>
                    <a href="github.com"><img src="{{ 'images/logo/github.png' }}" alt="LinkedIn Logo"
                            class="w-8 h-8"></a>
                    <a href="linkedin.com"><img src="{{ 'images/logo/linkedin.png' }}" alt="LinkedIn Logo"
                            class="w-8 h-8"></a>
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
            <div
                class="transition-transform duration-300 bg-white shadow-lg w-72 rounded-xl hover:scale-105 hover:shadow-2xl">
                <!-- Image Section -->
                <div class="relative w-full h-56 overflow-hidden rounded-t-xl group">
                    <img src="{{ 'images/contributer/developer.png' }}" alt="Developer 2"
                        class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black via-transparent to-transparent group-hover:to-primary group-hover:to-transparent">
                    </div>
                </div>
                <!-- Content Section -->
                <div class="relative p-6 text-center">
                    <h3 class="mt-1 mb-1 text-xl font-semibold text-center text-gray-800">contributer 1</h3>
                    <p
                        class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                        <a href="facebook.com"> <img src="{{ 'images/logo/facebook.png' }}" alt="Facebook Logo"
                                class="w-8 h-8"></a>
                        <a href="instagram.com"><img src="{{ 'images/logo/instagram.png' }}" alt="Instagram Logo"
                                class="w-8 h-8"></a>
                        <a href="x.com"><img src="{{ 'images/logo/x.png' }}" alt="X Logo" class="w-8 h-8"></a>
                        <a href="linkedin.com"><img src="{{ 'images/logo/linkedin.png' }}" alt="LinkedIn Logo"
                                class="w-8 h-8"></a>
                    </p>
                </div>
            </div>

            <!-- Add more contributor cards as needed -->
        </div>
    </div>
    </div>

    <!-- Divider -->
    <div class="my-12 border-t border-gray-300"></div>

    <!-- Contributors Section -->
    <div>
        <h2 class="mb-6 text-3xl font-bold text-center text-gray-800">Contributors</h2>
        <div class="flex justify-center gap-6">
            <!-- Contributor Card -->
            <div
                class="transition-transform duration-300 bg-white shadow-lg w-72 rounded-xl hover:scale-105 hover:shadow-2xl">
                <!-- Image Section -->
                <div class="relative w-full h-56 overflow-hidden rounded-t-xl group">
                    <img src="{{ 'images/contributer/developer.png' }}" alt="Developer 2"
                        class="absolute inset-0 object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black via-transparent to-transparent group-hover:to-primary group-hover:to-transparent">
                    </div>
                </div>
                <!-- Content Section -->
                <div class="relative p-6 text-center">
                    <h3 class="mt-1 mb-1 text-xl font-semibold text-center text-gray-800">contributer 1</h3>
                    <p
                        class="flex items-center justify-center gap-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg shadow-md">
                        <a href="facebook.com"> <img src="{{ 'images/logo/facebook.png' }}" alt="Facebook Logo"
                                class="w-8 h-8"></a>
                        <a href="instagram.com"><img src="{{ 'images/logo/instagram.png' }}" alt="Instagram Logo"
                                class="w-8 h-8"></a>
                        <a href="x.com"><img src="{{ 'images/logo/x.png' }}" alt="X Logo" class="w-8 h-8"></a>
                        <a href="github.com"><img src="{{ 'images/logo/github.png' }}" alt="LinkedIn Logo"
                                class="w-8 h-8"></a>
                        <a href="linkedin.com"><img src="{{ 'images/logo/linkedin.png' }}" alt="LinkedIn Logo"
                                class="w-8 h-8"></a>
                    </p>
                </div>
            </div>

            <!-- Add more contributor cards as needed -->
        </div>
    </div>
    </div>
@endsection
