@extends('component.main')
@section('content')
<div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-center mb-8">Top 10 Food Places in Kanpur</h1>

        <div class="space-y-6 grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Restaurant 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">The Yellow Chilli</h2>
                <div>
                    <img src="assets\img\f1.png" alt="" class="object-cover w-full h-1/2">
                </div>
               <div>
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Indian, North Indian</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 77/32, The Mall, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Known for its innovative take on traditional Indian dishes. Signature dishes include Kashmiri Pulao and Peshawari Naan. The ambiance is elegant, making it ideal for both family dinners and business lunches.</p>
               </div>
            </div>

            <!-- Restaurant 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Biryani Blues</h2>
                <div>
                    <img src="assets\img\f2_deblurred.jpeg" alt="" class="object-cover w-full h-1/2">
                </div>
                <div>
                    <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Indian, Biryani</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 14/146, Azad Nagar, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Specializes in biryanis with a variety of options including Hyderabadi and Lucknowi Biryani. The restaurant offers a cozy atmosphere and fast service. The biryani here is renowned for its authentic taste and rich flavors.</p>
                </div>
            </div>

            <!-- Restaurant 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Cafe 7</h2>
                <img src="assets\img\f3.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Continental, Cafe</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 2/47, Civil Lines, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> A popular spot for a casual dining experience. Offers a range of dishes from pastas and sandwiches to gourmet coffees. The ambiance is relaxed, perfect for hangouts and casual meetings.</p>
            </div>

            <!-- Restaurant 4 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Rajasthan Bhojnalaya</h2>
                <img src="assets\img\f4.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Rajasthani, Vegetarian</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 112/113, Keshav Nagar, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Features traditional Rajasthani cuisine with an emphasis on vegetarian dishes. The Dal Baati Churma and Gatte Ki Sabzi are highly recommended. The setting is traditional, providing an authentic Rajasthani dining experience.</p>
            </div>

            <!-- Restaurant 5 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Moti Mahal Delux</h2>
                <img src="assets\img\f5.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Indian, Mughlai</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 5/1, Kalyanpur, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Renowned for its Mughlai cuisine with popular dishes like Butter Chicken and Tandoori items. The restaurant offers a classic Mughlai dining experience with excellent service.</p>
            </div>

            <!-- Restaurant 6 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Gola Sizzlers</h2>
                <img src="assets\img\f6.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Continental, Sizzlers</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 10/12, Swaroop Nagar, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Known for its sizzlers and continental dishes. The ambiance is lively, making it a great place for casual dining and celebrations. Don’t miss their sizzling platters and desserts.</p>
            </div>

            <!-- Restaurant 7 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Tandoor Hut</h2>
                <img src="assets\img\f7.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Indian, North Indian</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 34/2, Mall Road, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Famous for its tandoori dishes and kebabs. Offers a warm, inviting atmosphere with a variety of grilled options. Ideal for those who enjoy robust flavors and traditional cooking techniques.</p>
            </div>

            <!-- Restaurant 8 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Lazeez Restaurant</h2>
                <img src="assets\img\f8.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Indian, Mughlai</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 22/1, Keshav Nagar, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Offers a variety of Mughlai dishes with a special focus on kebabs and curries. The restaurant is known for its flavorful dishes and good service.</p>
            </div>

            <!-- Restaurant 9 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">The Great Indian Kitchen</h2>
                <img src="assets\img\f9.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Indian, North Indian</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 45/8, Civil Lines, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Renowned for its rich and flavorful Indian dishes. The restaurant provides a comfortable setting with a focus on traditional recipes and quality ingredients.</p>
            </div>

            <!-- Restaurant 10 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-red-600 p-4 text-center">Saffron Restaurant</h2>
                <img src="assets\img\f10.png" alt="" class="object-cover w-full h-1/2">
                <p class="text-lg text-gray-700"><strong>Cuisine:</strong> Indian, Multi-Cuisine</p>
                <p class="text-lg text-gray-700"><strong>Location:</strong> 3/9, Mall Road, Kanpur</p>
                <p class="text-lg text-gray-700"><strong>Highlights:</strong> Offers a wide range of dishes from Indian to international cuisine. The ambiance is upscale, suitable for special occasions and fine dining experiences.</p>
            </div>
        </div>
    </div>

</body>
</html>
