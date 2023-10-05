<?php
session_start();
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
	$nama = $_SESSION['nama'];
	$nik = $_SESSION['nik'];
}
?>
<?php include 'header.php'; ?>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="main.php">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">fitur</h4>
				</li>
				<?php
				if ($hak_akses == "Pemohon") {
				?>
					<li class="nav-item">
						<a href="?halaman=tampil_pemohon">
							<i class="fas fa-user-alt"></i>
							<p>Profile Anda</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_status">
							<i class="far fa-calendar-check"></i>
							<p>Status Request</p>
						</a>
					</li>
				<?php
				}
				?>
				<li class="mx-4 mt-2">
					<a href="logout.php" class="btn btn-danger btn-block"><span class="btn-label mr-2"> <i class="icon-logout"></i> </span>Logout</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->

<div class="main-panel">
	<div class="content">
		<?php
		if (isset($_GET['halaman'])) {
			$hal = $_GET['halaman'];
			switch ($hal) {
				case 'beranda';
					include 'beranda.php';
					break;
				case 'ubah_pemohon';
					include 'ubah_pemohon.php';
					break;
				case 'tampil_pemohon';
					include 'tampil_pemohon.php';
					break;
				case 'request_sp';
					include 'request_sp.php';
					break;
				case 'request_pindah_nikah';
					include 'request_pindah_nikah.php';
					break;
				case 'request_skck';
					include 'request_skck.php';
					break;
				case 'request_sktm';
					include 'request_sktm.php';
					break;
				case 'request_sku';
					include 'request_sku.php';
					break;
				case 'request_keramaian';
					include 'request_keramaian.php';
					break;
				case 'request_nikah';
					include 'request_nikah.php';
					break;
				case 'request_blm_nikah';
					include 'request_blm_nikah.php';
					break;
				case 'request_skd';
					include 'request_skd.php';
					break;
				case 'tampil_status';
					include 'status_request.php';
					break;
				case 'belum_acc_keramaian';
					include 'belum_acc_keramaian.php';
					break;
				case 'belum_acc_sktm';
					include 'belum_acc_sktm.php';
					break;
				case 'belum_acc_sku';
					include 'belum_acc_sku.php';
					break;
				case 'belum_acc_skp';
					include 'belum_acc_skp.php';
					break;
				case 'belum_acc_skd';
					include 'belum_acc_skd.php';
					break;
				case 'belum_acc_blm_nikah';
					include 'belum_acc_blm_nikah.php';
					break;
				case 'acc_keramaian';
					include 'acc_keramaian.php';
					break;
				case 'sudah_acc_blm_nikah';
					include 'acc_blm_nikah.php';
					break;
				case 'sudah_acc_skck';
					include 'acc_skck.php';
					break;
				case 'acc_sktm';
					include 'acc_sktm.php';
					break;
				case 'sudah_acc_sku';
					include 'acc_sku.php';
					break;
				case 'sudah_acc_skp';
					include 'acc_skp.php';
					break;
				case 'sudah_acc_skdu';
					include 'acc_skd.php';
					break;
				case 'detail_blm_nikah_request';
					include 'detail_blm_nikah_request.php';
					break;
				case 'detail_keramaian';
					include 'detail_keramaian.php';
					break;
				case 'detail_sktm';
					include 'detail_sktm.php';
					break;
				case 'detail_sku';
					include 'detail_sku.php';
					break;
				case 'detail_skp';
					include 'detail_skp.php';
					break;
				case 'detail_skd';
					include 'detail_skd.php';
					break;
				case 'detail_sp';
					include 'detail_sp.php';
					break;
				case 'cetak_sktm';
					include 'cetak_sktm.php';
					break;
				case 'tampil_user';
					include 'tampil_user.php';
					break;
				case 'tambah_user';
					include 'tambah_user.php';
					break;
				case 'ubah_user';
					include 'ubah_user.php';
					break;
				case 'ubah_request_blm_nikah';
					include 'ubah_request_blm_nikah.php';
					break;
				case 'ubah_request_sp';
					include 'ubah_request_sp.php';
					break;
				case 'ubah_sktm';
					include 'ubah_request_sktm.php';
					break;
				case 'ubah_skck';
					include 'ubah_request_skck.php';
					break;
				case 'ubah_sku';
					include 'ubah_request_sku.php';
					break;
				case 'ubah_skp';
					include 'ubah_request_skp.php';
					break;
				case 'ubah_skd';
					include 'ubah_request_skd.php';
					break;
				case 'ubah_keramaian';
					include 'ubah_request_keramaian.php';
					break;
				case 'laporan_perbulan';
					include 'laporan_perbulan.php';
					break;
				case 'laporan_pertahun';
					include 'laporan_pertahun.php';
					break;
				case 'scan';
					include 'scan.php';
					break;
				case 'scanpindahnikah';
					include 'scan_pindah_nikah.php';
					break;
				case 'scan1';
					include 'scan1.php';
					break;
				case 'scan3';
					include 'scan3.php';
					break;
				case 'scansktm';
					include 'scan_sktm.php';
					break;
				case 'scansku';
					include 'scan_sku.php';
					break;
				case 'scankeramaian';
					include 'scan_keramaian.php';
					break;
				case 'scanblmnikah';
					include 'scan_blm_nikah.php';
					break;
				case 'scannikah';
					include 'scan_nikah.php';
					break;
				case 'detail_sp_request';
					include 'detail_sp_request.php';
					break;
				case 'detail_blm_nikah';
					include 'detail_blm_nikah.php';
					break;
				case 'detail_skdu_request';
					include 'detail_skdu_request.php';
					break;
				case 'detail_skck_request';
					include 'detail_skck_request.php';
					break;
				case 'detail_sktm_request';
					include 'detail_sktm_request.php';
					break;
				case 'detail_sku_request';
					include 'detail_sku_request.php';
					break;
				case 'detail_keramaian_request';
					include 'detail_keramaian_request.php';
					break;
				case 'detail_nikah_request';
					include 'detail_nikah_request.php';
					break;
				case 'upload_cetak_file';
					include 'upload_file.php';
					break;
				case 'ubah_request_nikah';
					include 'ubah_request_nikah.php';
					break;
				case 'ubah_request_pindah';
					include 'ubah_request_pindah_nikah.php';
					break;
				case 'detail_pindah_nikah_request';
					include 'detail_pindah_nikah_request.php';
					break;

				default:
					echo "<center>HALAMAN KOSONG</center>";
					break;
			}
		} else {
			include 'beranda.php';
		}
		?>
	</div>
	<?php include 'footer.php'; ?>