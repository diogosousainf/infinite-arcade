@extends('components.master.main')

@section('content')

        @component('components.games.games-list', ['games' => $games])
        @endcomponent

@endsection
