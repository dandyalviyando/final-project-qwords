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
                <div class="btn-wrap1">
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
                  <div class="btn-wrap2">
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
                  <div class="btn-wrap3">
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
                  <div class="btn-wrap4">
                    <a href="#" class="btn-buy">Order sekarang</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>

          <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Lihat Juga<span> Layanan Kami Yang Lain</span></h3>
          <p>Layanan unggulan dengan teknologi terbaik untuk website anda.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="{{asset ('assets/img/other-services-img-1.png') }}" alt="other-services-1" class="mb-4" style="width: 75px; height: 75px;">
              <h4><a href="">SSL</a></h4>
              <p>Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.</p>
              <div style="color: #777777; margin-top: 28px; margin-bottom: 10px; font-size: 12px; font-weight: 700">Mulai Dari</div>
              <h4><sup>Rp</sup>112.000<span> / tahun</span></h4>
              <button id="order-btn" type="button" class="btn btn-md">Order Sekarang</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="{{asset ('assets/img/other-services-img-2.png') }}" alt="other-services-2" class="mb-4" style="width: 75px; height: 75px;">
              <h4><a href="">Dedicated Server</a></h4>
              <p>Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas</p>
              <div style="color: #777777; margin-top: 28px; margin-bottom: 10px; font-size: 12px; font-weight: 700">Mulai Dari</div>
              <h4><sup>Rp</sup>499.000<span> / bulan</span></h4>
              <button id="order-btn" type="button" class="btn btn-md">Order Sekarang</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{asset ('assets/img/other-services-img-3.png') }}" alt="other-services-3" class="mb-4" style="width: 75px; height: 75px;">
              <h4><a href="">Colocation Server</a></h4>
              <p>Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher</p>
              <div style="color: #777777; margin-top: 28px; margin-bottom: 10px; font-size: 12px; font-weight: 700">Mulai Dari</div>
              <h4><sup>Rp</sup>500.000<span> / bulan</span></h4>
              <button id="order-btn" type="button" class="btn btn-md">Order Sekarang</button>
            </div>
          </div>

        </div>

      </div>
    </section>
        <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Solusi Terbaik</span> Dari Kami</h3>
          <p>Kami menawarkan solusi terbaik untuk segala kebutuhan website dan sistem anda. Mulai dari blog hingga website bisnis dan perusahaan.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/solusi-perusahaan.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Perusahaan</h4>
                <span>Wujudkan perusahaan profesional dan berkelas dengan dukungan website terbaik dan fitur keamanan ekstra</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/solusi-organisasi.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Organisasi dan Komunitas</h4>
                <span>Website sebagai wadah perkumpulan komunitas atau organisasi di internet</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/solusi-umkm.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>UMKM dan Toko Online</h4>
                <span>Mendukung kebutuhan website yang fokus dalam pemasaran barang/ jasa secara online</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/solusi-sekolah.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Sekolah</h4>
                <span>Infrastruktur terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/solusi-developer.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Developer</h4>
                <span>Tersedia paket hosting dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/solusi-blogger.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Blogger dan Personal</h4>
                <span>Memfasilitasi blogger dengan infrastruktur website terbaik serta template website premium untuk tampil lebih profesional.</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="website" class="website">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-md-6 web-bg">
            <img src="{{asset ('assets/img/web-bg.png') }}" alt="web-bg">
          </div>
          <div class="col-md-6">
              <h1>Bikin <span>Website Impian</span> Dengan Mudah Disini</h1>
              <h2>Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah disini, desain website elegan dan mudah dikelola.</h2>
              <h2 style="font-weight: bold; font-size: 25px">Hanya 1 Jutaan !</h2>
              <button class="btn btn-outline-secondary submit-btn btn-lihat" type="button">Lihat selengkapnya</button>
          </div>

      </div>
      </div>
    </section>
@endsection
 