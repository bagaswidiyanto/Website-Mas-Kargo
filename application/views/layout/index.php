<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE status = 1")->result() as $n) { ?>
    <?php if ($this->uri->segment(1) == $n->slug) {
            $segment1 = $n->title_indo . ' | ' . $n->metaTitle;
            $metaKey = $n->metaKeywords;
            $metaDes = $n->metaDescription;
        } ?>
    <?php } ?>

    <!-- <?php
            if ($this->uri->segment(1) == 'prices') {
                $segment1 = $website->metaTitle . ' | Price';
                $metaKey = $website->metaKeywords;
                $metaDes = $website->metaDescription;
            } else if ($this->uri->segment(1) == 'tracking') {
                $segment1 = $website->metaTitle . ' | Tracking';
                $metaKey = $website->metaKeywords;
                $metaDes = $website->metaDescription;
            } else if ($this->uri->segment(1) == 'getbranch') {
                $segment1 = $website->metaTitle . ' | Get Branch';
                $metaKey = $website->metaKeywords;
                $metaDes = $website->metaDescription;
            }
            ?> -->

    <?php if ($this->uri->segment(2) != 'baca' && $this->uri->segment(2) != 'detail_peluang_usaha' && $this->uri->segment(2) != 'detail_karir') { ?>
    <title><?= $segment1; ?> </title>
    <meta name="keywords" content="<?= $metaKey; ?>">
    <meta name="description" content="<?= $metaDes; ?>">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://maskargo.digitalindo.co.id/website/" />
    <meta property="og:image" content="<?= base_url(); ?>assets/imagenew/logo_link.png" />
    <?php } ?>

    <?php
    if ($this->uri->segment(2) == 'baca') {
        $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $website->metaTitle . ' | ' . $meta->Title . '</title>
        <meta name="keywords" content="' . $meta->metaKeywords . $website->metaKeywords . '">
        <meta name="description" content="' . $meta->metaDescription . $website->metaDescription . '">

       

        <meta property="og:type" content="article" />
        <meta property="og:image" content="https://maskargo.digitalindo.co.id/upload/berita/' . $meta->image . '" />
        <meta property="og:title" content="' . $meta->metaTitle . '" />
        <meta property="og:description" content="' . $meta->metaDescription . $website->metaDescription . '">
        <meta property="og:url" content="https://maskargo.digitalindo.co.id/website/berita/baca/' . $meta->slug . '" />
        <meta property="og:site_name" content="maskargo.digitalindo.co.id/website" />
        
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'Berita/baca/' . $meta->slug . '">
        <meta name="twitter:title" content="' . $meta->metaTitle . '">
        <meta name="twitter:description" content="' . $meta->metaDescription . $website->metaDescription . '">
        <meta name="twitter:image" content="https://maskargo.digitalindo.co.id/upload/berita/' . $meta->image . '">';
    }
    if ($this->uri->segment(2) == 'detail_karir') {
        $metaKarir = $this->db->get_where('tbl_karir', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $metaKarir->posisi . '</title>
        <meta name="keywords" content="' . $metaKarir->metaKeywords . '">
        <meta name="description" content="' . $metaKarir->metaDescription . '">
        <meta property="og:title" content="' . $metaKarir->metaTitle . '" />
        <meta property="og:description" content="' . $metaKarir->metaDescription . '" />
        <meta property="og:image" content="https://maskargo.digitalindo.co.id/upload/' . $website->image . '" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'karir/detail_karir/' . $metaKarir->slug . '">
        <meta name="twitter:title" content="' . $metaKarir->metaTitle . '">
        <meta name="twitter:description" content="' . $metaKarir->metaDescription . '">
        <meta name="twitter:image" content="https://maskargo.digitalindo.co.id/upload/' . $website->image . '">';
    }
    if ($this->uri->segment(2) == 'detail_peluang_usaha') {
        $metaPeluangUsaha = $this->db->get_where('tbl_cash_counter', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $metaPeluangUsaha->title . '</title>
        <meta name="keywords" content="' . $metaPeluangUsaha->metaKeywords . '">
        <meta name="description" content="' . $metaPeluangUsaha->metaDescription . '">
        <meta property="og:title" content="' . $metaPeluangUsaha->metaTitle . '" />
        <meta property="og:description" content="' . $metaPeluangUsaha->metaDescription . '" />
        <meta property="og:image" content="https://maskargo.digitalindo.co.id/upload/layanan/' . $metaPeluangUsaha->image . '" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'peluangusaha/detail_peluang_usaha/' . $metaPeluangUsaha->slug . '">
        <meta name="twitter:title" content="' . $metaPeluangUsaha->metaTitle . '">
        <meta name="twitter:description" content="' . $metaPeluangUsaha->metaDescription . '">
        <meta name="twitter:image" content="https://maskargo.digitalindo.co.id/upload/layanan/' . $metaPeluangUsaha->image . '">';
    }
    ?>

    <!-- <meta property="og:type" content="article" />
    <meta property="og:title" content="' . $meta->metaTitle . '" />
    <meta property="og:description" content="' . $meta->metaDescription . $website->metaDescription . '" />
    <meta property="og:image" content="https://maskargo.digitalindo.co.id/upload/berita/' . $meta->image . '" /> -->
    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/imagenew/url_logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/profile.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/layanan.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/gallery.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/berita.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/kontak.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/karir.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/toko.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- <div class="container-xxl  p-0"> -->

    <?php if ($header) echo $header; ?>
    <?php //if($left) echo $left ;
    ?>
    <?php if ($middle) echo $middle; ?>
    <?php if ($footer) echo $footer; ?>


</body>

</html>