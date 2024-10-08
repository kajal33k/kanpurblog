@extends('component.main')
@section('content')

    <!-- Main Layout: Aside + Main Content -->
    <div class="container mx-auto p-6 flex flex-col md:flex-row gap-8">

        <!-- Main Content -->
        <main class="md:w-3/4 space-y-8">
        
            <!-- Kanpur Central Facts -->
            <section id="famous-places" class="bg-white rounded-lg shadow-lg p-6 mb-6" data-aos="fade-up">
                <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4" data-aos="fade-up">Interesting and Unknown Facts About Kanpur Central</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                    <div class="mt-8" data-aos="fade-up">
                        <img src="assets/img/central.webp" alt="" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-gray-700" data-aos="fade-up">On 11/01/2021, Ravi Pandey shared intriguing and lesser-known facts about Kanpur Central, one of the city's most prominent landmarks.</p>

                        <div class="mt-4">
                            <h3 class="text-xl font-semibold" data-aos="fade-up">KANPUR CENTRAL</h3>
                            <p class="text-gray-700 mt-2" data-aos="fade-up">The whole world knows Kanpur as the "Manchester of the East" due to its textile mills established by British corporate houses like Elgin and Lal Imli. Kanpur was a crucial center for the industrial revolution in the country. However, most of these mills have shut down due to lack of funds and maintenance. Kanpur also served as a significant military base for the British. But there are still many interesting facts about Kanpur Central that you might not know:</p>
                            
                            <ul class="list-disc pl-5 mt-2 text-gray-700" data-aos="fade-up">
                                <li>Kanpur is home to one of India’s 'Pulse Research Indian Institutes,' dedicated exclusively to pulse research and run by the central government.</li>
                                <li>Allen Forest Zoo in Kanpur is one of the few zoos in India built in a natural forest setting.</li>
                                <li>Kanpur houses the second oldest 9-hole golf course in India, after Kolkata.</li>
                                <li>Kanpur claims to be a city from the era of Ramayana, as evidenced by ancient artifacts found during excavations at Jajmau Tila, which are dated back to the Ramayana period.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Content Section -->
            <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6" data-aos="fade-up">
                <ul class="list-disc pl-5 mb-4" data-aos="fade-up">
                    <li><strong>Contact Number:</strong> 7753800444</li>
                    <li><strong>Address:</strong> Near Lucky Restaurant, Awadhpuri, Lakhanpur, Kaliyanpur, Kanpur</li>
                </ul>
                <p class="text-gray-600 mb-4" data-aos="fade-up">Additional Information:</p>
                <ul class="list-disc pl-5 mb-4" data-aos="fade-up">
                    <li>Best Software IT Company in Kanpur</li>
                    <li>DSLR Camera Rental Available in Kanpur</li>
                    <li>Interesting Fact: Bhitargaon Temple – A scientific curiosity, providing accurate monsoon information</li>
                    <li>Top 10 Engineering Colleges in Kanpur</li>
                    <li>Top 10 Richest Persons in Kanpur</li>
                </ul>
                <div class="flex space-x-4" data-aos="fade-up">
                    <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-facebook-line"></i></a>
                    <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-twitter-line"></i></a>
                    <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-instagram-line"></i></a>
                    <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-linkedin-line"></i></a>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-800 mb-4" data-aos="fade-up">Contact Us</h2>
                <form action="#" method="post" class="space-y-4" data-aos="fade-up">
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
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Submit</button>
                </form>
            </div>

        </main>

        <!-- Aside Section -->
        <aside class="md:w-1/4 bg-white shadow-lg rounded-lg p-6 space-y-6">
            <!-- Search Box -->
            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2" data-aos="fade-up">Search</h3>
                <input type="text" placeholder="Search..." class="w-full p-2 border border-gray-300 rounded-md">
            </div>

            <!-- Popular Places -->
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="fade-up">Popular Places</h3>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li><a href="#famous-places" class="text-red-600 hover:underline" data-aos="fade-up">Kanpur Central Facts</a></li>
                    <li><a href="#weather" class="text-red-600 hover:underline" data-aos="fade-up">Kanpur Weather</a></li>
                    <li><a href="#contact" class="text-red-600 hover:underline" data-aos="fade-up">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="fade-up">Contact Information</h3>
                <ul class="list-disc pl-5 space-y-2 text-gray-700" data-aos="fade-up">
                    <li><strong>Contact Number:</strong> 7753800444</li>
                    <li><strong>Address:</strong> Near Lucky Restaurant, Awadhpuri, Lakhanpur, Kaliyanpur, Kanpur</li>
                </ul>
            </div>
        </aside>

    </div>
@endsection
