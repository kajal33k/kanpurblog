@extends('component.main')
@section('content')
<div class="py-10 bg-gray-100">
    <div class="max-w-screen-lg mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg p-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Left Column -->
                <div class="lg:w-5/12">
                    <h1 class="text-2xl font-bold mb-4">General Customer Care & Technical Support</h1>
                    <p class="mb-6">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code, and you're done. <a href="https://htmlcodex.com/contact-form" class="text-blue-600 hover:text-blue-800">Download Now</a>.</p>
                    <div class="rounded overflow-hidden">
                        <iframe class="w-full h-96 rounded-lg" 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="lg:w-7/12">
                    <form action="" class="mb-8">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" name="name" placeholder="Your Name">
                            <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" name="email" placeholder="Enter Your Email">
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" name="phone" placeholder="Enter Your Phone">
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" name="subject" placeholder="Subject">
                            <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" rows="6" placeholder="Your Message"></textarea>
                            <button class="w-full  bg-red-600 text-white p-4 rounded-lg hover:bg-red-700 transition duration-200" type="submit">Submit Now</button>
                        </div>
                    </form>
                    
                    <!-- Contact Information -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-start bg-gray-200 p-6 rounded-lg shadow">
                            <i class="fas fa-map-marker-alt text-red-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold">Address</h4>
                                <p class="text-gray-600">123 Street New York, USA</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-gray-200 p-6 rounded-lg shadow">
                            <i class="fas fa-envelope text-red-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold ">Mail Us</h4>
                                <p class="text-gray-600">info@example.com</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-gray-200 p-6 rounded-lg shadow">
                            <i class="fas fa-phone-alt text-red-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold ">Telephone</h4>
                                <p class="text-gray-600">(+012) 3456 7890</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-gray-200 p-6 rounded-lg shadow">
                            <i class="fas fa-share-alt text-red-600 text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-bold text-lg">Share</h4>
                                <div class="flex space-x-4 mt-2">
                                    <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection