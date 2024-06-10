@extends('user.main')
@section('konten')
    <div class="hero" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col-lg-5 align-self-center">
                    <div class="intro-excerpt ">
                        <h1>Sahabat <span clsas="d-block">Sunat</span></h1>
                        <p class="mb-4">Menerima layanan sunat Modern Super-Ring Tanpa disuntik, Tanpa dijahit, Tanpa
                            diverban</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap ">
                        <img src="{{ asset('assets') }}/images/anakSoleh.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">About Us</h2>
                    <p>Sahabat Khitan adalah pusat pelayanan Khitan (Circumcision Center) yang memiliki konsep ramah dan
                        menyenangkan, Sahabat Khitan menerapkan konsep rumah untuk membuat para pasien nyaman. Sebagai
                        sebuah pusat pelayanan Khitan selalu melakukan banyak inovasi dalam hal pelayanan demi
                        memberikan yang terbaik kepada pasien. memiliki komitmen untuk mengubah presepsi anak dan orang
                        tua tentang klinik Khitan. Klinik Khitan yang biasanya dipandang menyeramkan oleh anak
                        dipatahkan oleh hadirnya Sahabat Khitan, konsep menyenangnkan yang diberikan akan membuat proses
                        Khitan lebih bersahabat tidak lagi menyeramkan untuk anak</p>
                    <p>Sahabat Khitan tidak hanya membuat inovasi dalam konsep klinik Khitan, tetapi juga dalam metode
                        yang digunakan. Super Ring adalah metode yang digunakan dan metode ini tidak perlu melalui
                        proses penjahitan sehingga pendarahan yang terjadi akan sangat minim, begitu juga rasa sakit
                        yang dirasakan oleh pasien. Setelah di khitan pun pasien tidak perlu diperban dan bisa langsung
                        mandi dan melakukan aktifitas seperti biasa. Hasil yang di dapat lebih presisi,dan estetika,
                        Selain itu, metode ini tidak memakan waktu banyak. Super Ring yang digunakan sudah disesuaikan
                        dengan anatomi anak Indonesia.

                        Sahabat Khitan menggunakan peralatan medis sekali pakai sebagai wujud mendukung program Go
                        Green, pelayanan kesehatan terbaik merupakan tujuan utama Sahabat Khitan.</p>

                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('assets') }}/images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="alamat py-3">
        <h1 class="text-center text-white fw-bold my-md-3 my-sm-3">Contact Us</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe class="rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2833266519388!2d112.27307287404561!3d-7.544049374473681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786b1e33b5e5b7%3A0x133d5e8968741f4f!2sPondok%20Pesantren%20Darul%20Ulum%20Jombang!5e0!3m2!1sid!2sid!4v1717629314340!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe> <br>
                    <h5 class="text-white">Jl. KH. Rifai Romly, Wonokerto Selatan, Peterongan, Kec. Peterongan, Kabupaten
                        Jombang, Jawa Timur 61481</h5>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section py-5">
        <h2 class="section-title  mx-auto text-center fw-bold">Our Team</h2>
        <div class="container">
                 <div class="row justify-content-center">

                <!-- Start Column 1 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="{{ asset('assets') }}/images/person_1.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Lawson</span> Arnold</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>Separated they live in.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="{{ asset('assets') }}/images/person_2.jpg" class="img-fluid mb-5">

                    <h3 clas><a href="#"><span class="">Jeremy</span> Walker</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>Separated they live in.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>

                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="{{ asset('assets') }}/images/person_3.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Patrik</span> White</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>Separated they live in.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>
                </div>
            



            </div>
        </div>
    </div>
@endsection
