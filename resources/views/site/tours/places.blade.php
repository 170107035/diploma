@if($tour->places->count() > 0)
    <section>
        <div class="container">
            <h3 class="text-center">В этом туре вы увидите:</h3>
            <div class="row">
                @foreach($tour->places as $place)
                    <div class="col-md-6 whatYouSee">
                        <img src="{{ Voyager::image($place->image) }}" alt="">
                        <p>{{ $place->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif