<div class="hero-header">
	<img src="assets/imagenew/hero1.png" class="img-fluid" alt="">
</div>
</div>

<div class="tracking-table bg-grey" id="about">
	<div class="container py-5 px-lg-5">
		<div class="header-title text-center">
			<h1 class="text-dark fw-bold">TRACKING</h1>
		</div>
		<?php
		if ($awb != '') {
			$arr_kon  = preg_split('/\r\n|[\r\n]/',  $awb);
			if (isset($arr_kon)) {
				$jmlAWB = count($arr_kon);
				$i = 0;
				$koray = "";
				$jml = 0;
				$ttl = 0;
				foreach ($arr_kon as $row1) {

					if ($row1 != '') {
						if ($i == 0) {
							$koray .= ' A.Konid="' . $row1 . '" OR A.No_DO="' . $row1 . '" ';
						} else {
							$koray .= ' OR A.Konid="' . $row1 . '" OR A.No_DO="' . $row1 . '"  ';
						}
						$ttl += 1;
						$i++;
					} else {
						$koray .= '';
						$ttl += 0;
					}
				}

				$kon_array = "  " . $koray . "";
				$jml = $ttl;
			}

			$arr_po  = preg_split('/\r\n|[\r\n]/',  $awb);
			if (isset($arr_po)) {
				$i = 0;
				$poray = "";
				foreach ($arr_po as $row3) {
					if ($row3 == '') {
						$poray .= '';
					} else {

						if ($i == 0) {
							$poray .= ' lpp.No_PO="' . $row3 . '"';
						} else {
							$poray .= ' OR lpp.No_PO="' . $row3 . '"';
						}
						$i++;
					}
				}

				$po_array = "  " . $poray . "";
			}
		}
		if ($jml == 0) {
		?>

			<div class="header-title text-center">
				<h3 class="text-dark fw-bold">No. AWB yang anda cari tidak dapat ditemukan</h3>
			</div>

			<?php } else {

			$cek = $this->db->query('SELECT COUNT(A.ID) as jml FROM em_konos_detail A WHERE ' . $kon_array . ' ')->row();

			if ($cek->jml > 0) {
			?>
				<div style="overflow-x:auto;">
					<table class="table table-bordered mt-5">
						<thead>
							<tr align="center">
								<th>No.</th>
								<th>No. AWB</th>
								<th>No. Voucher</th>
								<th>No. DO</th>
								<th>Service</th>
								<th>Destination</th>
								<th>Consignee</th>
								<th>Date Received</th>
								<th>Receiver</th>
								<th>Status</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$where1 = 'WHERE (' . $po_array . ')';
							foreach ($this->db->query('SELECT 
							A.Konid,
							A.No_DO,
							A.namaPengirim,
							B.branchName as asal,
							C.branchName as tujuan,
							A.kotaPengirim,
							A.kotaPenerima,
							A.namaPenerima,
							A.statusDiterima,
							A.Koli,
							A.Kilo,
							A.Diterima,
							A.Tgl_Diterima,
							A.keteranganDiterima,
							A.CreatedUserId,
							A.createDate,
							A.No_Manifest,
							A.picture,
							D.serviceName,
							lpp.No_PO
							FROM em_konos_detail A 
							LEFT JOIN log_dbranch B ON A.Asal=B.branchID 
							LEFT JOIN log_dbranch C ON A.Tujuan=C.branchID
							LEFT JOIN log_services D ON D.serviceID=A.Satuan 
							LEFT JOIN (SELECT * from log_po_panasonic lpp ' . $where1 . ' group by lpp.Konid)  lpp on A.Konid=lpp.Konid
							WHERE  ' . $WHERE)->result() as $key) {
							?>
								<tr align="center">
									<td><?= $no++; ?></td>
									<td><?= $key->Konid; ?></td>
									<td><?= $key->No_PO; ?></td>
									<td><?= $key->No_DO; ?></td>
									<td><?= $key->serviceName; ?></td>
									<td><?= $key->tujuan; ?></td>
									<td><?= $key->namaPenerima; ?></td>
									<td><?= $key->Tgl_Diterima; ?></td>
									<td><?= $key->Diterima; ?></td>
									<td><?= $key->Tgl_Diterima; ?></td>
									<td><?= $key->statusDiterima == '' ? "On Progress" : 'Diterima'; ?></td>
									<td>
										<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal<?= $key->Konid; ?>">Detail</button>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			<?php } else { ?>
				<div class="header-title text-center">
					<h3 class="text-dark fw-bold">No. AWB yang anda cari tidak dapat ditemukan</h3>
				</div>
			<?php } ?>
		<?php } ?>

		<div class="remark">
			<!-- <p>Untuk informasi lebih lanjut silakan menghubungi CALL CENTER : 0361-475 3135, E-MAIL : antcargo@gmail.com</p> -->
			<a href="">
				<- Back</a>

		</div>
	</div>
</div>