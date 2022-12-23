<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>

<div class="karir">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2>KARIR</h2>
        </div>
        <div class="box-header pt-5">
            <div class="header-karir bg-blue">
                <div class="row py-4 px-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 col-12">
                        <div class="pt text-center px-5">
                            <p class="text-white fw-bold">Lowongan di</p>
                            <p class="text-white fw-bold">PT. MERPATI ALAM SEMESTA (MAS KARGO)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 mt-4 mt-lg-0 d-none d-lg-block">
                        <div class="spek">
                            <input type="text" placeholder="Spesifikasi" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3 col-10 mt-4 mt-lg-0">
                        <div class="search">
                            <input id="mySearch" onkeyup="myFunction()" type="text" placeholder="Cari"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-1 col-2 mt-4 mt-lg-0">
                        <div class="btn-search">
                            <i class="fa fa-search bg-white p-3 text-blue rounded-10"></i>
                        </div>
                    </div>
                </div>
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
        <div class="box-karir" id="content">
            <?php foreach ($this->db->query("SELECT * FROM tbl_karir ORDER BY sort ASC")->result() as $k) { ?>
            <div class="conten-karir py-5" id="karir" data-aos="fade-up" data-aos-duration="1000">
                <div class="row align-items-center text-center">
                    <div class="col-lg-3 col-12">
                        <div class="img">
                            <img src="https://maskargo.digitalindo.co.id/upload/<?= $website->image; ?>"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="corporation">
                            <h5><?= $k->posisi; ?></h5>
                            <p><?= $k->posisi; ?> PT. Merpati Alam Semesta (Maskargo)<br>Jakarta Timur, Indonesia</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="post-date">
                            <p>Posted <?= time_ago($k->create_date); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="btn-selengkapnya">
                            <a href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'karir/detail_karir/' . $k->slug . '?lang=eng' : base_url() . 'karir/detail_karir/' . $k->slug ?>"
                                class="btn bg-blue py-2 px-3 fw-bold border-0">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<script>
function myFunction() {
    var input, filter, karir, h5, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    content = document.getElementById("content");
    karir = content.getElementById("karir");
    for (i = 0; i < karir.length; i++) {
        h5 = karir[i].getElementsByTagName("h5")[0];
        if (h5.innerHTML.toUpperCase().indexOf(filter) > -1) {
            karir[i].style.display = "";
        } else {
            karir[i].style.display = "none";
        }
    }
}
</script>