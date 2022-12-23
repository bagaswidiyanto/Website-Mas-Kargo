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
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 my-1 my-md-2 active" data-filter="*">
                        <?= @$_GET['lang'] == 'eng' ? 'All' : 'Semua' ?></li>
                    <?php foreach ($filter as $f) { ?>
                        <li class="mx-2 my-1 my-md-2" data-filter=".filter-<?= $f->slug; ?>">
                            <?= @$_GET['lang'] == 'eng' ? $f->filter_eng : $f->filter ?></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <div class="row text-center portfolio-container">
            <?php foreach ($gallery as $g) { ?>
                <?php $slug = $this->db->query("SELECT * FROM tbl_master_gallery_filter WHERE id = '" . $g->id_filter . "'")->row(); ?>
                <div class="col-lg-3 col-6 mt-4 portfolio-item filter-<?= $slug->slug ?>" data-aos="fade-up" data-aos-duration="1000">
                    <div class="portfolio-wrap">
                        <a href="https://maskargo.digitalindo.co.id/upload/gallery/<?= $g->image; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $g->nama; ?>">
                            <img src="https://maskargo.digitalindo.co.id/upload/gallery/<?= $g->image; ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>