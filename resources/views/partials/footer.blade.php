<footer>
    <div class="footer-up ">
        <div class="container">
            <div class="row">
                <div class="col-6 py-4">
                    <section class="links d-flex mb-3">
                        <div class="link-list">
                            <ul>
                                <li class="text-light fw-bold fs-5 mb-1">
                                    DC COMICS
                                </li>
                                <li>
                                    <a href="{{ route('characters') }}">Characters</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('comics') }}">Comics</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('movies') }}">Movies</a>
                                </li>
                                <li> <a href="{{ route('tv') }}">TV</a>
                                </li>
                                <li>
                                    <a href="{{ route('games') }}">Games</a>
                                </li>
                                <li>
                                    <a href="{{ route('collectibles') }}">Collectibles</a>
                                </li>
                                <li>
                                    <a href="{{ route('videos') }}">Videos</a>
                                </li>
                                <li>
                                    <a href="{{ route('fans') }}">Fans</a>
                                </li>
                                <li>
                                    <a href="{{ route('news') }}">News</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Shop</a>
                                </li>
                            </ul>
                            <ul class="mt-3">
                                <li class="text-light fw-bold fs-5 mb-1">
                                    SHOP
                                </li>
                                <li>
                                    <a href="#">Shop DC</a>
                                </li>
                                <li>
                                    <a href="#">Shop DC Collectibles</a>
                                </li>
                            </ul>
                        </div>
                        <div class="link-list">
                            <ul>
                                <li class="text-light fw-bold fs-5 mb-1">
                                    DC
                                </li>
                                <li>
                                    <a href="#">Term Of Use</a>
                                </li>
                                <li>
                                    <a href="#">Privacy policy(New)</a>
                                </li>
                                <li>
                                    <a href="#">Ad Choices</a>
                                </li>
                                <li>
                                    <a href="#">Advertising</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                                <li>
                                    <a href="#">Subscriptions</a>
                                </li>
                                <li>
                                    <a href="#">Talent Workshops</a>
                                </li>
                                <li>
                                    <a href="#">CPSC Certificates</a>
                                </li>
                                <li>
                                    <a href="#">Ratings</a>
                                </li>
                                <li>
                                    <a href="#">Shop Help</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="link-list">
                            <ul>
                                <li class="text-light fw-bold fs-5 mb-1">
                                    SITES
                                </li>
                                <li>
                                    <a href="#">DC</a>
                                </li>
                                <li>
                                    <a href="#">MAD Magazine</a>
                                </li>
                                <li>
                                    <a href="#">DC Kids</a>
                                </li>
                                <li>
                                    <a href="#">DC Universe</a>
                                </li>
                                <li>
                                    <a href="#">DC Power Visa</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <p class="mb-0">All Site Content TM and <i class="fa-regular fa-copyright"></i> 2020 DC
                        Entertainment, unless
                        otherwise <a href="">noted here</a>. All right reserved</p>
                    <p class="mb-0"><a href="">Cookies Settings</a></p>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <div class="logo-footer">
                        <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-down">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <div class="sign-up">
                SIGN-UP NOW!
            </div>
            <div class="socials d-flex align-items-center">
                <span class="follow me-2">FOLLOW US</span>
                <img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="">
                <img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="">
                <img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="">
                <img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="">
                <img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="">
            </div>
        </div>
    </div>
</footer>
