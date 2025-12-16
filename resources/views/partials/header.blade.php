<header>
    <nav>    
        <div class="header-left">
            <img id="header-logo" src="{{ asset('img/logo-small3.png') }}">
        </div>
        <div class="header-center"></div>
        <div class="header-right">
        
            <div class="header-link"><a href="/docs/api">api</a></div>
            
            <div class="header-link"><a href="/booBoards">booBoards</a></div>

            @guest            
            <a href="{{ route('google.redirect') }}" class="google-login-button">
                <img class="" src="{{ asset('img/google-color.svg') }}" loading="lazy" alt="google logo">
                <span>Continue with Google</span>
            </a>
            @endguest
            
            @auth            
            Hey, {{auth()->user()->firstName}}!
            <div class="image-holder">
                <img id="user-profile-button" src="{{ auth()->user()->avatar }}">
            </div>
            @endauth
            
        </div>
    </nav>
</header>