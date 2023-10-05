<?php
session_start();
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
}
?>
<?php include 'header.php'; ?>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="main2.php">
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
				if ($hak_akses == "Staf") {
				?>
					<li class="nav-item">
						<a href="?halaman=tampil_user">
							<i class="fas fa-user-alt"></i>
							<p>Data User</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=permohonan_surat">
							<i class="far fa-calendar-check"></i>
							<p>Cetak Surat</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=surat_dicetak">
							<i class="far fa-calendar-check"></i>
							<p>Surat Selesai</p>
						</a>
					</li>
				<?php
				} elseif ($hak_akses == "Sekertaris") {
				?>

				<?php
				} elseif ($hak_akses == "Lurah") {
				?>
					<li class="nav-item">
						<a data-toggle="collapse" href="#tables">
							<i class="fas fa-table"></i>
							<p>Laporan</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav nav-collapse">
								<li>
									<a href="?halaman=laporan_perbulan">
										<span class="sub-item">Perbulan</span>
									</a>
								</li>
								<li>
									<a href="?halaman=laporan_pertahun">
										<span class="sub-item">Pertahun</span>
									</a>
								</li>
							</ul>
						</div>
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
				case 'request_skd';
					include 'request_skd.php';
					break;
				case 'request_blm_nikah';
					include 'request_blm_nikah.php';
					break;
				case 'request_nikah';
					include 'request_nikah.php';
					break;
				case 'tampil_status';
					include 'status_request.php';
					break;
				case 'belum_acc_blm_nikah';
					include 'belum_acc_blm_nikah.php';
					break;
				case 'belum_acc_nikah';
					include 'belum_acc_nikah.php';
					break;
				case 'belum_acc_pindah_nikah';
					include 'belum_acc_pindah_nikah.php';
					break;
				case 'belum_acc_skck';
					include 'belum_acc_skck.php';
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
				case 'belum_acc_sp';
					include 'belum_acc_sp.php';
					break;
				case 'belum_acc_keramaian';
					include 'belum_acc_keramaian.php';
					break;
				case 'sudah_acc_pindah_nikah';
					include 'acc_pindah_nikah.php';
					break;
				case 'sudah_acc_blm_nikah';
					include 'acc_blm_nikah.php';
					break;
				case 'acc_keramaian';
					include 'acc_keramaian.php';
					break;
				case 'sudah_acc_skck';
					include 'acc_skck.php';
					break;
				case 'sudah_acc_sp';
					include 'acc_sp.php';
					break;
				case 'acc_sktm';
					include 'acc_sktm.php';
					break;
				case 'sudah_acc_nikah';
					include 'acc_nikah.php';
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
				case 'detail_skdu_seket';
					include 'detail_skdu_seket.php';
					break;
				case 'detail_blm_nikah_seket';
					include 'detail_blm_nikah_seket.php';
					break;
				case 'detail_sktm_seket';
					include 'detail_sktm_seket.php';
					break;
				case 'detail_pindah_nikah';
					include 'detail_pindah_nikah.php';
					break;
				case 'detail_blm_nikah';
					include 'detail_blm_nikah.php';
					break;
				case 'detail_nikah';
					include 'detail_nikah.php';
					break;
				case 'detail_sktm';
					include 'detail_sktm.php';
					break;
				case 'detail_sp';
					include 'detail_sp.php';
					break;
				case 'detail_sku_seket';
					include 'detail_sku_seket.php';
					break;
				case 'detail_sku';
					include 'detail_sku.php';
					break;
				case 'detail_skp';
					include 'detail_skp.php';
					break;
				case 'detail_skck';
					include 'detail_skck.php';
					break;
				case 'detail_skd';
					include 'detail_skd.php';
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
				case 'view_keramaian';
					include 'view_keramaian.php';
					break;
				case 'view_nikah';
					include 'view_nikah.php';
					break;
				case 'view_pindah_nikah';
					include 'view_pindah_nikah.php';
					break;
				case 'view_blm_nikah';
					include 'view_blm_nikah.php';
					break;
				case 'view_cetak_pindah_nikah';
					include 'view_cetak_pindah_nikah.php';
					break;
				case 'view_cetak_sp';
					include 'view_cetak_sp.php';
					break;
				case 'view_cetak_nikah';
					include 'view_cetak_nikah.php';
					break;
				case 'view_sp';
					include 'view_sp.php';
					break;
				case 'view_skck';
					include 'view_skck.php';
					break;
				case 'view_sktm';
					include 'view_sktm.php';
					break;
				case 'view_sku';
					include 'view_sku.php';
					break;
				case 'view_skp';
					include 'view_skp.php';
					break;
				case 'view_skd';
					include 'view_skd.php';
					break;
				case 'view_cetak_skck';
					include 'view_cetak_skck.php';
					break;
				case 'view_cetak_sktm';
					include 'view_cetak_sktm.php';
					break;
				case 'view_cetak_sku';
					include 'view_cetak_sku.php';
					break;
				case 'view_cetak_skp';
					include 'view_cetak_skp.php';
					break;
				case 'view_cetak_skd';
					include 'view_cetak_skd.php';
					break;
				case 'view_cetak_keramaian';
					include 'view_cetak_keramaian.php';
					break;
				case 'view_cetak_blm_nikah';
					include 'view_cetak_blm_nikah.php';
					break;
				case 'surat_dicetak';
					include 'surat_dicetak.php';
					break;
				case 'laporan_perbulan';
					include 'laporan_perbulan.php';
					break;
				case 'laporan_pertahun';
					include 'laporan_pertahun.php';
					break;
				case 'permohonan_surat';
					include 'permohonan_surat.php';
					break;
				case 'detail_skdu_request';
					include 'detail_skdu_request.php';
					break;
				case 'detail_keramaian';
					include 'detail_keramaian.php';
					break;
				case 'detail_keramaian_seket';
					include 'detail_keramaian_seket.php';
					break;
				case 'detail_blm_nikah_seket';
					include 'detail_blm_nikah_seket.php';
					break;
				case 'detail_pindah_nikah_seket';
					include 'detail_pindah_nikah_seket.php';
					break;
				case 'detail_sp_seket';
					include 'detail_sp_seket.php';
					break;
				case 'detail_skck_seket';
					include 'detail_skck_seket.php';
					break;
				case 'detail_nikah_seket';
					include 'detail_nikah_seket.php';
					break;
				case 'upload_cetak_file';
					include 'upload_file.php';
					break;
				default:
					echo "<center>HALAMAN KOSONG</center>";
					break;
			}
		} else {
			include 'beranda2.php';
		}
		?>
	</div>
	<?php include 'footer.php'; ?>