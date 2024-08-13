@extends('component.main')
@section('content')


    <!-- Hero Section -->
    <section class="bg-red-700 text-white py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-5xl font-bold mb-6">Exploring the Future of Technology</h2>
            <p class="text-xl mb-8">Discover the latest trends in Kanpur, global innovations, and the transformative power of AI</p>
            <a href="#" class="bg-white text-red-700 py-3 px-8 rounded-full font-semibold hover:bg-red-100 transition duration-300">Learn More</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Latest Technology Trends in Kanpur -->
        <section class="mb-16">
            <h3 class="text-3xl font-semibold mb-6 text-red-600">Latest Technology Trends in Kanpur</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">IT Services Boom</h4>
                    <p>Kanpur is witnessing a surge in IT service companies, offering software development, web design, and digital marketing solutions to local and global clients.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">EdTech Revolution</h4>
                    <p>Educational technology startups are flourishing in Kanpur, providing innovative learning solutions to students and institutions across the region.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">Smart City Initiatives</h4>
                    <p>Kanpur is embracing smart city technologies, implementing IoT solutions for traffic management, waste management, and public services.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">Fintech Growth</h4>
                    <p>The city is seeing a rise in fintech startups, offering digital payment solutions and financial services to the local population.</p>
                </div>
            </div>
        </section>

        <!-- Latest Technology Trends in 2024 -->
        <section class="mb-16">
            <h3 class="text-3xl font-semibold mb-6 text-red-600">Latest Technology Trends in 2024</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="ri-ai-generate text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Artificial Intelligence & Machine Learning</h4>
                    <p>AI and ML continue to revolutionize industries, with advancements in natural language processing and computer vision.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="ri-cloud-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Edge Computing</h4>
                    <p>Edge computing is gaining traction, bringing computation and data storage closer to the devices where it's being gathered.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="ri-fingerprint-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Cybersecurity Advancements</h4>
                    <p>With increasing digital threats, cybersecurity technologies are evolving to protect individuals and organizations.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="ri-virtual-reality-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Extended Reality (XR)</h4>
                    <p>XR technologies, including AR and VR, are finding applications beyond gaming in education, healthcare, and business.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="ri-robot-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Autonomous Systems</h4>
                    <p>Self-driving vehicles, drones, and robots are becoming more sophisticated and finding new use cases.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <i class="ri-leaf-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Green Technology</h4>
                    <p>Sustainable and eco-friendly technologies are gaining importance in the fight against climate change.</p>
                </div>
            </div>
        </section>

        <!-- How AI is Changing the World -->
        <section class="mb-16">
            <h3 class="text-3xl font-semibold mb-6 text-red-600">How AI is Changing the World</h3>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <p class="text-lg mb-6">Artificial Intelligence is revolutionizing various aspects of our lives and industries:</p>
                <ul class="list-disc list-inside space-y-4">
                    <li><span class="font-semibold">Healthcare:</span> AI is improving diagnostics, drug discovery, and personalized treatment plans.</li>
                    <li><span class="font-semibold">Finance:</span> AI-powered algorithms are enhancing fraud detection, risk assessment, and automated trading.</li>
                    <li><span class="font-semibold">Education:</span> AI is enabling personalized learning experiences and intelligent tutoring systems.</li>
                    <li><span class="font-semibold">Transportation:</span> Self-driving vehicles and smart traffic management systems are becoming a reality.</li>
                    <li><span class="font-semibold">Customer Service:</span> AI-powered chatbots and virtual assistants are transforming customer interactions.</li>
                    <li><span class="font-semibold">Manufacturing:</span> AI is optimizing production processes and enabling predictive maintenance.</li>
                    <li><span class="font-semibold">Environmental Protection:</span> AI is being used to monitor and predict environmental changes, aiding conservation efforts.</li>
                </ul>
                <p class="mt-6 text-lg">As AI continues to evolve, it promises to bring about unprecedented changes in how we live, work, and interact with the world around us.</p>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-red-600 text-white py-12 px-4 rounded-lg text-center">
            <h3 class="text-3xl font-bold mb-4">Stay Ahead of the Curve</h3>
            <p class="mb-8 text-lg">Want to learn more about how these technologies can benefit your business? Let's connect!</p>
            <a href="#" class="bg-white text-red-600 py-3 px-8 rounded-full font-semibold hover:bg-red-100 transition duration-300">Contact Us Today</a>
        </section>
    </main>

    
@endsection