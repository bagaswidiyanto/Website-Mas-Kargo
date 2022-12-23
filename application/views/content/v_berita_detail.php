<div class="hero-header">
	<img src="<?= base_url(); ?>assets/imagenew/bg-berita.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="single-news">
	<div class="container py-5 px-lg-5">
		<div class="header-title" data-aos="fade-up" data-aos-duration="1000">
			<h2><?= @$_GET['lang'] == 'eng' ? 'NEWS' : 'BERITA' ?></h2>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-lg-10">
				<div class="box-single-news py-5">
					<div class="entry-title text-center pb-5" data-aos="fade-up" data-aos-duration="1000">
						<h2><?= $berita->Title; ?></h2>
					</div>
					<div class="entry-img text-center" data-aos="fade-up" data-aos-duration="1000">
						<img src="https://maskargo.digitalindo.co.id/upload/berita/<?= $berita->image; ?>" class="img-fluid" alt="">
					</div>
					<div class="entry-meta py-4" data-aos="fade-up" data-aos-duration="1000">
						<p><i class="fa fa-clock-o me-1"></i><?= hari($berita->created_date) . ', ' . date('m F Y', strtotime($berita->created_date)); ?></p>
					</div>
					<div class="entry-content" data-aos="fade-up" data-aos-duration="1000">
						<?= $berita->content; ?>
						<?php if ($berita->content != '' && $berita->metaLink != '') { ?>
							<p class="mt-5">Sumber : <a href="<?= $berita->metaLink; ?>" target="_blank"><?= $berita->metaLink; ?></a></p>
						<?php } ?>
					</div>
				</div>
				<a href="<?= base_url(); ?>berita" data-aos="fade-up" data-aos-duration="1000"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
			</div>
		</div>
	</div>
</div>