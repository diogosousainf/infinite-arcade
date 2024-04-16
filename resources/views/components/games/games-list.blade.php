<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto p-8">
    <div class="bg-white shadow-md rounded-md p-6">
        <h1 class="text-3xl font-bold mb-6">Explore Our Games</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($games as $game)
                <div class="relative bg-gray-100 rounded-md overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover" src="{{ $game['background_image'] }}" alt="{{ $game['name'] }}">
                    <div class="absolute inset-0 bg-black bg-opacity-50 transition duration-300 opacity-0 hover:opacity-100 flex justify-center items-center">
                        <a href="#" class="text-white text-center font-semibold text-lg hover:text-yellow-400">Play Now</a>
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">{{ $game['name'] }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $games->links() }}
        </div>
    </div>
</div>
