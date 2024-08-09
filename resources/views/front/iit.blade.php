<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanpur Innovation Hub - New Tech Park</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 bg-gray-100">
    <header class="bg-red-700 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Kanpur Innovation Hub</h1>
            <p class="mt-2">Empowering Technological Advancements in Uttar Pradesh</p>
        </div>
    </header>
    
    <nav class="bg-red-800 text-white py-3">
        <div class="container mx-auto px-4">
            <ul class="flex justify-center space-x-6">
                <li><a href="#about" class="hover:text-red-200">About</a></li>
                <li><a href="#features" class="hover:text-red-200">Features</a></li>
                <li><a href="#companies" class="hover:text-red-200">Companies</a></li>
                <li><a href="#contact" class="hover:text-red-200">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <main class="container mx-auto px-4 py-8">
        <section id="about" class="mb-12">
            <h2 class="text-2xl font-bold mb-4">About Kanpur Innovation Hub</h2>
            <img src="assets\img\2.png" alt="">
            <p class="mb-4">
                Kanpur Innovation Hub is a state-of-the-art tech park that has recently opened its doors in the heart of Kanpur, Uttar Pradesh. This cutting-edge facility aims to foster innovation, support startups, and attract established tech companies to the region.
            </p>
            <p>
                Spanning over 50 acres, the tech park provides a collaborative environment for entrepreneurs, researchers, and industry leaders to come together and drive technological advancements.
            </p>
        </section>
        
        <section id="features" class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Key Features</h2>
            <img src="assets\img\3 (1).png" alt="">
            <ul class="list-disc pl-6">
                <li>Modern office spaces and co-working areas</li>
                <li>High-speed internet and advanced telecommunications infrastructure</li>
                <li>Research and development laboratories</li>
                <li>Incubation center for startups</li>
                <li>Conference and event facilities</li>
                <li>Green spaces and recreational areas</li>
            </ul>
        </section>
        
        <section id="companies" class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Companies at Kanpur Innovation Hub</h2>
            <img src="assets\img\4.png" alt="">
            <p class="mb-4">
                The tech park has already attracted a diverse range of companies, from promising startups to established tech giants. Some of the companies that have set up their offices in the Kanpur Innovation Hub include:
            </p>
            <ul class="list-disc pl-6">
                <li>TechInnovate Solutions</li>
                <li>Kanpur AI Labs</li>
                <li>GreenTech Enterprises</li>
                <li>Quantum Computing Research Center</li>
                <li>BioTech Innovations</li>
            </ul>
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
        
        <div class="text-center">
            <a href="#" class="bg-red-600 text-white px-6 py-3 rounded-md hover:bg-red-700 transition duration-300">
                Apply for Space
            </a>
        </div>
    </main>
    
    <footer class="bg-red-700 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Kanpur Innovation Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>