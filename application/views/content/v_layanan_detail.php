<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->

<div class="container-xxl detail-layanan">
    <div class="container py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'PRODUCTS & SERVICES' : 'PRODUK & LAYANAN' ?></h2>
        </div>
        <div class="row align-items-center text-center py-5">

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="img-detail">
                    <img src="<?= base_url(); ?>assets/imagenew/img-detail-layanan.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="layanan-content p-3">
                    <div class="c-img">
                        <img src="<?= base_url(); ?>assets/imagenew/layanan1.svg" class="img-fluid" alt="" id="img-layanan">
                    </div>
                    <div class="c-title mt-3">
                        <h6 id="title-layanan">
                            <?= @$_GET['lang'] == 'eng' ? 'DOMESTIC REGULAR SERVICES' : 'LAYANAN REGULER DOMESTIK' ?>
                        </h6>
                    </div>
                    <div class="c-desk mt-1">
                        <p id="desk-layanan">
                            <?= @$_GET['lang'] == 'eng' ? 'Shipment deliver in normal business process' : 'Pengiriman dikirim dalam proses bisnis normal' ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <?php $lyn = $this->db->query("SELECT * FROM tbl_layanan")->row(); ?>
            <div class="col-lg-6 col-md-6 d-block d-sm-none">
                <div class="img-detail">
                    <img src="<?= base_url(); ?>assets/imagenew/img-detail-layanan.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-block d-sm-none">
                <div class="layanan-content p-3">
                    <div class="c-img">
                        <img src="https://maskargo.digitalindo.co.id/upload/layanan/<?= $lyn->image; ?>"
                            class="img-fluid" alt="" id="img-layanan">
                    </div>
                    <div class="c-title mt-3">
                        <h6 id="title-layanan"><?= @$_GET['lang'] == 'eng' ? $lyn->title_eng : $lyn->title ?>
                        </h6>
                    </div>
                    <div class="c-desk mt-1">
                        <p id="desk-layanan">
                            <?= @$_GET['lang'] == 'eng' ? $lyn->deskripsi_eng : $lyn->deskripsi ?></p>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row mt-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="slider-container">
                    <div class="swiper-container detail-layanan-slider pb-5">
                        <div class="swiper-wrapper">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_layanan")->result() as $ly) { ?>
                                <div class="swiper-slide">
                                    <div class="img-layanan text-center">
                                        <a class="tab">
                                            <img src="https://maskargo.digitalindo.co.id/upload/layanan/<?= $ly->image; ?>" class="img-fluid" alt="">
                                            <h6 hidden>
                                                <?= @$_GET['lang'] == 'eng' ? $ly->title_eng : $ly->title ?></h6>
                                            <p hidden><?= @$_GET['lang'] == 'eng' ? $ly->deskripsi_eng : $ly->deskripsi ?>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>