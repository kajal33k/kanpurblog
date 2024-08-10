@extends('component.main')
@section('content')

  <!-- Header -->
<header class="bg-red-800 text-white py-6">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold">Prominent People from Kanpur</h1>
        <p class="mt-2 text-lg">Highlighting the influential figures shaping Kanpur’s landscape.</p>
    </div>
</header>

<!-- Main Content -->
<main class="container mx-auto px-4 py-8 flex flex-wrap lg:flex-nowrap">
    <!-- Main Content Area -->
    <div class="flex-1 mr-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Person 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Murlidhar Gyanchandani.png" alt="Murlidhar Gyanchandani" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Murlidhar Gyanchandani</h2>
                    <p class="mb-4">Murlidhar Gyanchandani is one of the most successful entrepreneurs of India, known for his significant contributions to various industries.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Yadupati Singhaniya.png" alt="Yadupati Singhaniya" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Yadupati Singhaniya</h2>
                    <p class="mb-4">Mr. Yadupati Singhania was the Late Chairman & Managing Director of JK Cement and played a crucial role in the evolution of cement in India.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/Bimal Kumar Gyanchandani.png" alt="Bimal Kumar Gyanchandani" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Bimal Kumar Gyanchandani</h2>
                    <p class="mb-4">Low-profile brothers Murli Dhar and Bimal Gyanchandani control the family’s Kanpur-headquartered consumer goods firm, RSPL Group.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 4 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/p3.png" alt="Uday Jayant Desai" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Uday Jayant Desai</h2>
                    <p class="mb-4">Uday Jayant Desai, also known as Udai J. Desai, is the Chairman and Managing Director of Frost International Limited, a leader in international trade.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 5 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/p5.png" alt="Amit Jain" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Amit Jain</h2>
                    <p class="mb-4">Amit Jain is a prominent industrialist with major investments in the textile and real estate sectors in Kanpur.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 6 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/p6.png" alt="Rajesh Agarwal" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Rajesh Agarwal</h2>
                    <p class="mb-4">Rajesh Agarwal is a key figure in the Kanpur business community, known for his contributions to the steel industry.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 7 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/p7.png" alt="Neeraj Sharma" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Neeraj Sharma</h2>
                    <p class="mb-4">Neeraj Sharma is a successful businessman in the pharmaceutical sector, with significant contributions to Kanpur’s healthcare industry.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 8 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/p8.png" alt="Sanjay Kapoor" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Sanjay Kapoor</h2>
                    <p class="mb-4">Sanjay Kapoor is a major player in the electronics and manufacturing sectors, contributing to Kanpur’s industrial development.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 9 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/p9.png" alt="Ramesh Chandra" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Ramesh Chandra</h2>
                    <p class="mb-4">Ramesh Chandra is an influential figure in the agricultural sector, known for his advancements in farming technologies in Kanpur.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

            <!-- Person 10 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="assets/img/p4.png" alt="Aarti Gupta" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Aarti Gupta</h2>
                    <p class="mb-4">Aarti Gupta is a leading figure in Kanpur’s fashion industry, known for her innovative designs and contributions to local and national fashion events.</p>
                    <a href="#" class="text-red-600 hover:underline">Learn more</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Aside Section -->
    <aside class="w-full lg:w-80 bg-gray-100 rounded-lg shadow-lg p-6 mt-8 lg:mt-0">
        <h3 class="text-xl font-semibold mb-4">Related Articles</h3>
        <ul class="space-y-4">
            <li>
                <a href="#" class="text-red-600 hover:underline">The Impact of Prominent Figures on Kanpur</a>
                <p class="text-sm text-gray-600">An analysis of how these influential individuals have shaped the city's development.</p>
            </li>
            <li>
                <a href="#" class="text-red-600 hover:underline">Top Influencers in Kanpur's Modern History</a>
                <p class="text-sm text-gray-600">A look at key figures who have made significant contributions in recent decades.</p>
            </li>
            <li>
                <a href="#" class="text-red-600 hover:underline">The Legacy of Kanpur’s Most Notable Personalities</a>
                <p class="text-sm text-gray-600">Exploring the lasting impact of Kanpur's most prominent figures.</p>
            </li>
            <li>
                <a href="#" class="text-red-600 hover:underline">Upcoming Events Celebrating Kanpur’s Leaders</a>
                <p class="text-sm text-gray-600">Stay updated on events and ceremonies honoring Kanpur’s influential people.</p>
            </li>
        </ul>
    </aside>
</main>

@endsection