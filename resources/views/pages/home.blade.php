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
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h3>Cloud Hosting dan VPS <span>Diskon Hingga 60% !</span></h3>
            <p>Layanan unggulan dengan teknologi terbaik untuk website anda.</p>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
              <div class="box featured1 card-cloud">
                <h3>VCH1</h3>
                <img src="{{asset ('assets/img/pricing1.png') }}" alt="pricing-1" class="mb-4" style="width: 150px; height: 150px;">
                <h3>Value Cloud Hosting</h3>
                <div style="color: #777777; text-decoration:line-through;"> Rp. 24.500</div>
                <h4><sup>Rp</sup>14.500</h4>
                <ul>
                  <li>3 GB Disk</li>
                  <li>Unlimited Bandwidth</li>
                  <li>0.5 Core CPU</li>
                  <li class="na">Addon Domain</li>
                  <li class="na">Parked Domain</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Order sekarang</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 " data-aos="fade-up" data-aos-delay="200">
                <div class="box featured2 card-cloud">
                  <h3>Signature</h3>
                  <img src="{{asset ('assets/img/pricing2.png') }}" alt="pricing-2" class="mb-4" style="width: 150px; height: 150px;">
                  <h3>Unlimited Hosting</h3>
                  <div style="color: #777777; text-decoration:line-through;"> Rp. 109.000</div>
                  <h4><sup>Rp</sup>84.900</h4>
                  <ul>
                    <li>3 GB Disk</li>
                    <li>Unlimited Bandwidth</li>
                    <li>0.5 Core CPU</li>
                    <li>5 Addon Domain</li>
                    <li>5 Parked Domain</li>
                    
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Order sekarang</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 " data-aos="fade-up" data-aos-delay="200">
                <div class="box featured3 card-cloud">
                  <h3>HPCH Bisnis 1</h3>
                  <img src="{{asset ('assets/img/pricing3.png') }}" alt="pricing-3" class="mb-4" style="width: 150px; height: 150px;">
                  <h3>High Performance</h3>
                  <div style="color: #777777; text-decoration:line-through;"> Rp. 80.000</div>
                  <h4><sup>Rp</sup>69.000</h4>
                  <ul>
                    <li>3 GB Disk</li>
                    <li>Unlimited Bandwidth</li>
                    <li>1 Core CPU</li>
                    <li class="na">5 Addon Domain</li>
                    <li class="na">5 Parked Domain</li>
                    
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Order sekarang</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0 " data-aos="fade-up" data-aos-delay="200">
                <div class="box featured4 card-cloud">
                  <h3>VPS SC1</h3>
                  <img src="{{asset ('assets/img/pricing4.png') }}" alt="pricing-4" class="mb-4" style="width: 150px; height: 150px;">
                  <h3>Cloud VPS KVM SSD</h3>
                  <div style="color: #777777; text-decoration:line-through;"> Rp. 135.000</div>
                  <h4><sup>Rp</sup>75.000</h4>
                  <ul>
                    <li>25 GB Disk</li>
                    <li>Unlimited Bandwidth</li>
                    <li>1 Core CPU</li>
                    <li>Unlimited Addon Domain</li>
                    <li>Unlimited Parked Domain</li>
                    
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Order sekarang</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
@endsection
 