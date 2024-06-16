
<footer class="footer-section">
    <div class="container relative">
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Sahabat<span>sunat</span></a>
                </div>
                <p class="mb-4">Menerima layanan sunat Modern Super-Ring Tanpa disuntik, Tanpa dijahit, Tanpa
                    diverban</p>

                <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-4">
                        <ul class="list-unstyled">
                            <li>
                                <h6 class="text-black fw-bold">Link</h6>
                            </li>
                            <li><a href="/">Profile</a></li>
                            <li><a href="/galery">Galery</a></li>
                            <li><a href="/testimoni">Testimoni</a></li>
                            <li><a href="/layanan">Layanan</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <ul class="list-unstyled">
                            <li>
                                <h6 class="text-black fw-bold">Melayani</h6>
                            </li>
                            <li><a href="#">Khitan Anak</a></li>
                            <li><a href="#">Khitan Dewasa</a></li>
                            <li><a href="#">Khitan Masal</a></li>
                            <li><a href="#">Khitan Gratis</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <ul class="list-unstyled">
                            <li>
                                <h6 class="text-black fw-bold">Metode</h6>
                            </li>
                            <li><a href="#">Metode Stapler</a></li>
                            <li><a href="#">Metode Super Ring</a></li>
                            <li><a href="#">Metode Flash Couter</a></li>
                            <li><a href="#">Metode Clamp</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
                        <a hreff="https://vortusixtech.com">Vortusix Tech</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->


<script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/js/tiny-slider.js"></script>
<script src="{{ asset('assets') }}/js/custom.js"></script>
<script>
     function kirim() {
            var isi = $('#floatingTextarea2').val();
            var link = "https://wa.me/6285329040980?text=" + isi;
            if (isi == "") {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Silahkan Masukkan Pesan Anda !!"
                });
            } else {
                console.log(link);
                window.open(link);
            }

        }

          // Dapatkan URL saat ini
    var currentUrl = window.location.pathname;

// Ambil semua elemen nav-link
var navLinks = document.querySelectorAll('.custom-navbar-nav .nav-link');

// Iterasi melalui setiap nav-link
navLinks.forEach(function(link) {
    // Jika href dari link cocok dengan URL saat ini
    if (link.getAttribute('href') === currentUrl) {
        // Tambahkan class 'active' ke elemen li parent dari link tersebut
        link.parentElement.classList.add('active');
    } else {
        // Hapus class 'active' dari elemen li parent dari link yang tidak sesuai
        link.parentElement.classList.remove('active');
    }
});
</script>
</body>

</html>