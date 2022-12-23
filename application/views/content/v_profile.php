<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="profile">
    <div class="container-xxl py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 col-sm-11 col-10">
                <ul class="nav nav-tabs justify-content-between position-relative">
                    <li data-aos="fade-right" data-aos-duration="1000"><a href="#tab1"
                            class="active"><?= @$_GET['lang'] == 'eng' ? 'About Company' : 'Tentang Perusahaan' ?></a>
                    </li>
                    <li data-aos="fade-left" data-aos-duration="1000"><a
                            href="#tab2"><?= @$_GET['lang'] == 'eng' ? 'Vision, Mission and Values' : 'Visi, Misi, & Value' ?></a>
                    </li>
                    <li data-aos="fade-left" data-aos-duration="1000"><a
                            href="#tab3"><?= @$_GET['lang'] == 'eng' ? 'Download Company Profile' : 'Download Company Profile' ?></a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="tab-content">
            <div id="tab1" class="tab-pane py-5 fade active show">
                <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2><?= @$_GET['lang'] == 'eng' ? $about_us->nama_eng : $about_us->nama ?></h2>
                </div>
                <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4">
                        <img src="<?= base_url(); ?>assets/imagenew/bg-about-us.png" class="img-fluid" alt="">
                        <!-- <div class="pt-5">
                            <div class="box-watch-video d-block text-center py-3 px-4 rounded-10 text-white text-uppercase" data-aos="fade-left" data-aos-delay="200" style="width: fit-content;background: linear-gradient(180deg, #5B88C6 0%, #1E539C 100%);">
                                <a href="<?= $vp->link; ?>" class="glightbox btn-watch-video w-100">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="img position-relative me-4">
                                            <img class="img-fluid bgvideo me-2" src="<?= base_url(); ?>assets/imagenew/icon-video.png" alt="">
                                        </div>
                                        <h6 class="d-flex align-items-center justify-content-center text-white">Watch Video</h6>
                                    </div>
                                </a>

                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-8">
                        <img src="<?= base_url(); ?>assets/imagenew/peta-indo.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row justify-content-center pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-5">
                        <div class="ratio ratio-16x9">
                            <?= $vp->link; ?>
                        </div>
                    </div>
                </div>
                <div class="content mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <?= @$_GET['lang'] == 'eng' ? $about_us->content : $about_us->konten ?>
                </div>
            </div>
            <div id="tab2" class="tab-pane pt-5 fade">
                <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2><?= @$_GET['lang'] == 'eng' ? 'Vision, Mission and Value' : 'Visi, Misi, and Values' ?>
                    </h2>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-7">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <h4 class="bg-blue"><?= @$_GET['lang'] == 'eng' ? $visi->nama_eng : $visi->nama ?></h4>
                            <div class="content mt-4">
                                <?= @$_GET['lang'] == 'eng' ? $visi->content : $visi->konten ?>
                            </div>
                        </div>
                        <div class="mt-5" data-aos="fade-up" data-aos-duration="1000">
                            <h4 class="bg-blue"><?= @$_GET['lang'] == 'eng' ? $misi->nama_eng : $misi->nama ?></h4>
                            <div class="content-misi mt-4">
                                <?= @$_GET['lang'] == 'eng' ? $misi->content : $misi->konten ?>
                            </div>
                        </div>

                        <div class="mt-5" data-aos="fade-up" data-aos-duration="1000">
                            <h4 class="bg-blue">
                                <?= @$_GET['lang'] == 'eng' ? 'Value' : 'Value' ?>
                            </h4>
                            <div class="content mt-5" data-aos="fade-up" data-aos-duration="1000">
                                <h5 class="py-1 mt-4 mb-3">
                                    <?= @$_GET['lang'] == 'eng' ? $lingkup->nama_eng : $lingkup->nama ?> :</h5>
                                <?= @$_GET['lang'] == 'eng' ? $lingkup->content : $lingkup->konten ?>
                            </div>

                            <div class="content mt-5" data-aos="fade-up" data-aos-duration="1000">
                                <h5 class="py-1 mt-4 mb-3">
                                    <?= @$_GET['lang'] == 'eng' ? $elemen->nama_eng : $elemen->nama ?> :</h5>
                                <?= @$_GET['lang'] == 'eng' ? $elemen->content : $elemen->konten ?>
                            </div>

                            <div class="content d-block d-lg-none mt-5" data-aos="fade-up" data-aos-duration="1000">
                                <h5 class="py-1 mt-4 mb-3">
                                    <?= @$_GET['lang'] == 'eng' ? $strategi->nama_eng : $strategi->nama ?> :</h5>
                                <?= @$_GET['lang'] == 'eng' ? $strategi->content : $strategi->konten ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <div class="img-visi-misi" data-aos="fade-up" data-aos-duration="1000">
                            <img src="<?= base_url(); ?>assets/imagenew/profil.png" class="img-fluid" alt="">
                        </div>
                        <div class="content d-none d-lg-block mt-5" data-aos="fade-up" data-aos-duration="1000">
                            <h5 class="py-1 mt-4 mb-3">
                                <?= @$_GET['lang'] == 'eng' ? $strategi->nama_eng : $strategi->nama ?> :</h5>
                            <?= @$_GET['lang'] == 'eng' ? $strategi->content : $strategi->konten ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane py-5 fade">
                <div class="header-title">
                    <h2><?= @$_GET['lang'] == 'eng' ? 'Compro' : 'Compro' ?></h2>
                </div>
                <div class="btn-compro row mt-5 pt-5">
                    <?php foreach ($compro as $c) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-4 col-6 mb-3">
                        <a href="https://maskargo.digitalindo.co.id/upload/compro/<?= $c->image; ?>"
                            class="d-block text-center py-3 px-3 rounded-10 text-white text-uppercase"
                            target="_blank"><?= $c->nama; ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>