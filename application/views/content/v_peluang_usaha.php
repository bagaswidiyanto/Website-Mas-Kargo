<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="cash-counter bg-grey">
    <div class="container py px-lg-5">
        <div class="header-title-home text-center" data-aos="fade-up" data-aos-duration="1000">
            <h5>MAS Kargo</h5>
            <h2><?= @$_GET['lang'] == 'eng' ? 'CASH COUNTER' : 'CASH COUNTER' ?></h2>
        </div>
        <div class="row row-content d-none d-md-flex" data-aos="fade-up" data-aos-duration="1000">
            <?php
            $i = 1;
            foreach ($this->db->query("SELECT * FROM tbl_cash_counter ORDER BY id ASC")->result() as $cc) {
                if ($i++ % 2 == 0) {
            ?>

                    <div class="col-lg-4 col-md-4 content">
                        <div class="cash-img me-4">
                            <img src="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $cc->image; ?>" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 content">
                        <div class="cash-content">
                            <h4 class="mb-3"><?= @$_GET['lang'] == 'eng' ? $cc->title_eng : $cc->title ?></h4>
                        </div>
                        <div class="cash-deskripsi">
                            <?= @$_GET['lang'] == 'eng' ? substr($cc->deskripsi_eng, 0, 150) : substr($cc->deskripsi, 0, 150) ?>...
                            <a href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'peluangusaha/detail_peluang_usaha/' . $cc->slug . '?lang=eng' : base_url() . 'peluangusaha/detail_peluang_usaha/' . $cc->slug ?>" class="text-danger">Selengkapnya</a>
                        </div>
                    </div>
                <?php } else { ?>

                    <div class="col-lg-8 col-md-8 text-end content">
                        <div class="cash-content me-4">
                            <h4 class="mb-3"><?= @$_GET['lang'] == 'eng' ? $cc->title_eng : $cc->title ?></h4>
                        </div>
                        <div class="cash-deskripsi text-start">
                            <?= @$_GET['lang'] == 'eng' ? substr($cc->deskripsi_eng, 0, 150) : substr($cc->deskripsi, 0, 150) ?>...
                            <a href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'peluangusaha/detail_peluang_usaha/' . $cc->slug . '?lang=eng' : base_url() . 'peluangusaha/detail_peluang_usaha/' . $cc->slug ?>" class="text-danger">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 content">
                        <div class="cash-img">
                            <img src="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $cc->image; ?>" class="img-fluid" alt="">
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
                        <img src="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $cc->image; ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 content">
                    <div class="cash-content" style="text-align: justify;">
                        <h4 class="mb-3"><?= @$_GET['lang'] == 'eng' ? $cc->title_eng : $cc->title ?></h4>
                    </div>
                    <div class="cash-deskripsi">
                        <?= @$_GET['lang'] == 'eng' ? substr($cc->deskripsi_eng, 0, 150) : substr($cc->deskripsi, 0, 150) ?>...
                        <a href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'peluangusaha/detail_peluang_usaha/' . $cc->slug . '?lang=eng' : base_url() . 'peluangusaha/detail_peluang_usaha/' . $cc->slug ?>" class="text-danger">Selengkapnya</a>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>