<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="layanan">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'PRODUCTS & SERVICES' : 'PRODUK & LAYANAN' ?></h2>
        </div>
        <?php $dc1 = $this->db->query("SELECT * FROM tbl_deskripsi_content WHERE id = 3")->row() ?>
        <p class="mt-5"><?= @$_GET['lang'] == 'eng' ? $dc1->description : $dc1->deskripsi ?></p>
        <!-- <div class="row text-center">
            <?php foreach ($layanan as $l) { ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="layanan-content p-3">
                    <div class="c-img">
                        <a href="<?= base_url(); ?>layanan/detail_layanan">
                            <img src="https://maskargo.digitalindo.co.id/upload/layanan/<?= $l->image; ?>"
                                class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="c-title mt-3">
                        <a href="<?= base_url(); ?>layanan/detail_layanan">
                            <h6 class="text-uppercase"><?= @$_GET['lang'] == 'eng' ? $l->title_eng : $l->title ?></h6>
                        </a>
                    </div>
                    <div class="c-desk mt-3">
                        <p><?= @$_GET['lang'] == 'eng' ? substr($l->deskripsi_eng, 0, 43) : substr($l->deskripsi, 0, 43) ?>...
                            <a href="<?= base_url(); ?>layanan/detail_layanan" class="text-black-50">Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div> -->
        <div class="row justify-content-lg-end mt-5">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5 col-4" data-aos="fade-up" data-aos-duration="1000">
                <ul class="nav nav-tabs border-0" id="myTab">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_moda")->result() as $md) { ?>
                    <h4 class="text-dark mt-3"><?= $md->moda; ?></h4>
                    <?php foreach ($this->db->query("SELECT * FROM tbl_layanan WHERE modaId = $md->id")->result() as $l) { ?>

                    <li class="nav-item">
                        <a href="#tab-<?= $l->id ?>" class="nav-link"
                            data-bs-toggle="tab"><?= @$_GET['lang'] == 'eng' ? $l->title_eng : $l->title ?></a>
                    </li>
                    <?php } ?>

                    <?php } ?>
                </ul>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7 col-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="tab-content">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_layanan")->result() as $l) { ?>
                    <div class="tab-pane fade <?php
                                                    if ($l->id != "") {
                                                        if ($l->id == 1) {
                                                            echo "show active";
                                                        }
                                                    } else {
                                                        if ($l->id == "") {
                                                            echo "show active";
                                                        }
                                                    }
                                                    ?>" id="tab-<?= $l->id ?>">
                        <div
                            class="row border-row align-items-center justify-content-between text-center text-md-start">
                            <div class="col-lg-9 col-md-9">
                                <h2 class="text-dark"><?= @$_GET['lang'] == 'eng' ? $l->title_eng : $l->title ?></h2>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="img-service">
                                    <img src="https://maskargo.digitalindo.co.id/upload/layanan/<?= $l->image; ?>"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="meta-content mt-5">
                            <?= @$_GET['lang'] == 'eng' ? $l->deskripsi_eng : $l->deskripsi ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>