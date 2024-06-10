
@extends('user.main')
@section('konten')
<div class="why-choose-section">
    <div class="container">
        <h1 class="text-center text-black fw-bold mb-md-5 mb-sm-5">Galery</h1>
        <div class="product-section pt-0">
            <div class="container">
                <div class="row">

                    <!-- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img  src="{{ asset('assets') }}/images/galery-1.png" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">M Syarif Hidayatullah</h3>
                            <strong class="product-price">20 Tahun | Pasuruan, Jawa Timur</strong>
                        </a>
                    </div> 
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img src="{{ asset('assets') }}/images/galery-2.png"  class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">Ahmad Hidayatur Rafiq</h3>
                            <strong class="product-price">22 Tahun | Sampang, Jawa Timur</strong>
                        </a>
                    </div> 
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img src="{{ asset('assets') }}/images/galery-3.jpeg" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">Fatkhul Mu'minin</h3>
                            <strong class="product-price">22 Tahun | Jombang, Jawa Timur</strong>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img src="{{ asset('assets') }}/images/galery-4.jpeg" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">Firman Taqbir Dz</h3>
                            <strong class="product-price">22 Tahun | Jombang, Jawa Timur</strong>	
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img src="{{ asset('assets') }}/images/galery-5.jpeg" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">Syafiq Ama S</h3>
                            <strong class="product-price">20 Tahun | Jombang, Jawa Timur</strong>		
                        </a>
                    </div> 
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img src="{{ asset('assets') }}/images/galery-6.jpeg" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">Ibnu Shina</h3>
                            <strong class="product-price">20 Tahun | Magelang, Jawa Tengah</strong>
                        </a>
                    </div> 
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img src="{{ asset('assets') }}/images/galery-7.jpeg" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">Ilham Manzil</h3>
                            <strong class="product-price">20 Tahun | Jombang, Jawa Timur</strong>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img src="{{ asset('assets') }}/images/galery-8.jpeg" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">Fikri J S</h3>
                            <strong class="product-price">20 Tahun | Pasuruan, Jawa Timur</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection