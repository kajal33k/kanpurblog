@extends('component.main')
@section('content')
<!-- Hero Section -->
<section class="relative py-20">
    <div class="absolute inset-0">
        <img src="assets\img\tinywow_app_62222055.png" alt="App Development" class="object-cover w-full h-full">
    </div>
    <div class="absolute inset-0 bg-black opacity-70"></div>
    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">App Development Solutions</h2>
        <p class="text-lg md:text-xl mb-8">Transforming ideas into powerful, user-friendly mobile applications</p>
        <a href="#" class="bg-white text-red-700 py-3 px-8 rounded-full font-semibold hover:bg-red-100 transition duration-300">Get Started</a>
    </div>
</section>


<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <!-- Introduction -->
    <section class="mb-16">
        <h3 class="text-3xl font-semibold mb-6 text-red-600">Our App Development Expertise</h3>
        <p class="text-lg mb-6">At Real Victory Groups, we specialize in creating cutting-edge mobile applications that drive business growth and enhance user engagement. Our team of skilled developers combines technical prowess with creative innovation to deliver apps that stand out in the crowded digital marketplace.</p>
    </section>

    <!-- Services Grid -->
    <section class="mb-16">
        <h3 class="text-3xl font-semibold mb-8 text-red-600">Our App Development Services</h3>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <i class="ri-android-line text-4xl text-red-500 mb-4"></i>
                <h4 class="text-xl font-semibold mb-3">Android App Development</h4>
                <p>Create robust and scalable applications for the world's most popular mobile platform.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <i class="ri-apple-fill text-4xl text-red-500 mb-4"></i>
                <h4 class="text-xl font-semibold mb-3">iOS App Development</h4>
                <p>Develop sleek and high-performance apps for Apple's iOS ecosystem.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <i class="ri-reactjs-line text-4xl text-red-500 mb-4"></i>
                <h4 class="text-xl font-semibold mb-3">Cross-Platform Development</h4>
                <p>Build once, deploy everywhere with efficient cross-platform solutions.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <i class="ri-cloud-line text-4xl text-red-500 mb-4"></i>
                <h4 class="text-xl font-semibold mb-3">Cloud Integration</h4>
                <p>Seamlessly integrate cloud services for scalable and efficient app performance.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <i class="ri-database-2-line text-4xl text-red-500 mb-4"></i>
                <h4 class="text-xl font-semibold mb-3">Backend Development</h4>
                <p>Create robust server-side solutions to power your mobile applications.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <i class="ri-tools-fill text-4xl text-red-500 mb-4"></i>
                <h4 class="text-xl font-semibold mb-3">App Maintenance & Support</h4>
                <p>Ensure your app stays up-to-date and runs smoothly with our ongoing support.</p>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="mb-16">
        <h3 class="text-3xl font-semibold mb-8 text-red-600">Our Development Process</h3>
        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <span class="text-2xl font-bold text-red-500">01</span>
                    <h5 class="text-xl font-semibold my-3">Ideation & Planning</h5>
                    <p>We work closely with you to refine your app idea and create a comprehensive development plan.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <span class="text-2xl font-bold text-red-500">02</span>
                    <h5 class="text-xl font-semibold my-3">Design & Prototyping</h5>
                    <p>Our designers create intuitive UI/UX designs and interactive prototypes for your approval.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <span class="text-2xl font-bold text-red-500">03</span>
                    <h5 class="text-xl font-semibold my-3">Development & Testing</h5>
                    <p>Our developers bring the design to life, ensuring robust functionality and thorough testing.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <span class="text-2xl font-bold text-red-500">04</span>
                    <h5 class="text-xl font-semibold my-3">Deployment & Support</h5>
                    <p>We handle the app launch process and provide ongoing support and maintenance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-red-600 text-white py-12 px-4 w-full rounded-lg text-center">
        <h3 class="text-3xl font-bold mb-4">Ready to Build Your Next App?</h3>
        <p class="mb-8 text-lg">Let's turn your vision into reality. Contact us today to start your app development journey.</p>
        <a href="#" class="bg-white text-red-600 py-3 px-8 rounded-full font-semibold hover:bg-red-100 transition duration-300">Get in Touch</a>
    </section>
</main>
@endsection