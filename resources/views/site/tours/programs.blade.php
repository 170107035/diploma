@if($tour->programs->count() > 0)
    <section>
        <div class="container">
            <h3 class="text-center">Программа тура {{ $tour->title }}</h3>
            @foreach($tour->programs as $program)
                <div class="row {{ !$loop->first ? 'm-t-30' : '' }}">
                    <div class="tourDays"><span>{{ $loop->iteration }}</span></div>
                    <div class="tourDoing">
                        <h4>{{ $program->title }}</h4>
                        {!! $program->description !!}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif