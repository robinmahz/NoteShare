 <!-- Navbar -->
 <nav class="text-white shadow-lg bg-gradient-to-r from-blue-600 to-blue-800">
  <div class="container flex items-center justify-between px-6 py-4 mx-auto">
      <a href="/" class="text-3xl font-extrabold tracking-wide"> <img src="{{asset('images/logo/logo.png')}}" alt="NoteShare logo"></a>
      <ul class="hidden space-x-8 text-lg font-semibold md:flex">
          <li><a href="/" class="transition hover:text-gray-300">Home</a></li>
          <li><a href="/contributor" class="transition hover:text-gray-300">Contributor</a></li>
          <li><a href="/contact" class="transition hover:text-gray-300">Contact</a></li>
      </ul>
      <button class="block md:hidden focus:outline-none" id="menu-toggle">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
      </button>
  </div>
  <div class="hidden text-white bg-blue-700 md:hidden" id="mobile-menu">
      <ul class="p-4 space-y-4 text-lg font-semibold">
          <li><a href="/" class="block transition hover:text-gray-300">Home</a></li>
          <li><a href="/contributor" class="block transition hover:text-gray-300">Contributor</a></li>
          <li><a href="/contact" class="block transition hover:text-gray-300">Contact</a></li>
      </ul>
  </div>
</nav>
