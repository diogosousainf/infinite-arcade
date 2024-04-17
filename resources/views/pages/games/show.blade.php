@extends('components.master.main')
@section('content')

@component('components.games.games-show-form', ['gameDetails' => $gameDetails])
@endcomponent

@endsection
