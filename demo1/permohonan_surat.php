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
						<h4 class="card-title">CETAK SURAT KETERANGAN TIDAK MAMPU</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add2" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_sktm   WHERE status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$keperluan = $data['keperluan'];

									$id_sktm = $data['id_sktm'];

									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_sktm&id_sktm=<?= $id_sktm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>

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
			</div>
		</div>




		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">CETAK SURAT KETERANGAN USAHA</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add10" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Keperluan</th>

									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_sku  WHERE status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$id_sku = $data['id_sku'];

									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_sku&id_sku=<?= $id_sku; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>

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
			</div>
		</div>


		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS REQUEST SURAT IZIN KERAMAIAN</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add3" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>nomorkk</th>
									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_keramaian  where status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$nomorkk = $data['nomorkk'];
									$keperluan = $data['tujuan'];
									$keterangan = $data['keterangan'];
									$id_keramaian = $data['id_keramaian'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><?php echo $nomorkk; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_keramaian&id_keramaian=<?= $id_keramaian; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>
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
			</div>
		</div>

		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">CETAK SURAT KETERANGAN DOMISILI USAHA</h4>
					</div>
				</div>
				<form method="POST">
					<div class="card-body">
						<div class="table-responsive">
							<table id="add4" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Tanggal Request</th>
										<th>NIK</th>
										<th>Nama Lengkap</th>

										<th>Keperluan</th>

										<th>Status</th>
										<th style="width: 10%">Action</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$sql = "SELECT * FROM t_skdu  where status=2";
									$query = mysqli_query($konek, $sql);
									while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
										$tgl = $data['tanggal_request'];
										$format = date('d F Y', strtotime($tgl));
										$nik = $data['nik'];
										$nama = $data['nama'];
										$alamat = $data['alamat'];
										$keperluan = $data['surat_keterangan'];


										$id_skdu = $data['id_skdu'];

										if ($status == "2") {
											$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
										} elseif ($status == "0") {
											$status = "<b style='color:red'>BELUM ACC</b>";
										}
									?>
										<tr>
											<td><?php echo $format; ?></td>
											<td><?php echo $nik; ?></td>
											<td><?php echo $nama; ?></td>
											<td><?php echo $keperluan; ?></td>
											<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
											<td>
												<div class="form-button-action">
													<a href="?halaman=view_cetak_skd&id_skdu=<?= $id_skdu; ?>">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
															<i class="fa fa-edit"></i>
														</button>
													</a>

												</div>
											</td>
										</tr>
									<?php
									}
									?>
									<?php
									if (isset($_POST['kirim'])) {
										$keterangan = $_POST['keterangan'];
										$sql = mysqli_query($konek, "UPDATE t_skdu SET
					keterangan='$keterangan', status='3' WHERE id_skdu='$id_skdu'");
										if ($sql) {
											echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil!', 'success');</script>";
											echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
										} else {
											echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal!', 'error');</script>";
											echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">CETAK SURAT SKCK</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add5" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Nomorkk</th>

									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_skck  where status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$nomorkk = $data['nomorkk'];

									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$id_skck = $data['id_skck'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><?php echo $nomorkk; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_skck&id_skck=<?= $id_skck; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>
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
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">CETAK SURAT PERNYATAAN</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add11" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Nomorkk</th>

									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_pernyataan  where status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$nomorkk = $data['nomorkk'];

									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$id_pernyataan = $data['id_pernyataan'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><?php echo $nomorkk; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_sp&id_pernyataan=<?= $id_pernyataan; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>
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
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">CETAK SURAT NIKAH</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add8" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>

									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_nikah  where status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik_nikah'];
									$nama = $data['nama'];
									$status = $data['status'];

									$keterangan = $data['keterangan'];
									$id_nikah = $data['id_nikah'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_nikah&id_nikah=<?= $id_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>
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
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">CETAK SURAT BELUM NIKAH</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add9" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Nomorkk</th>

									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_blm_nikah  where status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$nomorkk = $data['nomorkk'];

									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$id_blm = $data['id_blm_nikah'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><?php echo $nomorkk; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_blm_nikah&id_blm_nikah=<?= $id_blm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>
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
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">CETAK SURAT PINDAH NIKAH</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add1" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Nomorkk</th>

									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_pindah_nikah  where status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$nomorkk = $data['nomorkk'];

									$keperluan = $data['berdasarkan'];
									$keterangan = $data['keterangan'];
									$id_pindah_nikah = $data['id_pindah_nikah'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC SEKERTARIS</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><?php echo $nomorkk; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_pindah_nikah&id_pindah_nikah=<?= $id_pindah_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
													</button>
												</a>
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
			</div>
		</div>



	</div>
</div>