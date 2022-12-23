<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-responsive" src="<?=base_url();?>assets/img/anl_bg_lain.png" style="width: 100%;" alt="First slide">
    </div>
  </div>
</div>


<!-- <div style="background: url('<?=base_url();?>assets/img/berita.png')  center center repeat; background-size: 90%;
padding: 20px 0; " class="no-mb"> -->
<div style="" class="no-mb">
	<br><br>

            <div class="container"  data-animate="fadeInUp">
                <div class="row justify-content-center">
                    <div class="heading">
                    	<?php

                    	$p = $this->input->post('berat');
                    	$l = $this->input->post('lebar');
                    	$t = $this->input->post('tinggi');
                    	$vol = $p*$l*$t;
                    	?>
					<h3 style="color: black;text-align: center;"><?=$asal->nama;?> ke <?=$tujuan->kecName;?><br>Berat: <?=$this->input->post('berat');?> kg <br> Volume : <?=$vol;?></h3>

		 			<div data-animate="fadeInUp"> 
                           
                        </div>
               </div>


               			<table border="1" cellspacing="1" cellpadding="1" class="table" style="border-color:#164378;;  ">
               			<tr style="background-color:#164378;color:#fff;">
               			<th>Service</th>
               			<!-- <th>Deskripsi</th> -->
               			<th>Tarif</th>
               			<th>Estimasi</th>
               			</tr>
						<?php
         
                         foreach($prices as $p) { 
							$berat=$this->input->post('berat');
							$hargaKGP=$p->KGP;
							$hargaKGS=$p->KGS;
							if ($berat>$vol) {
								$real = $hargaKGS * $berat;
							}else{
								$real = $hargaKGS * $vol;
							}
                            

							?>



						<tr style="color: black;">
						<td><?=$p->Layanan;?></td>
						<!-- <td><?=$p->serviceDescription;?></td> -->
						<td>Rp <?=number_format($real,0);?></td>
						<td><?=$p->Estimasi;?> Hari</td>
						</tr>
					<!-- <div class="col-lg-12 col-xs-6">
						<div class="info-box">
							<span class="info-box-icon bg-yellow">
								<i class="ion ion-ios-gear-outline"><b><?=$p->Layanan;?></b></i>
							</span>
							<div class="info-box-content">
								<span class="info-box-text" style="font-size: 24px;margin-top: 10%;"><b>Rp <?=number_format($real,0);?></b></span>
								<small><?=$p->Estimasi;?> Hari</small>
								</span>
							</div>
						</div>
					</div> -->
				
  

                            <?php

                            }

                          
                    ?>
                           </table>

					<div class="remark" style="font-weight:bold;">


						Untuk informasi lebih lanjut silakan menghubungi CALL CENTER : <?=$website->phone;?>, E-MAIL : <?=$website->email;?><br>
						<center>
                        <a href="<?php echo base_url();?>">Klik, Harga lainnya</a>
                        </center>
					</div>

		</div>
            </div>
        </div>
        <br><br>
        <!-- /.bar -->


 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.js"></script>

 
 <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
   
        <style>
       .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        } 
	</style> 
        <script>
        
$( document ).ready(function() {
base_url = '<?=base_url();?>';
        $( "#hint" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint").val(ui.item.label); // display the selected text
			        $("#asal").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint").val(ui.item.label);
			    },
                
                minLength:3
                });

        	$( "#hint2" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint2").val(ui.item.label); // display the selected text
			        $("#tujuan").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint2").val(ui.item.label);
			    } ,   
                
                minLength:3
                });
	
  });
             </script> 