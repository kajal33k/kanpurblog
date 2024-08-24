@extends('component.main')
@section('content')

<section class="relative py-20" data-aos="fade-up">
    <div class="absolute inset-0" data-aos="fade-up">
        <img src="assets\img\websit.avif" alt="App Development" class="object-cover w-full h-full">
    </div>
    <div class="absolute inset-0 bg-black opacity-70" data-aos="fade-up"></div>
    <div class="relative z-10 container  px-4 text-center text-white">
        <h2 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">About Web Design</h2>
        <p class="text-lg md:text-xl mb-8" data-aos="fade-up">At Real Victory Groups, we specialize in creating stunning, functional websites for businesses in Kanpur and beyond. Our web design services are tailored to meet the unique needs of each client, ensuring a digital presence that stands out in today's competitive online landscape.s</p>
        <a href="#" class="bg-white text-red-700 py-3 px-8 rounded-full font-semibold hover:bg-red-100 transition duration-300" data-aos="fade-up">Get Started</a>
    </div>
</section>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8" data-aos="fade-up">

        

        <section class="grid md:grid-cols-2 gap-8 mb-12 mt-2" data-aos="fade-up">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-semibold mb-4 text-red-600" data-aos="fade-up">Our Approach</h3>
                <p>We combine creativity with technical expertise to deliver websites that not only look great but also perform exceptionally. Our design process focuses on user experience, responsive layouts, and SEO-friendly structures.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                <h3 class="text-2xl font-semibold mb-4 text-red-600" data-aos="fade-up">Technologies We Use</h3>
                <ul class="list-disc list-inside" data-aos="fade-up">
                    <li>HTML5 & CSS3</li>
                    <li>JavaScript & Modern Frameworks</li>
                    <li>Responsive Design Techniques</li>
                    <li>Content Management Systems</li>
                </ul>
            </div>
        </section>

        <section class="mb-12">
            <h3 class="text-3xl font-semibold mb-6 text-red-700 text-center" data-aos="fade-up">Our Web Design Services</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="ri-layout-4-line text-4xl text-red-500 mb-4 flex justify-center" data-aos="fade-up"></i>
                    <h4 class="text-xl font-semibold mb-2 text-center" data-aos="fade-up">Custom Website Design</h4>
                    <p class="text-center" data-aos="fade-up">Tailored designs that reflect your brand identity and meet your specific business needs.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <i class="ri-smartphone-line text-4xl text-red-500 mb-4 flex justify-center"></i>
                    <h4 class="text-xl font-semibold mb-2 text-center" data-aos="fade-up">Responsive Web Development</h4>
                    <p>Websites that look and function flawlessly on all devices and screen sizes.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <i class="ri-shopping-cart-2-line text-4xl text-red-500 mb-4 flex justify-center"></i>
                    <h4 class="text-xl font-semibold mb-2 text-center" data-aos="fade-up">E-commerce Solutions</h4>
                    <p>Robust online stores with secure payment gateways and user-friendly interfaces.</p>
                </div>
            </div>
        </section>
        <section class="max-w-4xl mx-auto mb-12 px-4">
            <h3 class="text-3xl font-semibold mb-8 text-red-700 text-center" data-aos="fade-up">Why Choose Us?</h3>
            <ul class="list-none space-y-6">
                <li class="flex items-start shadow-lg rounded-lg p-6 bg-white">
                    <i class="ri-check-line text-3xl text-green-500 mr-4" data-aos="fade-up"></i>
                    <span class="text-lg font-medium" data-aos="fade-up">Local expertise with a focus on Kanpur businesses</span>
                </li>
                <li class="flex items-start shadow-lg rounded-lg p-6 bg-white">
                    <i class="ri-check-line text-3xl text-green-500 mr-4" data-aos="fade-up"></i>
                    <span class="text-lg font-medium" data-aos="fade-up">Customized solutions tailored to your specific needs</span>
                </li>
                <li class="flex items-start shadow-lg rounded-lg p-6 bg-white">
                    <i class="ri-check-line text-3xl text-green-500 mr-4" data-aos="fade-up"></i>
                    <span class="text-lg font-medium" data-aos="fade-up">Ongoing support and maintenance services</span>
                </li>
                <li class="flex items-start shadow-lg rounded-lg p-6 bg-white">
                    <i class="ri-check-line text-3xl text-green-500 mr-4" data-aos="fade-up"></i>
                    <span class="text-lg font-medium" data-aos="fade-up">Affordable pricing without compromising on quality</span>
                </li>
            </ul>
        </section>
        
    </main>
     <!-- Call to Action -->
     <section class="bg-red-700 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4" data-aos="fade-up">Ready to Start Your Web Design Project?</h3>
            <p class="mb-6" data-aos="fade-up">Let's create a website that will help your business thrive in the digital world.</p>
            <a href="{{Route('contact')}}" class="bg-white text-red-700 py-2 px-6 rounded-full font-semibold hover:bg-red-100 transition duration-300" data-aos="fade-up">Contact Us Today</a>
        </div>
    </section>

@endsection