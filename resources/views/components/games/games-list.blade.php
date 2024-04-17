<!-- resources/views/pages/games.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <div class="container mx-auto p-8 ">
        <div class="bg-white shadow-md rounded-md p-6">
            <h1 class="text-3xl font-bold mb-6">Explore Our Games</h1>
            {}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($games as $game)
                    <div class="relative bg-gray-100 rounded-md overflow-hidden shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                        <img class="w-full h-48 object-cover" src="{{ $game['background_image'] }}" alt="{{ $game['name'] }}">
                        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 flex justify-center items-center transition duration-300">
                            <a href="{{ route('games.show', ['id' => $game['id']]) }}" class="text-white text-center font-semibold text-lg hover:text-yellow-400">Show</a>
                        </div>
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mb-2">{{ $game['name'] }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

