<div class="py-5">
    <div id="map" style="width: 100%; height: 400px;"></div>
    <script>
        var map = L.map('map').setView([24.774265, 46.738586], 2);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const places = [
            { name: "Riyadh", lat: 24.7136, lng: 46.6753 },
            { name: "Jeddah", lat: 21.4858, lng: 39.1925 },
            { name: "Los Angeles", lat: 34.0522, lng: -118.2437 },
            { name: "New York", lat: 40.7128, lng: -74.0060 },
            { name: "Washington DC", lat: 38.9072, lng: -77.0369 },
            { name: "Spokane, WA", lat: 47.6588, lng: -117.4260 },
            { name: "Cheney, WA", lat: 47.4874, lng: -117.5758 },
            { name: "Shenzhen, China", lat: 22.5431, lng: 114.0579 },
            { name: "Hail, Saudi Arabia", lat: 27.5114, lng: 41.7208 },
            { name: "Makkah, Saudi Arabia", lat: 21.3891, lng: 39.8579 },
            { name: "Cairo, Egypt", lat: 30.0444, lng: 31.2357 },
            { name: "Austin, TX", lat: 30.2672, lng: -97.7431 },
            { name: "Dubai, UAE", lat: 25.2048, lng: 55.2708 },
            { name: "Abu Dhabi, UAE", lat: 24.4539, lng: 54.3773 },
            { name: "Doha, Qatar", lat: 25.276987, lng: 51.520008 },
            { name: "Manama, Bahrain", lat: 26.2235, lng: 50.5876 }
        ];

        places.forEach(function(place) {
            L.marker([place.lat, place.lng]).addTo(map).bindPopup(place.name);
        });
    </script>
</div>
