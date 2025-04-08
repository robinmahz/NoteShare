@extends('layouts.frontend.app')

@section('content')
    <main class="container px-6 py-12 mx-auto">
        <!-- Developers Section -->
        <section class="mb-12">
            <h2 class="mb-6 text-3xl font-extrabold text-primary">Developers</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                @php
                    $developers = [
                        [
                            'name' => 'Robin Maharjan',
                            'role' => 'Frontend and backend developer',
                            'image' => 'images/contributer/developer.png',
                            'linkedin' => '#',
                            'instagram' => '#',
                            'github' => '#',
                        ],
                        // Add more developers here
                    ];
                @endphp
                <!-- Developer Card -->
                @foreach ($developers as $developer)
                    <div
                        class="relative overflow-hidden transition-all duration-500 transform bg-white rounded-lg shadow-lg group hover:shadow-xl hover:scale-105">
                        <img src="{{ $developer['image'] }}" alt="{{ $developer['name'] }}"
                            class="object-cover w-full h-64 transition-transform duration-500 group-hover:scale-110">

                        <!-- Dark overlay that appears on hover -->
                        <div
                            class="absolute inset-0 transition-opacity duration-500 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100">
                        </div>

                        <!-- Developer info wrapper -->
                        <div
                            class="absolute p-4 text-center transition-all duration-500 transform -translate-x-1/2 translate-y-4 opacity-0 bottom-4 left-1/2 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-xl font-bold text-white">{{ $developer['name'] }}</h3>
                            <p class="text-sm text-gray-300">{{ $developer['role'] }}</p>
                        </div>

                        <!-- Social Media Icons with staggered animation -->
                        <div class="absolute flex flex-col space-y-3 bottom-4 right-4">
                            <!-- LinkedIn -->
                            <a href="{{ $developer['linkedin'] }}"
                                class="flex items-center justify-center w-10 h-10 transition-all duration-300 transform translate-x-20 bg-white/10 backdrop-blur-sm rounded-full text-white hover:bg-blue-600 hover:text-white group-hover:translate-x-0 group-hover:delay-100">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    class="invert" viewBox="0 0 30 30">
                                    <path
                                        d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z">
                                    </path>
                                </svg>
                            </a>

                            <!-- Instagram -->
                            <a href="{{ $developer['instagram'] }}"
                                class="flex items-center justify-center w-10 h-10 transition-all delay-100 duration-300 transform translate-x-20 bg-white/10 backdrop-blur-sm rounded-full text-white hover:bg-gradient-to-tr from-yellow-500 via-pink-600 to-purple-700 hover:text-white group-hover:translate-x-0 group-hover:delay-200">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    class="invert" viewBox="0 0 24 24">
                                    <path
                                        d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z">
                                    </path>
                                </svg>
                            </a>

                            <!-- GitHub (added as a third social option) -->
                            <a href="{{ $developer['github'] ?? '#' }}"
                                class="flex items-center justify-center w-10 h-10 transition-all duration-300 transform translate-x-20 bg-white/10 backdrop-blur-sm rounded-full text-white hover:bg-gray-800 hover:text-white group-hover:translate-x-0 group-hover:delay-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="fill-current">
                                    <path
                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        <!-- Horizontal Line -->
        <hr class="my-12 border-gray-300">

        <!-- Contributors Section -->
        <section>
            <h2 class="mb-6 text-3xl font-extrabold text-primary">Contributors</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <!-- Contributor Card -->
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-lg font-bold text-gray-800">Contributor Name</h3>
                    <p class="text-sm text-gray-600">Role or brief description</p>
                </div>
                <!-- Repeat Contributor Card for other contributors -->
            </div>
        </section>
    </main>
@endsection
