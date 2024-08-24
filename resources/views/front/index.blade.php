@extends('component.main')
@section('content')

<main class="container m-auto  px-4 lg:py-8 py-0">
    <nav class="bg-white shadow-md rounded-lg overflow-hidden mb-1">
        <ul class="flex justify-between">
            <li class="flex-1 border-r border-gray-200">
                <a href="{{Route('mainstories')}}" class="block p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
                    <div class="flex items-center">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <span class="font-bold lg:text-lg text-xs text-gray-800">Main Stories</span>
                    </div>
                </a>
            </li>
            <li class="flex-1 border-r border-gray-200">
                <a href="{{Route('mainstories')}}" class="block p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
                    <div class="flex items-center">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <span class="font-bold lg:text-lg text-xs text-gray-800">Editor's Pick</span>
                    </div>
                </a>
            </li>
            <li class="flex-1">
                <a href="{{Route('mainstories')}}" class="block p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
                    <div class="flex items-center">
                        <div class="w-1 h-8 bg-red-600 mr-4"></div>
                        <span class="font-bold lg:text-lg text-xs text-gray-800">Trending Stories</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
    {{-- blogs --}}
    <div class="container mx-auto px-2 lg:py-8 mt-2" >
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Breaking News</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Main content area -->
            <div class="md:col-span-2 grid grid-cols-1 lg:grid-cols-2 gap-2" data-aos="fade-zoom-out">
                <article class="bg-white shadow-md rounded-lg p-6" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="400">Breaking: New Tech Park Opens in Kanpur</h2>
                    <img src="assets/img/2.png" alt="Tech Park" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600 mb-4" data-aos="fade-up" data-aos-delay="400">Kanpur's technology sector gets a boost with the opening of a state-of-the-art tech park, expected to create thousands of jobs. This development marks a significant milestone in the city's growth as a tech hub.</p>
                    <a href="{{Route('iit')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </article>
            
                <article class="bg-white shadow-md rounded-lg p-6" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="400">Local Artist's Mural Transforms Downtown</h2>
                    <img src="assets/img/art.png" alt="Downtown Mural" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600 mb-4" data-aos="fade-up" data-aos-delay="400">A vibrant new mural has brought color and life to Kanpur's downtown area, thanks to the efforts of local artist. The artwork celebrates the city's rich cultural heritage and has quickly become a popular attraction.</p>
                    <a href="{{Route('art')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </article>
            </div>
            
            <!-- Sidebar -->
            <div>
                <div class="bg-white shadow-md rounded-lg p-6" data-aos="slide-left">
                    <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up">Trending Stories</h3>
                    <ul class="space-y-4" data-aos-delay="200" data-aos="fade-down">
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">Kanpur University Announces New Courses</a></li>
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">Local Restaurant Wins National Award</a></li>
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">City Plans Major Infrastructure Upgrade</a></li>
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">Kanpur's Green Initiative: 10,000 Trees Planted</a></li>
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">New Food Street Opens in Civil Lines</a></li>
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">Kanpur Metro: Construction Update</a></li>
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">Green Park Stadium Renovation Complete</a></li>
                        <li><a href="{{Route('trend')}}" class="text-red-600 hover:underline">Tech Startups Flourish in Kanpur</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
      {{-- temples --}}
    <div class="container lg:py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up">Unique and Historical Temples of Kanpur</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="slide-left">
                <img src="assets\img\jk.png" alt="JK Temple" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">JK Temple</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">A modern marvel of architecture, dedicated to Lord Shiva and adorned with intricate marble work.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline  font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>
               
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="zoom-in">
                <img src="assets\img\jagneshar.png" alt="Jageshwar Temple" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">Jageshwar Temple</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">An ancient temple complex known for its historical significance and peaceful atmosphere.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline  font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>
                
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="slide-right">
                <img src="assets\img\Anandeshwar Temple.avif" alt="Anandeshwar Temple" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">Anandeshwar Temple</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">A 250-year-old temple dedicated to Lord Shiva, situated on the banks of the Ganges.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>
                
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="slide-left">
                <img src="assets\img\Dwarikadhish Temple.png" alt="Dwarikadhish Temple" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">Dwarikadhish Temple</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">A beautiful temple dedicated to Lord Krishna, known for its stunning architecture.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline  font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>
               
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up">
                <img src="assets\img\Shri Radhakrishna Temple.png" alt="Shri Radhakrishna Temple" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">Shri Radhakrishna Temple</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">A popular temple showcasing exquisite craftsmanship and spiritual ambiance.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>
                
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="slide-right">
                <img src="assets\img\Panki Hanuman Temple.png" alt="Panki Hanuman Temple" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">Panki Hanuman Temple</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">A revered temple dedicated to Lord Hanuman, attracting devotees from far and wide.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>
                
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="slide-left">
                <img src="assets\img\Kali Mathiya.png" alt="Kali Mathiya" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">Kali Mathiya</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">An ancient temple dedicated to Goddess Kali, known for its historical and spiritual significance.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline  font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>

            </div>

            <div class="bg-white r rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-down ">
                <img src="assets\img\Baba Shyam Mandir.png" alt="Baba Shyam Mandir" class="w-full h-48 object-cover" data-aos-delay="200">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-0" data-aos="fade-up" data-aos-delay="400">Baba Shyam Mandir</h3>
                    <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">A popular temple dedicated to Baba Shyam, attracting thousands of devotees annually.</p>
                    <a href="{{Route('temple')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
                </div>
                
            </div>
        </div>
    </div>
    </div>

    <div class="container mx-auto px-4 lg:py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up">Leading IT Companies in Kanpur</h2>
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Company 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\tech mahindra.png" alt="Tech Mahindra" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Tech Mahindra</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">A leading provider of digital transformation, consulting, and business re-engineering services and solutions.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                        <p><strong>Location:</strong> Riverside, Kanpur</p>
                        <p><strong>Employees:</strong> 1000+</p>
                        <p><strong>Specialties:</strong> IT Services, Consulting, Digital Solutions</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="500">Read more</a>
                </div>
            </div>
    
            <!-- Company 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets/img/Ossisto.png" alt="Ossisto" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Ossisto</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">A global IT services company specializing in software development, web design, and digital marketing.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                        <p><strong>Location:</strong> Swaroop Nagar, Kanpur</p>
                        <p><strong>Employees:</strong> 500+</p>
                        <p><strong>Specialties:</strong> Software Development, Web Design, Digital Marketing</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="500">Read more</a>
                </div>
            </div>
    
            <!-- Company 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Kashi Tech Solutions.png" alt="Kashi Tech Solutions" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Kashi Tech Solutions</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">An innovative IT company focused on providing cutting-edge solutions in AI, machine learning, and data analytics.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                        <p><strong>Location:</strong> Kakadeo, Kanpur</p>
                        <p><strong>Employees:</strong> 200+</p>
                        <p><strong>Specialties:</strong> AI, Machine Learning, Data Analytics</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="500">Read more</a>
                </div>
            </div>
    
            <!-- Company 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Cynergii Technosys.png" alt="Cynergii Technosys" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Cynergii Technosys</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">A fast-growing IT services company offering custom software development and cloud solutions.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                        <p><strong>Location:</strong> Harsh Nagar, Kanpur</p>
                        <p><strong>Employees:</strong> 100+</p>
                        <p><strong>Specialties:</strong> Custom Software, Cloud Solutions, Mobile App Development</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="500">Read more</a>
                </div>
            </div>
    
            <!-- Company 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Webkul Software.jpeg" alt="Webkul Software" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Webkul Software</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">A leading e-commerce solution provider, specializing in developing plugins and extensions for popular platforms.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                        <p><strong>Location:</strong> Mall Road, Kanpur</p>
                        <p><strong>Employees:</strong> 300+</p>
                        <p><strong>Specialties:</strong> E-commerce Solutions, Plugin Development, Web Applications</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="500">Read more</a>
                </div>
            </div>
    
            <!-- Company 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Sparx IT Solutions.png" alt="Sparx IT Solutions" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Sparx IT Solutions</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">A versatile IT company offering web and mobile app development, digital marketing, and UI/UX design services.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                        <p><strong>Location:</strong> Civil Lines, Kanpur</p>
                        <p><strong>Employees:</strong> 150+</p>
                        <p><strong>Specialties:</strong> Web Development, Mobile Apps, UI/UX Design</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="500">Read more</a>
                </div>
            </div>
    
            <!-- Company 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <img src="assets\img\Neo.jpg" alt="Neo Morphics" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Neo Morphics</h3>
                    <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="300">Specializes in innovative software solutions, including AI-powered applications and custom software development.</p>
                    <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                        <p><strong>Location:</strong> Panki, Kanpur</p>
                        <p><strong>Employees:</strong> 80+</p>
                        <p><strong>Specialties:</strong> AI Applications, Custom Software, Cloud Services</p>
                    </div>
                    <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="500">Read more</a>
                </div>
            </div>
    
        <!-- Company 8 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
            <div class="p-6">
                <img src="assets\img\Techno Infonet.png" alt="Techno Infonet" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Techno Infonet</h3>
                <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="400">An innovative IT company focusing on web development, digital marketing, and e-commerce solutions.</p>
                <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                    <p><strong>Location:</strong> Kidwai Nagar, Kanpur</p>
                    <p><strong>Employees:</strong> 50+</p>
                    <p><strong>Specialties:</strong> Web Development, Digital Marketing, E-commerce</p>
                </div>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
            </div>
        </div>

        <!-- Company 9 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
            <div class="p-6">
                <img src="assets\img\Xpertiks Technologies.png" alt="Xpertiks" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Xpertiks Technologies</h3>
                <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="400">A cutting-edge IT firm specializing in AI, IoT, and blockchain solutions for various industries.</p>
                <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                    <p><strong>Location:</strong> Ashok Nagar, Kanpur</p>
                    <p><strong>Employees:</strong> 75+</p>
                    <p><strong>Specialties:</strong> AI, IoT, Blockchain</p>
                </div>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
            </div>
        </div>

        <!-- Company 10 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
            <div class="p-6">
                <img src="assets\img\Krazy Mantra.png" alt="Krazy Mantra" class="w-32 h-32 mx-auto mb-4 rounded-full object-cover">
                <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Krazy Mantra</h3>
                <p class="text-gray-600 text-sm mb-4" data-aos="fade-up" data-aos-delay="400">A creative IT solutions provider offering web design, app development, and digital branding services.</p>
                <div class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="400">
                    <p><strong>Location:</strong> Govind Nagar, Kanpur</p>
                    <p><strong>Employees:</strong> 40+</p>
                    <p><strong>Specialties:</strong> Web Design, App Development, Digital Branding</p>
                </div>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
            </div>
        </div>
    </div>
