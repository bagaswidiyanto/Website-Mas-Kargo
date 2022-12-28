<div class="container-xxl testimoni-detail">
    <div class="container py-5 px-lg-5">
        <center>
            <div class="title">
                <h2><?= $testi->nama; ?></h2>
                <h5><?= $testi->jabatan; ?></h5>
                <h3><?= $testi->nama_perusahaan; ?></h3>
            </div>
            <div class="image my-5">
                <img src="https://maskargo.digitalindo.co.id/upload/testimoni/<?= $testi->image; ?>" alt="">
            </div>
        </center>
        <div class="desk">
            <p><?= $testi->testi; ?></p>
        </div>
        <div class="mt-5">
            <a href="<?= base_url(); ?>">
                <- Back</a>
        </div>
    </div>
</div>