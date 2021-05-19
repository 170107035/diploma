@isset($tour->slider->slides)
	<div id="slider">
	    <div id="sliderBtn">
	        <button><i class="fas fa-caret-left"></i></button>
	        <button><i class="fas fa-caret-right"></i></button>
	    </div>
	    <div id="sliderImages">
	        @foreach(json_decode($tour->slider->slides,true) as $slide)
	        	<img src="{{ Voyager::image($slide) }}" {{ !$loop->first ? 'class=hidden' : '' }} alt="">
	        @endforeach
	    </div>
	    <ul class="sliderDots" id="sliderPag">
	    </ul>
	</div>
@endisset

<script src="{{ asset('assets/js/slider.js') }}"></script>