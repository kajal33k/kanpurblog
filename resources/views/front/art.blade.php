@extends('component.main')
@section('content')
    <header class="bg-red-600 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center">Downtown Transformation</h1>
            <p class="mt-2 text-xl text-center">Local Artist's Mural Breathes New Life into the City</p>
        </div>
    </header>
    
    <main class="container mx-auto px-4 py-8">
        <div class="md:flex">
            <!-- Main Content -->
            <div class="w-full md:w-2/3 pr-0 md:pr-6 mb-8 md:mb-0">
                <section id="mural" class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-red-600 pb-2">The Mural</h2>
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="md:w-1/2 mb-6 md:mb-0">
                            <img src="assets/img/The Mural.png" alt="Downtown Mural" class="w-full h-auto rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="md:w-1/2 md:pl-6">
                            <p class="text-lg text-gray-700 mb-4">
                                A vibrant new mural has transformed the heart of our downtown, turning a once-dull wall into a stunning piece of public art. Spanning 100 feet wide and 30 feet tall, this masterpiece captures the essence of our city's history, culture, and future aspirations.
                            </p>
                            <p class="text-lg text-gray-700">
                                The mural features a blend of abstract and realistic elements, incorporating iconic local landmarks, cultural symbols, and a palette of colors that reflect the city's energy and diversity.
                            </p>
                        </div>
                    </div>
                </section>
    
                <section id="artist" class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-red-600 pb-2">The Artist</h2>
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="md:w-1/3 mb-6 md:mb-0">
                            <img src="assets/img/jane.png" alt="Artist Portrait" class="w-full h-auto rounded-full shadow-lg transform transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="md:w-2/3 md:pl-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Jane Doe</h3>
                            <p class="text-lg text-gray-700 mb-4">
                                Jane Doe is a renowned local artist known for her large-scale murals and community-engaged art projects. With over 15 years of experience, Jane has left her mark on cities across the country, but this project holds a special place in her heart as it's in her hometown.
                            </p>
                            <p class="text-lg text-gray-700">
                                "This mural is my love letter to the city that raised me," says Jane. "I wanted to create something that would inspire pride and unity in our community."
                            </p>
                        </div>
                    </div>
                </section>
    
                <section id="gallery" class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-red-600 pb-2">Gallery</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <img src="assets/img/g1.png" alt="Detail of mural featuring vibrant colors and geometric shapes" class="w-full h-100 object-cover rounded-lg shadow-md">
                        <img src="assets/img/g2.png" alt="Close-up of mural with intricate patterns and textures" class="w-full h-100 object-cover rounded-lg shadow-md">
                        <img src="assets/img/g3.png" alt="Mural detail highlighting abstract design elements" class="w-full h-100 object-cover rounded-lg shadow-md">
                        <img src="assets/img/g4.png" alt="Detailed view of mural showcasing artistic brushstrokes" class="w-full h-100 object-cover rounded-lg shadow-md">
                    </div>
                </section>
            </div>
    
            <!-- Aside Section -->
            <aside class="bg-gray-100 p-6 rounded-lg shadow-md md:w-1/3 md:sticky md:top-0">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Impact on Downtown</h2>
                <div class="space-y-6">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-2">Cultural Revival</h3>
                        <img src="assets/img/c1.png" alt="Cultural Revival" class="w-full h-auto rounded-lg mb-2">
                        <p class="text-gray-700">The mural has sparked a renewed interest in local art and culture, attracting both residents and tourists to the downtown area.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-2">Economic Boost</h3>
                        <img src="assets\img\c2.png" alt="Economic Boost" class="w-full h-auto rounded-lg mb-2">
                        <p class="text-gray-700">Nearby businesses report increased foot traffic and sales since the mural's completion, contributing to downtown's economic growth.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-2">Community Pride</h3>
                        <img src="assets\img\c3.png" alt="Community Pride" class="w-full h-auto rounded-lg mb-2">
                        <p class="text-gray-700">The mural has become a source of pride for locals, fostering a stronger sense of community and shared identity.</p>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    
        
        
        <div class="text-center">
            <a href="#" class="bg-red-600 text-white px-6 py-3 rounded-md hover:bg-red-700 transition duration-300 inline-block">
                Schedule a Guided Tour
            </a>
        </div>
    </main>
@endsection