@extends('layouts.frontend.app')

@section('content')
    @include('components.frontend.landing.banner')
    <!-- Main Body Content -->
    <main class="flex-grow container mx-auto px-6 py-12">
        <!-- Semester Selector -->
        <div class="mb-8">
            <label for="semester-select" class="block text-lg font-bold text-gray-700">Choose Semester:</label>
            <select id="semester-select" class="mt-2 p-3 border rounded-lg shadow-sm w-full max-w-md"
                onchange="showSemester(this.value)">
                <option value="5th-semit">5th Semester BEIT</option>
                <option value="5th-comp">5th Semester Computer</option>
            </select>
        </div>
        <!-- 5th Semester -->
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-accent border-b-4 border-accent-dark pb-2 inline-block">5th Sem BEIT</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <a href="/notes"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-accent-light hover:shadow-lg transition-all">
                    System Signal Processing
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-accent-light hover:shadow-lg transition-all">
                    Entrepreneurship
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-accent-light hover:shadow-lg transition-all">
                    Research Fundamentals
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-accent-light hover:shadow-lg transition-all">
                    ITA
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-accent-light hover:shadow-lg transition-all">
                    Computer graphics
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-accent-light hover:shadow-lg transition-all">
                    Numerical method
                </a>
            </div>
        </div>

        <!-- 4th Semester -->
        <div>
            <h2 class="text-2xl font-bold text-primary border-b-4 border-primary pb-2 inline-block">5th Semester
                computer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-primary-el hover:shadow-lg transition-all">
                    Computer Networks
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-primary-el hover:shadow-lg transition-all">
                    Data Structures
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-primary-el hover:shadow-lg transition-all">
                    Discrete Mathematics
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-primary-el hover:shadow-lg transition-all">
                    Programming in C++
                </a>
            </div>
        </div>
    </main>
@endsection
