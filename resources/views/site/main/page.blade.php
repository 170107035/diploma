@extends('site.layouts.layout')

@section('content')

<section>
    <div class="container">
        <h3 class="text-center">Мы организовываем индивидуальные туры и экскурсии по Казахстану</h3>
        <h4 class="text-center">Чем удобны наши туры ?</h4>
        <div class="row">
            <div class="whym">
                <img src="{{ asset('assets/images/jiping3-_1_.jpg') }}" alt="">
                <div class="whym-caption">
                    <h5>Туры на внедорожниках</h5>
                    <p>Это самый комфортный и безопасный способ путешествия по Казахстану для туризма и отдыха из-за отсутствия хороших дорог в красивейшие и уникальные места.</p>
                </div>
            </div>
            <div class="whym">
                <img src="{{ asset('assets/images/1532681668_content_700x455.jpg') }}" alt="">
                <div class="whym-caption">
                    <h5>Индивидуальные туры</h5>
                    <p>Во время такого тура предоставляется личная машина с водителем и гидом. Вы сможете отдыхать так, как хочется Вам и Вашим друзьям; при этом Вы сами решаете, когда и куда ехать, не привязываясь к датам.</p>
                </div>
            </div>
            <div class="whym">
                <img src="{{ asset('assets/images/img-big-almaty-lake.jpg') }}" alt="">
                <div class="whym-caption">
                    <h5>Туры от Go Travel</h5>
                    <p>Мы выбрали для Вас только лучшие места Казахстана и Кыргызстана; наши авторские туры сделают Ваше путешествие увлекательным и оставят самые яркие впечатление.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection