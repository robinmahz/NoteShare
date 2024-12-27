@extends('layouts.frontend.app')

@section('content')
    @include('components.frontend.landing.banner')
    <!-- Main Body Content -->
    <main class="flex-grow container mx-auto px-6 py-12">
        <!-- Semester Selector -->
        <div class="mb-8">
            <label for="semester-select" class="block text-lg font-bold text-gray-700">Choose Semester:</label>
            <select id="semester-select" class="mt-2 p-3 border rounded-lg shadow-sm w-full max-w-md">
                <option value="5th-semit">Fifth Semester </option>
                <option value="5th-comp">Sixth Semester</option>
            </select>
        </div>


        <!-- 5th Semester -->
        <div>
            <h2 class="text-2xl font-bold text-primary border-b-4 border-primary pb-2 inline-block">5th Semester
                computer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <a href="/notes"
                    class="bg-white p-4 rounded-lg shadow-md hover:bg-primary-el hover:shadow-lg transition-all">
                    System Signal Processing
                </a>
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
