<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->
<style>
.cash-counter-detail .header-title h2 {
    position: relative;
    padding-bottom: 15px;
}
</style>

<div class="cash-counter-detail">
    <div class="container py px-lg-5">
        <div class="header-title-home text-center" data-aos="fade-up" data-aos-duration="1000">
            <h5>MAS Kargo</h5>
            <h2><?= @$_GET['lang'] == 'eng' ? 'CASH COUNTER' : 'CASH COUNTER' ?></h2>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="box-single-news py-5">

                    <div class="entry-title text-center pb-5" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= @$_GET['lang'] == 'eng' ? $peluangusaha->title_eng : $peluangusaha->title ?></h2>
                    </div>
                    <div class="entry-img text-center" data-aos="fade-up" data-aos-duration="1000">
                        <img src="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $peluangusaha->image; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <div class="entry-content mt-5" data-aos="fade-up" data-aos-duration="1000">
                        <?= @$_GET['lang'] == 'eng' ? $peluangusaha->deskripsi_eng : $peluangusaha->deskripsi ?>
                    </div>
                    <?php if ($peluangusaha->compro != '') { ?>
                    <div class="py-5 text-center">
                        <a href="https://maskargo.digitalindo.co.id/upload/cash_counter/<?= $peluangusaha->image; ?>"
                            class="bg-blue text-center py-3 px-3 rounded-10 text-uppercase"><?= @$_GET['lang'] == 'eng' ? $peluangusaha->title_eng : $peluangusaha->title ?></a>
                    </div>
                    <?php } ?>
                </div>
                <a href="<?= base_url(); ?>peluangusaha" data-aos="fade-up" data-aos-duration="1000"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </div>
        </div>
    </div>
</div>