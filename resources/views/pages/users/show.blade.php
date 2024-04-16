@extends('components.master.main')

@section('content')
    @component('components.users.profile-show', ['user' => $user])
    @endcomponent
@endsection
