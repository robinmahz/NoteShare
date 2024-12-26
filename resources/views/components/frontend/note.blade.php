@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    <!-- Dashboard Header -->
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Notes Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- View Notes Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-600 mb-4">View Notes</h2>
            <ul class="space-y-4">
                <!-- Example Note Items -->
                <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                    <span>System Signal Processing Notes</span>
                    <a href="/storage/notes/system-signal-processing.pdf" target="_blank" 
                       class="text-blue-500 hover:underline">Download</a>
                </li>
                <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                    <span>Entrepreneurship Notes</span>
                    <a href="/storage/notes/entrepreneurship.pdf" target="_blank" 
                       class="text-blue-500 hover:underline">Download</a>
                </li>
                <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                    <span>Data Structures Notes</span>
                    <a href="/storage/notes/data-structures.pdf" target="_blank" 
                       class="text-blue-500 hover:underline">Download</a>
                </li>
            </ul>
        </div>

        <!-- Upload Notes Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">Upload Notes</h2>
            <form action="{{ route('notes.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Note Title -->
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Note Title</label>
                    <input type="text" name="title" id="title" 
                           class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                </div>

                <!-- File Upload -->
                <div class="mb-4">
                    <label for="file" class="block text-sm font-medium text-gray-700">Upload File</label>
                    <input type="file" name="file" id="file" 
                           class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 
                                  file:rounded-full file:border-0 file:text-sm file:font-semibold 
                                  file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition-all">
                    Upload
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