</div>

{{-- top richest persons in kanpur--}}

    <div class="container mx-auto px-2 py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up">Top Richest Individuals in Kanpur</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-right">
                <img src="assets\img\Murlidhar Gyanchandani.png" alt="Person 1" class="w-full h-48 object-cover">
                <div class="p-2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up" data-aos-delay="400">Murlidhar Gyanchandani</h3>
                    <p class="text-gray-600 text-sm"data-aos="fade-up" data-aos-delay="400">Murlidhar Gyanchandani is one of the most successful entrepreneurs of India. </p>
                    <a href="{{Route('rich')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
                </div>
                
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-left">
                <img src="assets\img\Yadupati Singhaniya.png" alt="Person 2" class="w-full h-48 object-cover">
                <div class="p-2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up">Yadupati Singhaniya</h3>
                    <p class="text-gray-600 text-sm" data-aos="fade-up" data-aos-delay="400">Mr. Yadupati Singhania is the Late Chairman & Managing Director of JK Cement and also played an important role in evolution of cement in India.</p>
                    <a href="{{Route('rich')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-right">
                <img src="assets\img\Bimal Kumar Gyanchandani.png" alt="Person 3" class="w-full h-48 object-cover">
                <div class="p-2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up">Bimal Kumar Gyanchandani</h3>
                    <p class="text-gray-600 text-sm" data-aos="fade-up" data-aos-delay="400">Low profile brothers Murli Dhar and Bimal Gyanchandani control family's Kanpur-headquartered consumer goods firm RSPL Group.</p>
                    <a href="{{Route('rich')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-left">
                <img src="assets\img\_Uday Jayant Desai.png" alt="Person 4" class="w-full h-48 object-cover">
                <div class="p-2">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up"> Uday Jayant Desai</h3>
                    <p class="text-gray-600 text-sm" data-aos="fade-up" data-aos-delay="400">
                        Uday Jayant Desai who is also known as Udai J. Desai. He is the Chairman and Managing Director of Frost International Limited.</p>
                    <a href="{{Route('rich')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
                </div>
            </div>
