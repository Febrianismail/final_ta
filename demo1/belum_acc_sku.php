<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="fw-bold text-uppercase">belum acc request surat keterangan usaha</h4>
					</div>
				</div>
				<form action="" method="POST">
					<div class="card-body">
						<div class="table-responsive">
							<table id="add7" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Tanggal Request</th>
										<th>NIK</th>
										<th>Nama Lengkap</th>
										<th>Status</th>
										<th>TTL</th>
										<th>Alamat</th>
										<th>Kewarganegaraan</th>
										<th>status Perkawinan</th>
										<th>pekerjaan</th>
										<th>keperluan</th>

										<th style="width: 10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									$sql = "SELECT * FROM t_sku  where status=1";
									$query = mysqli_query($konek, $sql);
									while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
										$tgl = $data['tanggal_request'];
										$format = date('d F Y', strtotime($tgl));
										$nik = $data['nik'];
										$nama = $data['nama'];
										$status = $data['status'];
										$id = $data['id_sku'];
										$tgl_lahir = $data['tgl_lahir'];
										$tempat = $data['tempat'];
										$alamat = $data['alamat'];
										$kewarganegaraan = $data['kewarganegaraan'];
										$status_perkawinan = $data['status_perkawinan'];
										$pekerjaan = $data['pekerjaan'];
										$keperluan = $data['keperluan'];


										$id_sku = $data['id_sku'];

										if ($status == "1") {
											$status = "Sudah ACC Staf";
										} elseif ($status == "0") {
											$status = "BELUM ACC";
										}
									?>
										<tr>
											<td><?php echo $format; ?></td>
											<td><?php echo $nik; ?></td>
											<td><?php echo $nama; ?></td>
											<td class="fw-bold text-uppercase text-success op-8"><?php echo $status; ?></td>
											<td><?php echo $tempat; ?><?php echo $tgl_lahir; ?></td>
											<td><?php echo $alamat; ?></td>
											<td><?php echo $kewarganegaraan; ?></td>
											<td><?php echo $status_perkawinan; ?></td>
											<td><?php echo $pekerjaan; ?></td>
											<td><?php echo $keperluan; ?></td>




											<td>
												<div class="form-button-action">
													<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat Surat" href="?halaman=view_sku&id_sku=<?= $id_sku; ?>">
														<i class="fa fa-edit"></i></a>
													<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_sku_seket&id_sku=<?= $id_sku; ?>">
														<i class="fa fa-edit"></i></a>
												</div>

											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>

<?php
if (isset($_POST['acc'])) {
	if (isset($_POST['check'])) {
		foreach ($_POST['check'] as $value) {
			// echo $value;
			$ubah = "UPDATE data_request_sku set status =2 where id_request_sku = $value";

			$query = mysqli_query($konek, $ubah);

			if ($query) {
				echo "<script language='javascript'>swal('Selamat...', 'ACC Berhasil!', 'success');</script>";
				echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
			} else {
				echo "<script language='javascript'>swal('Gagal...', 'ACC Gagal!', 'error');</script>";
				echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
			}
		}
	}
}
?>