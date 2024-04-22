<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-gradient-to-r from-gray-800 to-gray-900">
    <div class="max-w-7xl mx-auto px-7 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <div class="hidden md:block">
                <div class="flex items-center justify-center space-x-4">
                    <!-- Adicione aqui os nomes das plataformas -->
                    <a href="{{ route('games.index') }}" class="text-white hover:text-gray-300">All</a>
                    <a href="{{ route('games.byPlatform', ['platform' => 'PC']) }}" class="text-white hover:text-gray-300">PC</a>
                    <a href="{{ route('games.byPlatform', ['platform' => 'PSN']) }}" class="text-white hover:text-gray-300">PSN</a>
                    <a href="{{ route('games.byPlatform', ['platform' => 'XBOX']) }}" class="text-white hover:text-gray-300">XBOX</a>

                    <!-- Adicione mais nomes para outras plataformas, se desejar -->
                </div>
            </div>
        </div>
    </div>
</nav>


<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($games as $game)
            <div class="relative overflow-hidden rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                <img class="w-full h-48 object-cover transition duration-300 transform hover:scale-110" src="{{ $game['background_image'] }}" alt="{{ $game['name'] }}">
                <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <a href="{{ route('games.show', ['id' => $game['id']]) }}" class="text-white font-semibold text-lg hover:text-yellow-400 transition duration-300">Show Details</a>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $game['name'] }}</h2>

                    <p class="text-sm text-gray-600 mt-2">Released: {{ date('M d, Y', strtotime($game['released'])) }}</p>
                    @if(isset($game['esrb_rating']['name']))
                        <p class="text-sm text-gray-600">ESRB Rating: {{ $game['esrb_rating']['name'] }}</p>
                    @else
                        <p class="text-sm text-gray-600">ESRB Rating: Not available</p>
                    @endif
                    <p class="text-sm text-gray-600">Platforms:
                        @foreach($game['platforms'] as $platform)
                            {{ $platform['platform']['name'] }}
                            @if (!$loop->last), @endif
                        @endforeach
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