</div>

{{-- you may miss it --}}
<div class="flex-1 border-r border-gray-200" data-aos="flip-right">
    <a href="{{Route('trend')}}" class="block lg:p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
        <div class="flex items-center">
            <div class="w-1 h-8 bg-red-600 mr-4"></div>
            <span class="font-bold text-lg text-gray-800" data-aos="fade-up">You May Be Miss It</span>
        </div>
    </a>
</div>
{{--  --}}
<div class="container mx-auto lg:p-6 grid grid-cols-1 lg:grid-cols-3 gap-2">
    <div class="bg-white rounded-lg shadow-lg p-6 mb-6" data-aos="flip-left">
        <img src="assets\img\Top 10 Richest Persons in Kanpur.png" alt="">
        <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4" data-aos="fade-up">Top 10 Richest Persons in Kanpur</h2>
        <p class="text-gray-700" data-aos="fade-up" data-aos-delay="400">On 05/06/2021, Ravi Pandey discussed the top 10 wealthiest individuals in Kanpur. These individuals have made significant contributions to the city's economy and society.</p>
        <a href="{{Route('rich')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 mb-6" data-aos="flip-right">
        <img src="assets\img\10 Best Food Places in Kanpur.png" alt="">
        <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4" data-aos="fade-up">10 Best Food Places in Kanpur</h2>
        <p class="text-gray-700" data-aos="fade-up" data-aos-delay="400">On 03/06/2021, Ravi Pandey highlighted various food establishments in Kanpur that offer unique culinary experiences not found elsewhere in the country.</p>
        <a href="{{Route('food')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 mb-6" data-aos="flip-left">
        <img src="assets\img\Why Kanpur is Called Manchester of India.png" alt="">
        <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4" data-aos="fade-up">Why Kanpur is Called Manchester of India</h2>
        <p class="text-gray-700" data-aos="fade-up" data-aos-delay="400">On 31/05/2021, Faizan explained why Kanpur is often referred to as the "Manchester of India," focusing on its unique historical and economic significance.</p>
        <a href="{{Route('manchester')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 mb-6" data-aos="flip-right">
        <img src="assets\img\central.webp" alt="">
        <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4" data-aos="fade-up">Interesting and Unknown Facts About Kanpur Central</h2>
        <p class="text-gray-700" data-aos="fade-up" data-aos-delay="400">On 11/01/2021, Ravi Pandey shared intriguing and lesser-known facts about Kanpur Central, one of the city's most prominent landmarks.</p>
        <a href="{{Route('kanpurcentral')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 mb-6" data-aos="flip-left">
        <img src="assets\img\Bithoor.png" alt="">
        <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4" data-aos="fade-up">Interesting Facts About Bithoor</h2>
        <p class="text-gray-700" data-aos="fade-up" data-aos-delay="400">On 27/12/2020, Ravi Pandey discussed Bithoor, a town near Kanpur known for its religious and historical significance, located just 17 km away.</p>
        <a href="{{Route('bithoor')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 mb-6" data-aos="flip-right">
        <img src="assets\img\13 Best Places to Visit in Kanpur.png" alt="">
        <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4" data-aos="fade-up">13 Best Places to Visit in Kanpur</h2>
        <p class="text-gray-700" data-aos="fade-up" data-aos-delay="400">On 26/12/2020, Ravi Pandey listed 13 must-visit places in Kanpur, the third-largest city in Uttar Pradesh, situated along the banks of the Ganga River.</p>
        <a href="{{Route('famous')}}" class="text-red-600 hover:underline font-semibold" data-aos="fade-up" data-aos-delay="400">Read more</a>
    </div>
