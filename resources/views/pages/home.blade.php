@extends('layouts.master')
@section('hero')
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-md-6">
                <h1>Cloud Hosting Indonesia Dengan <span>Pelayanan Terbaik</span></h1>
                <h2>Cloud Hosting Indonesia dengan pelayanan terbaik dan harga murah serta diskon nama domain.</h2>
                <div id="hero-logo-row" class="row">
                    <img src="{{asset ('assets/img/license2.png') }}" alt="license-2">
                    <img src="{{asset ('assets/img/license3.png') }}" alt="license-3">
                    <img src="{{asset ('assets/img/license5.png') }}" alt="license-5">
                    <img src="{{asset ('assets/img/license4.png') }}" alt="license-4">
                </div>
                <div class="input-group form-input">
                    <input type="text" class="form-control" placeholder="Cari nama domain anda" aria-label="Recipient's username with two button addons">
                    <button class="btn btn-outline-secondary submit-btn" type="button">Cari</button>
                </div>
            </div>
            <div class="col-md-6 hero-bg">
                <img src="{{asset ('assets/img/hero-bg.png') }}" alt="hero-bg">
            </div>
        </div>

    </div>
@endsection
@section('content')
@endsection
 