@extends('component.main')
@section('content')
<main class="container mx-auto p-4 flex flex-wrap">
        <section class="w-full md:w-3/4 p-4">
            <h2 class="text-2xl font-semibold mb-4">Explore Kanpur</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\zoo.png" alt="">
                    <h3 class="text-xl font-semibold">Kanpur Zoo</h3>
                    <p class="mt-2">A large zoo with a variety of animals and lush green surroundings, ideal for family outings.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Ganges Barrage.png" alt="">
                    <h3 class="text-xl font-semibold">Ganges Barrage</h3>
                    <p class="mt-2">An impressive barrage on the Ganges River, offering beautiful views and a peaceful environment.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Jama Masjid.png" alt="">
                    <h3 class="text-xl font-semibold">Jama Masjid</h3>
                    <p class="mt-2">A historic mosque with stunning Mughal architecture, reflecting the rich cultural heritage of Kanpur.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Kanpur Memorial Church.png" alt="">
                    <h3 class="text-xl font-semibold">Kanpur Memorial Church</h3>
                    <p class="mt-2">A colonial-era church with beautiful Gothic architecture and a serene atmosphere.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Bithoor.png" alt="">
                    <h3 class="text-xl font-semibold">Bithoor</h3>
                    <p class="mt-2">A historic town on the banks of the Ganges, known for its religious significance and scenic beauty.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\memorial.png" alt="">
                    <h3 class="text-xl font-semibold">Rani Laxmi Bai Memorial</h3>
                    <p class="mt-2">A memorial dedicated to the valiant queen Rani Laxmi Bai, a symbol of resistance during the Indian Rebellion of 1857.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\The Residency.png" alt="">
                    <h3 class="text-xl font-semibold">The Residency</h3>
                    <p class="mt-2">Historical ruins from the British era, significant for its role during the Siege of Kanpur in 1857.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Shri Radhakrishna Temple1.png" alt="">
                    <h3 class="text-xl font-semibold">Shri Radhakrishna Temple</h3>
                    <p class="mt-2">A revered temple dedicated to Lord Krishna, known for its architectural beauty and spiritual significance.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Allen Forest Zoo.png" alt="">
                    <h3 class="text-xl font-semibold">Allen Forest Zoo</h3>
                    <p class="mt-2">Another notable zoo in Kanpur, housing a diverse range of wildlife and offering a great educational experience.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Indian Institute of Technology (IIT) Kanpur.png" alt="">
                    <h3 class="text-xl font-semibold">Indian Institute of Technology (IIT) Kanpur</h3>
                    <p class="mt-2">One of India's premier engineering institutions, known for its significant contributions to research and education.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Chakeri Air Force Station.png" alt="">
                    <h3 class="text-xl font-semibold">Chakeri Air Force Station</h3>
                    <p class="mt-2">A significant military base with historical importance, playing a key role in India's defense infrastructure.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="assets\img\Moti Jheel.png" alt="">
                    <h3 class="text-xl font-semibold">Moti Jheel</h3>
                    <p class="mt-2">A picturesque lake offering boating opportunities and a relaxing environment for visitors.</p>
                </div>
            </div>
        </section>

        <aside class="w-full md:w-1/4 p-4">
            <h2 class="text-2xl font-semibold mb-4">Weather Report</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div id="weather-report">
                    <!-- Weather report will be inserted here -->
                </div>
            </div>
        </aside>
    </main>

    <script>
        // Fetch and display weather data
        async function fetchWeather() {
            const response = await fetch('https://api.openweathermap.org/data/2.5/weather?q=Kanpur&appid=YOUR_API_KEY');
            const data = await response.json();
            const weatherReport = document.getElementById('weather-report');
            weatherReport.innerHTML = `
                <h3 class="text-xl font-semibold">Current Weather in Kanpur</h3>
                <p>Temperature: ${(data.main.temp - 273.15).toFixed(2)}°C</p>
                <p>Condition: ${data.weather[0].description}</p>
                <p>Humidity: ${data.main.humidity}%</p>
                <p>Wind Speed: ${data.wind.speed} m/s</p>
            `;
        }
        fetchWeather();
    </script>
@endsection
