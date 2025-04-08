@extends('layouts.frontend.app')
@section('content')
<div class="min-h-screen px-4 py-12 bg-gradient-to-br from-gray-50 to-blue-50 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="mb-12 text-center">
            <h1 class="mb-4 text-4xl font-bold text-gray-900">Get In Touch</h1>
            <p class="text-xl text-gray-600">Have questions or feedback? We're here to help and would love to hear from you!</p>
        </div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <!-- Contact Information Card -->
            <div class="p-6 bg-white shadow-md rounded-xl lg:col-span-1">
                <h2 class="pb-2 mb-6 text-2xl font-semibold text-gray-800 border-b border-gray-200">Contact Information</h2>

                <div class="space-y-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Email Us</h3>
                        <a href="mailto:support@notebare.app" class="text-blue-600 transition-colors hover:text-blue-500">support@notebare.app</a>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Call Us</h3>
                        <a href="tel:+18005555294" class="text-blue-600 transition-colors hover:text-blue-500">+9779866967909 </a>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Join Our Community</h3>
                        <a href="#" class="text-blue-600 transition-colors hover:text-blue-500">NoteShare Discord Server</a>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="lg:col-span-2">
                <div class="p-6 bg-white shadow-md rounded-xl">
                    <h2 class="mb-6 text-2xl font-semibold text-gray-800">Send Us a Message</h2>

                    <form class="space-y-4" action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Full Name *</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Subject Field -->
                        <div>
                            <label for="subject" class="block mb-1 text-sm font-medium text-gray-700">Subject *</label>
                            <select id="subject" name="subject" required
                                class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="" disabled selected>Select a subject</option>
                                <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                <option value="Technical Support" {{ old('subject') == 'Technical Support' ? 'selected' : '' }}>Technical Support</option>
                                <option value="Feature Request" {{ old('subject') == 'Feature Request' ? 'selected' : '' }}>Feature Request</option>
                                <option value="Feedback" {{ old('subject') == 'Feedback' ? 'selected' : '' }}>Feedback</option>
                                <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('subject')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block mb-1 text-sm font-medium text-gray-700">Your Message *</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="p-6 bg-white shadow-md rounded-xl lg:col-span-3">
                <h2 class="pb-2 mb-6 text-2xl font-semibold text-gray-800 border-b border-gray-200">Common Questions</h2>

                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div x-data="{ open: true }" class="pb-4 border-b border-gray-100">
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left">
                            <h3 class="text-lg font-medium text-gray-900">How do I reset my password?</h3>
                            <svg :class="{ 'transform rotate-180': open }" class="w-5 h-5 text-gray-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600">
                            <p>You can reset your password by clicking on the "Forgot Password" link on the login page. We'll send you an email with instructions to create a new password. If you don't see the email, please check your spam folder.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div x-data="{ open: false }" class="pb-4 border-b border-gray-100">
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left">
                            <h3 class="text-lg font-medium text-gray-900">Is NoteShare free to use?</h3>
                            <svg :class="{ 'transform rotate-180': open }" class="w-5 h-5 text-gray-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600">
                            <p>Yes! NoteShare offers a free plan with all the basic features you need to organize and share your notes. We also offer premium plans with additional storage, collaboration features, and advanced customization options.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div x-data="{ open: false }" class="pb-4 border-b border-gray-100">
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left">
                            <h3 class="text-lg font-medium text-gray-900">How do I share notes with others?</h3>
                            <svg :class="{ 'transform rotate-180': open }" class="w-5 h-5 text-gray-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600">
                            <p>Open any note and click the "Share" button. You can then enter email addresses or generate a shareable link with customizable permissions.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div x-data="{ open: false }" class="pb-4 border-b border-gray-100">
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left">
                            <h3 class="text-lg font-medium text-gray-900">Where are my notes stored?</h3>
                            <svg :class="{ 'transform rotate-180': open }" class="w-5 h-5 text-gray-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="mt-2 text-gray-600">
                            <p>All your notes are securely stored in encrypted cloud storage with automatic backups. You can access them from any device with your login credentials.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AlpineJS for FAQ functionality -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection