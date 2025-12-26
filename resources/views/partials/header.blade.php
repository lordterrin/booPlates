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
                <svg id="mobile-nav-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <div class="mobile-menu">                    
                    <div class="menu">
                        <div class="top">
                            <div class="header">
                                <img id="header-logo" src="{{ asset('img/logo-small3.png') }}">
                                <svg id="mobile-nav-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <div class="body">
                                <div class="header-body-item">
                                    <span>What is booPlates?</span>
                                    <p>
                                        <svg id="header-toggle-what" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>

                                    </p>
                                </div>
                                <div id="header-exp-what" class="header-body-explanation">
                                    <div class="header-explanation">
                                        booPlates is an interactive web experience that lets people explore the United States through a simple, visual map.  The goal is for users to take photos of license plates on cars, and upload them to the map until they get all 50. <br><br>Users can click on any state to view details, track progress, and see their data come to life in an intuitive way. The design keeps the focus on the map itself, making it easy to navigate, understand, and use without digging through menus or complex screens. booPlates is built to feel fast, clean, and approachable, turning what could be dry data into something engaging and easy to explore
                                    </div>
                                </div>
                                <div class="header-body-item">
                                    <span>How Do I Level Up?</span>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </p>
                                </div>
                                <div class="header-body-item">
                                    <span>Tech Stack</span>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>                        
                        <div class="footer">
                            Logout
                        </div>
                    </div>
                </div>
            </div>
            @endauth
            
        </div>
    </nav>
</header>