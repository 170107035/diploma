@extends('site.layouts.layout')

@section('content')

<section>
    <div class="container">
        <h3 class="text-center">{{ $title }}</h3>
        <div class="row">
            @foreach($tours as $tour)
            	<div class="tCard">
	                <img src="{{ Voyager::image($tour->image) }}" alt="">
	                <div class="tCaption">
	                    <h5>{{ $tour->title }}</h5>
	                    <p>{{ $tour->announce }}</p>
	                    <a href="/{{ $section }}/{{ $tour->id }}/" class="btn btn-primary">Подробнее</a>
	                </div>
	            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection