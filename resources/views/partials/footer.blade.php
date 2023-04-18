<footer>
    <section class="celest">
        <div class="container">
            <div class="row">

                @foreach ($buy_links as $link)

                    <div class="col">
                        <div class="item">
                            <div class="item-img">
                                <img src="{{Vite::asset($link['image'])}}" alt="">
                            </div>
                            <p>
                                {{ $link['title'] }}
                            </p>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
</footer>