@extends('component.main')
@section('content')

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
@endsection