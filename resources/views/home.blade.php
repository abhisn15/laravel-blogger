@extends('layouts.main')


<style>
.grayscale {
    filter: grayscale(70%);
}

figcaption {
    position: absolute;
}

img {
    height: 100vh !important;
    width: 100% !important;
    background-size: cover;
}

@media screen and (min-width: 320px) {
    .banner-container {
        margin-top: 60px;
    }

    h3 {
        font-size: 14px;
    }

}

@media screen and (min-width: 340px) {
    .banner-container {
        margin-top: 60px;
    }

    h3 {
        font-size: 16px;
    }
}

@media screen and (min-width: 400px) {
    .banner-container {
        margin-top: 65px;
    }

    h3 {
        font-size: 20px;
    }

}

@media screen and (min-width: 768px) {
    .banner-container {
        margin-top: 70px;
    }

    h3 {
        font-size: 27px;
    }
}

@media screen and (min-width: 1000px) {
    .banner-container {
        margin-top: 65px;
    }

    h3 {
        width: 1000px;
        font-size: 30px;
    }

    .pljri {
        margin-right: 800px !important;
    }
}
</style>

@section('container')
<div class="banner-container m-0">
    <figure class="d-flex flex-column align-items-center justify-content-center">
        <img class="img-fluid grayscale" src="https://github.com/abhisn15/mvcphp/blob/master/public/img/banner.jpg?raw=true" alt="Banner">
        <figcaption class="d-flex flex-column justify-content-center m-5">
            <h1 class="text-white fw-bold">Selamat datang di Situs Saya!</h1>
            <h3 class="text-white mb-5" id="element"></h3>
            <a class="pljri btn btn-primary" href="/about" role="button">Pelajari lebih lanjut</a>
        </figcaption>
    </figure>
</div>
@endsection 