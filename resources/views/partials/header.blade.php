<header>
    <nav>    
        <div class="header-left">
            <img id="header-logo" src="{{ asset('img/logo-small3.png') }}">
        </div>
        <div class="header-center"></div>
        <div class="header-right">
        
            <div class="header-link"><a href="docs/api/v1">api</a></div>
            
            <div class="header-link"><a href="booBoards">booBoards</a></div>

            @guest            
            <a href="{{ route('google.redirect') }}" class="google-login-button">
                <img class="" src="{{ asset('img/google-color.svg') }}" loading="lazy" alt="google logo">
                <span>Continue with Google</span>
            </a>
            @endguest
            
            @auth            
            <p>Hey, {{auth()->user()->firstName}}!</p>
            <div class="image-holder">
                <img id="user-profile-button" src="{{ auth()->user()->avatar }}">
            </div>
            <div class="mobile-nav">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            @endauth
            
        </div>
    </nav>
</header>