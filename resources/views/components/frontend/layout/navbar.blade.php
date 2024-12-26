 <!-- Navbar -->
 <nav class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">
  <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <a href="/" class="text-3xl font-extrabold tracking-wide">Note Sharing App</a>
      <ul class="hidden md:flex space-x-8 text-lg font-semibold">
          <li><a href="/" class="hover:text-gray-300 transition">Home</a></li>
          <li><a href="/contributor" class="hover:text-gray-300 transition">Contributor</a></li>
          <li><a href="/contact" class="hover:text-gray-300 transition">Contact</a></li>
      </ul>
      <button class="block md:hidden focus:outline-none" id="menu-toggle">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
      </button>
  </div>
  <div class="hidden md:hidden bg-blue-700 text-white" id="mobile-menu">
      <ul class="space-y-4 text-lg font-semibold p-4">
          <li><a href="/" class="block hover:text-gray-300 transition">Home</a></li>
          <li><a href="/contributor" class="block hover:text-gray-300 transition">Contributor</a></li>
          <li><a href="/contact" class="block hover:text-gray-300 transition">Contact</a></li>
      </ul>
  </div>
</nav>
