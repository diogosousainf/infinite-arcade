<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style>
    /* Custom Styles */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f3f4f6;
        color: #333;
    }
    .category-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    }
    .category-card img {
        transition: transform 0.3s ease;
    }
    .category-card:hover img {
        transform: scale(1.1);
    }
</style>
<body>

<!-- Categories Section -->
<div class="container mx-auto mt-20">
    <h2 class="text-3xl font-bold mb-8">Categories</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
        <!-- Category Card: Action -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://p2.trrsf.com/image/fget/cf/774/0/images.terra.com/2024/03/21/assassins-creed-jade-01-s15n6wudvl2e.jpg" alt="Action" class="w-full h-72 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                    <a href="#" class="text-white text-lg font-bold uppercase">Action</a>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Action</h3>
                <p class="text-gray-700">Discover adrenaline-pumping action games.</p>
            </div>
        </div>

        <!-- Category Card: Adventure -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://imageio.forbes.com/blogs-images/insertcoin/files/2016/05/uncharted-4-ending1-1200x675.jpg?height=399&width=711&fit=bounds" alt="Adventure" class="w-full h-72 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                    <a href="#" class="text-white text-lg font-bold uppercase">Adventure</a>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Adventure</h3>
                <p class="text-gray-700">Embark on epic adventures in immersive worlds.</p>
                <a href="#" class="block mt-4 text-blue-500 hover:underline">Adventure</a>
            </div>
        </div>

        <!-- Category Card: Arcade -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://deadline.com/wp-content/uploads/2018/03/street-fighter1.jpg?w=681&h=383&crop=1" alt="Arcade" class="w-full h-72 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                    <a href="#" class="text-white text-lg font-bold uppercase">Arcade </a>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Arcade</h3>
                <p class="text-gray-700">Enjoy classic arcade-style gaming experiences.</p>
                <a href="#" class="block mt-4 text-blue-500 hover:underline"> Arcade</a>
            </div>
        </div>

        <!-- Category Card: FPS -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://media.gamestop.com/i/gamestop/10159649_SCR01?$screen$" alt="FPS" class="w-full h-72 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">FPS</h3>
                    <p class="text-gray-700">Experience intense first-person shooter action.</p>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline"> FPS </a>
                </div>
            </div>
        </div>

        <!-- Category Card: Fighting -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://cdn.sistemawbuy.com.br/arquivos/c30f3cdb5ede193830560f4c44f96b28/produtos/64196159a1f26/20230915144153-650497612038f.jpg" alt="Fighting" class="w-full h-72 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Fighting</h3>
                    <p class="text-gray-700">Engage in epic battles with fighting games.</p>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline"> Fighting</a>
                </div>
            </div>
        </div>

        <!-- Category Card: RPG -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2023/08/5_jogos_rpg_baldurs_gate_3__2t3wi3.jpg" alt="RPG" class="w-full h-72 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">RPG</h3>
                    <p class="text-gray-700">Embark on epic quests and adventures in RPGs.</p>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline"> RPG</a>
                </div>
            </div>
        </div>

        <!-- Category Card: Single-player -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://assetsio.gnwcdn.com/spider_mDMN5bt.png?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp" alt="Single-player" class="w-full h-72 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Single-player</h3>
                    <p class="text-gray-700">Enjoy immersive gaming experiences in single-player games.</p>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline"> Single-player </a>
                </div>
            </div>
        </div>

        <!-- Category Card: Strategy -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://cdn.mos.cms.futurecdn.net/cvUm5TVT8nhtmJKZbrHezZ.jpg" alt="Strategy" class="w-full h-72 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Strategy</h3>
                    <p class="text-gray-700">Master tactics and outsmart your opponents in strategy games.</p>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline"> Strategy </a>
                </div>
            </div>
        </div>

        <!-- Category Card: VR -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden category-card">
            <div class="relative">
                <img src="https://www.roadtovr.com/wp-content/uploads/2022/04/walking-dead-2.jpg" alt="VR" class="w-full h-72 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">VR</h3>
                    <p class="text-gray-700">Immerse yourself in virtual reality gaming experiences.</p>
                    <a href="#" class="block mt-4 text-blue-500 hover:underline"> VR </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
