<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="hero_single" data-aos="fade-up" data-aos-duration="1000">
        <?php foreach ($hero as $hero) { ?>
            <img src="https://admin103.fastindo-logistics.com/upload/slider/<?= $hero->image; ?>" class="heros" alt="">
        <?php } ?>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li>Tarif</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <style>
        .section-heading {
            padding-bottom: 100px;
            text-align: center;
        }

        legend {
            border-bottom: 1px solid #e5e5e5;
        }

        .table .tr-header {
            background: linear-gradient(180deg, #3F4080 0%, #2F318B 100%);
            color: #fff;
        }

        .header-tracking {
            text-align: left;
            background: #f3f3f3;
            padding-left: 10px;
        }

        @media (max-width: 767px) {
            table {
                font-size: 12px
            }
        }
    </style>

    <!-- ======= About Us Section ======= -->
    <section class="tracking_awb_detail">
        <div class="container">
            <div class="section-heading">

                <?php

                $tujuan = $this->input->post('tujuan');


                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://fastindo.tracks-app.com/restapi/prices/progi/?key=456ceb26807d6bf99fd6f4f0d1ca54d4&dari=' . $this->input->post('dari') . '&tujuan=' . $this->input->post('tujuan') . '',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Cookie: PHPSESSID=0fje837kc47a27lp1tjl4f6pv5'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                $isi = json_decode($response);

                ?>

                <div class="container">
                    <!-- <legend> Ke <?= $this->input->post('ke'); ?></legend> -->
                    <div class="header-tracking">
                        <table>
                            <tr>
                                <td style="width: 30%;">Dari</td>
                                <td style="width: 4%;">:</td>
                                <td> <?= $this->input->post('asal'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 30%;">Destination</td>
                                <td style="width: 4%;">:</td>
                                <td> <?= $this->input->post('ke'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 30%;">Berat</td>
                                <td style="width: 4%;">:</td>
                                <td> <?= $this->input->post('berat'); ?></td>
                            </tr>
                        </table>
                    </div>
                    <table class="table table-bordered">
                        <tr class="tr-header">
                            <th>Layanan</th>
                            <th>Moda</th>
                            <th>Min(KG)</th>
                            <th>Tarif</th>
                            <th>Estimasi</th>
                        </tr>
                        <?php foreach ($isi->data as $tarif) { ?>
                            <tr>
                                <td><?= $tarif->Layanan; ?></td>
                                <td><?= $tarif->Moda == 1 ? 'DARAT' : ($tarif->Moda == 2 ? 'UDARA' : ($tarif->Moda == 3 ? 'LAUT' : 'OTHER')); ?></td>
                                <td><?= $tarif->minKG; ?></td>
                                <td><?= number_format($tarif->KGP); ?></td>
                                <td><?= $tarif->Estimasi; ?> hari</td>
                            </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->


</main>