<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->




<div class="news">
    <div class="container py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'NEWS' : 'BERITA' ?></h2>
        </div>
        <div class="row mt-5 px-xl-5">
            <div class="col-lg-8">
                <?php
                if (($berita->num_rows()) > 0) {
                    foreach ($berita->result() as $berita) {
                ?>
                <div class="entry-box mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="entry-img">
                                <a
                                    href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'berita/baca/' . $berita->slug . '?lang=eng' : base_url() . 'berita/baca/' . $berita->slug ?>">
                                    <img src="https://maskargo.digitalindo.co.id/upload/berita/<?= $berita->image; ?>"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="px-4 mt-3 mt-lg-0">
                                <div class="entry-title">
                                    <h4><?= $berita->Title; ?></h4>
                                </div>
                                <div class="entry-meta my-2">
                                    <p><i
                                            class="fa fa-clock-o me-1"></i><?= hari($berita->created_date) . ', ' . date('m F Y', strtotime($berita->created_date)); ?>
                                    </p>
                                </div>
                                <div class="entry-content">
                                    <?= substr(strip_tags($berita->content), 0, 150); ?>... <a
                                        href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'berita/baca/' . $berita->slug . '?lang=eng' : base_url() . 'berita/baca/' . $berita->slug ?>"
                                        class="text-danger">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
            <div class="col-lg-4">
                <div class="entry-side mt-5">
                    <div class="entry-header mb-3">
                        <h5><?= @$_GET['lang'] == 'eng' ? 'Latest News' : 'Berita Terbaru' ?></h5>
                    </div>
                    <?php foreach ($this->db->query("SELECT * FROM tbl_posts ORDER BY created_date DESC LIMIT 5")->result() as $b) { ?>
                    <div class="entry-title" data-aos="fade-up" data-aos-duration="1000">
                        <a
                            href="<?= @$_GET['lang'] == 'eng' ? base_url() . 'berita/baca/' . $b->slug . '?lang=eng' : base_url() . 'berita/baca/' . $b->slug ?>"><?= $b->Title; ?></a>
                    </div>
                    <?php } ?>
                </div>

                <div class="sidebar-post mt-5">
                    <div class="box-shadow">
                        <h3 class="sidebar-title" data-aos="fade-up" data-aos-duration="1000">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <?php foreach ($this->db->query("SELECT * FROM tbl_post_tag")->result() as $tag) { ?>
                                <li data-aos="fade-up" data-aos-duration="1000"><a
                                        onclick="getTag(<?= $tag->id ?>, '<?= $tag->tag_name ?>')"
                                        title="<?= $tag->tag_name; ?>"><?= $tag->tag_name; ?></a></li>
                                <?php } ?>

                            </ul>
                        </div><!-- End sidebar tags-->
                    </div>
                </div>
            </div>
        </div>

        <nav class="blog-pagination d-flex justify-content-center ">
            <?php echo $pagination; ?>
        </nav>
    </div>
</div>


<script>
function getTag(id, name) {
    base_url = '<?php echo base_url(); ?>';
    $.ajax({
        type: "GET",
        url: base_url + "berita",
        data: {
            'id': id,
            'nama': name
        },
        success: function(html) {
            window.location = base_url + 'berita/tag/?id=' + id;
        },
        error: function() {}
    });
}
</script>