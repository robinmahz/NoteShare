@extends('layouts.frontend.app')

@section('content')
    @include('components.frontend.landing.banner')

    <!-- Main Body Content -->
    <main class="container flex-grow px-6 py-12 mx-auto">
        <!-- Program Selector -->
        <div class="mb-8">
            <label for="program-select" class="block mb-2 text-lg font-bold text-gray-700">Choose Program:</label>
            <select id="program-select" class="w-full max-w-md p-4 transition-transform transform border rounded-lg shadow-sm hover:scale-105 focus:ring-2 focus:ring-primary">
                <option value="" disabled selected>Select a Program</option>
                <option value="BEIT">BEIT</option>
                <option value="Computer">Computer</option>
            </select>
        </div>

        <!-- Semester Selector -->
        <div class="hidden mb-8" id="semester-container">
            <label for="semester-select" class="block mb-2 text-lg font-bold text-gray-700">Choose Semester:</label>
            <select id="semester-select" class="w-full max-w-md p-4 transition-transform transform border rounded-lg shadow-sm hover:scale-105 focus:ring-2 focus:ring-primary">
                <option value="" disabled selected>Select a Semester</option>
                <!-- Options will be generated dynamically -->
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
        const programSelect = document.getElementById('program-select');
        const semesterContainer = document.getElementById('semester-container');
        const semesterSelect = document.getElementById('semester-select');
        const subjectsContainer = document.getElementById('subjects-container');
        const subjectList = document.getElementById('subject-list');

        const subjects = {
            'BEIT': [
                // sem-1
                { name: 'Calculus I', code: 'MTH 110', semester_id: 1 },
                { name: 'Electronic device & Circuits', code: 'CSE102', semester_id: 1 },
                { name: 'Programming in C', code: 'CSE101', semester_id: 1 },
                { name: 'Basic electrical engineering', code: 'CSE102', semester_id: 1 },
                { name: 'Applied physics', code: 'CSE101', semester_id: 1 },
                { name: 'Problem Solving Technique', code: 'CSE102', semester_id: 1 },
                // sem-2
                { name: 'Algebra and geometry', code: 'CSE103', semester_id: 2 },
                { name: 'Object oriented programming in c++', code: 'CSE104', semester_id: 2 },
                { name: 'Basic Engineering drawing', code: 'CSE105', semester_id: 2 },
                { name: 'Digital logic ', code: 'CSE106', semester_id: 2 },
                { name: 'Communication technique', code: 'CSE106', semester_id: 2 },
                // sem-3
                { name: 'Calculus II', code: 'CSE106', semester_id: 3 },
                { name: 'Digital structure and algorithm ', code: 'CSE106', semester_id: 3 },
                { name: ' software engineering and fundamentals ', code: 'CSE106', semester_id: 3 },
                { name: 'Probability and statics', code: 'CSE106', semester_id: 3 },
                { name: 'Instumentation ', code: 'CSE106', semester_id: 3 },
                { name: 'Advanced programming with Java', code: 'CSE106', semester_id: 3 },
                // sem-4
                { name: 'Applied Mathematics ', code: 'CSE106', semester_id: 4 },
                { name: 'Microprocessor and computer Architecture', code: 'CSE106', semester_id: 4 },
                { name: 'SAITS', code: 'CSE106', semester_id: 4 },
                { name: 'Web technology ', code: 'CSE106', semester_id: 4 },
                { name: 'Database Management system', code: 'CSE106', semester_id: 4 },
                { name: 'Digital logic ', code: 'CSE106', semester_id: 4},
                { name: 'Applied Os system ', code: 'CSE106', semester_id: 4 },
                // sem-5
                { name: 'Signal system processing ', code: 'CSE106', semester_id: 5},
                { name: 'Numerical method ', code: 'CSE106', semester_id: 5},
                { name: 'Multimedia ', code: 'CSE106', semester_id: 5},
                { name: 'Computer Graphics ', code: 'CSE106', semester_id: 5},
                { name: 'Digital logic ', code: 'CSE106', semester_id: 5},
                { name: 'EPP', code: 'CSE106', semester_id: 5 },
                { name: 'IT Architecture ', code: 'CSE106', semester_id: 5 },
                { name: 'Research Fundamentals', code: 'CSE106', semester_id: 3 },
            ],
            'Computer': [
                { name: 'Introduction to Computing', code: 'CMP101', semester_id: 1 },
                { name: 'Linear Algebra', code: 'CMP102', semester_id: 1 },
                { name: 'Object-Oriented Programming', code: 'CMP201', semester_id: 2 },
                { name: 'Computer Architecture', code: 'CMP202', semester_id: 2 },
                { name: 'Microprocessors', code: 'CMP301', semester_id: 3 },
                { name: 'Computer Graphics', code: 'CMP302', semester_id: 3 },
            ]
        };

        // When program is selected
        programSelect.addEventListener('change', function() {
            const selectedProgram = this.value;
            semesterSelect.innerHTML = '<option value="" disabled selected>Select a Semester</option>'; // Reset semesters
            subjectList.innerHTML = ''; // Reset subject list
            subjectsContainer.classList.add('hidden'); // Hide subjects initially

            if (selectedProgram) {
                // Show semester selector
                semesterContainer.classList.remove('hidden');

                // Generate semesters 1 to 8
                for (let i = 1; i <= 8; i++) {
                    const option = document.createElement('option');
                    option.value = i;
                    option.textContent = `Semester ${i}`;
                    semesterSelect.appendChild(option);
                }
            }
        });

        // When semester is selected
        semesterSelect.addEventListener('change', function() {
            const selectedProgram = programSelect.value;
            const selectedSemester = parseInt(this.value);
            subjectList.innerHTML = ''; // Clear previous subjects

            const programSubjects = subjects[selectedProgram] || [];
            const filteredSubjects = programSubjects.filter(subj => subj.semester_id === selectedSemester);

            if (filteredSubjects.length > 0) {
                filteredSubjects.forEach(subject => {
                    const subjectCard = `
                        <a href="/notes" class="flex items-center p-5 transition-all bg-white rounded-lg shadow-md hover:bg-primary-el hover:shadow-lg">
                            <img src="icons/${subject.name.toLowerCase().replace(/ /g, '-')}.svg" alt="${subject.name}" class="w-8 h-8 mr-4">
                            <div>
                                <div class="text-lg font-medium">${subject.name}</div>
                                <div class="text-sm text-gray-500">${subject.code}</div>
                            </div>
                        </a>
                    `;
                    subjectList.insertAdjacentHTML('beforeend', subjectCard);
                });
                subjectsContainer.classList.remove('hidden');
            } else {
                subjectsContainer.classList.add('hidden');
            }
        });
    </script>
@endsection
