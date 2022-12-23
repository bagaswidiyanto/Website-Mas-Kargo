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
            <h2><?= @$_GET['lang'] == 'eng' ? 'MAS KARGO SHOP' : 'TOKO MAS KARGO' ?></h2>
        </div>
        <div class="row g-4 py-5">
            <?php foreach ($toko as $t) { ?>
                <div class="col-lg-3">
                    <a href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'toko/detail_toko/' . $t->slug . '?lang=eng' : base_url() . 'toko/detail_toko/' . $t->slug ?>">
                        <div class="box-shopping">
                            <div class="img">
                                <img src="https://maskargo.digitalindo.co.id/upload/toko/<?= $t->image; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="content p-2">
                                <div class="title">
                                    <p><?= substr($t->nama, 0, 70); ?>...</p>
                                </div>
                                <div class="price my-2  ">
                                    <h5>Rp<?= number_format($t->price, 0, ",", "."); ?></h5>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
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
                                    <div class="kota">
                                        <small><?= $t->kota; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>