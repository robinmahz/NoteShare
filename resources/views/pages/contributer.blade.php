@extends('layouts.frontend.app')
@section('content')
<div class="container px-4 py-8 mx-auto">
    <!-- Developers Section -->
    <div class="mb-4">
        <h2 class="mb-6 text-3xl font-bold text-center text-gray-800">Developers</h2>
        <div class="flex justify-center gap-6">
            <!-- Developer Card -->
            <div class="transition-shadow duration-300 bg-white shadow-lg w-72 rounded-xl hover:shadow-2xl" >
                <div class="relative p-6 text-center bg-blue-500 rounded-t-xl">
                    <img src="{{('')}}" alt="Developer 1" class="w-24 h-24 mx-auto border-4 border-white rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Developer 1</h3>
                    <p class="mt-2 text-sm text-gray-600">Specializes in front-end development. Expert in React and Tailwind CSS.</p>
                    <button class="px-4 py-2 mt-4 text-white transition duration-300 bg-blue-500 rounded-lg hover:bg-blue-600">View More</button>
                </div>
            </div>
            <div class="transition-shadow duration-300 bg-white shadow-lg w-72 rounded-xl hover:shadow-2xl">
                <div class="relative p-6 text-center bg-blue-500 rounded-t-xl">
                    <img src="path-to-developer2-image.jpg" alt="Developer 2" class="w-24 h-24 mx-auto border-4 border-white rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Developer 2</h3>
                    <p class="mt-2 text-sm text-gray-600">Backend specialist with expertise in Node.js and database management.</p>
                    <button class="px-4 py-2 mt-4 text-white transition duration-300 bg-blue-500 rounded-lg hover:bg-blue-600">View More</button>
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
            <div class="transition-shadow duration-300 bg-white shadow-lg w-72 rounded-xl hover:shadow-2xl">
                <div class="relative p-6 text-center bg-blue-500 rounded-t-xl">
                    <img src="path-to-contributor1-image.jpg" alt="Contributor 1" class="w-24 h-24 mx-auto border-4 border-white rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Contributor 1</h3>
                    <p class="mt-2 text-sm text-gray-600">Project manager with excellent team communication skills.</p>
                    <button class="px-4 py-2 mt-4 text-white transition duration-300 bg-blue-500 rounded-lg hover:bg-blue-600">View More</button>
                </div>
            </div>
            <div class="transition-shadow duration-300 bg-white shadow-lg w-72 rounded-xl hover:shadow-2xl">
                <div class="relative p-6 text-center bg-blue-500 rounded-t-xl">
                    <img src="path-to-contributor2-image.jpg" alt="Contributor 2" class="w-24 h-24 mx-auto border-4 border-white rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Contributor 2</h3>
                    <p class="mt-2 text-sm text-gray-600">Quality Assurance specialist ensuring excellent product quality.</p>
                    <button class="px-4 py-2 mt-4 text-white transition duration-300 bg-blue-500 rounded-lg hover:bg-blue-600">View More</button>
                </div>
            </div>
            <!-- Add more contributor cards as needed -->
        </div>
    </div>
</div>

@endsection
