@extends('component.main')
@section('content')

    <!-- Header Section -->
    <header class="bg-red-600 text-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">13 Best Places to Visit in Kanpur</h1>
            <p class="mt-2">Explore the hidden gems of Kanpur, the third-largest city in Uttar Pradesh, situated along the banks of the Ganga River.</p>
        </div>
    </header>

    <!-- Main Layout: Aside + Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row gap-8">

        <!-- Main Content -->
        <main class="md:w-3/4 space-y-8">

            <!-- Place 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
                <div>
                    <img src="assets/img/Allen Forest Zoo.png" alt="Allen Forest Zoo" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold">1. Allen Forest Zoo</h2>
                    <p class="mt-2 text-gray-600">The Allen Forest Zoo is one of the few zoos in India that is situated within a natural forest. This zoo is home to a variety of animals and is a popular spot for nature and wildlife enthusiasts.</p>
                </div>
            </div>

            <!-- Place 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
                <img src="assets/img/jk.png" alt="JK Temple" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold">2. JK Temple</h2>
                    <p class="mt-2 text-gray-600">The JK Temple, also known as the Radhakrishna Temple, is a modern Hindu temple that combines traditional and contemporary architecture. It's a serene place for worship and meditation.</p>
                </div>
            </div>

            <!-- Place 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
                <img src="assets/img/church.cms" alt="Kanpur Memorial Church" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold">3. Kanpur Memorial Church</h2>
                    <p class="mt-2 text-gray-600">Built in 1875 in memory of the British who lost their lives during the Siege of Cawnpore, this Gothic-style church is a significant historical and architectural landmark.</p>
                </div>
            </div>
  <!-- Place 4 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\Moti Jheel.png" alt="Moti Jheel" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">4. Moti Jheel</h2>
        <p class="mt-2 text-gray-600">Moti Jheel is a beautiful lake and recreational area in the heart of Kanpur. It's a popular spot for families and couples to enjoy boating and picnics.</p>
    </div>
</div>

<!-- Place 5 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\nanarao.jpg" alt="Nana Rao Park" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">5. Nana Rao Park</h2>
        <p class="mt-2 text-gray-600">Nana Rao Park is the largest park in Kanpur, named after Nana Sahib. The park is a peaceful retreat within the city, ideal for morning walks and outdoor activities.</p>
    </div>
</div>

<!-- Place 6 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\iskcon-kanpur.jpg" alt="ISKCON Temple" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">6. ISKCON Temple</h2>
        <p class="mt-2 text-gray-600">The ISKCON Temple in Kanpur is a spiritual haven dedicated to Lord Krishna. The temple is renowned for its beautiful architecture and peaceful ambiance.</p>
    </div>
</div>

<!-- Place 7 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\phool-bagh.jpg" alt="Phool Bagh" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">7. Phool Bagh</h2>
        <p class="mt-2 text-gray-600">Phool Bagh is a historic park in Kanpur, often used for public meetings and gatherings. It houses the Ganesh Shankar Vidyarthi Memorial and is a peaceful place to visit.</p>
    </div>
</div>

<!-- Place 8 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\kamla.jpg" alt="Kamla Retreat" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">8. Kamla Retreat</h2>
        <p class="mt-2 text-gray-600">Kamla Retreat is a beautiful estate with a museum, swimming pool, and lush gardens. It's a popular tourist attraction, especially for those interested in history and nature.</p>
    </div>
</div>

<!-- Place 9 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\Massacre_Ghat.jpg" alt="Massacre Ghat" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">9. Massacre Ghat</h2>
        <p class="mt-2 text-gray-600">Massacre Ghat, also known as Satti Chaura Ghat, is a historically significant site related to the Indian Rebellion of 1857. It's a place of great historical importance.</p>
    </div>
</div>

<!-- Place 10 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\blueworld.jpg" alt="Blue World Theme Park" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">10. Blue World Theme Park</h2>
        <p class="mt-2 text-gray-600">Blue World Theme Park is one of the largest and most popular amusement parks in Kanpur. It offers a variety of rides, attractions, and entertainment options for all age groups.</p>
    </div>
</div>

<!-- Place 11 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\Bithoor.png" alt="Bithoor" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">11. Bithoor</h2>
        <p class="mt-2 text-gray-600">Bithoor is a small town near Kanpur, known for its religious significance and beautiful temples. It's also linked to several important events in Indian mythology and history.</p>
    </div>
</div>

<!-- Place 12 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\green-park-stadium.jpg" alt="Green Park Stadium" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">12. Green Park Stadium</h2>
        <p class="mt-2 text-gray-600">Green Park Stadium is a historic cricket stadium in Kanpur. It's one of the oldest cricket grounds in India and has hosted numerous international matches.</p>
    </div>
</div>

<!-- Place 13 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex gap-4">
    <img src="assets\img\Kanpur_Ganga_Barrage.webp" alt="Ganga Barrage" class="w-full h-48 object-cover">
    <div class="p-6">
        <h2 class="text-2xl font-bold">13. Ganga Barrage</h2>
        <p class="mt-2 text-gray-600">Ganga Barrage is a popular hangout spot in Kanpur, offering stunning views of the Ganges River. It's a great place to relax and enjoy the scenic beauty of the river.</p>
    </div>
</div>

            <!-- Additional places can be added here following the same pattern... -->

        </main>

        <!-- Aside Section -->
        <aside class="md:w-1/4 bg-white shadow-lg rounded-lg p-6 space-y-6">
            <!-- Search Box -->
            <div class="mb-6">
                <input type="text" placeholder="Search places..." class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- Popular Places List -->
            <div>
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Popular Places</h3>
                <ul class="space-y-2">
                    <li><a href="#allen-forest-zoo" class="text-red-600 hover:underline">Allen Forest Zoo</a></li>
                    <li><a href="#jk-temple" class="text-red-600 hover:underline">JK Temple</a></li>
                    <li><a href="#kanpur-memorial-church" class="text-red-600 hover:underline">Kanpur Memorial Church</a></li>
                    <li><a href="#moti-jheel" class="text-red-600 hover:underline">Moti Jheel</a></li>
                    <li><a href="#nana-rao-park" class="text-red-600 hover:underline">Nana Rao Park</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Contact Information</h3>
                <p class="text-gray-600">For more details, please contact the Kanpur Tourism Office:</p>
                <p class="text-gray-600 mt-2"><strong>Email:</strong> tourism@kanpur.in</p>
                <p class="text-gray-600 mt-2"><strong>Phone:</strong> +91 12345 67890</p>
            </div>
        </aside>

    </div>

@endsection
