@extends('component.main')
@section('content')
<header class="bg-red-600 text-white py-6" data-aos="fade-down">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-4">IT Companies in Kanpur</h1>
        <img src="assets/img/Best Software IT Company in Kanpur.png" alt="Best Software IT Company in Kanpur" class="w-full h-64 object-cover rounded-lg shadow-lg" data-aos="fade-up">
        <p class="mt-4 text-xl text-center" data-aos="fade-up">Exploring the Tech Landscape of Kanpur</p>
    </div>
</header>


<main class="container mx-auto px-4 py-8 flex flex-col lg:flex-row">
    <!-- Main Content -->
    <div class="container mx-auto px-4 lg:py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up">Leading IT Companies in Kanpur</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Company 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\tech mahindra.png" alt="Tech Mahindra" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Tech Mahindra</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A leading provider of digital transformation, consulting, and business re-engineering services and solutions.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up">
                        <p><strong>Location:</strong> Riverside, Kanpur</p>
                        <p><strong>Employees:</strong> 1000+</p>
                        <p><strong>Specialties:</strong> IT Services, Consulting, Digital Solutions</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
                </div>
            </div>
    
            <!-- Company 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105"  data-aos="zoom-in" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Ossisto.png" alt="Ossisto" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Ossisto</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A global IT services company specializing in software development, web design, and digital marketing.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up">
                        <p><strong>Location:</strong> Swaroop Nagar, Kanpur</p>
                        <p><strong>Employees:</strong> 500+</p>
                        <p><strong>Specialties:</strong> Software Development, Web Design, Digital Marketing</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
                </div>
            </div>
    
            <!-- Company 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105"  data-aos="zoom-in" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Kashi Tech Solutions.png" alt="Kashi" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Kashi Tech Solutions</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">An innovative IT company focused on providing cutting-edge solutions in AI, machine learning, and data analytics.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up">
                        <p><strong>Location:</strong> Kakadeo, Kanpur</p>
                        <p><strong>Employees:</strong> 200+</p>
                        <p><strong>Specialties:</strong> AI, Machine Learning, Data Analytics</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
                </div>
            </div>
    
            <!-- Company 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105"  data-aos="zoom-in" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Cynergii Technosys.png" alt="Cynergii" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Cynergii Technosys</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A fast-growing IT services company offering custom software development and cloud solutions.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up">
                        <p><strong>Location:</strong> Harsh Nagar, Kanpur</p>
                        <p><strong>Employees:</strong> 100+</p>
                        <p><strong>Specialties:</strong> Custom Software, Cloud Solutions, Mobile App Development</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
                </div>
            </div>
    
            <!-- Company 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105"  data-aos="zoom-in" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Webkul Software.png" alt="Webkul" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Webkul Software</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A leading e-commerce solution provider, specializing in developing plugins and extensions for popular platforms.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up">
                        <p><strong>Location:</strong> Mall Road, Kanpur</p>
                        <p><strong>Employees:</strong> 300+</p>
                        <p><strong>Specialties:</strong> E-commerce Solutions, Plugin Development, Web Applications</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
                </div>
            </div>
    
            <!-- Company 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Sparx IT Solutions.png" alt="Sparx" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Sparx IT Solutions</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A versatile IT company offering web and mobile app development, digital marketing, and UI/UX design services.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up">
                        <p><strong>Location:</strong> Civil Lines, Kanpur</p>
                        <p><strong>Employees:</strong> 150+</p>
                        <p><strong>Specialties:</strong> Web Development, Mobile Apps, UI/UX Design</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
                </div>
            </div>
              <!-- Company 7 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
            <div class="p-6">
                <img src="assets\img\Softprodigy.png" alt="Softprodigy" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Softprodigy</h3>
                <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A dynamic IT services company specializing in custom software development, mobile apps, and cloud solutions.</p>
                <div class="text-sm text-gray-500" data-aos="fade-up">
                    <p><strong>Location:</strong> Sarvodaya Nagar, Kanpur</p>
                    <p><strong>Employees:</strong> 100+</p>
                    <p><strong>Specialties:</strong> Custom Software, Mobile Apps, Cloud Solutions</p>
                </div>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
            </div>
        </div>

        <!-- Company 8 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
            <div class="p-6">
                <img src="assets\img\Techno Infonet.png" alt="Techno Infonet" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Techno Infonet</h3>
                <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">An innovative IT company focusing on web development, digital marketing, and e-commerce solutions.</p>
                <div class="text-sm text-gray-500" data-aos="fade-up">
                    <p><strong>Location:</strong> Kidwai Nagar, Kanpur</p>
                    <p><strong>Employees:</strong> 50+</p>
                    <p><strong>Specialties:</strong> Web Development, Digital Marketing, E-commerce</p>
                </div>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold " data-aos="fade-up">Read more</a>
            </div>
        </div>

        <!-- Company 9 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
            <div class="p-6">
                <img src="assets\img\Xpertiks Technologies.png" alt="Xpertiks" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Xpertiks Technologies</h3>
                <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A cutting-edge IT firm specializing in AI, IoT, and blockchain solutions for various industries.</p>
                <div class="text-sm text-gray-500" data-aos="fade-up">
                    <p><strong>Location:</strong> Ashok Nagar, Kanpur</p>
                    <p><strong>Employees:</strong> 75+</p>
                    <p><strong>Specialties:</strong> AI, IoT, Blockchain</p>
                </div>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
            </div>
        </div>

        <!-- Company 10 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
            <div class="p-6">
                <img src="assets\img\Krazy Mantra.png" alt="Krazy Mantra" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up">Krazy Mantra</h3>
                <p class="text-gray-600 text-sm mb-4" data-aos="fade-up">A creative IT solutions provider offering web design, app development, and digital branding services.</p>
                <div class="text-sm text-gray-500" data-aos="fade-up">
                    <p><strong>Location:</strong> Govind Nagar, Kanpur</p>
                    <p><strong>Employees:</strong> 40+</p>
                    <p><strong>Specialties:</strong> Web Design, App Development, Digital Branding</p>
                </div>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up">Read more</a>
            </div>
        </div>
        </div>
    </div>

 <!-- Aside Section -->
