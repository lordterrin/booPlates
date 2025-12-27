@extends('layouts.app')


@section('content')    
    @if ($guestId)
        <div class="guest-view">You're looking at the booBoard for <span>{{ $guestName }}</span>!</div>
        <div class="guest-container">
    @endif
    
     <div class="top-stats-bar">
        <div class="top-stats-left" title="Upload more photos to level up your booPlates rank">
        
            @auth
            <h1>booStats:</h1>
            <p> {{ $userStatesCount }} / {{ $totalStates }} </p>
            @endauth

        </div>
        <div class="top-stats-right">
            @auth            
            <h1 id="level-callout-home">Level {{ $level }}:</h2>
            <p>{{ $title }}</p>
            @endauth
        </div>   
    </div>
    
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

