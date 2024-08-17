@extends('component.main')
@section('content')
{{-- <div class="relative w-full h-80 lg:h-screen overflow-hidden">
    <!-- Slider Container -->
    <div class="slider-container relative w-full h-80 lg:h-2/3 overflow-hidden">
        <div class="slider flex transition-transform duration-700 ease-in-out w-full h-full">
            <!-- Slide 1 -->
            <div class="slide w-full flex-shrink-0 relative h-full">
                <img src="assets/img/news1.jpg" class="w-full h-full object-cover" alt="Slide 1">
                <div class="overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h2 class="text-white text-3xl md:text-5xl font-extrabold tracking-wide">About Us</h2>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide w-full flex-shrink-0 relative h-full">
                <img src="assets/img/news2.jpg" class="w-full h-full object-cover" alt="Slide 2">
                <div class="overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h2 class="text-white text-3xl md:text-5xl font-extrabold tracking-wide">About Us</h2>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide w-full flex-shrink-0 relative h-full">
                <img src="assets/img/news3.jpg" class="w-full h-full object-cover" alt="Slide 3">
                <div class="overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h2 class="text-white text-3xl md:text-5xl font-extrabold tracking-wide">About Us</h2>
                </div>
            </div>
        </div>
    
        <!-- Navigation Buttons -->
        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 bg-opacity-60 hover:bg-opacity-80 text-white p-3 rounded-full shadow-lg transition duration-300">
            &#10094;
        </button>
        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 bg-opacity-60 hover:bg-opacity-80 text-white p-3 rounded-full shadow-lg transition duration-300">
            &#10095;
        </button>
    </div>
</div> --}}
<div class="relative">
    <img src="assets/img/aboutt.jpeg" alt="About Image" class="w-full h-64 object-cover rounded-lg">
    <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
        <p class="text-white text-2xl font-semibold p-4">
            About Us
        </p>
    </div>
</div>

<!-- About Us Section -->
<div class="container mx-auto px-4 lg:px-8 py-12 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
        <div class="lg:order-2 flex flex-col justify-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">About Us</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                Real Victory Groups provides comprehensive IT solutions and services including Web Designing & Development, Website Maintenance, Mobile Application Design & Development, Search Engine Optimization, E-commerce Solutions, Google Adwords & PPC (Pay per click), Website Promotion, ERP Software, Domain & Hosting, and software development. Real Victory Groups is happy to offer you a wide range of business services to meet the immediate and future needs of organizations and institutions globally.
            </p>
        </div>
        <div class="lg:order-1">
            <img src="assets/img/aboutimg.webp" alt="About Us Image" class="object-cover h-full w-full rounded-lg shadow-lg">
        </div>
    </div>
</div>
 <!-- Banner Start -->
 <div class="py-10 my-0 bg-slate-400">
    <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-3xl font-bold mb-4 text-red-700">Newsers</h1>
                <h2 class="text-2xl font-semibold mb-4">Get Every Weekly Updates</h2>
                <p class="text-black mb-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...</p>
                <div class="relative mx-auto lg:mx-0 w-full lg:w-auto">
                    <input class="w-full lg:w-80 px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500" type="email" placeholder="Your Email">
                    <button type="submit" class="absolute top-0 right-0 mt-1 mr-1 py-2 px-4 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none">Subscribe Now</button>
                </div>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0 mx-4">
                <img src="assets\img\blog.jpg" class="rounded-lg shadow-lg w-full" alt="Banner Image">
            </div>
        </div>
    </div>
</div>

@endsection
