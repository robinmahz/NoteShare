@extends('layouts.frontend.app')

@section('content')
    @include('components.frontend.landing.banner')

    <!-- Main Body Content -->
    <main class="container flex-grow px-6 py-12 mx-auto">
        <!-- Semester Selector -->
        <div class="mb-8">
            <label for="semester-select" class="block mb-2 text-lg font-bold text-gray-700">Choose Semester:</label>
            <select id="semester-select" class="w-full max-w-md p-4 transition-transform transform border rounded-lg shadow-sm hover:scale-105 focus:ring-2 focus:ring-primary">
                <option value="" disabled selected>Select a Semester</option>
                <option value="5th-sem">Fifth Semester</option>
                <option value="6th-sem">Sixth Semester</option>
            </select>
        </div>

        <!-- Subject List for Selected Semester -->
        <div id="subjects-container" class="hidden">
            <h2 class="inline-block pb-2 text-3xl font-extrabold border-b-4 text-primary border-primary">Subjects</h2>
            <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2" id="subject-list">
                <!-- Subjects will be loaded here dynamically -->
            </div>
        </div>

        <!-- Quick Upload Button -->
        <div class="fixed bottom-10 right-10">
            <a href="/upload" class="p-4 text-white transition-all rounded-full shadow-lg bg-primary hover:bg-primary-dark">
                Upload Notes
            </a>
        </div>
    </main>

    <script>
        document.getElementById('semester-select').addEventListener('change', function() {
            const semester = this.value;
            const subjectsContainer = document.getElementById('subjects-container');
            const subjectList = document.getElementById('subject-list');
            subjectList.innerHTML = ''; // Clear previous subjects

            const subjects = {
                '5th-sem': ['System Signal Processing', 'Computer Networks', 'Data Structures', 'Discrete Mathematics', 'Programming in C++'],
                '6th-sem': ['Software Engineering', 'Artificial Intelligence', 'Database Management Systems', 'Operating Systems', 'Web Technologies']
            };

            if (semester && subjects[semester]) {
                subjects[semester].forEach(subject => {
                    const subjectCard = `
                        <a href="/notes" class="flex items-center p-5 transition-all bg-white rounded-lg shadow-md hover:bg-primary-el hover:shadow-lg">
                            <img src="icons/${subject.toLowerCase().replace(/ /g, '-')}.svg" alt="${subject}" class="w-8 h-8 mr-4">
                            <span class="text-lg font-medium">${subject}</span>
                        </a>
                    `;
                    subjectList.insertAdjacentHTML('beforeend', subjectCard);
                });
                subjectsContainer.classList.remove('hidden');
            }
        });
    </script>
@endsection
