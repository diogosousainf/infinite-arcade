<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gameDetails['name'] }} - Game Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-md p-6">
        <h1 class="text-3xl font-bold mb-6">{{ $gameDetails['name'] }}</h1>
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 lg:mr-8">
                <img class="w-full h-auto rounded-md shadow-md" src="{{ $gameDetails['background_image'] }}" alt="{{ $gameDetails['name'] }}">
            </div>
            <div class="lg:w-1/2 mt-4 lg:mt-0">
                <p class="text-lg text-gray-700 mb-4">{{ $gameDetails['description_raw'] }}</p>
                <div class="flex items-center mb-4">
                    <span class="text-gray-600 mr-2">Released:</span>
                    <span class="text-gray-800">{{ $gameDetails['released'] }}</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-600 mr-2">Rating:</span>
                    {{-- Converte rating para estrelas --}}
                    @php
                        $rating = round($gameDetails['rating']);
                    @endphp
                    @for($i = 0; $i < 5; $i++)
                        @if($i < $rating)
                            <svg class="h-6 w-6 fill-current text-yellow-400" viewBox="0 0 24 24">
                                <path d="M12 2l2.121 6.485L20 9.636l-5.879 4.243L15.879 22 12 18.485 8.121 22l1.758-8.121L4 9.636l5.879-1.151z"/>
                            </svg>
                        @else
                            <svg class="h-6 w-6 fill-current text-gray-400" viewBox="0 0 24 24">
                                <path d="M12 2l2.121 6.485L20 9.636l-5.879 4.243L15.879 22 12 18.485 8.121 22l1.758-8.121L4 9.636l5.879-1.151z"/>
                            </svg>
                        @endif
                    @endfor
                    <span class="text-gray-800">{{ $rating }}</span>
                </div>


                <div class="mt-6">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md inline-block transition duration-300">Buy now</a>

                </div>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('games.index') }}" class="text-blue-600 hover:underline">Back to Games</a>
        </div>
    </div>
</div>
</body>
</html>
