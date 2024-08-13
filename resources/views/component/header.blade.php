<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KanpurUp-78</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .animate-marquee {
            animation: marquee 30s linear infinite;
        }
        @keyframes flash {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        .animate-flash {
            animation: flash 1s linear infinite;
        }
        .group:hover .group-hover\:block {
            display: block;
        }
    </style>
</head>
<body class="font-sans">
    <!-- Top Bar -->
    <div class="bg-black text-red-500 py-2">
        <div class="container mx-auto px-4 flex flex-wrap items-center justify-between">
            <!-- Contact Info -->
            <div class="text-sm flex flex-wrap items-center gap-4 mb-2 md:mb-0">
                <div class="flex items-center">
                    <i class="ri-map-pin-2-fill text-red-500 mr-2"></i>
                    <span>Real Victory Groups, Kanpur</span>
                </div>
                <div class="flex items-center">
                    <i class="ri-mail-unread-line text-red-500 mr-2"></i>
                    <span>Email: <a href="mailto:Email@Example.com" class="underline hover:text-red-300">Email@Example.com</a></span>
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="flex flex-wrap items-center space-x-4">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="text-red-500 hover:text-red-400">
                    <i class="ri-facebook-fill text-lg md:text-xl"></i>
                </a>
                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="text-red-500 hover:text-red-400">
                    <i class="ri-twitter-fill text-lg md:text-xl"></i>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="text-red-500 hover:text-red-400">
                    <i class="ri-instagram-fill text-lg md:text-xl"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="text-red-500 hover:text-red-400">
                    <i class="ri-linkedin-fill text-lg md:text-xl"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Site Title -->
    <header class="max-w-6xl mx-auto px-6 py-4">
        <h1 class="font-bold text-3xl text-red-600">KanpurUp-78</h1>
        <p class="text-sm text-gray-500">||Dil me kanpur || Dil se kanpur||</p>
    </header>

    <!-- Main Navigation -->
    <nav class="bg-red-700 shadow-lg relative z-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- Logo -->
                    <a href="#" class="flex items-center py-5 px-2 text-gray-100 hover:text-gray-200">
                        <svg class="h-6 w-6 mr-1 text-red-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5l7 7-7 7M5 10l7-7-7 7z"/>
                        </svg>
                        <span class="font-bold">KanpurUp-78</span>
                    </a>

                    <!-- Primary Nav -->
                    <div class="hidden md:flex items-center space-x-1 relative">
                        <a href="{{Route('index')}}" class="py-5 px-3 text-gray-100 hover:text-gray-200">Home</a>
                        <a href="{{Route('about')}}" class="py-5 px-3 text-gray-100 hover:text-gray-200">About</a>
                        <a href="{{Route('weather')}}" class="py-5 px-3 text-gray-100 hover:text-gray-200">Weather</a>
                        <div class="relative group">
                            <button class="py-5 px-3 text-gray-100 hover:text-gray-200 focus:outline-none">
                                Services
                            </button>
                            <div class="absolute hidden group-hover:block bg-white text-black shadow-lg rounded-lg py-2 w-48 top-full z-20">
                                <a href="{{Route('webdesign')}}" class="block px-4 py-2 hover:bg-gray-100">Web Design</a>
                                <a href="{{Route('appdev')}}" class="block px-4 py-2 hover:bg-gray-100">App Development</a>
                                <a href="{{Route('seo')}}" class="block px-4 py-2 hover:bg-gray-100">SEO</a>
                            </div>
                        </div>
                        <a href="{{Route('contact')}}" class="py-5 px-3 text-gray-100 hover:text-gray-200">Contact</a>
                    </div>
                </div>

                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center space-x-2">
                    <a href="#" class="text-white hover:text-gray-200"> 
                        <i class="ri-search-line font-bold"></i>
                    </a>
                    <a href="#" class="py-2 px-3 bg-red-50 text-black rounded hover:bg-red-400 transition duration-300">Login</a>
                    <a href="#" class="py-2 px-3 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300">Sign Up</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button text-white focus:outline-none">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu hidden md:hidden">
            <a href="{{Route('index')}}" class="block py-2 px-4 text-sm hover:bg-red-600 text-white">Home</a>
            <a href="{{Route('about')}}" class="block py-2 px-4 text-sm hover:bg-red-600 text-white">About</a>
            <a href="{{Route('weather')}}" class="block py-2 px-4 text-sm hover:bg-red-600 text-white">Weather</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-red-600 text-white">Services</a>
            <a href="{{Route('contact')}}" class="block py-2 px-4 text-sm hover:bg-red-600 text-white">Contact</a>
        </div>
    </nav>

    <!-- Navigation Bar with Marquee -->
    <div class="w-full bg-gray-100 border-b relative z-0">
        <div class="flex items-center overflow-hidden">
            <!-- Top Stories Section -->
            <div class="flex items-center px-6 py-3 bg-gray-200">
                <i class="ri-radio-button-line text-red-600 text-2xl animate-flash mr-2"></i>
                <h2 class="text-lg font-bold">Top Stories</h2>
            </div>
            <!-- Marquee Section -->
            <div class="flex-1 py-2 overflow-hidden">
                <div class="marquee whitespace-nowrap relative z-0">
                    <ul class="flex gap-8 animate-marquee">
                        <a href="{{Route('ai')}}"><li><p class="hover:underline hover:text-red-600 cursor-pointer font-bold">Best Software IT Company in Kanpur</p></li></a>
                        <a href="{{Route('ai')}}"><li><p class="hover:underline hover:text-red-600 cursor-pointer font-bold">Latest Technology Trends in 2024</p></li></a>
                            <a href="{{Route('ai')}}"><li><p class="hover:underline hover:text-red-600 cursor-pointer font-bold">How AI is Changing the World</p></li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