<aside class="w-full lg:w-1/4 bg-white rounded-lg shadow-lg p-8 lg:p-6 mx-0 lg:mx-0">
    <h3 class="text-xl font-semibold mb-4" data-aos="fade-up">Related Articles</h3>
    <ul class="space-y-4">
        <li>
            <a href="{{Route('iit')}}" class="text-red-600 hover:underline font-medium" data-aos="fade-up">The Growth of IT Sector in Kanpur</a>
            <p class="text-sm text-gray-600" data-aos="fade-up">An in-depth look at how the IT sector is evolving in Kanpur.</p>
        </li>
        <li>
            <a href="{{Route('iit')}}" class="text-red-600 hover:underline font-medium" data-aos="fade-up">Top IT Startups to Watch in Kanpur</a>
            <p class="text-sm text-gray-600" data-aos="fade-up">Explore the promising IT startups making waves in the city.</p>
        </li>
        <li>
            <a href="{{Route('iit')}}" class="text-red-600 hover:underline font-medium" data-aos="fade-up">How IT Companies are Shaping Kanpur's Economy</a>
            <p class="text-sm text-gray-600" data-aos="fade-up">Understanding the impact of IT companies on the local economy.</p>
        </li>
        <li>
            <a href="{{Route('iit')}}" class="text-red-600 hover:underline font-medium" data-aos="fade-up">Upcoming Tech Events in Kanpur</a>
            <p class="text-sm text-gray-600" data-aos="fade-up">Stay updated on the latest tech events happening in Kanpur.</p>
        </li>
    </ul>
</aside>

</main>


@endsection