
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
    // <!-- JavaScript for Slider Functionality -->
  
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        let currentIndex = 0;
    
        function updateSliderPosition() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    
        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSliderPosition();
            }
        });
    
        nextButton.addEventListener('click', () => {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
                updateSliderPosition();
            }
        });
    
    