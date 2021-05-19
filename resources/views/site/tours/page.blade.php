@extends('site.layouts.layout')

@section('content')

<section>
    <div class="container">
        <h3 class="text-center">{{ $tour->title }}</h3>
        {!! $tour->description !!}
    
        @include('site.tours.slider')
    </div>
</section>
@include('site.tours.places')
@include('site.tours.programs')

@endsection