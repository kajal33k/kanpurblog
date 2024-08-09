<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanpur Up78 | Kanpur Weather</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- icon link--}}
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-red-700 text-white py-4 sticky top-0 z-10">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Kanpur Up78</h1>
            <nav class="hidden md:flex space-x-4">
                <a href="{{Route('index')}}" class="hover:underline">Home</a>
                <a href="{{Route('weather')}}" class="hover:underline">Kanpur Weather</a>
                <a href="{{Route('special')}}" class="hover:underline">Famous Places</a>
                <a href="#" class="hover:underline">Kanpur News</a>
                <a href="#" class="hover:underline">Contact</a>
            </nav>
            <button class="md:hidden" id="mobile-menu-button">
                <i class="ri-menu-line text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-red-600 text-white py-2 hidden" id="mobile-menu">
        <nav class="container mx-auto px-4 flex flex-col space-y-2">
            <a href="{{Route('index')}}" class="hover:underline">Home</a>
            <a href="{{Route('weather')}}" class="hover:underline">Kanpur Weather</a>
            <a href="#" class="hover:underline">Famous Places</a>
            <a href="#" class="hover:underline">Kanpur News</a>
            <a href="#" class="hover:underline">Contact</a>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto p-4">
        <!-- Weather Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Kanpur Weather</h2>
            <img src="assets\img\weather.png" alt="" class="object-cover ">
            <p class="text-gray-600 mb-4">The average minimum and maximum temperature of Kanpur is as given below. The best time to visit Kanpur is also specified.</p>

            <div class="overflow-x-auto border border-red-700">
                <table class="min-w-full divide-y divide-red-600">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Month</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Best Time</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Min. Temp (°C)</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Max. Temp (°C)</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-red-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">January</td>
                            <td class="px-6 py-4 whitespace-nowrap">BEST TIME</td>
                            <td class="px-6 py-4 whitespace-nowrap">8</td>
                            <td class="px-6 py-4 whitespace-nowrap">23</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">February</td>
                            <td class="px-6 py-4 whitespace-nowrap">BEST TIME</td>
                            <td class="px-6 py-4 whitespace-nowrap">11</td>
                            <td class="px-6 py-4 whitespace-nowrap">27</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">March</td>
                            <td class="px-6 py-4 whitespace-nowrap">BEST TIME</td>
                            <td class="px-6 py-4 whitespace-nowrap">16</td>
                            <td class="px-6 py-4 whitespace-nowrap">33</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">April</td>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap">21</td>
                            <td class="px-6 py-4 whitespace-nowrap">39</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">May</td>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap">25</td>
                            <td class="px-6 py-4 whitespace-nowrap">40</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">June</td>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap">27</td>
                            <td class="px-6 py-4 whitespace-nowrap">39</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">July</td>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap">26</td>
                            <td class="px-6 py-4 whitespace-nowrap">35</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">August</td>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap">26</td>
                            <td class="px-6 py-4 whitespace-nowrap">34</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">September</td>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap">25</td>
                            <td class="px-6 py-4 whitespace-nowrap">34</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">October</td>
                            <td class="px-6 py-4 whitespace-nowrap">BEST TIME</td>
                            <td class="px-6 py-4 whitespace-nowrap">20</td>
                            <td class="px-6 py-4 whitespace-nowrap">33</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">November</td>
                            <td class="px-6 py-4 whitespace-nowrap">BEST TIME</td>
                            <td class="px-6 py-4 whitespace-nowrap">14</td>
                            <td class="px-6 py-4 whitespace-nowrap">30</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">December</td>
                            <td class="px-6 py-4 whitespace-nowrap">BEST TIME</td>
                            <td class="px-6 py-4 whitespace-nowrap">10</td>
                            <td class="px-6 py-4 whitespace-nowrap">25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            

            
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Average Kanpur Weather</h2>
            <p class="text-gray-600 mb-4">
                The climate in Kanpur is warm and temperate. When compared with winter, the summers have much more rainfall. According to Köppen and Geiger, this climate is classified as Cwa. The average annual temperature is 25.3°C | 77.5°F in Kanpur.
            </p>
            <p class="text-gray-600">
                Get the forecast for today, tonight & tomorrow’s weather for Kanpur, Uttar Pradesh​, India. Hi/Low, & everything you need to be ready for …
            </p>
        </section>

        <section class="mt-8">
            <div>
                <div class="flex items-center mb-4">
                    <div class="w-1 h-8 bg-red-600 mr-4"></div>
                    <h3 class="text-xl font-bold">Follow Us</h3>
                </div>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-facebook-line text-2xl"></i></a></li>
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-twitter-line text-2xl"></i></a></li>
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-instagram-line text-2xl"></i></a></li>
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-youtube-line text-2xl"></i></a></li>
                </ul>
            </div>
        </div>
        </section>

        <!-- Related Posts Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h3 class="text-xl font-bold mb-4">You may also like</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Example of a related post -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <img src="assets/img/कानपुर का ‘जादुई’ मंदिर वैज्ञानिकों के लिए कौतूहल.jpeg" alt="Bhitargaon Temple" class="w-full h-32 object-cover mb-4">
                    <h4 class="text-lg font-semibold mb-2">Bhitargaon Temple – A Scientific Curiosity Providing Accurate Monsoon Information</h4>
                    <p class="text-gray-600 mb-2">15/06/2021 by Ravi Pandey</p>
                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                </div>
                <!-- Add more related posts here -->
            </div>
        </section>

        <!-- Contact Form -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <form action="#" method="post" class="space-y-4">
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="flex flex-col">
                    <label for="email" class="text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="flex flex-col">
                    <label for="website" class="text-gray-700">Website</label>
                    <input type="text" id="website" name="website" class="p-2 border border-gray-300 rounded-md">
                </div>
                <div class="flex flex-col">
                    <label for="comment" class="text-gray-700">Comment</label>
                    <textarea id="comment" name="comment" rows="4" class="p-2 border border-gray-300 rounded-md" required></textarea>
                </div>
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About Section -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">About Us</h3>
                    </div>
                    <p class="text-gray-200">Kanpur Unique and Famous Places is your go-to blog for discovering the hidden gems, historical landmarks, and cultural hotspots of Kanpur. Join us on a journey to explore the city's rich heritage and vibrant life.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">Quick Links</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-200 hover:text-red-600 hover:underline">Home</a></li>
                        <li><a href="#" class="text-gray-200 hover:text-red-600 hover:underline">About</a></li>
                        <li><a href="#" class="text-gray-200 hover:text-red-600 hover:underline">Blog</a></li>
                        <li><a href="#" class="text-gray-200 hover:text-red-600 hover:underline">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">Contact Us</h3>
                    </div>
                    <ul class="space-y-2">
                        <li>Kanpur, Uttar Pradesh</li>
                        <li>+918299012292</li>
                        <li><a href="mailto:districtkanpur@gmail.com" class="text-gray-200 hover:text-red-600 hover:underline">districtkanpur@gmail.com</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">Follow Us</h3>
                    </div>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-facebook-line text-2xl"></i></a></li>
                        <li><a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-twitter-line text-2xl"></i></a></li>
                        <li><a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-instagram-line text-2xl"></i></a></li>
                        <li><a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-youtube-line text-2xl"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center text-gray-400 mt-8">
                <p>Copyright © 2024 Kanpur Up78. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
