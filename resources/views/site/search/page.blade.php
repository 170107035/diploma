@extends('site.layouts.layout')

@section('content')

<section>
    <div class="container">
        <h1 class="text-center">Поиск</h1>
        <hr>
        <h3 class="text-center">Туры</h3>
        <div class="row">
            @foreach($tours as $tour)
            	<div class="tCard">
	                <img src="{{ Voyager::image($tour->image) }}" alt="">
	                <div class="tCaption">
	                    <h5>{{ $tour->title }}</h5>
	                    <p>{{ $tour->announce }}</p>
	                    <a href="/tour/{{ $tour->id }}/" class="btn btn-primary">Подробнее</a>
	                </div>
	            </div>
            @endforeach
        </div>
        <hr>
        <h3 class="text-center">Экскурсии</h3>
        <div class="row">
            @foreach($guided_tours as $tour)
                <div class="tCard">
                    <img src="{{ Voyager::image($tour->image) }}" alt="">
                    <div class="tCaption">
                        <h5>{{ $tour->title }}</h5>
                        <p>{{ $tour->announce }}</p>
                        <a href="/guided/{{ $tour->id }}/" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection