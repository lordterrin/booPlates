@extends('layouts.app')

 <!-- Variables that exist in this blade: $code, $state, $moniker, $image -->

@section('content')    
    <section class="state-submit">
        <div class="back-button-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="back-button">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z" />                
            </svg>
            <span>go back</span>
        </div>


        <div class="state-logo">
            <h1>{{ $state }}</h1>
            <p>{{ $moniker }}</p>
        </div>

        <div class="state-image">
            @if ($image !== '')
                <img src="{{ asset('storage/' . $image) }}">
            @else 
                <img class="no-photo" src="{{ asset('img/placeholder.svg') }}">
            @endif
        </div>

        <div class="state-upload">
            <form id="uploadForm" method="POST" action="{{ route('state.submit.store', $code) }}" enctype="multipart/form-data">
                @csrf

                <input id="state-upload-file-input" type="file" name="photo" class="hidden">

                <div id="dropzone" class="drop-area">
                    <p>Drag a photo here or <span id="upload-link" class="upload-link">click to upload</span></p>
                </div>

                <button id="state-upload-submit-button" class="submit-button" type="submit">Submit</button>
            </form>

        </div>
    
    </section>   
@endsection