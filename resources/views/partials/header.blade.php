<header>
    <nav>
        
        <div class="header-left">
            <img src="{{ asset('img/logo-small3.png') }}">
        </div>
        <div class="header-center"></div>
        <div class="header-right">
            @guest            
            <a href="{{ route('google.redirect') }}" class="google-login-button">
                <img class="" src="{{ asset('img/google-color.svg') }}" loading="lazy" alt="google logo">
                <span>Continue with Google</span>
            </a>
            @endguest
            
            @auth            
            Hey, {{auth()->user()->firstName}}!
            <div class="image-holder">
                <img src="{{ auth()->user()->avatar }}">
            </div>
            @endauth
            
        </div>
    </nav>
</header>