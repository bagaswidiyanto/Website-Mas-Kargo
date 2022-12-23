<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="gallery">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'Gallery' : 'Galeri' ?></h2>
        </div>

        <style>
            .gallery .nav-tabs .nav-item {
                width: 100%;
            }

            .gallery .nav-tabs .nav-link {
                color: #000;
                padding: 5px 1rem;
            }

            .gallery .nav-tabs .nav-link.active,
            .gallery .nav-tabs .nav-link:hover {
                color: #0D438D;
                background-color: transparent;
                border-color: transparent;
            }
        </style>
        <div class="row mt-5">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5 col-4" data-aos="fade-up" data-aos-duration="1000">
                <ul class="nav nav-tabs border-0" id="myTab">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_master_gallery_filter")->result() as $md) { ?>
                        <h4 class="text-dark mt-3"><?= @$_GET['lang'] == 'eng' ? $md->filter_eng : $md->filter; ?></h4>
                        <?php foreach ($this->db->query("SELECT * FROM tbl_master_sub_filter WHERE id_filter = $md->id")->result() as $l) { ?>

                            <li class="nav-item">
                                <a href="#tab-<?= $l->id ?>" class="nav-link" data-bs-toggle="tab"><?= @$_GET['lang'] == 'eng' ? $l->nama_sub_eng : $l->nama_sub ?></a>
                            </li>
                        <?php } ?>

                    <?php } ?>
                </ul>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7 col-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="tab-content">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_master_sub_filter")->result() as $g) { ?>
                        <div class="tab-pane fade <?php
                                                    if ($g->id != "") {
                                                        if ($g->id == 1) {
                                                            echo "show active";
                                                        }
                                                    } else {
                                                        if ($g->id == "") {
                                                            echo "show active";
                                                        }
                                                    }
                                                    ?>" id="tab-<?= $g->id ?>">
                            <div class="row g-4">
                                <?php foreach ($this->db->query("SELECT a.nama,a.image, a.id_sub_filter FROM tbl_gallery a LEFT JOIN tbl_master_sub_filter b ON a.id_sub_filter=b.id WHERE a.id_sub_filter = '" . $g->id . "'")->result() as $gs) { ?>
                                    <div class="col-lg-4">
                                        <div class="img-service">
                                            <a href="https://maskargo.digitalindo.co.id/upload/gallery/<?= $gs->image; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $g->nama; ?>">
                                                <img src="https://maskargo.digitalindo.co.id/upload/gallery/<?= $gs->image; ?>" title="<?= $gs->nama; ?>" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>



        </div>
    </div>
</div>