@extends('component.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <!-- Main Content -->
        <div class="md:col-span-3">
            <!-- Historical Context Section -->
            <section class="bg-white shadow-lg rounded-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-red-600 mb-4">Historical Context</h2>
                <div class="flex gap-4">
                    <div class="w-1/3">
                        <img src="assets/img/m1.png" alt="Historical Context Image" class="w-full object-cover rounded-lg">
                    </div>
                    <div class="w-2/3">
                        <p class="text-lg text-gray-700 mb-4">
                            Kanpur earned the nickname "Manchester of India" during the British colonial period due to its booming textile industry, much like Manchester in England, which was renowned for its cotton mills. In the 19th and early 20th centuries, Kanpur was a major hub for cotton and woolen textiles. The city’s industrial infrastructure, including numerous mills and factories, mirrored the textile boom that Manchester experienced during the Industrial Revolution.
                        </p>
                        <p class="text-lg text-gray-700">
                            The city's strategic location on the banks of the Ganges River facilitated the transportation of raw materials and finished goods, further boosting its textile industry. Kanpur's development as an industrial center was crucial to its economy, establishing it as a significant player in India's industrial landscape.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Economic Significance Section -->
            <section class="bg-white shadow-lg rounded-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-red-600 mb-4">Economic Significance</h2>
                <div class="flex gap-4">
                    <div class="w-1/3">
                        <img src="assets/img/m2.png" alt="Economic Significance Image" class="w-full object-cover rounded-lg">
                    </div>
                    <div class="w-2/3">
                        <p class="text-lg text-gray-700 mb-4">
                            The growth of Kanpur’s textile industry was a major factor in earning its Manchester nickname. By the late 19th century, the city had a large number of cotton mills and woolen factories. Kanpur's industrial output included a variety of textile products, from fabrics to garments, contributing significantly to India's export economy.
                        </p>
                        <p class="text-lg text-gray-700">
                            Kanpur’s industrial prowess extended beyond textiles, encompassing a range of industries including leather and engineering. The city's infrastructure, such as railways and ports, played a pivotal role in facilitating trade and industry. Despite facing challenges in recent decades, Kanpur’s historical industrial achievements continue to be a source of pride.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Modern-Day Kanpur Section -->
            <section class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-3xl font-semibold text-red-600 mb-4">Modern-Day Kanpur</h2>
                <div class="flex gap-4">
                    <div class="w-1/3">
                        <img src="assets/img/m3.png" alt="Modern-Day Kanpur Image" class="w-full object-cover rounded-lg">
                    </div>
                    <div class="w-2/3">
                        <p class="text-lg text-gray-700 mb-4">
                            Today, Kanpur continues to be an important industrial city, though its focus has diversified beyond textiles. The city is known for its contributions to the leather industry, engineering, and education. Despite economic shifts, Kanpur’s legacy as the "Manchester of India" remains a testament to its historical significance in India's industrial development.
                        </p>
                        <p class="text-lg text-gray-700">
                            The nickname reflects not just a comparison to Manchester but also the city's role in shaping India's industrial landscape. Kanpur's evolution from a textile powerhouse to a diversified industrial hub underscores its resilience and ongoing importance in India's economic fabric.
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Aside Section -->
        <aside class="md:col-span-1 space-y-8">
            <!-- Weather Report Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Weather Report</h3>
                <div class="flex items-center mb-4">
                    <img src="assets/img/weather.webp" alt="Weather Icon" class="w-16 h-16 mr-4">
                    <div>
                        <p class="text-gray-800 font-semibold text-2xl">28°C</p>
                        <p class="text-gray-600">Sunny</p>
                    </div>
                </div>
                <p class="text-gray-700">Today's weather in Kanpur is sunny with a temperature of 28°C. Expect clear skies throughout the day.</p>
                <a href="https://forecast7.com/en/26d4580d33/kanpur/" class="text-blue-600 hover:underline">View Forecast</a>
            </div>

            <!-- Contact Form Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Us</h2>
                <form action="#" method="post" class="space-y-4">
                    <div class="flex flex-col">
                        <label for="name" class="text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="website" class="text-gray-700">Website</label>
                        <input type="text" id="website" name="website" class="p-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col">
                        <label for="comment" class="text-gray-700">Comment</label>
                        <textarea id="comment" name="comment" rows="4" class="p-2 border border-gray-300 rounded-md" required></textarea>
                    </div>
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Submit</button>
                </form>
            </div>
        </aside>
    </div>
@endsection
