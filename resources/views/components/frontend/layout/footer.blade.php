<footer class="bg-primary-light py-10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Social Media Section -->
            <div>
                <img src="{{ asset('images/logo/logo.png') }}" alt="Share Note Logo" class="invert">
                <p class="text-sm  mt-4">
                    Connect with us on social media! We share tips, tricks, and insights to help you stay organized,
                    boost productivity, and make the most out of your note-sharing experience. Follow us and stay
                    inspired!
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i
                            class="fab fa-facebook text-xl"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i
                            class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i
                            class="fab fa-google text-xl"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i
                            class="fab fa-pinterest text-xl"></i></a>
                </div>
            </div>

            <!-- Useful Links Section -->
            <div>
                <h5 class="text-lg font-semibold text-gray-800">Useful Links</h5>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class=" hover:text-gray-800">Home</a></li>
                    <li><a href="#" class=" hover:text-gray-800">About</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Services</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Contact</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Blog</a></li>
                </ul>
            </div>

            <!-- Support Section -->
            <div>
                <h5 class="text-lg font-semibold text-gray-800">contact us</h5>
                <ul class="mt-4 space-y-2">
                    <li><img src =""></li>
                    <li><a href="#" class=" hover:text-gray-800">FAQ</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Contact Support</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Privacy Policy</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Subscription Section -->
            <div>
                <h5 class="text-lg font-semibold text-gray-800">Subscribe</h5>
                <form action="#" method="POST" class="mt-4">
                    @csrf
                    <div class="flex">
                        <input type="email" name="email"
                            class="w-full px-4 py-2  rounded-l-md ring-0 border-0 focus:ring-none focus:outline-none"
                            placeholder="Enter Your Email" required />
                        <button type="submit"
                            class="bg-primary text-white px-4 py-2 rounded-r-md hover:bg-primary-dark focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
