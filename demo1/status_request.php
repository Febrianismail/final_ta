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
						<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN TIDAK MAMPU</h4>
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
									<!-- <th>Scan KTP</th>
									<th>Scan KK</th>
									<th>Foto Tempat</th> -->
									<!-- <th>Surat Pernyataan</th>
									<th>Surat pengantar</th> -->
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_sktm WHERE nik_user=" . $_SESSION['nik'];
								$query = mysqli_query($konek, $sql);

								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$idsktm = $data['id_sktm'];
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$nomorkk = $data['nomorkk'];
									$status = $data['status'];
									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									} else {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<!-- <td><img src="../dataFoto/scan_ktp/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td> -->
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_sktm_request&id_sktm=<?= $idsktm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail,Edit Foto ">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_sktm&id_sktm=<?= $idsktm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_sktm=<?= $idsktm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
														<i class="fa fa-times"></i>
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
						<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN USAHA</h4>
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
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_sku WHERE nik_user=$_SESSION[nik]";
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

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									} else {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_sku_request&id_sku=<?= $id_sku; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail,Edit Foto ">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_sku&id_sku=<?= $id_sku; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_sku=<?= $id_sku; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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
						<table id="add5" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_keramaian WHERE nik_user=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];

									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$id_keramaian = $data['id_keramaian'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									} else {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_keramaian_request&id_keramaian=<?= $id_keramaian; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail,Edit Foto ">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_keramaian&id_keramaian=<?= $id_keramaian; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_keramaian=<?= $id_keramaian; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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
						<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN DOMISI USAHA</h4>
					</div>
				</div>
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
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_skdu    WHERE nik_user=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);

								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$alamat = $data['alamat'];
									$keperluan = $data['surat_keterangan'];
									$status = $data['status'];
									$keterangan = $data['keterangan'];



									$id_skdu = $data['id_skdu'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Staf</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>

										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_skdu_request&id_skdu=<?= $id_skdu; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail,Edit Foto ">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_skd&id_skdu=<?= $id_skdu; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data Form">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_skdu=<?= $id_skdu; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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
						<h4 class="card-title">STATUS REQUEST SURAT SKCK</h4>
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
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_skck  WHERE nik_user=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);

								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$alamat = $data['alamat'];
									$keperluan = $data['keperluan'];
									$status = $data['status'];
									$keterangan = $data['keterangan'];



									$id_skck = $data['id_skck'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Periksa Staf</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Periksa Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>

										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_skck_request&id_skck=<?= $id_skck; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_skck&id_skck=<?= $id_skck; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_skck=<?= $id_skck; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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
						<h4 class="card-title">STATUS REQUEST SURAT PERNYATAAN</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add6" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_pernyataan  WHERE nik_user=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);

								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$alamat = $data['alamat'];
									$keperluan = $data['keperluan'];
									$status = $data['status'];
									$keterangan = $data['keterangan'];



									$id_pernyataan = $data['id_pernyataan'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Periksa Staf</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Periksa Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>

										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_sp_request&id_pernyataan=<?= $id_pernyataan; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_request_sp&id_pernyataan=<?= $id_pernyataan; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_pernyataan=<?= $id_pernyataan; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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
						<h4 class="card-title">STATUS REQUEST SURAT NIKAH</h4>
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
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_nikah  WHERE nik_user=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);

								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik_nikah'];
									$nama = $data['nama'];
									$alamat = $data['alamat'];

									$status = $data['status'];
									$keterangan = $data['keterangan'];



									$id_nikah = $data['id_nikah'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Periksa Staf</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Periksa Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>


										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>

										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_nikah_request&id_nikah=<?= $id_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_request_nikah&id_nikah=<?= $id_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_nikah=<?= $id_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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
						<h4 class="card-title">STATUS REQUEST SURAT KETERANGAN BELUM NIKAH</h4>
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
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_blm_nikah  WHERE nik_user=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];

									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$id_blm = $data['id_blm_nikah'];


									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Staf</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>
											<div class="form-button-action">

												<a href="?halaman=detail_blm_nikah_request&id_blm_nikah=<?= $id_blm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail,Edit Foto ">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_request_blm_nikah&id_blm_nikah=<?= $id_blm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_blm_nikah=<?= $id_blm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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
						<h4 class="card-title">STATUS REQUEST SURAT PINDAH NIKAH</h4>
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
									<th>Status</th>
									<th>Keterangan</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM t_pindah_nikah  WHERE nik_user=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);

								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$alamat = $data['alamat'];
									// $keperluan = $data['keperluan'];
									$status = $data['status'];
									$keterangan = $data['keterangan'];



									$id_pindah_nikah = $data['id_pindah_nikah'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Periksa Staf</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC staf</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Periksa Sekertaris</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>

										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>

										<td>
											<div class="form-button-action">
												<a href="?halaman=detail_pindah_nikah_request&id_pindah_nikah=<?= $id_pindah_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
														<i class="fa fa-bars"></i>
													</button>
												</a>
												<a href="?halaman=ubah_request_pindah&id_pindah_nikah=<?= $id_pindah_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_pindah_nikah=<?= $id_pindah_nikah; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
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


<?php
if (isset($_GET['id_request_skd'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_skd WHERE id_request_skd=$id_request_skd");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_request_sktm'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_sktm WHERE id_sktm=" . $_GET['id_request_sktm']);
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="1; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="1; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_request_skp'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_skp WHERE id_request_skp=$id_request_skp");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_skdu'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_skdu WHERE id_skdu=$id_skdu");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_skck'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_skck WHERE id_skck=$id_skck");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_sku'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_sku WHERE id_sku=$id_sku");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_keramaian'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_keramaian WHERE id_keramaian=$id_keramaian");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_pernyataan'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_pernyataan WHERE id_pernyataan=$id_pernyataan");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_nikah'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_nikah WHERE id_nikah=$id_nikah");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_blm_nikah'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_blm_nikah WHERE id_blm_nikah=$id_blm");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_pindah_nikah'])) {
	$hapus = mysqli_query($konek, "DELETE FROM t_pindah_nikah WHERE id_pindah_nikah=$id_pindah_nikah");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
}
?>