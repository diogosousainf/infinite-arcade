<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto p-8">
    <div class="bg-white shadow-md rounded-md p-6">
        <h1 class="text-3xl font-bold mb-6">Games List</h1>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="px-4 py-2"></th>
                    <th class="px-4 py-2">Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($games as $game)
                    <tr class="border-b border-gray-200">
                        <td class="px-4 py-2">
                            <img src="{{ $game['background_image'] }}" alt="{{ $game['name'] }}" class="w-24 h-16 object-cover rounded">
                        </td>
                        <td class="px-4 py-2">{{ $game['name'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{ $games->links() }}
        </div>
    </div>
</div>
