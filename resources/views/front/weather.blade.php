@extends('component.main')
@section('content')

    <!-- Main Content -->
    <main class="container mx-auto p-4" data-aos="fade-up">
        <!-- Weather Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8" data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-4" data-aos="fade-up">Kanpur Weather</h2>
            <img src="assets\img\weather.png" alt="" class="object-cover ">
            <p class="text-gray-600 mb-4" data-aos="fade-up">The average minimum and maximum temperature of Kanpur is as given below. The best time to visit Kanpur is also specified.</p>

            <div class="overflow-x-auto border border-red-700" data-aos="fade-up">
                <table class="min-w-full divide-y divide-red-600">
                    <thead class="bg-gray-100" data-aos="fade-up">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Month</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Best Time</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Min. Temp (°C)</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Max. Temp (°C)</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-red-700" data-aos="fade-up">
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
            

            
        <section class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4" data-aos="fade-up">Average Kanpur Weather</h2>
            <p class="text-gray-600 mb-4" data-aos="fade-up">
                The climate in Kanpur is warm and temperate. When compared with winter, the summers have much more rainfall. According to Köppen and Geiger, this climate is classified as Cwa. The average annual temperature is 25.3°C | 77.5°F in Kanpur.
            </p>
            <p class="text-gray-600" data-aos="fade-up">
                Get the forecast for today, tonight & tomorrow’s weather for Kanpur, Uttar Pradesh​, India. Hi/Low, & everything you need to be ready for …
            </p>
        </section>

        <section class="mt-8" data-aos="fade-up">
            <div>
                <div class="flex items-center mb-4" data-aos="fade-up">
                    <div class="w-1 h-8 bg-red-600 mr-4" data-aos="fade-up"></div>
                    <h3 class="text-xl font-bold" data-aos="fade-up">Follow Us</h3>
                </div>
                <ul class="flex space-x-4" data-aos="fade-up">
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-facebook-line text-2xl"></i></a></li>
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-twitter-line text-2xl"></i></a></li>
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-instagram-line text-2xl"></i></a></li>
                    <li><a href="#" class="text-gray-800 hover:text-red-600"><i class="ri-youtube-line text-2xl"></i></a></li>
                </ul>
            </div>
        </div>
        </section>

        <!-- Related Posts Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8" data-aos="fade-up">
            <h3 class="text-xl font-bold mb-4" data-aos="fade-up">You may also like</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" data-aos="fade-up">
                <!-- Example of a related post -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets/img/कानपुर का ‘जादुई’ मंदिर वैज्ञानिकों के लिए कौतूहल.jpeg" alt="Bhitargaon Temple" class="w-full h-32 object-cover mb-4">
                    <h4 class="text-lg font-semibold mb-2" data-aos="fade-up">Bhitargaon Temple – A Scientific Curiosity Providing Accurate Monsoon Information</h4>
                    <p class="text-gray-600 mb-2" data-aos="fade-up">15/06/2021 by Ravi Pandey</p>
                    <a href="#" class="text-blue-600 hover:underline" data-aos="fade-up">Read more</a>
                </div>
                <!-- Add more related posts here -->
            </div>
        </section>

        <!-- Contact Form -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8" data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-4" data-aos="fade-up">Contact Us</h2>
            <form action="#" method="post" class="space-y-4">
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700" data-aos="fade-up">Name</label>
                    <input type="text" id="name" name="name" class="p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="flex flex-col">
                    <label for="email" class="text-gray-700" data-aos="fade-up">Email</label>
                    <input type="email" id="email" name="email" class="p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="flex flex-col">
                    <label for="website" class="text-gray-700" data-aos="fade-up">Website</label>
                    <input type="text" id="website" name="website" class="p-2 border border-gray-300 rounded-md">
                </div>
                <div class="flex flex-col">
                    <label for="comment" class="text-gray-700" data-aos="fade-up">Comment</label>
                    <textarea id="comment" name="comment" rows="4" class="p-2 border border-gray-300 rounded-md" required></textarea>
                </div>
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
            </form>
        </section>
    </main>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
@endsection