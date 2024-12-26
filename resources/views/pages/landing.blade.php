@extends('layouts.frontend.app')

@section('content')
    @include('components.frontend.landing.banner')
    <!-- Main Body Content -->
    <main class="flex-grow container mx-auto px-6 py-12">
        <!-- 5th Semester -->
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-blue-600 border-b-4 border-blue-600 pb-2 inline-block">5th Sem BEIT</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <a href="/notes" class="bg-white p-4 rounded-lg shadow-md hover:bg-blue-100 hover:shadow-lg transition-all">
                    System Signal Processing
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-blue-100 hover:shadow-lg transition-all">
                    Entrepreneurship
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-blue-100 hover:shadow-lg transition-all">
                    Research Fundamentals
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-blue-100 hover:shadow-lg transition-all">
                    ITA
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-blue-100 hover:shadow-lg transition-all">
                    Computer graphics
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-blue-100 hover:shadow-lg transition-all">
                    Numerical method
                </a>
            </div>
        </div>

        <!-- 4th Semester -->
        <div>
            <h2 class="text-2xl font-bold text-green-600 border-b-4 border-green-600 pb-2 inline-block">5th Semester
                computer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-green-100 hover:shadow-lg transition-all">
                    Computer Networks
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-green-100 hover:shadow-lg transition-all">
                    Data Structures
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-green-100 hover:shadow-lg transition-all">
                    Discrete Mathematics
                </a>
                <a href="{{ url('/note') }}"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-green-100 hover:shadow-lg transition-all">
                    Programming in C++
                </a>
            </div>
        </div>
    </main>
@endsection
