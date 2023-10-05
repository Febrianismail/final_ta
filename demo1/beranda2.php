<?php
error_reporting(0);
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
}
?>
<?php
if ($hak_akses == "Staf") {
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
		<h3 class="fw-bold text-uppercase">TAMPIL REQUEST SURAT KETERANGAN PEMOHON</h3>
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
									$sql = "SELECT * FROM t_sktm WHERE status=0";
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
									$sql = "SELECT * FROM t_sku WHERE status=0";
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
									$sql = "SELECT * FROM t_keramaian WHERE status=0";
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
									$sql = "SELECT * FROM t_skdu WHERE status=0";
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
									$sql = "SELECT * FROM t_skck WHERE status=0";
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
							<a href="?halaman=sudah_acc_sp">
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
									$sql = "SELECT * FROM t_pernyataan WHERE status=0";
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
									$sql = "SELECT * FROM t_nikah WHERE status=0";
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
									$sql = "SELECT * FROM t_blm_nikah WHERE status=0";
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
							<a href="?halaman=sudah_acc_pindah_nikah">
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
									$sql = "SELECT * FROM t_pindah_nikah WHERE status=0";
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
		<h4 class="page-title">TAMPIL REQUEST SURAT KETERANGAN SUDAH ACC STAF</h4>
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
									<p class="card-category">Surat Keterangan Tidak Mampu</p>
									<?php
									$sql = "SELECT * FROM t_sktm WHERE status=1";
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
									<p class="card-category">Surat Keterangan Usaha</p>
									<?php
									$sql = "SELECT * FROM t_sku WHERE status=1";
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
									<p class="card-category">Surat izin Keramaian</p>
									<?php
									$sql = "SELECT * FROM t_keramaian WHERE status=1";
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
									<p class="card-category">Surat Keterangan Domisli Usaha</p>
									<?php
									$sql = "SELECT * FROM t_skdu WHERE status=1";
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
									<p class="card-category">Surat keterangan catatan kepolisian</p>
									<?php
									$sql = "SELECT * FROM t_skck WHERE status=1";
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
							<a href="?halaman=belum_acc_sp">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Pernyataan</p>
									<?php
									$sql = "SELECT * FROM t_pernyataan WHERE status=1";
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
							<a href="?halaman=belum_acc_nikah">
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
									$sql = "SELECT * FROM t_nikah WHERE status=1";
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
									<p class="card-category">Surat Belum Nikah</p>
									<?php
									$sql = "SELECT * FROM t_blm_nikah WHERE status=1";
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
							<a href="?halaman=belum_acc_pindah_nikah">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Surat Pindah Nikah</p>
									<?php
									$sql = "SELECT * FROM t_pindah_nikah WHERE status=1";
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
<?php
}
?>