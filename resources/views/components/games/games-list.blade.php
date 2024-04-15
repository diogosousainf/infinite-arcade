<div class="container">
    <div class="container mt-4">
        <h1> All Games</h1>
        <div class="table-responsive mt-3">
            <table class="table ">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game['name'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $games->links() }}
    </div>
</div>
