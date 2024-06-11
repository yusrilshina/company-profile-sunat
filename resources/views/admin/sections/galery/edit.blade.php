@extends('admin.main')
@section('konten')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                    <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                    <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header rounded-top-3 bg-secondary">
                            <h4 class="text-white">Edit Galery</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard-galery.update',$gallery->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                        placeholder="Masukkan Nama" value="{{ old('nama',$gallery->nama) }}"  />
                                        @error('nama')
                                        <small  class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur"
                                        placeholder="Masukkan Umur (Tahun)" value="{{ old('umur',$gallery->umur) }}"  />
                                        @error('umur')
                                        <small  class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Alamat</label>
                                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="nama"
                                        placeholder="Masukkan Alamat" value="{{ old('alamat',$gallery->alamat) }}"  />
                                        @error('alamat')
                                        <small  class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto</label>
                                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar" />
                                    @error('gambar')
                                    <small  class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class=" btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
