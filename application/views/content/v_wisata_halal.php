<?php
$numberAPI1 = $website->phone;
$noAPI1 = substr($numberAPI1, 1);
$apiWa1 = $noAPI1;

$waLink1 = "https://api.whatsapp.com/send?phone=62$apiWa1&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<div class="hero-header">
    <div class="slider-container">
        <div class="swiper-container hero-toko-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $s) { ?>
                    <div class="swiper-slide">
                        <img src="https://maskargo.digitalindo.co.id/upload/slider_toko/<?= $s->image; ?>" class="img-fluid" alt="">
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

<div class="toko">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'WISATA HALAL' : 'WISATA HALAL' ?></h2>
        </div>
        <div class="row g-4 py-5">
            <?php foreach ($wisatahalal as $wh) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'wisatahalal/detail_wisatahalal/' . $wh->slug . '?lang=eng' : base_url() . 'wisatahalal/detail_wisatahalal/' . $wh->slug ?>">
                        <div class="box-shopping pb-4">
                            <div class="img">
                                <img src="https://maskargo.digitalindo.co.id/upload/wisata_halal/<?= $wh->image; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="content p-2">
                                <div class="title">
                                    <?php if (strlen($wg->nama) > 100) { ?>
                                        <p><?= substr($wg->nama, 0, 100); ?>...</p>
                                    <?php } else { ?>
                                        <p><?= substr($wg->nama, 0, 100); ?></p>
                                    <?php } ?>
                                </div>
                                <div class="price my-2  ">
                                    <h5>Rp<?= number_format($wh->price, 0, ",", "."); ?></h5>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="star d-flex">
                                        <?php if ($wh->rating == 5) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        <?php } else if ($wh->rating == 4) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        <?php } else if ($wh->rating == 3) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        <?php } else if ($wh->rating == 2) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        <?php } else if ($wh->rating == 1) { ?>
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
                                    <div class="kota">
                                        <small><?= $wh->kota; ?></small>
                                    </div>
                                </div>
                                <div class="button mt-3">
                                    <a href="<?= $waLink1; ?>" class="bg-blue px-3 py-2 rounded-20" target="_blank">PESAN
                                        SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>