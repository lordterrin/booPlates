@extends('layouts.app')

@section('content')    
    @if ($guestId)
        <div class="guest-view">You're looking at the booBoard for <span>{{ $guestName }}</span>!</div>
        <div class="guest-container">
    @endif
    
    
    <div id="big-map">@include('partials.map')</div>
    <div id="state-panel"></div>
    <script>
        window.userStates = @json($userStates);
        window.guestStates = @json($guestStates);
    </script>

    @if ($guestId)
        </div>
    @endif
    
@endsection

