@extends('site.layouts.layout')

@section('content')

<section>
    <div class="container">
        <h3 class="text-center">{{ $place->title }}</h3>
        {!! $place->description !!}
    </div>
</section>

@endsection