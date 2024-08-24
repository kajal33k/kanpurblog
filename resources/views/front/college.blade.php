@extends('component.main')
@section('content')



    <!-- Header Section -->
    <header class="bg-red-600 text-white py-8">
        <div class="container mx-auto px-4 text-center" data-aos="fade-down">
            <h1 class="text-3xl font-bold">Top 10 Engineering Colleges in Kanpur</h1>
            <p class="mt-2">A comprehensive guide to the best engineering institutions in Kanpur, offering quality education and excellent infrastructure.</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 py-8">
        <main class="md:col-span-2 space-y-8">

            <!-- College 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-1" data-aos="fade-up">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">1. Indian Institute of Technology, Kanpur (IIT Kanpur)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/iit.jpeg" alt="IIT Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">IIT Kanpur is one of the most prestigious engineering institutions in India, known for its excellent faculty, world-class infrastructure, and cutting-edge research facilities. Established in 1959, it offers a wide range of undergraduate, postgraduate, and doctoral programs.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech, Ph.D.</li>
                                <li>Campus: 1055 acres</li>
                                <li>Highlights: Strong placement record, global research collaborations, state-of-the-art labs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-2" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">2. Harcourt Butler Technical University (HBTU)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/HBTI_Main_Building.jpg" alt="HBTU Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">HBTU, established in 1921, is a renowned state university in Kanpur offering quality engineering education. It is known for its strong academic curriculum and robust industry connections.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech, MBA, Ph.D.</li>
                                <li>Campus: 348 acres</li>
                                <li>Highlights: Experienced faculty, strong alumni network, focus on research and innovation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-3" data-aos="fade-up" data-aos-delay="200">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">3. Institute of Engineering and Technology, Kanpur (IET Kanpur)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/iet.webp" alt="IET Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">IET Kanpur is a government engineering college affiliated with Dr. A.P.J. Abdul Kalam Technical University. Known for its disciplined academic environment and competent faculty, it is a preferred choice among engineering aspirants.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Affordable education, focus on practical knowledge, decent placement records</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">4. University Institute of Engineering and Technology, CSJMU (UIET Kanpur)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/uiet.jpg" alt="UIET Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">UIET Kanpur is the engineering department of Chhatrapati Shahu Ji Maharaj University. It offers a variety of engineering programs with a focus on practical learning and industry-oriented education.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Modern laboratories, industry partnerships, student exchange programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 5 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-5" data-aos="fade-up" data-aos-delay="400">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">5. Dr. Ambedkar Institute of Technology for Handicapped (AITH)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/aith.jpg" alt="AITH Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">AITH is an autonomous institution under the Government of Uttar Pradesh. It provides technical education to students with disabilities, offering a supportive and inclusive learning environment.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, Diploma courses</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Specialized infrastructure, accessible campus, vocational training programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 6 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-6" data-aos="fade-up" data-aos-delay="500">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">6. Kanpur Institute of Technology (KIT)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/KIT Banner.avif" alt="KIT Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">KIT is a private engineering college in Kanpur, known for its state-of-the-art infrastructure and strong focus on placements. The institute offers various engineering programs with a modern approach to education.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech, MBA</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Placement assistance, industry connections, well-equipped laboratories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 7 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-7" data-aos="fade-up" data-aos-delay="600">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">7. Babu Banarasi Das National Institute of Technology and Management (BBDNITM)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets\img\bbncollege.jpg" alt="BBDNITM Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">BBDNITM is a private engineering institute known for its emphasis on research and development, industry interaction, and quality education. The college provides a range of engineering disciplines with a focus on practical learning.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech, MBA</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: R&D facilities, internships, modern teaching methods</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 8 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-8" data-aos="fade-up" data-aos-delay="700">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">8. Guru Nanak Dev Engineering College (GNDEC)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets\img\gurunanak.jpg" alt="GNDEC Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">GNDEC is a well-established engineering college with a reputation for providing quality technical education. It offers various engineering programs and has a strong focus on research and innovation.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech, Ph.D.</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Research-oriented approach, well-qualified faculty, modern facilities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 9 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-9" data-aos="fade-up" data-aos-delay="800">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">9. Sardar Patel Institute of Technology (SPIT)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets\img\sardar patel.jpg" alt="SPIT Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">SPIT is a prominent engineering institute known for its innovative approach to technical education. It offers a range of engineering disciplines with a strong emphasis on industry readiness.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Industry partnerships, modern infrastructure, research opportunities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 10 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden" id="college-10" data-aos="fade-up" data-aos-delay="900">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">10. Rajiv Gandhi Institute of Technology (RGIT)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets\img\rgit.jpg" alt="RGIT Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">RGIT offers a variety of engineering programs with a focus on creating a supportive learning environment. Known for its dedicated faculty and strong academic performance, RGIT is a notable choice for aspiring engineers.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Student-centric approach, modern teaching methods, industry connections</li>
                            </ul>
                        </div>

        </div>
    </div>
</div>

            <!-- Additional colleges can be added here following the same structure -->

        </main>

        <!-- Sidebar -->
        <aside class="space-y-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Quick Links</h2>
                <ul class="space-y-2">
                    <li><a href="#college-1" class="text-red-500 hover:underline">IIT Kanpur</a></li>
                    <li><a href="#college-2" class="text-red-500 hover:underline">HBTU</a></li>
                    <li><a href="#college-3" class="text-red-500 hover:underline">IET Kanpur</a></li>
                    <li><a href="#college-4" class="text-red-500 hover:underline">UIET Kanpur</a></li>
                    <li><a href="#college-5" class="text-red-500 hover:underline">AITH</a></li>
                    <li><a href="#college-6" class="text-red-500 hover:underline">KIT</a></li>
                    <li><a href="#college-7" class="text-red-500 hover:underline">Allenhouse Institute of Technology</a></li>
                    <!-- Add more quick links as necessary -->
                </ul>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">About Kanpur</h2>
                <p class="text-gray-600">Kanpur is a major industrial city in Uttar Pradesh, known for its educational institutions, vibrant culture, and historical significance. It is home to some of the most prestigious engineering colleges in India.</p>
            </div>
        </aside>
    </div>

@endsection
