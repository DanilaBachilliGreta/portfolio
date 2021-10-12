@extends('home')


@section('body')


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Voici mes réalisations web</h1>
        <p class="lead fw-normal">C'est avec passion que je suis fière de vous présenter mes projets. Je suis à votre écoute pour la réalisation de toutes vos inspirations. </p>
        <a class="btn btn-outline-secondary" href="{{ route('contact.create') }}">Contactez-moi</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
{{-- class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" --}}
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" >
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Mon site n°1</h2>
            <p class="lead">Ceci est mon pour une boutique de chocolat</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background:url({{URL::asset('images/choco.jpg') }}) 0 0; ">
        </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Mon site n°2</h2>
            <p class="lead">Ceci est mon site pour un bijoutier </p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background:url({{URL::asset('images/gold.jpg') }}) 0 center;">
        </div>
    </div>
</div>


@endsection