@extends('layouts.app')

@section('content')    
    <div id="big-map">@include('partials.map')</div>
    <div id="state-panel"></div>
    <script>
        window.userStates = @json($userStates);
    </script>
@endsection

