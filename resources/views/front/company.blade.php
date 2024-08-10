@extends('component.main')
@section('content')
<header class="bg-red-600 text-white py-6">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-4">IT Companies in Kanpur</h1>
        <img src="assets/img/Best Software IT Company in Kanpur.png" alt="Best Software IT Company in Kanpur" class="w-full h-64 object-cover rounded-lg shadow-lg">
        <p class="mt-4 text-xl text-center">Exploring the Tech Landscape of Kanpur</p>
    </div>
</header>

<main class="container mx-auto px-4 py-8 flex">
    <!-- Main Content -->
    <div class="flex-1 mr-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tech Mahindra -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/tech mahindra.png" alt="Tech Mahindra" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Tech Mahindra</h2>
                    <p class="text-base mb-4">A leading provider of digital transformation, consulting, and business re-engineering services and solutions.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Riverside, Kanpur</li>
                        <li><strong>Employees:</strong> 1000+</li>
                        <li><strong>Specialties:</strong> IT Services, Consulting, Digital Solutions</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Ossisto -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Ossisto.png" alt="Ossisto" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Ossisto</h2>
                    <p class="text-base mb-4">A global IT services company specializing in software development, web design, and digital marketing.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Swaroop Nagar, Kanpur</li>
                        <li><strong>Employees:</strong> 500+</li>
                        <li><strong>Specialties:</strong> Software Development, Web Design, Digital Marketing</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Kashi Tech Solutions -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Kashi Tech Solutions.png" alt="Kashi Tech Solutions" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Kashi Tech Solutions</h2>
                    <p class="text-base mb-4">An innovative IT company focused on providing cutting-edge solutions in AI, machine learning, and data analytics.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Kakadeo, Kanpur</li>
                        <li><strong>Employees:</strong> 200+</li>
                        <li><strong>Specialties:</strong> AI, Machine Learning, Data Analytics</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Cynergii Technosys -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Cynergii Technosys.png" alt="Cynergii Technosys" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Cynergii Technosys</h2>
                    <p class="text-base mb-4">A fast-growing IT services company offering custom software development and cloud solutions.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Harsh Nagar, Kanpur</li>
                        <li><strong>Employees:</strong> 100+</li>
                        <li><strong>Specialties:</strong> Custom Software, Cloud Solutions, Mobile App Development</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Webkul Software -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Webkul Software.png" alt="Webkul Software" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Webkul Software</h2>
                    <p class="text-base mb-4">A leading e-commerce solution provider, specializing in developing plugins and extensions for popular platforms.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Mall Road, Kanpur</li>
                        <li><strong>Employees:</strong> 300+</li>
                        <li><strong>Specialties:</strong> E-commerce Solutions, Plugin Development, Web Applications</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Sparx IT Solutions -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Sparx IT Solutions.png" alt="Sparx IT Solutions" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Sparx IT Solutions</h2>
                    <p class="text-base mb-4">A versatile IT company offering web and mobile app development, digital marketing, and UI/UX design services.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Civil Lines, Kanpur</li>
                        <li><strong>Employees:</strong> 150+</li>
                        <li><strong>Specialties:</strong> Web Development, Mobile Apps, UI/UX Design</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Softprodigy -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Softprodigy.png" alt="Softprodigy" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Softprodigy</h2>
                    <p class="text-base mb-4">A dynamic IT services company specializing in custom software development, mobile apps, and cloud solutions.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Sarvodaya Nagar, Kanpur</li>
                        <li><strong>Employees:</strong> 100+</li>
                        <li><strong>Specialties:</strong> Custom Software, Mobile Apps, Cloud Solutions</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Techno Infonet -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Techno Infonet.png" alt="Techno Infonet" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Techno Infonet</h2>
                    <p class="text-base mb-4">An innovative IT company focusing on web development, digital marketing, and e-commerce solutions.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Kidwai Nagar, Kanpur</li>
                        <li><strong>Employees:</strong> 50+</li>
                        <li><strong>Specialties:</strong> Web Development, Digital Marketing, E-commerce</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Xpertiks Technologies -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Xpertiks Technologies.png" alt="Xpertiks Technologies" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Xpertiks Technologies</h2>
                    <p class="text-base mb-4">A cutting-edge IT firm specializing in AI, IoT, and blockchain solutions for various industries.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Ashok Nagar, Kanpur</li>
                        <li><strong>Employees:</strong> 75+</li>
                        <li><strong>Specialties:</strong> AI, IoT, Blockchain</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>

            <!-- Krazy Mantra -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Krazy Mantra.png" alt="Krazy Mantra" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Krazy Mantra</h2>
                    <p class="text-base mb-4">A creative IT solutions provider offering web design, app development, and digital branding services.</p>
                    <ul class="text-sm mb-4 space-y-2">
                        <li><strong>Location:</strong> Govind Nagar, Kanpur</li>
                        <li><strong>Employees:</strong> 40+</li>
                        <li><strong>Specialties:</strong> Web Design, App Development, Digital Branding</li>
                    </ul>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline">Read more</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Aside Section -->
    <aside class="w-80 bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Related Articles</h3>
        <ul class="space-y-4">
            <li>
                <a href="#" class="text-red-600 hover:underline">The Growth of IT Sector in Kanpur</a>
                <p class="text-sm text-gray-600">An in-depth look at how the IT sector is evolving in Kanpur.</p>
            </li>
            <li>
                <a href="#" class="text-red-600 hover:underline">Top IT Startups to Watch in Kanpur</a>
                <p class="text-sm text-gray-600">Explore the promising IT startups making waves in the city.</p>
            </li>
            <li>
                <a href="#" class="text-red-600 hover:underline">How IT Companies are Shaping Kanpur's Economy</a>
                <p class="text-sm text-gray-600">Understanding the impact of IT companies on the local economy.</p>
            </li>
            <li>
                <a href="#" class="text-red-600 hover:underline">Upcoming Tech Events in Kanpur</a>
                <p class="text-sm text-gray-600">Stay updated on the latest tech events happening in Kanpur.</p>
            </li>
        </ul>
    </aside>
</main>

@endsection