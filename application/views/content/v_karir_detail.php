<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>


<?php
function time_ago($timestamp)
{
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;
    $minutes      = round($seconds / 60);        // value 60 is seconds  
    $hours        = round($seconds / 3600);       //value 3600 is 60 minutes * 60 sec  
    $days         = round($seconds / 86400);      //86400 = 24 * 60 * 60;  
    $weeks        = round($seconds / 604800);     // 7*24*60*60;  
    $months       = round($seconds / 2629440);    //((365+365+365+365+366)/5/12)*24*60*60  
    $years        = round($seconds / 31553280);   //(365+365+365+365+366)/5 * 24 * 60 * 60  
    if ($seconds <= 60) {
        return "Sekarang";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "Satu menit lalu";
        } else {
            return "$minutes menit lalu";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "Satu jam lalu";
        } else {
            return "$hours jam lalu";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "Kemarin";
        } else {
            return "$days hari lalu";
        }
    } else if ($weeks <= 4.3) {  //4.3 == 52/12
        if ($weeks == 1) {
            return "Satu minggu lalu";
        } else {
            return "$weeks minggu lalu";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "Satu bulan lalu";
        } else {
            return "$months bulan lalu";
        }
    } else {
        if ($years == 1) {
            return "Satu tahun lalu";
        } else {
            return "$years tahun lalu";
        }
    }
}
?>

<div class="karir-detail">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2>KARIR</h2>
        </div>
        <div class="header-karir">
            <div class="row justify-content-center text-center" hidden>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="img">
                        <img src="https://maskargo.digitalindo.co.id/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-between pt-5 pb-3 bdr-b">
                <div class="col-lg-5 col-md-5 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="pt">
                        <h3><?= $karir->posisi; ?></h3>
                        <p>PT. Merpati Alam Semesta (Maskargo) Jakarta Timur, Indonesia</p>

                    </div>
                </div>

                <!-- <div class="col-lg-5 col-md-5 col-sm-6 mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="1000">
                    <div class="post-date text-center px-lg-5">
                        <p>Lowongan dipasang <?= time_ago($karir->create_date); ?></p>
                    </div>
                </div> -->

                <?php
                if (isset($msg)) {
                    header("refresh:2;" . base_url('karir'));
                }
                ?>
                <div class="mt-2" data-aos="fade-up" data-aos-duration="1000">
                    <strong><?= @$msg; ?></strong>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="job py-4" data-aos="fade-up" data-aos-duration="1000">
                <h3>Job Description</h3>
                <div class="mt-4">
                    <?= $karir->job_deskripsi; ?>
                </div>
            </div>
            <div class="kualifikasi py-4" data-aos="fade-up" data-aos-duration="1000">
                <h3>Minimun Qualifications</h3>
                <div class="mt-4">
                    <?= $karir->kualifikasi; ?>
                </div>
            </div>

            <div class="tunjangan py-4" data-aos="fade-up" data-aos-duration="1000">
                <h3>Tunjangan</h3>
                <div class="mt-4">
                    <?= $karir->tunjangan; ?>
                </div>
            </div>
        </div>
        <center class="mt-4">
            <button class="btn bg-blue mt-3 py-2 px-5 border-0 fw-bold" data-bs-toggle="modal" data-bs-target="#modalResume">Apply Now</button>
        </center>
    </div>

</div>
</div>


<!-- Modal Login -->
<div class="modal moda-resume" id="modalResume">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <!-- <h4 class="modal-title text-dark">
                    <?= @$_GET['lang'] == 'eng' ? 'Upload Form Registrasi Vendor' : 'Unggah Formulir Registrasi Vendor' ?>
                </h4> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body px-3 px-md-5">
                <div class="modal-header text-center">
                    <h5>Kamu akan melamar ke PT. Merpati Alam Semesta sebagai <span class="fw-bold">IT Cloud Operation
                            Officer</span></h5>
                </div>


                <div class="form-box py-5">
                    <form method="post" action="<?= base_url(); ?>karir/resume" enctype="multipart/form-data">
                        <input type="hidden" name="posisi" value="<?= $karir->posisi; ?>">

                        <div class="mb-0">
                            <div class="label d-flex align-items-center">
                                <img src="assets/imagenew/file.png" class="img-fluid" alt="">
                                <h4 class="ms-3">Resume</h4><span class="text-danger">*</span>
                            </div>
                            <div class="box-file mt-5">
                                <img src="assets/imagenew/file.png" alt=""><input type="file" name="file" class="ms-4" required>
                            </div>
                        </div>

                        <div class="py-4 upld">
                            <p>Upload file dalam format PDF max 5MB, upload sekali saja dan kamu dapat menggunakannya
                                untuk lamaran berikutnya.</p>
                        </div>

                        <div class="mb-3">
                            <div class="phone">
                                <label>+62</label>
                                <input type="text" name="telp" class="border-0" placeholder="Telepon/Whatsapp" onkeypress="return hanyaAngka(event)" required>
                            </div>
                            <div class="note pt-3">
                                <p>Harap gunakan nomor telepon yg valid</p>
                                <p>perusahaan memerlukan informasi ini untuk menghubungimu lebih cepat</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Write your cover letter<span class="text-danger">*</span></h4>
                            <textarea name="surat_lamaran" class="form-control mt-4" rows="7" required></textarea>
                        </div>
                        <div class="text-center mt-5">
                            <input type="submit" class="btn bg-blue py-3 px-5 rounded-10 border-0" value="LAMAR SEKARANG">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= @$_GET['lang'] == 'eng' ? 'Close' : 'Tutup' ?></button>
            </div>

        </div>
    </div>
</div>


<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>