<div class="hero-header">
    <div class="slider-container">
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $s) { ?>
                <div class="swiper-slide">
                    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $s->image; ?>" class="img-fluid"
                        alt="">
                </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
</div>

<style>
@media (min-width: 1400px) {
    .tracking-home .container-xxl {
        max-width: 1520px;
    }
}
</style>

<div class="tracking-home" id="about" data-aos="fade-up" data-aos-duration="1000">
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9 px-0 bg-grey-track position-relative">
                <div class="track-start p-3">
                    <div class="d-flex align-items-center">
                        <img src="<?= base_url(); ?>assets/imagenew/icon-tracking.svg" class="img-fluid me-3" alt="">
                        <h4><?= @$_GET['lang'] == 'eng' ? 'TRACE & TRACK' : 'LACAK PAKET' ?></h4>
                    </div>
                    <div class="form-content p-2">
                        <form action="<?= base_url(); ?>tracking" method="post">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="mb-3 mt-2">
                                        <label
                                            class="fs-13"><?= @$_GET['lang'] == 'eng' ? 'Please enter your waybill number Available up to 10
                                        waybills' : 'Silakan masukkan nomor waybill Anda Tersedia hingga 10 waybill.' ?></label>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="mb-3 position-relative">
                                        <textarea name="tracking" cols="70" rows="3" class="form-control fs-12"
                                            placeholder="<?= @$_GET['lang'] == 'eng' ? 'Enter No. Your shipping airwaybill' : 'Masukkan No. airwaybill Pengiriman Anda' ?>"></textarea>
                                        <button type="submit"
                                            class="btn bg-blue border-0 position-absolute bottom-0 end-0 m-2 fw-bold fs-12"><?= @$_GET['lang'] == 'eng' ? 'TRACK' : 'MELACAK' ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="box-blue p-4    ">
                    <div class="d-flex justify-content-around" style="position: relative; z-index: 1;">
                        <img src="<?= base_url(); ?>assets/imagenew/icon-bg-blue-tracking.svg" class="img-fluid icon-bg"
                            alt="">
                        <div class="pickup">
                            <h4 class="text-white">
                                <?= @$_GET['lang'] == 'eng' ? 'PICKUP ONLINE' : 'PENGAMBILAN ONLINE' ?>
                            </h4>
                            <a href=""
                                class="bg-white rounded-10 border-0 text-dark px-4 py-2 mt-3 float-end fw-bold"><?= @$_GET['lang'] == 'eng' ? 'PICKUP' : 'AMBIL' ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9 mt-4 mt-lg-0 bg-white" style="position: relative; z-index: 2;">
                <div class="track-center p-3">
                    <div class="d-flex align-items-center">
                        <img src="<?= base_url(); ?>assets/imagenew/icon-cek-ongkir.svg" class="img-fluid me-3" alt="">
                        <h4><?= @$_GET['lang'] == 'eng' ? 'SHIPPING RATES' : 'BIAYA PENGIRIMAN' ?></h4>
                    </div>
                    <div class="form-content p-2">
                        <form id="cekTarif" action="prices" method="post" role="form" class="login-form">
                            <div class="mb-3 row align-items-center">
                                <label
                                    class="col-lg-4 fs-13"><?= @$_GET['lang'] == 'eng' ? 'From (Origin)' : 'Dari (Asal)' ?></label>
                                <div class="col-lg-8 px-1">
                                    <input type="text" id="hint" name="asal" class="form-control ui-autocomplete-input"
                                        placeholder="<?= @$_GET['lang'] == 'eng' ? 'Hometown' : 'Kota Asal' ?>">
                                    <input type="hidden" id="asal" name="dari" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label
                                    class="col-lg-4 fs-13"><?= @$_GET['lang'] == 'eng' ? 'To (Destination)' : 'Ke (Tujuan)' ?></label>
                                <div class="col-lg-8 px-1">
                                    <input type="text" id="hint2" name="ke" class="form-control ui-autocomplete-input"
                                        placeholder="<?= @$_GET['lang'] == 'eng' ? 'Destination City' : 'Kota Tujuan' ?>">
                                    <input type="hidden" id="tujuan" name="tujuan" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label
                                    class="col-lg-4 fs-13"><?= @$_GET['lang'] == 'eng' ? 'Weight' : 'Berat' ?></label>
                                <div class="col-lg-8">
                                    <div class="row align-items-center">
                                        <div class="col-4 px-1">
                                            <input type="text" id="weight" name="berat" class="form-control"
                                                placeholder="1" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        KG
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-lg-4 fs-13">Volume (CM)</label>
                                <div class="col-lg-8">
                                    <div class="row align-items-center">
                                        <div class="col-4 px-1">
                                            <input type="text" id="weight" name="berat" class="form-control"
                                                placeholder="Length" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="col-4 px-1">
                                            <input type="text" id="weight" name="berat" class="form-control"
                                                placeholder="Width" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="col-4 px-1">
                                            <input type="text" id="weight" name="berat" class="form-control"
                                                placeholder="Height" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="btn bg-blue fw-bold rounded-10 border-0 float-end"><?= @$_GET['lang'] == 'eng' ? 'Check Rates' : 'Cek Tarif' ?>
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9 bg-grey-track px-0 mt-4 mt-lg-0">
                <div class="track-end p-3">
                    <div class="d-flex align-items-center">
                        <img src="<?= base_url(); ?>assets/imagenew/icon-lokasi.svg" class="img-fluid me-3" alt="">
                        <h4><?= @$_GET['lang'] == 'eng' ? 'FIND DROP POINT' : 'TEMUKAN POIN DROP' ?></h4>
                    </div>
                    <div class="form-content p-2 pb-4">
                        <form id="cekTarif" action="" method="post" role="form" class="login-form">
                            <div class="mb-3">
                                <label><?= @$_GET['lang'] == 'eng' ? 'Find service points based on your nearest location!' : 'Temukan titik layanan berdasarkan lokasi terdekat anda!' ?></label>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <small
                                        class="fs-12 fst-italic"><?= @$_GET['lang'] == 'eng' ? 'Our nearest location' : 'Lokasi terdekat kami' ?></small>
                                </div>
                                <div class="col-lg-8">
                                    <div class="position-relative">
                                        <button type="submit"
                                            class="position-relative bg-white border-0 rounded-10 px-3 py-2 w-100 text-start">
                                            <i class="fa fa-search"></i>
                                            <?= @$_GET['lang'] == 'eng' ? 'Find Service Point' : 'Temukan Titik Layanan' ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="box-blue p-4" style="position: relative; z-index: 1;">
                    <div class="d-flex justify-content-around">
                        <img src="<?= base_url(); ?>assets/imagenew/icon-bg-blue-lokasi.svg" class="img-fluid icon-bg"
                            alt="">
                        <div class="pickup">
                            <h4 class="text-white">
                                <?= @$_GET['lang'] == 'eng' ? 'ONLINE BOOKING' : 'PEMESANAN ONLINE' ?>
                            </h4>
                            <a href="<?= base_url(); ?>booking"
                                class="bg-white rounded-10 border-0 px-4 py-2 mt-3 float-end fw-bold text-dark"><?= @$_GET['lang'] == 'eng' ? 'BOOKING' : 'PEMESANAN' ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl about-home" hidden>
    <div class="container py px-lg-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="header-title-home text-center">
            <h5>About Us</h5>
            <h2>Tentang Kami</h2>
        </div>
    </div>

    <div class="about-content position-relative" data-aos="fade-up" data-aos-duration="1000">
        <img src="<?= base_url(); ?>assets/imagenew/peta-indo.png" class="img-fluid bg position-absolute end-0" alt="">
        <!-- <div class="container py-5 px-lg-5"> -->
        <div class="row justify-content-center align-items-center position-relative">
            <div class="col-lg-5 text-center">
                <div class="img">
                    <img src="<?= base_url(); ?>assets/imagenew/bg-about-us.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <?= @$_GET['lang'] == 'eng' ? $website->description_eng : $website->description ?>
                </div>

            </div>
        </div>

        <div class="row align-items-center pt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-5 col-md-5">
                <div class="ratio ratio-16x9">
                    <?= $vh->link; ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="btn-compro row mt-5">
                    <?php foreach ($compro as $c) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-4 col-6 mb-3">
                        <a href="https://maskargo.digitalindo.co.id/upload/compro/<?= $c->image; ?>"
                            class="d-block text-center py-2 px-3 rounded-10 text-white text-uppercase"
                            target="_blank"><?= $c->nama; ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>

<div class="why-home">
    <div class="container-xxl py px-lg-5">
        <div class="header-title-home text-center" data-aos="fade-up" data-aos-duration="1000">
            <h5>MAS Kargo</h5>
            <h2><?= @$_GET['lang'] == 'eng' ? 'Why MAS Cargo' : 'Kenapa MAS Kargo' ?></h2>
        </div>
        <div class="row justify-content-center text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-10">
                <?php $dc1 = $this->db->query("SELECT * FROM tbl_deskripsi_content WHERE id = 1")->row() ?>
                <p><?= @$_GET['lang'] == 'eng' ? $dc1->description : $dc1->deskripsi ?></p>
            </div>
        </div>
        <div class="row text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
            <?php foreach ($service as $s) { ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-4">
                <div class="why-content">
                    <div class="d-flex justify-content-center">
                        <div class="c-img">
                            <img src="https://maskargo.digitalindo.co.id/upload/service/<?= $s->image; ?>"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="c-title mt-3">
                        <h4><?= @$_GET['lang'] == 'eng' ? $s->nama_eng : $s->nama ?></h4>
                    </div>
                    <div class="c-desk mt-3">
                        <small><?= @$_GET['lang'] == 'eng' ? $s->deskripsi_eng : $s->deskripsi ?></small>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- <div class="cash-counter bg-grey">
    <div class="container py px-lg-5">
        <div class="header-title-home text-center" data-aos="fade-up" data-aos-duration="1000">
            <h5>MAS Kargo</h5>
            <h2><?= @$_GET['lang'] == 'eng' ? 'CASH COUNTER' : 'CASH COUNTER' ?></h2>
        </div>
        <div class="row row-content d-none d-md-flex" data-aos="fade-up" data-aos-duration="1000">
            <?php
            $i = 1;
            foreach ($cc as $cc) {
                if ($i++ % 2 == 0) {
            ?>

            <div class="col-lg-4 col-md-4 content">
                <div class="cash-img me-4">
                    <img src="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $cc->image; ?>"
                        class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-8 col-md-8 content">
                <div class="cash-content">
                    <h4 class="mb-3"><?= @$_GET['lang'] == 'eng' ? $cc->title_eng : $cc->title ?></h4>
                    <p><?= @$_GET['lang'] == 'eng' ? $cc->deskripsi_eng : $cc->deskripsi ?></p>
                </div>
            </div>
            <?php } else { ?>

            <div class="col-lg-8 col-md-8 text-end content">
                <div class="cash-content me-4">
                    <h4 class="mb-3"><?= @$_GET['lang'] == 'eng' ? $cc->title_eng : $cc->title ?></h4>
                    <p><?= @$_GET['lang'] == 'eng' ? $cc->deskripsi_eng : $cc->deskripsi ?></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 content">
                <div class="cash-img">
                    <img src="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $cc->image; ?>"
                        class="img-fluid" alt="">
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>

        <div class="row row-content-md d-flex d-md-none px-3" data-aos="fade-up" data-aos-duration="1000">
            <?php
            foreach ($this->db->query("SELECT * FROM tbl_cash_counter")->result() as $cc) {
            ?>

            <div class="col-lg-4 col-md-4 content">
                <div class="cash-img me-4 text-center">
                    <img src="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $cc->image; ?>"
                        class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-8 col-md-8 content">
                <div class="cash-content" style="text-align: justify;">
                    <h4 class="mb-3"><?= @$_GET['lang'] == 'eng' ? $cc->title_eng : $cc->title ?></h4>
                    <p><?= @$_GET['lang'] == 'eng' ? $cc->deskripsi_eng : $cc->deskripsi ?></p>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div> -->

<div class="client-home" hidden>
    <div class="container py px-lg-5">
        <div class="header-title-home text-center" data-aos="fade-up" data-aos-duration="1000">
            <h5><?= @$_GET['lang'] == 'eng' ? 'Partner' : 'Mitra' ?></h5>
            <h2><?= @$_GET['lang'] == 'eng' ? 'Our loyal partner' : 'Mitra setia kami' ?></h2>
        </div>
        <div class="row justify-content-center text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-10">
                <?php $dc1 = $this->db->query("SELECT * FROM tbl_deskripsi_content WHERE id = 2")->row() ?>
                <p><?= @$_GET['lang'] == 'eng' ? $dc1->description : $dc1->deskripsi ?></p>
            </div>
        </div>
        <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-12">
                <div class="slider-container">
                    <div class="swiper-container client-slider pb-5 py-5">
                        <div class="swiper-wrapper">
                            <?php foreach ($client as $c) { ?>
                            <div class="swiper-slide">
                                <div class="img-client text-center">
                                    <img src="https://maskargo.digitalindo.co.id/upload/client/<?= $c->image; ?>"
                                        title="<?= $c->name; ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimoni-home bg-grey">
    <div class="container py px-lg-5">
        <div class="header-title-home text-center" data-aos="fade-up" data-aos-duration="1000">
            <h5><?= @$_GET['lang'] == 'eng' ? 'Testimonials' : 'Testimonial' ?></h5>
            <h2><?= @$_GET['lang'] == 'eng' ? 'What do they say about us?' : 'Apa kata mereka tentang kami?' ?></h2>
        </div>

        <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-12">
                <div class="slider-container">
                    <div class="swiper-container testimoni-slider pb-5">
                        <div class="swiper-wrapper">
                            <?php foreach ($testi as $t) { ?>
                            <div class="swiper-slide">
                                <div class="testi-box bg-white rounded-20 px-4 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="border-img d-flex justify-content-center align-items-center me-4">
                                            <img src="https://maskargo.digitalindo.co.id/upload/testimoni/<?= $t->image; ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="profil">
                                            <h5><?= $t->nama; ?></h5>
                                            <small><?= $t->jabatan; ?></small>
                                        </div>
                                    </div>
                                    <div class="star d-flex">
                                        <?php if ($t->rating == 5) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <?php } else if ($t->rating == 4) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <?php } else if ($t->rating == 3) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <?php } else if ($t->rating == 2) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <?php } else if ($t->rating == 1) { ?>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <?php } else { ?>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <?php } ?>


                                    </div>
                                    <div class="deskripsi">
                                        <p><?= $t->testi; ?></p>
                                    </div>
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


<div class="visitor">
    <div class="container py px-lg-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="1000">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="total">
                                <h3><?= date('d'); ?></h3>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text">
                                <h5><?= date('F Y'); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="2300">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="icon">
                                <i class="fa fa-signal"></i>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="total">
                                <h3><?= $online->jml; ?></h3>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text">
                                <h5>Online Visitor Today</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="2600">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="icon">
                                <i class="fa fa-male"></i>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="total">
                                <h3><?= $today->jml; ?></h3>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text">
                                <h5>Visitor Today</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="2900">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="total">
                                <h3><?= $all->jml; ?></h3>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text">
                                <h5>Total Visitor</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>