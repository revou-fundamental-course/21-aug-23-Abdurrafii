@extends('utama')
@section('title')
Laboratorium Komputer ITENAS
@endsection
@section('css')
<link rel="stylesheet" href="css/style.css">
@endsection
<!-- navbar -->
    
    @section('isi')
    <?php $menu = "pengumuman"; ?>
    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container">
            <h1 class="text-light text-center display-5 mb-3">selamat datang!</h1>
            <h2 class="text-light text-center mb-3">di website laboratorium komputer ITENAS</h2>

            
                <!-- button -->
                <div class="mt-5 d-flex justify-content-center">
                    <a href="promo.html" class="btn btn-warning btn-lg text-light"> Lorem, ipsum.</a>
                </div>
                <!-- button -->
           
        </div>
    </div>
    <!-- banner -->

    <!-- berita -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center">Berita</h2>
            <div class="row mt-5 justify-content-center">

                <div class="col-sm-6 col-md-4 col-lg-3 hovered-card mb-3">

                    <div class="card">
                        <img src="image/ujian.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit.</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis,
                                cum.</p>

                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 hovered-card mb-3">

                    <div class="card">
                        <img src="image/komputer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit.</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis,
                                cum.</p>

                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 hovered-card mb-3">

                    <div class="card">
                        <img src="image/komputer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit.</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis,
                                cum.</p>

                        </div>
                    </div>

                </div>

                <!-- button -->
                <div class="mt-5 d-flex justify-content-center">
                    <a href="promo.html" class="btn btn-warning btn-lg text-light"> Lorem, ipsum.</a>
                </div>
                <!-- button -->



            </div>

        </div>
    </div>
    <!-- berita -->

    <!-- layanan -->
    <div class="container-fluid py-5 imeg">
        <div class="conteiner">
            <h2 class="text-light text-center mb-5">Layanan</h2>

            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-3 col-lg-3 hovered-card mb-4">
                    <div class="d-flex justify-content-center">
                        <div class="icon-service d-flex align-items-center justify-content-center">
                            <i class="bi bi-textarea display-6"></i>
                        </div>
                    </div>
                    <div class="mt-3 text-white text-center">
                        <h5>Penelitian</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut animi corrupti est pariatur modi
                            iste.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 hovered-card mb-4">
                    <div class="d-flex justify-content-center">
                        <div class="icon-service d-flex align-items-center justify-content-center">
                            <i class="bi bi-puzzle display-6"></i>
                        </div>
                    </div>
                    <div class="mt-3 text-white text-center">
                        <h5>Pengabdian Masyarakat</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut animi corrupti est pariatur modi
                            iste.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 hovered-card mb-4">
                    <div class="d-flex justify-content-center">
                        <div class="icon-service d-flex align-items-center justify-content-center">
                            <i class="bi bi-wrench display-6"></i>
                        </div>
                    </div>
                    <div class="mt-3 text-white text-center">
                        <h5>Training</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut animi corrupti est pariatur modi
                            iste.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- layanan -->

    <!-- prodak -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center mb-5">Lorem, ipsum dolor.</h2>

            <div class="row">
                <div class="col-sm-6 col-lg-3 hovered-card mb-3">

                    <div class="card">

                        <a href="image/t_mesin.jpg" data-lightbox="produk-french-fries"
                            data-title="French Fries">
                            <img src="image/tt_mesin.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title text-warning ">Lorem.</h5>
                            <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <h4 class="text-warning ">Lorem, ipsum.</h4>

                        </div>
                    </div>

                </div>


                <div class="col-sm-6 col-lg-3 hovered-card mb-3">

                    <div class="card">

                        <a href="image/t_elektro.jpg" data-lightbox="produk-coffe" data-title="coffe">
                            <img src="image/tt_elek.jpg" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title text-warning ">Lorem.</h5>
                            <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <h4 class="text-warning ">Lorem, ipsum.</h4>

                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-lg-3 hovered-card mb-3">

                    <div class="card">

                        <a href="image/t_informatika.jpg" data-lightbox="produk-steak" data-title="steak">
                            <img src="image/tt_info.jpg" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title text-warning ">Lorem.</h5>
                            <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <h4 class="text-warning ">Lorem, ipsum.</h4>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-lg-3 hovered-card mb-3">

                    <div class="card">

                        <a href="image/t_smk.jpg" data-lightbox="produk-tofu-rice" data-title="tofu rice">
                            <img src="image/tt_smk.jpg" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title text-warning ">Lorem.</h5>
                            <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <h4 class="text-warning ">Lorem, ipsum.</h4>

                        </div>
                    </div>

                </div>
            </div>
            <!-- button -->
            <div class="mt-5 d-flex justify-content-center">
                <a href="produk.html" class="btn btn-warning btn-lg text-light">lihat lainnya</a>
            </div>
            <!-- button -->

        </div>
    </div>

    


    <!-- reservasi -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center">Hubungi Admin</h2>
            

            <form class="col-lg-6 offset-lg-3 mt-5">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="nokontak" class="form-label">NRP</label>
                    <input type="text" class="form-control" id="nokontak">
                </div>
                <div class="mb-3">
                    <label for="jumlahmeja" class="form-label">Pesan</label>
                    <input type="text" class="form-control" id="jumlahmeja">
                </div>
                <div>
                    <button class="btn btn-warning text-light w-100">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <!-- reservasi -->

    
    @endsection
    <!-- footer -->
    
    <!-- footer -->

    <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
    <script>src = "dist/js/lightbox-plus-jquery.min.js"</script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>

</body>

</html>