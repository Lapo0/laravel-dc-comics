<header>
<div class="container">
        <div class="row">
            
        <div class="col">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col">
                <ul class="link">
                    <a href="{{ route('comics.create') }}">
                        <li>
                            NEW COMIC
                        </li>
                    </a>
                    <a href="{{ route('comics.index') }}">
                        <li>
                            COMICS
                        </li>
                    </a>
                </ul>
            </div>
        </div>

    </div>
</header>