</div>
  
<div class="container py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up">Top Stories</h2>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-right">
            <img src="assets\img\dslr.jpg" alt="Uday Jayant Desai" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up" data-aos-delay="400">DSLR Camera Available for Rent in Kanpur</h3>
                <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">20/04/2022 by Ravi Pandey</p>
                <a href="{{Route('mainstories')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-left">
            <img src="assets\img\bitargaotemple.jpg" alt="Person 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up">कानपुर का ‘जादुई’ मंदिर वैज्ञानिकों के लिए कौतूहल</h3>
                <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">15/06/2021 by Ravi Pandey</p>
                <a href="{{Route('temple')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-right">
            <img src="assets\img\Best Software IT Company in Kanpur.png" alt="Person 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up">Best Software IT Company in Kanpur</h3>
                <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">11/06/2021 by Faizan</p>
                <a href="{{Route('company')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-left">
            <img src="assets\img\Top 10 Engineering Colleges in Kanpur.png" alt="Person 4" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2" data-aos="fade-up">Top 10 Engineering Colleges in Kanpur</h3>
                <p class="text-gray-600 text-sm mb-2" data-aos="fade-up" data-aos-delay="400">08/06/2021 by Ravi Pandey</p>
                <a href="{{Route('college')}}" class="text-red-600 hover:underline mt-2 inline-block" data-aos="fade-up" data-aos-delay="400">Learn more</a>
            </div>
        </div>
    </div>
</div>
</main>

<!-- Banner Start -->
<div class="py-10 my-0 bg-slate-400" data-aos="fade-down">
    <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-3xl font-bold mb-4 text-red-700" data-aos="fade-right" data-aos-delay="400">Newsers</h1>
                <h2 class="text-2xl font-semibold mb-4" data-aos="fade-right" data-aos-delay="400">Get Every Weekly Updates</h2>
                <p class="text-black mb-6" data-aos="fade-right" data-aos-delay="400">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...</p>
                <div class="relative mx-auto lg:mx-0 w-full lg:w-auto">
                    <input class="w-full lg:w-80 px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500" type="email" placeholder="Your Email">
                    <button type="submit" class="absolute top-0 right-0 mt-1 mr-1 py-2 px-4 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none">Subscribe Now</button>
                </div>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0 mx-4" data-aos="fade-up">
                <img src="assets\img\blog.jpg" class="rounded-lg shadow-lg w-full" alt="Banner Image">
            </div>
        </div>
    </div>
</div>
@endsection