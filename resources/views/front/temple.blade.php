@extends('component.main')
@section('content')

    <!-- Header -->
    <header class="bg-red-900 text-white p-4 text-center">
        <h1 class="text-3xl font-bold">Spiritual Hindu Festivals and Temples</h1>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto p-6 flex flex-wrap gap-4">
        <!-- Articles Section -->
        <div class="w-full md:w-2/3">
         
            
                <!-- Temple Sections -->
            <div class="space-y-12 ">
                    <!-- JK Temple Section -->
                    <section class="grid md:grid-cols-2 gap-8 bg-white shadow-lg rounded-lg p-6 md:p-8 lg:p-10">
                        <img src="assets/img/jk.png" alt="JK Temple" class="w-full h-auto rounded-lg shadow-md transition-transform transform hover:scale-105 duration-300">
                        <div class="flex flex-col justify-center">
                            <h2 class="text-3xl font-semibold text-gray-800 mb-4">About JK Temple</h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">JK Temple, also known as Radhakrishna Temple, is a prominent landmark and religious site in Kanpur. It is known for its architectural beauty and serene ambiance...</p>
                            <h3 class="text-2xl font-semibold text-gray-700 mb-2">Location</h3>
                            <p class="text-gray-600 mb-6">Address: Kamla Tower, Kanpur, Uttar Pradesh 208001</p>
                            <h3 class="text-2xl font-semibold text-gray-700 mb-2">Timings</h3>
                            <p class="text-gray-600">Open daily: 5:00 AM to 12:00 PM and 4:00 PM to 9:00 PM</p>
                        </div>
                    </section>
                    
                    
                    <!-- Jageshwar Temple Section -->
                    <section class="grid md:grid-cols-2 gap-8 bg-white p-6 md:p-8 lg:p-10 shadow-lg rounded-lg">
                        <img src="assets/img/jagneshar.png" alt="Jageshwar Temple" class="w-full h-auto rounded-lg shadow-md transition-transform transform hover:scale-105 duration-300">
                        <div class="flex flex-col justify-center">
                            <h2 class="text-3xl font-semibold text-gray-800 mb-4">About Jageshwar Temple</h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">Jageshwar Temple is an ancient temple complex located in Kanpur, known for its historical significance and architectural beauty...</p>
                            <h3 class="text-2xl font-semibold text-gray-700 mb-2">Location</h3>
                            <p class="text-gray-600 mb-6">Address: Jageshwar Nagar, Kanpur, Uttar Pradesh 208001</p>
                            <h3 class="text-2xl font-semibold text-gray-700 mb-2">Timings</h3>
                            <p class="text-gray-600">Open daily: 5:00 AM to 12:00 PM and 4:00 PM to 9:00 PM</p>
                        </div>
                    </section>
                    
            
                    <!-- Anandeshwar Temple Section -->
<section class="grid md:grid-cols-2 gap-8 bg-white p-6 md:p-8 lg:p-10 shadow-lg rounded-lg mb-10">
    <img src="assets/img/Anandeshwar Temple.avif" alt="Anandeshwar Temple" class="w-full rounded-lg shadow-md transition-transform transform hover:scale-105 duration-300">
    <div class="flex flex-col justify-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">About Anandeshwar Temple</h2>
        <p class="text-gray-600 mb-6 leading-relaxed">The Anandeshwar Temple is a historic shrine located in Kanpur...</p>
        <h3 class="text-2xl font-semibold text-gray-700 mb-2">Location</h3>
        <p class="text-gray-600 mb-6">Address: Ganga Ghat, Kanpur, Uttar Pradesh 208001</p>
        <h3 class="text-2xl font-semibold text-gray-700 mb-2">Timings</h3>
        <p class="text-gray-600">Open daily: 5:00 AM to 12:00 PM and 4:00 PM to 9:00 PM</p>
    </div>
</section>

