@extends('user.main')
@section('konten')
<div class="testimonial-section before-footer-section">
    <div class="container">
        <h1 class="text-center text-black fw-bold mb-md-5 mb-sm-5">Testimonials</h1>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">
                        
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Saya sangat puas dengan layanan yang diberikan oleh Klinik Sahabat Sunat. Anak saya awalnya sangat takut untuk disunat, tetapi tim medis di klinik ini sangat profesional dan ramah. Mereka berhasil membuat anak saya merasa nyaman dan tenang selama prosedur berlangsung. Proses sunatnya cepat dan tidak menimbulkan rasa sakit yang berlebihan. Setelahnya, pemulihan juga berjalan lancar berkat petunjuk dan perawatan yang diberikan oleh dokter.

                                                Terima kasih banyak, Klinik Sahabat Sunat! Saya akan merekomendasikan klinik ini kepada teman dan keluarga yang membutuhkan layanan sunat.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{ asset('assets') }}/images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Ibu Suparni</h3>
                                            <span class="position d-block mb-3">Wali an.Dimas Maulana</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Aku sangat senang sunat di Klinik Sahabat Sunat. Dokternya baik banget dan selalu bikin aku ketawa. Proses sunatnya cepat dan nggak sakit seperti yang aku bayangkan. Sekarang aku bisa main lagi sama teman-teman. Terima kasih, Dokter!&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{ asset('assets') }}/images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Arif Setiawan</h3>
                                            <span class="position d-block mb-3">10 Tahun | jombang</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Awalnya aku sangat takut untuk disunat, tapi di Klinik Sahabat Sunat, semua rasa takutku hilang. Dokternya baik dan sabar menjelaskan semua yang akan dilakukan. Prosesnya cepat dan tidak terlalu sakit. Sekarang aku sudah sembuh dan bisa main seperti biasa lagi. Terima kasih, Klinik Sahabat Sunat!&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{ asset('assets') }}/images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Diman Maulana</h3>
                                            <span class="position d-block mb-3">10 Tahun | Pasuruan</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- END item -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection