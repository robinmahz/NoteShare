@extends('layouts.frontend.app')

@section('content')

<main class="container px-6 py-12 mx-auto">
    <!-- Developers Section -->
    <section class="mb-12">
        <h2 class="mb-6 text-3xl font-extrabold text-primary">Developers</h2>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
            <!-- Developer Card -->
            <div class="relative overflow-hidden transition-transform duration-300 transform bg-white rounded-lg shadow-md group hover:scale-105">
                <img src="images/contributer/developer.png" alt="Developer Name" class="object-cover w-full h-64">

                <!-- Wrapper for content (developer name and role) positioned at bottom center -->
                <div class="absolute p-4 text-center transition-opacity duration-300 transform -translate-x-1/2 opacity-0 bottom-4 left-1/2 group-hover:opacity-100">
                    <h3 class="text-lg font-bold text-white">Robin Maharjan</h3>
                    <p class="text-sm text-gray-300">Frontend and backend developer</p>
                </div>

                <!-- Social Media Icons (remain in the bottom right, no change in position) -->
                <div class="absolute flex flex-col space-y-2 transition-opacity duration-300 bottom-4 right-4 group-hover:opacity-100">
                    <a href="#" class="text-gray-300 hover:text-primary translate-y-14 group-hover:-translate-y-0 ">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 30 30">
                            <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h10v-9h-3v-3h3v-1.611C16,9.339,17.486,8,20.021,8 c1.214,0,1.856,0.09,2.16,0.131V11h-1.729C19.376,11,19,11.568,19,12.718V14h3.154l-0.428,3H19v9h5c1.105,0,2-0.895,2-2V6 C26,4.895,25.104,4,24,4z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
                            <path d="M 11 4 C 7.1456661 4 4 7.1456661 4 11 L 4 39 C 4 42.854334 7.1456661 46 11 46 L 39 46 C 42.854334 46 46 42.854334 46 39 L 46 11 C 46 7.1456661 42.854334 4 39 4 L 11 4 z M 11 6 L 39 6 C 41.773666 6 44 8.2263339 44 11 L 44 39 C 44 41.773666 41.773666 44 39 44 L 11 44 C 8.2263339 44 6 41.773666 6 39 L 6 11 C 6 8.2263339 8.2263339 6 11 6 z M 13.085938 13 L 22.308594 26.103516 L 13 37 L 15.5 37 L 23.4375 27.707031 L 29.976562 37 L 37.914062 37 L 27.789062 22.613281 L 36 13 L 33.5 13 L 26.660156 21.009766 L 21.023438 13 L 13.085938 13 z M 16.914062 15 L 19.978516 15 L 34.085938 35 L 31.021484 35 L 16.914062 15 z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-primary">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <!-- Repeat Developer Card for other developers -->
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
