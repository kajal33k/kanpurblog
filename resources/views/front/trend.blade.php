@extends('component.main')
@section('content')

<!-- Main Content Section -->
<main class="container mx-auto py-8 flex flex-col lg:flex-row gap-8">
    
    <!-- Trending Stories Section -->
    <section class="w-full lg:w-3/4">
        <h2 class="text-2xl font-semibold mb-6">Trending Stories</h2>

        <!-- Story 1 -->
        <article class="bg-white shadow-xl rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/courses.png" alt="Kanpur University Courses" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Kanpur University Announces New Courses</h3>
                    <p class="text-gray-600 mb-5 leading-relaxed">
                        Kanpur University has introduced several new courses to meet the growing demand for specialized education. The new courses include data science, artificial intelligence, and more.
                    </p>
                    <a href="#" class="inline-block text-red-500 font-medium hover:text-red-600 hover:underline transition-colors">Read more...</a>
                </div>
            </div>
        </article>

        <!-- Story 2 -->
        <article class="bg-white shadow-lg rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/Restaurant.jpg" alt="Local Restaurant" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-xl font-bold mb-2">Local Restaurant Wins National Award</h3>
                    <p class="text-gray-700 mb-4">A popular local restaurant has won a prestigious national award for its innovative cuisine and excellent service. The award ceremony took place in Delhi last week.</p>
                    <a href="#" class="text-red-500 hover:underline">Read more...</a>
                </div>
            </div>
        </article>

        <!-- Story 3 -->
        <article class="bg-white shadow-lg rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/city.jpg" alt="City Infrastructure" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-xl font-bold mb-2">City Plans Major Infrastructure Upgrade</h3>
                    <p class="text-gray-700 mb-4">Kanpur city has announced plans for a major infrastructure upgrade, including new roads, bridges, and public transportation options. The project aims to improve connectivity and reduce traffic congestion.</p>
                    <a href="#" class="text-red-500 hover:underline">Read more...</a>
                </div>
            </div>
        </article>

        <!-- Story 4 -->
        <article class="bg-white shadow-lg rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/trees.jpg" alt="Green Initiative" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-xl font-bold mb-2">Kanpur's Green Initiative: 10,000 Trees Planted</h3>
                    <p class="text-gray-700 mb-4">As part of its green initiative, Kanpur city has successfully planted 10,000 trees across various parks and public spaces. The initiative aims to enhance the city's green cover and promote environmental awareness.</p>
                    <a href="#" class="text-red-500 hover:underline">Read more...</a>
                </div>
            </div>
        </article>

        <!-- Story 5 -->
        <article class="bg-white shadow-lg rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/restro.avif" alt="New Food Street" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-xl font-bold mb-2">New Food Street Opens in Civil Lines</h3>
                    <p class="text-gray-700 mb-4">A new food street has opened in Civil Lines, offering a variety of local and international cuisines. The street has quickly become a popular destination for food lovers in the city.</p>
                    <a href="#" class="text-red-500 hover:underline">Read more...</a>
                </div>
            </div>
        </article>

        <!-- Story 6 -->
        <article class="bg-white shadow-lg rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/metro.avif" alt="Kanpur Metro" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-xl font-bold mb-2">Kanpur Metro: Construction Update</h3>
                    <p class="text-gray-700 mb-4">The construction of the Kanpur Metro is progressing rapidly, with several key stations nearing completion. The metro is expected to be operational by next year, providing a modern and efficient transportation option for residents.</p>
                    <a href="#" class="text-red-500 hover:underline">Read more...</a>
                </div>
            </div>
        </article>

        <!-- Story 7 -->
        <article class="bg-white shadow-lg rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/park.jpeg" alt="Green Park Stadium" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-xl font-bold mb-2">Green Park Stadium Renovation Complete</h3>
                    <p class="text-gray-700 mb-4">The renovation of Green Park Stadium has been completed, with new facilities and seating arrangements. The stadium is now ready to host upcoming cricket matches and other sporting events.</p>
                    <a href="#" class="text-red-500 hover:underline">Read more...</a>
                </div>
            </div>
        </article>

        <!-- Story 8 -->
        <article class="bg-white shadow-lg rounded-lg mb-6 p-6 transition-all duration-300 hover:shadow-2xl hover:scale-105">
            <div class="flex flex-col md:flex-row gap-4">
                <img src="assets/img/newtech.jpeg" alt="Tech Startups" class="rounded-lg w-full md:w-1/3 h-48 object-cover mb-4 md:mb-0">
                <div>
                    <h3 class="text-xl font-bold mb-2">Tech Startups Flourish in Kanpur</h3>
                    <p class="text-gray-700 mb-4">Kanpur is becoming a hub for tech startups, with several new companies emerging in the city. These startups are working on innovative solutions in various fields, attracting investors and talent from across the country.</p>
                    <a href="#" class="text-red-500 hover:underline">Read more...</a>
                </div>
            </div>
        </article>
    </section>

    <!-- Side Menu -->
    <aside class="w-full lg:w-1/4 bg-white shadow-xl rounded-lg p-6 lg:sticky lg:top-8">
        <h2 class="text-xl font-semibold mb-4">Navigation</h2>
        <ul class="space-y-4">
            <li><a href="#" class="text-gray-800 hover:text-red-500 transition-colors">Home</a></li>
            <li><a href="#" class="text-gray-800 hover:text-red-500 transition-colors">Latest News</a></li>
            <li><a href="#" class="text-gray-800 hover:text-red-500 transition-colors">Popular Stories</a></li>
            <li><a href="#" class="text-gray-800 hover:text-red-500 transition-colors">Categories</a></li>
            <li><a href="#" class="text-gray-800 hover:text-red-500 transition-colors">Contact Us</a></li>
        </ul>
    </aside>

</main>

@endsection
