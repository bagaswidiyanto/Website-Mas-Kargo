<div class="hero-header">
    <div class="slider-container">
        <div class="swiper-container hero-toko-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $s) { ?>
                <div class="swiper-slide">
                    <img src="https://maskargo.digitalindo.co.id/upload/slider_toko/<?= $s->image; ?>" class="img-fluid"
                        alt="">
                </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

<div class="toko-detail">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'TRAVEL & UMRAH' : 'TRAVEL & UMRAH' ?></h2>
        </div>
        <div class="single py-5 text-center">
            <div class="img">
                <img src="https://maskargo.digitalindo.co.id/upload/travel_umrah/<?= $travel_umrah->image; ?>" alt="">
            </div>
            <div class="price my-3">
                <h4>Rp<?= number_format($travel_umrah->price, 0, ",", "."); ?></h4>
            </div>
            <div class="nama">
                <h3 class="fw-bold"><?= $travel_umrah->nama; ?></h3>
            </div>
            <div class="deskripsi mt-5 text-start">
                <h2 class="mb-4">Deskripsi</h2>
                <?= $travel_umrah->deskripsi; ?>
            </div>
        </div>

        <a href="<?= base_url() ?>toko" class="mt-5 text-blue">
            <- Back</a>
    </div>
</div>