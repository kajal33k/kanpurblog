@extends('component.main')
@section('content')

    <!-- Header Section -->
    <header class="bg-red-600 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl font-bold">Top 10 Engineering Colleges in Kanpur</h1>
            <p class="mt-2">A comprehensive guide to the best engineering institutions in Kanpur, offering quality education and excellent infrastructure.</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 py-8">
        <main class="md:col-span-2 space-y-8">

            <!-- College 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
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
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
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
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
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
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
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
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
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
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">6. Kanpur Institute of Technology (KIT)</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/KIT Banner.avif" alt="KIT Kanpur" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">KIT is a private engineering college in Kanpur, known for its state-of-the-art infrastructure and strong focus on placements. It offers a range of undergraduate and postgraduate programs in engineering and management.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech, M.Tech, MBA</li>
                                <li>Campus: Urban</li>
                                <li>Highlights: Modern labs, industry collaborations, strong placement cell</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- College 7 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">7. Allenhouse Institute of Technology, Kanpur</h2>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="assets/img/abs.jpg" alt="Allenhouse Institute of Technology" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-grow">
                            <p class="mt-2 text-gray-600">Allenhouse Institute of Technology is part of the Superhouse Group, known for providing quality education in engineering. The college offers modern facilities and a well-rounded academic environment.</p>
                            <ul class="list-disc ml-6 mt-4 text-gray-600">
                                <li>Programs Offered: B.Tech</li>
                                <li>Campus: Suburban</li>
                                <li>Highlights: Well-equipped labs, focus on research, active placement cell</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
 <!-- College 8 -->
 <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">8. Pranveer Singh Institute of Technology (PSIT)</h2>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-shrink-0 w-full md:w-1/3">
                <img src="assets\img\psit.webp" alt="PSIT Kanpur" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="flex-grow">
                <p class="mt-2 text-gray-600">PSIT is a leading private engineering and management college in Kanpur, known for its rigorous academic curriculum and excellent placement record. The college offers a variety of technical and professional courses.</p>
                <ul class="list-disc ml-6 mt-4 text-gray-600">
                    <li>Programs Offered: B.Tech, M.Tech, MBA, MCA</li>
                    <li>Campus: 80 acres</li>
                    <li>Highlights: Strong placement cell, modern infrastructure, experienced faculty</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- College 9 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">9. Axis Institute of Technology & Management (AITM)</h2>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-shrink-0 w-full md:w-1/3">
                <img src="assets\img\axis.webp" alt="AITM Kanpur" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="flex-grow">
                <p class="mt-2 text-gray-600">AITM is a private engineering college in Kanpur under the Axis Group of Colleges. It offers comprehensive technical education and is known for its focus on practical learning and industry readiness.</p>
                <ul class="list-disc ml-6 mt-4 text-gray-600">
                    <li>Programs Offered: B.Tech, M.Tech, Diploma courses</li>
                    <li>Campus: 63 acres</li>
                    <li>Highlights: Skill development programs, well-equipped labs, industry exposure</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- College 10 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">10. Naraina College of Engineering & Technology (NCET)</h2>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-shrink-0 w-full md:w-1/3">
                <img src="assets\img\naraina.jpeg" alt="NCET Kanpur" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="flex-grow">
                <p class="mt-2 text-gray-600">NCET is part of the Naraina Group of Institutions, offering a range of engineering programs. The college is known for its well-structured curriculum and emphasis on overall student development.</p>
                <ul class="list-disc ml-6 mt-4 text-gray-600">
                    <li>Programs Offered: B.Tech, M.Tech, MBA</li>
                    <li>Campus: 50 acres</li>
                    <li>Highlights: Excellent infrastructure, dedicated faculty, focus on research and innovation</li>
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
                    <li><a href="#college-1" class="text-blue-500 hover:underline">IIT Kanpur</a></li>
                    <li><a href="#college-2" class="text-blue-500 hover:underline">HBTU</a></li>
                    <li><a href="#college-3" class="text-blue-500 hover:underline">IET Kanpur</a></li>
                    <li><a href="#college-4" class="text-blue-500 hover:underline">UIET Kanpur</a></li>
                    <li><a href="#college-5" class="text-blue-500 hover:underline">AITH</a></li>
                    <li><a href="#college-6" class="text-blue-500 hover:underline">KIT</a></li>
                    <li><a href="#college-7" class="text-blue-500 hover:underline">Allenhouse Institute of Technology</a></li>
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
