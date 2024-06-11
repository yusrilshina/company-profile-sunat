
@extends('user.main')
@section('konten')
<div class="why-choose-section">
    <div class="container">
        <h1 class="text-center text-black fw-bold mb-md-5 mb-sm-5">Galery</h1>
        <div class="product-section pt-0">
            <div class="container">
                <div class="row justify-content-center">

                  @foreach($galery as $g)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="#">
                            <img  src="{{ asset('/storage/galery/' . $g->gambar) }}" class="img-fluid product-thumbnail produk">
                            <h3 class="product-title">{{ $g->nama }}</h3>
                            <strong class="product-price">{{ $g->umur }} Tahun | {{ $g->alamat }}</strong>
                        </a>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection