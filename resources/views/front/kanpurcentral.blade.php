
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Header -->
    <header class="bg-custom text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Kanpur Up78</h1>
            <p class="text-xl mt-2">|| Dil Me Kanpur || Dil Se Kanpur ||</p>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-red-800 text-white py-2">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-lg hover:underline">Home</a>
            <a href="#weather" class="text-lg hover:underline">Kanpur Weather</a>
            <a href="#famous-places" class="text-lg hover:underline">Famous Places</a>
            <a href="#contact" class="text-lg hover:underline">Contact Us</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <!-- Kanpur Central Facts -->
        <section id="famous-places" class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Interesting and Unknown Facts About Kanpur Central</h2>
            <img src="assets\img\central.webp" alt="">
            <p class="text-gray-700">On 11/01/2021, Ravi Pandey shared intriguing and lesser-known facts about Kanpur Central, one of the city's most prominent landmarks.</p>

            <div class="mt-4">
                <h3 class="text-xl font-semibold">KANPUR CENTRAL</h3>
                <p class="text-gray-700 mt-2">The whole world knows Kanpur as the "Manchester of the East" due to its textile mills established by British corporate houses like Elgin and Lal Imli. Kanpur was a crucial center for the industrial revolution in the country. However, most of these mills have shut down due to lack of funds and maintenance. Kanpur also served as a significant military base for the British. But there are still many interesting facts about Kanpur Central that you might not know:</p>
                
                <ul class="list-disc pl-5 mt-2 text-gray-700">
                    <li>Kanpur is home to one of India’s 'Pulse Research Indian Institutes,' dedicated exclusively to pulse research and run by the central government.</li>
                    <li>Allen Forest Zoo in Kanpur is one of the few zoos in India built in a natural forest setting.</li>
                    <li>Kanpur houses the second oldest 9-hole golf course in India, after Kolkata.</li>
                    <li>Kanpur claims to be a city from the era of Ramayana, as evidenced by ancient artifacts found during excavations at Jajmau Tila, which are dated back to the Ramayana period.</li>
                </ul>
            </div>
        </section>

        <!-- Other Sections -->
        <section id="weather" class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Kanpur Weather</h2>
            <p class="text-gray-700">Details about the current weather in Kanpur will be provided here.</p>
        </section>

                            <!-- Content Section -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
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
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-facebook-line"></i></a>
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-twitter-line"></i></a>
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-instagram-line"></i></a>
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-linkedin-line"></i></a>
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
                        <li class="text-gray-200 hover:text-red-600"><i class="ri-map-pin-line mr-2"></i> Kanpur, Uttar Pradesh, India</li>
                        <li class="text-gray-200 hover:text-red-600"><i class="ri-phone-line mr-2"></i> +91 12345 67890</li>
                        <li class="text-gray-200 hover:text-red-600"><i class="ri-mail-line mr-2"></i> info@kanpurblog.com</li>
                    </ul>
                </div>

                <!-- Social Media Links -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <h3 class="text-xl font-bold">Follow Us</h3>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-facebook-line"></i></a>
                        <a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-twitter-line"></i></a>
                        <a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-instagram-line"></i></a>
                        <a href="#" class="text-gray-200 hover:text-red-600"><i class="ri-linkedin-line"></i></a>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center text-gray-400 text-sm ">
                &copy; 2024 Kanpur Unique and Famous Places. All rights reserved.
            </div>
        </div>
    </footer>