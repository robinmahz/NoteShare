@extends('layouts.frontend.app')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <!-- Dashboard Header -->
        <h1 class="text-3xl font-bold mb-6 text-center text-primary">Notes</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- View Notes Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-primary mb-4">View Notes</h2>
                <ul class="space-y-4">

                    @foreach ($notes as $note)
                        <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                            <span>{{ $note->name }}</span>
                            <div class="flex space-x-4">
                                <a href="{{ asset($note->file) }}" target="_blank"
                                    class="text-blue-600 hover:underline">View</a>
                                <a href="{{ asset($note->file) }}" target="_blank" class="text-primary hover:underline"
                                    download="">Download</a>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Upload Notes Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-primary-dark mb-4">Upload Notes</h2>
                <form method="POST" enctype="multipart/form-data" action="{{ route('notes.store') }}">
                    @csrf

                    <!-- Note Name (Title) -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Note Title</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                            placeholder="e.g., Chapter 1 - Basic Electrical" required>
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                            placeholder="e.g., user@example.com" required>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Program Dropdown -->
                    <div class="mb-4">
                        <label for="program" class="block text-sm font-medium text-gray-700">Program</label>
                        <select name="program_id" id="program" onchange="loadSemesters()"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                            required>
                            <option value="" disabled selected>Select Program</option>
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}"
                                    {{ old('program_id') == $program->id ? 'selected' : '' }}>
                                    {{ $program->short }} - {{ $program->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('program_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Semester Dropdown -->
                    <div class="mb-4">
                        <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                        <select name="semester_id" id="semester" onchange="loadSubjects()"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                            required>
                            <option value="" disabled selected>Select Semester</option>
                            <!-- Populated dynamically via JavaScript/AJAX -->
                        </select>
                        @error('semester_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Subject Dropdown -->
                    <div class="mb-4">
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <select name="subject_id" id="subject"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                            required>
                            <option value="" disabled selected>Select Subject</option>
                            <!-- Populated dynamically via JavaScript/AJAX -->
                        </select>
                        @error('subject_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- File Upload -->
                    <div class="mb-4">
                        <label for="file" class="block text-sm font-medium text-gray-700">Upload File</label>
                        <input type="file" name="file" id="file"
                            class="mt-1 block text-sm text-black file:mr-4 file:py-2 file:px-4 
                                  file:rounded-full file:border-0 file:text-sm file:font-semibold 
                                  file:bg-blue-50 file:text-primary hover:file:bg-blue-100 focus:ring-0 focus:outline-none"
                            required>
                        @error('file')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="bg-primary text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition-all">
                        Upload
                    </button>
                </form>
            </div>

            <script>
                async function loadSemesters() {
                    const programId = document.getElementById('program').value;
                    const semesterSelect = document.getElementById('semester');
                    semesterSelect.innerHTML = '<option value="" disabled selected>Select Semester</option>';

                    if (programId) {
                        const response = await fetch(`/api/semesters/${programId}`);
                        const semesters = await response.json();
                        semesters.forEach(sem => {
                            const option = document.createElement('option');
                            option.value = sem.id;
                            option.text = sem.name;
                            semesterSelect.appendChild(option);
                        });
                    }
                    loadSubjects(); // Reset subjects when program changes
                }

                async function loadSubjects() {
                    const semesterId = document.getElementById('semester').value;
                    const subjectSelect = document.getElementById('subject');
                    subjectSelect.innerHTML = '<option value="" disabled selected>Select Subject</option>';

                    if (semesterId) {
                        const response = await fetch(`/api/subjects/${semesterId}`);
                        const subjects = await response.json();
                        subjects.forEach(sub => {
                            const option = document.createElement('option');
                            option.value = sub.id;
                            option.text = sub.name;
                            subjectSelect.appendChild(option);
                        });
                    }
                }
            </script>
        </div>
    </div>
@endsection
