@extends('component.main')
@section('content')
    {{-- <script src="https://cdn.tailwindcss.com"></script>


    <!-- Header -->
    <header class="bg-red-700 text-white py-4 sticky top-0 z-10">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl md:text-3xl font-bold">Kanpur Up78</h1>
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('index') }}" class="hover:text-red-200 transition duration-300">Home</a>
                <a href="#" class="hover:text-red-200 transition duration-300">Famous Places</a>
                <a href="#" class="hover:text-red-200 transition duration-300">Kanpur News</a>
                <a href="#" class="hover:text-red-200 transition duration-300">Contact</a>
            </nav>
            <button class="md:hidden focus:outline-none" id="mobile-menu-button" aria-label="Toggle menu">
                <i class="ri-menu-line text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-red-600 text-white py-2 hidden" id="mobile-menu">
        <nav class="container mx-auto px-4 flex flex-col space-y-2">
            <a href="{{ route('index') }}" class="hover:bg-red-700 py-2 px-4 rounded transition duration-300">Home</a>
            <a href="#" class="hover:bg-red-700 py-2 px-4 rounded transition duration-300">Famous Places</a>
            <a href="#" class="hover:bg-red-700 py-2 px-4 rounded transition duration-300">Kanpur News</a>
            <a href="#" class="hover:bg-red-700 py-2 px-4 rounded transition duration-300">Contact</a>
        </nav>
    </div>
 --}}
    <!-- Main Content -->
    <main class="container mx-auto p-4 flex flex-col md:flex-row">
        <!-- Article Section -->
        <section class="flex-1 space-y-8">
            <article class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">DSLR Camera Available for Rent in Kanpur</h2>
                <p class="text-gray-600 mb-4">20/04/2022 by Ravi Pandey</p>
                <img src="assets\img\DSLR Camera Available for Rent in Kanpur.jpeg" alt="DSLR Camera" class="w-full h-auto object-cover mb-4 rounded-lg">

                <div class="prose max-w-none text-gray-700">
                    <p>Hello Kanpur residents! You can now rent a DSLR camera in Kanpur. Whether you're going out for a trip or having a wedding at home, a DSLR camera is available at very reasonable rates. This post will guide you on how to rent a DSLR camera in Kanpur.</p>

                    <h3 class="text-xl font-semibold mt-4 mb-2">DSLR Camera Rental Process in Kanpur</h3>
                    <p>To rent a DSLR camera, call or WhatsApp +91 7753800444 and provide your requirements and booking dates. You will be informed about the camera's availability for your requested dates. After that, you need to pay an advance amount based on the number of days you book, which will confirm your reservation.</p>

                    <h3 class="text-xl font-semibold mt-4 mb-2">Required Documents for Renting a DSLR in Kanpur</h3>
                    <p>You need to present 2 original ID cards and sign a form to receive the camera. You can easily rent a DSLR camera for photo shoots or travel. Simply pay the rent, use the camera, and return it.</p>

                    <h3 class="text-xl font-semibold mt-4 mb-2">Camera Model</h3>
                    <ul class="list-disc pl-5">
                        <li>Cannon 700D</li>
                        <li>With EF 18-55mm and EF S55-250mm lenses</li>
                        <li>1 battery, 1 charger, 16 GB memory card, and camera bag</li>
                    </ul>

                    <h3 class="text-xl font-semibold mt-4 mb-2">Rate List</h3>
                    <ul class="list-disc pl-5">
                        <li>1 day – ₹1000</li>
                        <li>3 days – ₹2500</li>
                        <li>6 days – ₹4700</li>
                        <li>7 or more days – ₹700 per day</li>
                    </ul>

                     <!-- Content Section -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">DSLR Camera Rental Information</h1>
        <p class="text-gray-600 mb-4">To rent a DSLR camera, please use the following contact details:</p>
        <ul class="list-disc pl-5 mb-4">
            <li><strong>Contact Number:</strong> 7753800444</li>
            <li><strong>Address:</strong> Near Lucky Restaurant, Awadhpuri, Lakhanpur, Kaliyanpur, Kanpur</li>
        </ul>
        <p class="text-gray-600 mb-4">Additional Information:</p>
        <ul class="list-disc pl-5 mb-4">
            <li>Best Software IT Company in Kanpur</li>
            <li>DSLR Camera Rental Available in Kanpur</li>
            <li>Interesting Fact: Bhitargaon Temple – A scientific curiosity, providing accurate monsoon information</li>
            <li>Top 10 Engineering Colleges in Kanpur</li>
            <li>Top 10 Richest Persons in Kanpur</li>
        </ul>
        <div class="flex space-x-4">
            <a href="#" class="text-red-500 hover:underline">Facebook</a>
            <a href="#" class="text-red-500 hover:underline">Twitter</a>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Us</h2>
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
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Submit</button>
        </form>
    </div>

                    
                  
                </div>
            </article>

            <!-- Related Posts Section -->
            <section class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4 text-gray-800">You may also like</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Related post items -->
                    <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
                        <img src="assets\img\कानपुर का ‘जादुई’ मंदिर वैज्ञानिकों के लिए कौतूहल.png" alt="Bhitargaon Temple" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold mb-2">Bhitargaon Temple – A Scientific Curiosity</h4>
                            <p class="text-gray-600 text-sm mb-2">15/06/2021 by Ravi Pandey</p>
                            <a href="#" class="text-red-600 hover:underline">Learn more</a>
                        </div>
                    </div>
                    <!-- Add more related posts here -->
                    <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
                        <img src="assets\img\Best Software IT Company in Kanpur.png" alt="Best Software IT Company in Kanpur" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Best Software IT Company in Kanpur</h3>
                            <p class="text-gray-600 text-sm mb-2">11/06/2021 by Faizan</p>
                            <a href="#" class="text-red-600 hover:underline mt-2 inline-block">Learn more</a>
                        </div>
                    </div>
                
                    <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
                        <img src="assets\img\Top 10 Engineering Colleges in Kanpur.png" alt="Top 10 Engineering Colleges in Kanpur" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Top 10 Engineering Colleges in Kanpur</h3>
                            <p class="text-gray-600 text-sm mb-2">08/06/2021 by Ravi Pandey</p>
                            <a href="#" class="text-red-600 hover:underline mt-2 inline-block">Learn more</a>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
                        <img src="assets\img\DSLR Camera Available for Rent in Kanpur.png" alt="DSLR Camera Available for Rent in Kanpur" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">DSLR Camera Available for Rent in Kanpur</h3>
                            <p class="text-gray-600 text-sm mb-2">20/04/2022 by Ravi Pandey</p>
                            <a href="#" class="text-red-600 hover:underline mt-2 inline-block">Learn more</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- Sidebar -->
        <aside class="w-full md:w-1/4 md:ml-8 space-y-8 mt-8 md:mt-0">
            <!-- Weather Report Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Weather Report</h3>
                <div class="flex items-center mb-4">
                    <img src="assets\img\weather.webp" alt="Weather Icon" class="w-16 h-16 mr-4">
                    <div>
                        <p class="text-gray-800 font-semibold text-2xl">28°C</p>
                        <p class="text-gray-600">Sunny</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-2">Today's weather in Kanpur is sunny with a temperature of 28°C. Expect clear skies throughout the day.</p>
                <a href="https://forecast7.com/en/26d4580d33/kanpur/" class="text-blue-600 hover:underline">View Forecast</a>
            </div>
        </aside>
    </main>

    <!-- Footer -->
    {{-- <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About Section -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">About Us</h3>
                    </div>
                    <p class="text-gray-300">Kanpur Unique and Famous Places is your go-to blog for discovering the hidden gems, historical landmarks, and cultural hotspots of Kanpur.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">Quick Links</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-red-400 transition duration-300">Home</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-red-400 transition duration-300">About</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-red-400 transition duration-300">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-red-400 transition duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">Contact Us</h3>
                    </div>
                    <ul class="space-y-2">
                        <li class="flex items-center"><i class="ri-map-pin-line mr-2"></i> Kanpur, Uttar Pradesh, India</li>
                        <li class="flex items-center"><i class="ri-phone-line mr-2"></i> +91 12345 67890</li>
                        <li class="flex items-center"><i class="ri-mail-line mr-2"></i> info@kanpurblog.com</li>
                    </ul>
                </div>

                <!-- Social Media Links -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">Follow Us</h3>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-red-400 transition duration-300"><i class="ri-facebook-fill text-2xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-red-400 transition duration-300"><i class="ri-twitter-fill text-2xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-red-400 transition duration-300"><i class="ri-instagram-fill text-2xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-red-400 transition duration-300"><i class="ri-linkedin-fill text-2xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center text-gray-400 text-sm">
                &copy; 2024 Kanpur Unique and Famous Places. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script> --}}
@endsection