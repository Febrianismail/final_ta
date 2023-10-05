<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
	$nama = $_SESSION['nama'];
	$nik = $_SESSION['nik'];
}
?>
<?php
if ($hak_akses == "Pemohon") {
?>

	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $nama; ?>!</h2>
					<h5 class="text-white op-7 mb-2">Request Sesuai yang ingin anda ajukan </h5>
				</div>
				<div class="ml-md-auto py-2 py-md-0">
					<a href="?halaman=tampil_pemohon" class="btn btn-sm btn-primary btn-round"><span class="btn-label">
							<i class="fas fa-user"></i> Profile Anda</a>
				</div>
			</div>
		</div>
	</div>

	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-primary">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Tidak Mampu</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>
					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_sktm" class="btn btn-primary btn-round btn-sm mb-3">
						<span class="btn-label">
							<i class="fas fa-plus-circle"></i>
						</span> Request</a>
				</div>
			</div>
			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-success">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Usaha</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>
					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_sku" class="btn btn-success btn-round btn-sm mb-3"><span class="btn-label">
							<i class="fas fa-plus-circle"></i> Request</a>
				</div>
			</div>

			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-warning">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase">Surat Izin Keramaian</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>
					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_keramaian" class="btn btn-warning btn-round btn-sm mb-3"><span class="btn-label">
							<i class="fas fa-plus-circle"></i> Request</a>
				</div>

			</div>
			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-secondary">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Domisili Usaha</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>

					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_skd" class="btn btn-secondary btn-round btn-sm mb-3"><span class="btn-label">
							<i class="fas fa-plus-circle"></i> Request</a>
				</div>
			</div>

			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-primary">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase">Surat Keterangan SKCK</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>
					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_skck" class="btn btn-primary btn-round btn-sm mb-3">
						<span class="btn-label">
							<i class="fas fa-plus-circle"></i>
						</span> Request</a>
				</div>
			</div>

			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-success">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase"> SURAT AhliWaris/Penghasilan/KTP/KK</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>
					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_sp" class="btn btn-success btn-round btn-sm mb-3"><span class="btn-label">
							<i class="fas fa-plus-circle"></i> Request</a>
				</div>
			</div>
			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-warning">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Nikah</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>
					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_nikah" class="btn btn-warning btn-round btn-sm mb-3"><span class="btn-label">
							<i class="fas fa-plus-circle"></i> Request</a>
				</div>

			</div>
			<div class="col-md-3 pr-md-0">
				<div class="card-pricing2 card-secondary">
					<div class="pricing-header">
						<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Belum Menikah</h6>
					</div>
					<div class="price-value">
						<div class="value">
							<span class="currency"></span>
							<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
							<span class="month"></span>
						</div>
					</div>

					<ul class="pricing-content">
					</ul>
					<a href="?halaman=request_blm_nikah" class="btn btn-secondary btn-round btn-sm mb-3"><span class="btn-label">
							<i class="fas fa-plus-circle"></i> Request</a>
				</div>
			</div>

		</div>
		<div class="col-md-3 pr-md-0">
			<div class="card-pricing2 card-success">
				<div class="pricing-header">
					<h6 class="fw-bold text-center text-uppercase">Surat Keterangan Pindah Nikah</h6>
				</div>
				<div class="price-value">
					<div class="value">
						<span class="currency"></span>
						<span class="amount"><i class="flaticon-envelope-1"></i><span></span></span>
						<span class="month"></span>
					</div>
				</div>
				<ul class="pricing-content">
				</ul>
				<a href="?halaman=request_pindah_nikah" class="btn btn-success btn-round btn-sm mb-3"><span class="btn-label">
						<i class="fas fa-plus-circle"></i> Request</a>
			</div>
		</div>
	</div>
	</div>
<?php
} elseif ($hak_akses == "Staf") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses; ?>!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner">
		<!-- Card -->
		<h3 class="fw-bold text-uppercase">JUMLAH REQUEST SURAT KETERANGAN SUDAH ACC</h3>
		<!-- Card With Icon States Background -->
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=acc_sktm">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Tidak Mampu</p>
									<?php
									$sql = "SELECT * FROM t_sktm WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Usaha</p>
									<?php
									$sql = "SELECT * FROM t_sku WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=acc_keramaian">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Izin Keramaian</p>
									<?php
									$sql = "SELECT * FROM t_keramaian WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_skdu">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Domisili Usaha</p>
									<?php
									$sql = "SELECT * FROM t_skdu WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_skck">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKCK</p>
									<?php
									$sql = "SELECT * FROM t_skck WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_skd">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Pernyataan</p>
									<?php
									$sql = "SELECT * FROM t_skdu WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>

									<h4 class="card-title"><?php echo $count; ?></h4>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_nikah">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Nikah</p>
									<?php
									$sql = "SELECT * FROM t_sku WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_blm_nikah">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Belum Nikah</p>
									<?php
									$sql = "SELECT * FROM t_blm_nikah WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Pindah Nikah</p>
									<?php
									$sql = "SELECT * FROM data_request_sku WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_nikah">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Nikah</p>
									<?php
									$sql = "SELECT * FROM data_request_sku WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Nikah</p>
									<?php
									$sql = "SELECT * FROM data_request_sku WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php
} elseif ($hak_akses == "Sekertaris") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses; ?>!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner">
		<!-- Card -->
		<h4 class="page-title">TAMPIL REQUEST SURAT KETERANGAN</h4>
		<!-- Card With Icon States Background -->
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_sktm">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKTM</p>
									<?php
									$sql = "SELECT * FROM t_sktm WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKU</p>
									<?php
									$sql = "SELECT * FROM t_sku WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_keramaian">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKKM</p>
									<?php
									$sql = "SELECT * FROM t_keramaian WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_skd">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKDU</p>
									<?php
									$sql = "SELECT * FROM t_skdu WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_skck">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKCK</p>
									<?php
									$sql = "SELECT * FROM t_skck WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_skp">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKP</p>
									<?php
									$sql = "SELECT * FROM t_pernyataan WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKU</p>
									<?php
									$sql = "SELECT * FROM data_request_sku WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_blm_nikah">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Keterangan Belum Nikah</p>
									<?php
									$sql = "SELECT * FROM t_blm_nikah WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_skp">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKP</p>
									<?php
									$sql = "SELECT * FROM data_request_skp WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_skd">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKD</p>
									<?php
									$sql = "SELECT * FROM t_skdu WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php
}
?>