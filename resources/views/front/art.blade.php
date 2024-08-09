<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downtown Transformation: Local Artist's Mural</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-red-600 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Downtown Transformation</h1>
            <p class="mt-2 text-xl">Local Artist's Mural Breathes New Life into the City</p>
        </div>
    </header>
    
    <nav class="bg-red-700 text-white py-3">
        <div class="container mx-auto px-4">
            <ul class="flex justify-center space-x-6">
                <li><a href="#mural" class="hover:text-red-200 transition duration-300">The Mural</a></li>
                <li><a href="#artist" class="hover:text-red-200 transition duration-300">The Artist</a></li>
                <li><a href="#impact" class="hover:text-red-200 transition duration-300">Impact</a></li>
                <li><a href="#gallery" class="hover:text-red-200 transition duration-300">Gallery</a></li>
            </ul>
        </div>
    </nav>
    
    <main class="container mx-auto px-4 py-8">
        <section id="mural" class="mb-12">
            <h2 class="text-2xl font-bold mb-4">The Mural</h2>
            <div class="md:flex items-center">
                <div class="md:w-1/2 pr-4">
                    <p class="mb-4">
                        A vibrant new mural has transformed the heart of our downtown, turning a once-dull wall into a stunning piece of public art. Spanning 100 feet wide and 30 feet tall, this masterpiece captures the essence of our city's history, culture, and future aspirations.
                    </p>
                    <p>
                        The mural features a blend of abstract and realistic elements, incorporating iconic local landmarks, cultural symbols, and a palette of colors that reflect the city's energy and diversity.
                    </p>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-0">
                    <img src="assets\img\The Mural.png" alt="Downtown Mural" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </section>
        
        <section id="artist" class="mb-12">
            <h2 class="text-2xl font-bold mb-4">The Artist</h2>
            <div class="md:flex items-center">
                <div class="md:w-1/3 pr-4">
                    <img src="assets\img\jane.png" alt="Artist Portrait" class="w-full rounded-full shadow-lg">
                </div>
                <div class="md:w-2/3 mt-4 md:mt-0">
                    <h3 class="text-xl font-semibold mb-2">Jane Doe</h3>
                    <p class="mb-4">
                        Jane Doe is a renowned local artist known for her large-scale murals and community-engaged art projects. With over 15 years of experience, Jane has left her mark on cities across the country, but this project holds a special place in her heart as it's in her hometown.
                    </p>
                    <p>
                        "This mural is my love letter to the city that raised me," says Jane. "I wanted to create something that would inspire pride and unity in our community."
                    </p>
                </div>
            </div>
        </section>
        
        <section id="impact" class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Impact on Downtown</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Cultural Revival</h3>
                    <img src="assets\img\c1.png" alt="">
                    <p>The mural has sparked a renewed interest in local art and culture, attracting both residents and tourists to the downtown area.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Economic Boost</h3>
                    <img src="assets\img\c2.png" alt="">
                    <p>Nearby businesses report increased foot traffic and sales since the mural's completion, contributing to downtown's economic growth.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Community Pride</h3>
                    <img src="assets\img\c3.png" alt="">
                    <p>The mural has become a source of pride for locals, fostering a stronger sense of community and shared identity.</p>
                </div>
            </div>
        </section>
        
        <section id="gallery" class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="assets/img/g1.png" alt="Detail of mural featuring vibrant colors and geometric shapes" class="w-full h-100 object-cover rounded-lg shadow-md">
                <img src="assets/img/g2.png" alt="Close-up of mural with intricate patterns and textures" class="w-full h-100 object-cover rounded-lg shadow-md">
                <img src="assets/img/g3.png" alt="Mural detail highlighting abstract design elements" class="w-full h-100 object-cover rounded-lg shadow-md">
                <img src="assets/img/g4.png" alt="Detailed view of mural showcasing artistic brushstrokes" class="w-full h-100 object-cover rounded-lg shadow-md">
            </div>
        </section>
        
        
        <div class="text-center">
            <a href="#" class="bg-red-600 text-white px-6 py-3 rounded-md hover:bg-red-700 transition duration-300 inline-block">
                Schedule a Guided Tour
            </a>
        </div>
    </main>
    
    <footer class="bg-red-600 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Downtown Art Initiative. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>