<nav>
    <div class="max-w-6xl mx-auto px-6 mb-4">
        <h1 class="font-bold text-3xl">KanpurUp-78</h1>
        <p class="text-sm text-gray-500">||Dil me kanpur || Dil se kanpur||</p>
    </div>
</nav>

<nav class="bg-red-700 shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <!-- Logo -->
                <div>
                    <a href="#" class="flex items-center py-5 px-1 text-gray-100 hover:text-gray-200">
                        <svg class="h-6 w-6 mr-1 text-red-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5l7 7-7 7M5 10l7-7-7 7z"/>
                        </svg>
                        <span class="font-bold">KanpurUp-78</span>
                    </a>
                </div>

                <!-- Primary Nav -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{Route('index')}}" class="py-5 px-3 text-gray-100 hover:text-gray-200">Home</a>
                    <a href="#" class="py-5 px-3 text-gray-100 hover:text-gray-200">About</a>
                    <a href="{{Route('weather')}}" class="py-5 px-3 text-gray-100 hover:text-gray-200">Weather</a>
                    <div class="relative group">
                        <button class="py-5 px-3 text-gray-100 hover:text-gray-200 focus:outline-none">
                            Services
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg py-2">
                            <a href="#" class="block px-4 py-2 text-gray-100 hover:bg-gray-900">Web Design</a>
                            <a href="#" class="block px-4 py-2 text-gray-100 hover:bg-gray-900">App Development</a>
                            <a href="#" class="block px-4 py-2 text-gray-100 hover:bg-gray-900">SEO</a>
                        </div>
                    </div>
                    <a href="#" class="py-5 px-3 text-gray-100 hover:text-gray-200">Contact</a>
                </div>
            </div>

            <!-- Secondary Nav -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="#"> <i class="ri-search-line font-bold text-white"></i></a>
                <a href="#" class="py-2 px-3 bg-red-50 text-black rounded hover:bg-red-400">Login</a>
                <a href="#" class="py-2 px-3 bg-gray-500 text-white rounded hover:bg-gray-600">Sign Up</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden">
        <a href="{{Route('index')}}" class="block py-2 px-4 text-sm hover:bg-gray-200">Home</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">About</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Services</a>
        <a href="{{Route('weather')}}" class="py-5 px-3 text-gray-100 hover:text-gray-200">Weather</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Contact</a>
    </div>
</nav>
<!-- Navigation Bar with Marquee -->
<nav class="w-full bg-white text-black border-b">
    <div class="flex items-center overflow-hidden">
        <!-- Top Stories Section -->
        <div class="flex items-center px-6 py-3 bg-gray-100">
            <i class="ri-radio-button-line text-red-600 text-2xl animate-flash mr-2"></i>
            <h1 class="font-semibold text-lg">Top Stories</h1>
        </div>
        <!-- Marquee Section -->
        <div class="flex-1 py-2 bg-gray-50 overflow-hidden">
            <div class="marquee whitespace-nowrap">
                <ul class="flex gap-8 animate-marquee">
                    <li><p class="hover:underline hover:text-red-600 cursor-pointer">Best Software IT Company in Kanpur</p></li>
                    <li><p class="hover:underline hover:text-red-600 cursor-pointer">Latest Technology Trends in 2024</p></li>
                    <li><p class="hover:underline hover:text-red-600 cursor-pointer">How AI is Changing the World</p></li>
                </ul>
            </div>
        </div>
    </div>
</nav>



<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>