<!-- Dwarikadhish Temple Section -->
<section class="grid md:grid-cols-2 gap-8 bg-white p-6 md:p-8 lg:p-10 shadow-lg rounded-lg mb-10">
    <img src="assets/img/Dwarikadhish Temple.png" alt="Dwarikadhish Temple" class="w-full rounded-lg shadow-md transition-transform transform hover:scale-105 duration-300">
    <div class="flex flex-col justify-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">About Dwarikadhish Temple</h2>
        <p class="text-gray-600 mb-6 leading-relaxed">The Dwarikadhish Temple in Kanpur is a magnificent shrine dedicated to Lord Krishna...</p>
        <h3 class="text-2xl font-semibold text-gray-700 mb-2">Location</h3>
        <p class="text-gray-600 mb-6">Address: Civil Lines, Kanpur, Uttar Pradesh 208001</p>
        <h3 class="text-2xl font-semibold text-gray-700 mb-2">Timings</h3>
        <p class="text-gray-600">Open daily: 5:30 AM to 12:00 PM and 4:00 PM to 9:00 PM</p>
    </div>
</section>
            
                    <!-- Shri Radhakrishna Temple Section -->
                    <section class="grid md:grid-cols-2 gap-8 bg-gray-50 p-6 rounded-lg shadow-lg">
                        <img src="assets/img/Shri Radhakrishna Temple1.png" alt="Shri Radhakrishna Temple" class="w-full rounded-lg shadow-md">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">About Shri Radhakrishna Temple</h2>
                            <p class="text-gray-700 mb-6">
                                Shri Radhakrishna Temple, popularly known as JK Temple, is one of the most renowned temples in Kanpur. Built by the JK Trust in 1960, this temple showcases a beautiful blend of modern architecture with traditional Hindu design. The temple is dedicated to Lord Radhakrishna and features stunning marble carvings and tranquil surroundings.
                            </p>
                            {{-- <h3 class="text-2xl font-semibold text-gray-800 mb-2">Architecture</h3>
                            <p class="text-gray-700 mb-6">
                                The temple is an architectural marvel with intricate carvings and a blend of north and south Indian temple styles. The central shrine is surrounded by five main shrines, making it a unique structure in its design and layout.
                            </p> --}}
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Location</h3>
                            <p class="text-gray-700 mb-6">
                                Address: Kamla Tower, Kamla Nagar, Kanpur, Uttar Pradesh 208001
                            </p>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2">Timings</h3>
                            <p class="text-gray-700">
                                Open daily: 5:00 AM to 12:00 PM and 4:00 PM to 9:00 PM
                            </p>
                        </div>
                    </section>
                    
                </div>
            </div>
            
<div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
<div class="p-6">
<h2 class="text-2xl font-bold mb-4">Festivals and Rituals</h2>
<ul class="list-disc list-inside">
<li class="mb-2">Gudhi Padwa</li>
<li class="mb-2">Vat Pournima</li>
<li class="mb-2">Ashadhi Ekadashi</li>
<li class="mb-2">Mangala Gauri</li>
<li class="mb-2">Naag Panchami</li>
<li class="mb-2">Narali Pournima</li>
<li class="mb-2">Janmashtami (Dahi Handi)</li>
<li class="mb-2">Pola</li>
<li class="mb-2">Ganesh Chaturthi</li>
<li class="mb-2">Kozagiri Purnima</li>
<li class="mb-2">Bhau beej</li>
<li class="mb-2">Bangana Festival</li>
<li class="mb-2">Ellora Festival</li>
</ul>
<a href="#" class="text-red-700 font-bold">Continue Reading</a>
</div>
</div>
            
</div>

        <!-- Sidebar Section -->
<aside class="w-full md:w-1/3 md:pl-6">
<div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
<div class="p-6">
<h3 class="text-xl font-bold mb-4">Recent Posts</h3>
<ul class="list-none">
<li class="mb-2">
<a href="#" class="text-red-700">The Pancha Maha Yagya</a>
</li>
<li class="mb-2">
<a href="#" class="text-red-700">16 Divine Darshans of Unique Shivlingas</a>
</li>
<li class="mb-2">
<a href="#" class="text-red-700">Top 10 Tallest Statues of Hindu Gods in the World</a>
</li>
                        <!-- Add more recent posts -->
</ul>
</div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
<div class="p-6">
<h3 class="text-xl font-bold mb-4">Categories</h3>
<ul class="list-none">
<li class="mb-2">
<a href="#" class="text-red-700">Devi Temple</a>
</li>
<li class="mb-2">
<a href="#" class="text-red-700">Everyday Spiritual Activities</a>
</li>
                        <li class="mb-2">
                            <a href="#" class="text-red-700">Gujarat</a>
                        </li>
                        <!-- Add more categories -->
                    </ul>
                </div>
            </div>
        </aside>
    </div>


@endsection