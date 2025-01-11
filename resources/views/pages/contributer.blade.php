@extends('layouts.frontend.app')
@section('content')
    <div class="container px-4 py-8 mx-auto">
        <!-- Developers Section -->
        <div class="mb-12">
            <h2 class="mb-6 text-3xl font-bold text-center text-gray-800">Our Team</h2>
            @php

                $teamMembers = [
                    ['name' => 'John Doe', 'photo' => 'path/to/john.jpg'],
                    ['name' => 'Jane Smith', 'photo' => 'path/to/jane.jpg'],
                    ['name' => 'Mike Johnson', 'photo' => 'path/to/mike.jpg'],
                    ['name' => 'Emily Brown', 'photo' => 'path/to/emily.jpg'],
                    // Add more team members as needed
                ];
            @endphp
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($teamMembers as $member)
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/contributer/developer.png') }}" alt="{{ $member['name'] }}"
                            class="w-40 h-40 mb-4 rounded-full object-cover shadow-lg">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $member['name'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
