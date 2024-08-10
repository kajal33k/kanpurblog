@extends('component.main')
@section('content')

<!-- Main Content -->
<main class="container mx-auto p-6 flex flex-col lg:flex-row gap-6">
    <!-- Main Content Section -->
    <div class="flex-1">
        <!-- Interesting Facts About Bithoor -->
        <section id="famous-places" class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Interesting Facts About Bithoor</h2>
            <p class="text-gray-700">On 27/12/2020, Ravi Pandey shared various interesting and lesser-known facts about Bithoor, located just 17 km from Kanpur.</p>

            <div class="mt-4">
                <h3 class="text-xl font-semibold">Bithoor - A Historic and Sacred Place</h3>
                <div class="flex gap-2">
                    <div>
                        <img src="assets/img/bithoor.png" alt="Brahmavart Ghat" class="w-full h-1/2 object-cover rounded-lg mb-4">
                    </div>
                    <div>
                        <p class="text-gray-700 mt-2">Bithoor, located just 17 km from Kanpur, is renowned as a city of religion, war, and sanctity. It is known as the penance site of Valmiki. The town is associated with several historical and religious events, including:</p>
                        <ul class="list-disc pl-5 mt-2 text-gray-700">
                            <li>Valmiki's penance and the birthplace of Lava and Kusha after Sita’s exile.</li>
                            <li>Brahma’s penance and the creation of the world, with Brahmavart Ghat being a significant site.</li>
                            <li>The first revolt of the Indian freedom struggle, which began here in 1857.</li>
                            <li>Role in the First War of Indian Independence, with significant events and monuments.</li>
                            <li>Swarg Ki Sidhi - a site related to revolutionary planning and resistance against colonial rule.</li>
                            <li>321-acre cantonment area developed by the British for military purposes.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mx-auto p-6">
            <section class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Where Brahma Created the Universe</h2>
             <div class="flex gap-4">
                <div>
                    <img src="assets\img\bithoor2.png" alt="Brahmavart Ghat" class="w-full h-1/2 object-cover rounded-lg mb-4">
                  </div>
                    <div>
                        <p class="text-gray-700">
                            According to Hindu scriptures, Brahma performed penance here before creating the universe. Brahmavart Ghat, which is still present today, is a significant site where hundreds of people come daily for darshan (spiritual visit). 
                        </p>
                        <p class="text-gray-700 mt-2">
                            It is also believed that Dhruv performed penance here for Lord Vishnu. The land of Bithoor, once known as Brahmavart in ancient times, offers a tranquil escape from the city’s hustle and bustle. With numerous historical and religious sites, Bithoor, situated by the banks of the Ganges, holds a special place in ancient Indian history and is associated with various legends and tales.
                        </p>
                    </div>
             </div>
            </section>
        </div>

    <div class="container mx-auto p-6">
        <section class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Where the First Flames of Rebellion Ignited</h2>
           <div class="flex gap-4">
            <div>
                <img src="assets\img\bithoor3.png" alt="Swatantrata Sangram" class="w-full h-1/2 object-cover rounded-lg mb-4">
               </div>
                <div>
                    <p class="text-gray-700">
                        Bithoor has a profound connection with the Indian freedom struggle and movements. The first war of Indian independence, which began in 1857, started here in Bithoor. Located 17 kilometers from Kanpur on the Kannauj Road, Bithoor is a small town by the Ganges River that once served as a center of power.
                    </p>
                    <p class="text-gray-700 mt-2">
                        Today, the old historical buildings, including Baradari and temples, stand in a dilapidated condition. However, the local residents preserve the memories of this historical period, which are taught in schools across the country. Bithoor's role in the struggle for independence remains a significant part of its heritage.
                    </p>
                </div>
           </div>
        </section>
    </div>
    <div class="container mx-auto p-6">
        <section class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Role of Bithoor in the Revolt of 1857</h2>
           <div class="flex gap-4">
            <div>
                <img src="assets\img\Revolt.png" alt="Gadar in Bithoor" class="w-full h-1/2 object-cover rounded-lg mb-4">
               </div>
                <div>
                    <p class="text-gray-700">
                        Bithoor played an unparalleled role in India's struggle for independence. The first spark of the 1857 revolt was ignited here. This town was the land of figures like Nana Rao and Tatya Tope. The Tope family has descendants still residing in Barrackpore, and Jhansi’s Rani Lakshmi Bai spent her childhood here. During that period, the British soldiers fleeing Kanpur were executed at Sati Chaura Ghat.
                    </p>
                    <p class="text-gray-700 mt-2">
                        In retaliation, the British destroyed entire villages and hanged people from trees. After their victory, the British demolished Nana Rao Peshwa’s palace in Bithoor. When Tatya Tope's relatives were released from Gwalior Jail in 1860, they returned to find their homes had been burned down.
                    </p>
                </div>
           </div>
        </section>
    </div>

    <div class="container mx-auto p-6">
        <section class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Swarg Ki Sidhi in Bithoor</h2>
           <div class="flex gap-4">
            <div>
                <img src="assets\img\bithoor4.png" alt="Swarg Ki Sidhi" class="w-full h-1/2 object-cover rounded-lg mb-4">
               </div>
                <div>
                    <p class="text-gray-700">
                        At the site of the flagpole established by Baba Raghav Das in Bithoor, plans for the rebellion that was sparked in Kanpur were once made. The stone at the flagpole site bears witness to the meetings held by Nana Saheb Peshwa, Tatya Tope, Azimulla Khan, and Rao Saheb. From here, the message of organizing armed revolution across the country was sent out.
                    </p>
                    <p class="text-gray-700 mt-2">
                        There is an old well in Nana's fort, and legend has it that this well supplied water to Nana’s army. Upon entering Bithoor, you can find the "Swarg Ki Sidhi" at Valmiki Ashram. This tower, with 365 niches corresponding to the days of the year, was used by revolutionaries to keep watch over Bithoor and the Ganges, observing British activities. Each niche would have a lamp lit daily to keep track of the day.
                    </p>
                </div>
           </div>
        </section>
    </div>
    <div class="container mx-auto p-6">
        <section class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Bithoor Cantonment Area</h2>
            <div class="flex gap-4">
                <div>
                    <img src="assets\img\bithoor5.png" alt="Bithoor Cantonment" class="w-full h-1/2 object-cover rounded-lg mb-4">
                </div>
               <div>
                <p class="text-gray-700">
                    During British rule in Kanpur, a cantonment area was developed in the eastern direction for the military. In the west, a cantonment area of 321 acres was established in Ramel, Chaudhri Pura, and Bithoor Khurd for Peshwa Bajirao, also known as Arazi Lashkar. This area is still recorded as Arazi Lashkar in revenue records. Following the instructions of the then Governor General, 321 acres of land was separated from Ramel, Chaudhri Pura, Mohammadpur, and Bithoor Khurd to form the cantonment area. Later, in 1895, the entire ownership of this land was purchased for 7,000 rupees from the then Governor of the North-Western Provinces by the family of Bithoor's Subedar.
                </p>
               </div>
            </div>
        </section>
    </div>
    <div class="container mx-auto p-6">
        <section class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Pratiracha Karkhana in Nana Rao's Fort</h2>
           <div class="flex gap-4">
            <div>
                <img src="assets\img\bithoor6.png" alt="Pratiracha Karkhana" class="w-full h-1/2 object-cover rounded-lg mb-4">
               </div>
                <div>
                    <p class="text-gray-700">
                        In 1858-59, after the British took control of Nana Rao's fort, they established a unit for making leather equipment for their cavalry. Although the Ministry of Defence renamed the Harness and Saddlery Factory to Ordnance Equipment Factory (OEF) three decades ago, locals still refer to it by its old name, the fort. The factory's hospital near the OEF Stadium houses an anchor from Nana Rao Peshwa's era and a tunnel leading to Bithoor. This tunnel is said to be wide enough for two horsemen to ride side by side. Even today, the outer parts of the factory still show glimpses of the old fort.
                    </p>
                </div>
           </div>
        </section>
    </div>

        <!-- Your other sections remain unchanged -->
    </div>

    <!-- Aside Section -->
    <aside class="lg:w-1/4 bg-white rounded-lg shadow-lg p-6 mb-6 lg:mb-0">
        <h3 class="text-xl font-semibold border-b-2 border-gray-300 pb-2 mb-4">Additional Information</h3>
        <ul class="list-disc pl-5 text-gray-700">
            <li><strong>Contact Number:</strong> 7753800444</li>
            <li><strong>Address:</strong> Near Lucky Restaurant, Awadhpuri, Lakhanpur, Kaliyanpur, Kanpur</li>
            <li>Best Software IT Company in Kanpur</li>
            <li>DSLR Camera Rental Available in Kanpur</li>
            <li>Interesting Fact: Bhitargaon Temple – A scientific curiosity, providing accurate monsoon information</li>
            <li>Top 10 Engineering Colleges in Kanpur</li>
            <li>Top 10 Richest Persons in Kanpur</li>
        </ul>
        <div class="flex space-x-4 mt-4">
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-facebook-line"></i></a>
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-twitter-line"></i></a>
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-instagram-line"></i></a>
            <a href="#" class="text-gray-900 hover:text-red-600"><i class="ri-linkedin-line"></i></a>
        </div>
    </aside>
</main>

@endsection
