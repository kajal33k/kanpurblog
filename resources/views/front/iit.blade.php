@extends('component.main')
@section('content')
<header class="bg-red-700 text-white py-6">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center">Kanpur Innovation Hub</h1>
        <p class="mt-2 text-center">Empowering Technological Advancements in Uttar Pradesh</p>
    </div>
</header>


<main class="container mx-auto px-4 py-8 flex flex-wrap">
    <!-- Main Content -->
    <div class="w-full md:w-2/3 pr-0 md:pr-6 mb-8 md:mb-0">
        <!-- About Section -->
        <section id="about" class="mb-12 p-4 bg-white shadow-lg rounded-lg overflow-hidden">
            <h2 class="text-3xl font-extrabold mb-6 text-gray-900">About Kanpur Innovation Hub</h2>
            <div class="flex gap-4">
                
                <div>
                    
                <img src="assets/img/2.png" alt="Kanpur Innovation Hub" class="w-full h-auto rounded-lg shadow-lg mb-6 border border-gray-200">
                
                </div>
                <div>
                    <p class="mb-4 text-lg text-gray-800 leading-relaxed">
                        Kanpur Innovation Hub is a state-of-the-art tech park that has recently opened its doors in the heart of Kanpur, Uttar Pradesh. This cutting-edge facility aims to foster innovation, support startups, and attract established tech companies to the region.
                    </p>
                    <p class="text-lg text-gray-800 leading-relaxed">
                        Spanning over 50 acres, the tech park provides a collaborative environment for entrepreneurs, researchers, and industry leaders to come together and drive technological advancements.
                    </p>
                </div>
            </div>
        </section>
    
        <!-- Features Section -->
        <section id="features" class="mb-12 p-4 bg-white shadow-lg rounded-lg overflow-hidden">
            <h2 class="text-3xl font-extrabold mb-6 text-gray-900">Key Features</h2>
            <div class="flex gap-4">
                <div>
                    <img src="assets/img/3 (1).png" alt="Features" class="w-full h-auto rounded-lg shadow-lg mb-6 border border-gray-200">
                </div>
                <div>
                    <ul class="list-disc pl-6 space-y-2 text-lg text-gray-800">
                        <li>Modern office spaces and co-working areas</li>
                        <li>High-speed internet and advanced telecommunications infrastructure</li>
                        <li>Research and development laboratories</li>
                        <li>Incubation center for startups</li>
                        <li>Conference and event facilities</li>
                        <li>Green spaces and recreational areas</li>
                    </ul>
                </div>
            </div>
        </section>
    
        <!-- Companies Section -->
        <section id="companies" class="mb-12 p-4 bg-white shadow-lg rounded-lg overflow-hidden">
            <h2 class="text-3xl font-extrabold mb-6 text-gray-900">Companies at Kanpur Innovation Hub</h2>
            <div class="flex gap-4">
                <div>
                    <img src="assets/img/4.png" alt="Companies" class="w-full h-auto rounded-lg shadow-lg mb-6 border border-gray-200">
                </div>
                <div>
                    <p class="mb-4 text-lg text-gray-800 leading-relaxed">
                        The tech park has already attracted a diverse range of companies, from promising startups to established tech giants. Some of the companies that have set up their offices in the Kanpur Innovation Hub include:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-lg text-gray-800">
                        <li>TechInnovate Solutions</li>
                        <li>Kanpur AI Labs</li>
                        <li>GreenTech Enterprises</li>
                        <li>Quantum Computing Research Center</li>
                        <li>BioTech Innovations</li>
                    </ul>
                </div>
            </div>
        </section>
    
        <!-- Contact Form Section -->
        <section class=" bg-white p-8 rounded-lg shadow-lg mb-8 border border-gray-200">
            <h2 class="text-3xl font-extrabold mb-6 text-gray-900">Contact Us</h2>
            <form action="{{Route('temple')}}" method="post" class="space-y-4">
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700 text-lg font-medium">Name</label>
                    <input type="text" id="name" name="name" class="p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500" required>
                </div>
                <div class="flex flex-col">
                    <label for="email" class="text-gray-700 text-lg font-medium">Email</label>
                    <input type="email" id="email" name="email" class="p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500" required>
                </div>
                <div class="flex flex-col">
                    <label for="website" class="text-gray-700 text-lg font-medium">Website</label>
                    <input type="text" id="website" name="website" class="p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>
                <div class="flex flex-col">
                    <label for="comment" class="text-gray-700 text-lg font-medium">Comment</label>
                    <textarea id="comment" name="comment" rows="4" class="p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500" required></textarea>
                </div>
                <button type="submit" class="bg-red-500 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-red-600 transition duration-300">Submit</button>
            </form>
        </section>
    
        <!-- Apply for Space Button -->
        <div class="text-center">
            <a href="{{Route('temple')}}" class="bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-red-700 transition duration-300">
                Apply for Space
            </a>
        </div>
    </div>
    
    

    <!-- Sidebar -->
    <aside class="w-full md:w-1/3 md:pl-6">
        <!-- Recent Posts Section -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Recent Posts</h3>
                <ul class="list-none">
                    <li class="mb-2">
                        <a href="{{Route('temple')}}" class="text-red-700 hover:underline">The Pancha Maha Yagya</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{Route('temple')}}" class="text-red-700 hover:underline">16 Divine Darshans of Unique Shivlingas</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{Route('temple')}}" class="text-red-700 hover:underline">Top 10 Tallest Statues of Hindu Gods in the World</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Categories Section -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Categories</h3>
                <ul class="list-none">
                    <li class="mb-2">
                        <a href="{{Route('temple')}}" class="text-red-700 hover:underline">Devi Temple</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{Route('temple')}}" class="text-red-700 hover:underline">Everyday Spiritual Activities</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{Route('temple')}}" class="text-red-700 hover:underline">Gujarat</a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</main>

    
@endsection