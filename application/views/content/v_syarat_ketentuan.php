<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->

<div class="syarat">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'TERMS & CONDITIONS' : 'SYARAT & KETENTUAN' ?></h2>
        </div>
        <div class="row py-5">
            <div class="col-lg-12">
                <?= @$_GET['lang'] == 'eng' ? $syarat->deskripsi_eng : $syarat->deskripsi ?>
            </div>
        </div>
    </div>
</div>