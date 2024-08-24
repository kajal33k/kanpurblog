@extends('component.main')
@section('content')
<main class="container mx-auto p-4 flex flex-wrap">
        <section class="w-full md:w-3/4 p-4" data-aos="fade-up">
            <h2 class="text-2xl font-semibold mb-4" data-aos="fade-up">Explore Kanpur</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\zoo.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Kanpur Zoo</h3>
                    <p class="mt-2" data-aos="fade-up">A large zoo with a variety of animals and lush green surroundings, ideal for family outings.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Ganges Barrage.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Ganges Barrage</h3>
                    <p class="mt-2" data-aos="fade-up">An impressive barrage on the Ganges River, offering beautiful views and a peaceful environment.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Jama Masjid.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Jama Masjid</h3>
                    <p class="mt-2" data-aos="fade-up">A historic mosque with stunning Mughal architecture, reflecting the rich cultural heritage of Kanpur.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Kanpur Memorial Church.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Kanpur Memorial Church</h3>
                    <p class="mt-2" data-aos="fade-up">A colonial-era church with beautiful Gothic architecture and a serene atmosphere.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Bithoor.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Bithoor</h3>
                    <p class="mt-2" data-aos="fade-up">A historic town on the banks of the Ganges, known for its religious significance and scenic beauty.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\memorial.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Rani Laxmi Bai Memorial</h3>
                    <p class="mt-2" data-aos="fade-up">A memorial dedicated to the valiant queen Rani Laxmi Bai, a symbol of resistance during the Indian Rebellion of 1857.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\The Residency.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">The Residency</h3>
                    <p class="mt-2" data-aos="fade-up">Historical ruins from the British era, significant for its role during the Siege of Kanpur in 1857.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Shri Radhakrishna Temple1.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Shri Radhakrishna Temple</h3>
                    <p class="mt-2" data-aos="fade-up">A revered temple dedicated to Lord Krishna, known for its architectural beauty and spiritual significance.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Allen Forest Zoo.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Allen Forest Zoo</h3>
                    <p class="mt-2" data-aos="fade-up">Another notable zoo in Kanpur, housing a diverse range of wildlife and offering a great educational experience.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Indian Institute of Technology (IIT) Kanpur.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Indian Institute of Technology (IIT) Kanpur</h3>
                    <p class="mt-2" data-aos="fade-up">One of India's premier engineering institutions, known for its significant contributions to research and education.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Chakeri Air Force Station.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Chakeri Air Force Station</h3>
                    <p class="mt-2" data-aos="fade-up">A significant military base with historical importance, playing a key role in India's defense infrastructure.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <img src="assets\img\Moti Jheel.png" alt="">
                    <h3 class="text-xl font-semibold" data-aos="fade-up">Moti Jheel</h3>
                    <p class="mt-2" data-aos="fade-up">A picturesque lake offering boating opportunities and a relaxing environment for visitors.</p>
                </div>
            </div>
        </section>

        <aside class="w-full md:w-1/4 p-4" data-aos="fade-up">
            <h2 class="text-2xl font-semibold mb-4" data-aos="fade-up">Weather Report</h2>
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                <div id="weather-report" data-aos="fade-up">
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
