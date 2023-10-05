<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
$tampil_nik = "SELECT * FROM data_user WHERE nik=$_SESSION[nik]";
$query = mysqli_query($konek, $tampil_nik);
$data = mysqli_fetch_array($query, MYSQLI_BOTH);
$nik = $data['nik'];
$nama = $data['nama'];
$jk = $data['jekel'];
$tempat = $data['tempat_lahir'];
$tgl = $data['tanggal_lahir'];
$agama1 = $data['agama'];
$alamat1 = $data['alamat'];
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM TAMBAH REQUEST SURAT KETERANGAN USAHA</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK</label>
									<input type="hidden" class="form-control" value="<?= $nik; ?>">
									<input type="number" name="nik" class="form-control" value="<?= $nik; ?>">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="hidden" class="form-control" value="<?= $nama; ?>">
									<input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
								</div>

								<div class="form-group">
									<label class="mb-2">Jenis Kelamin</label>
									<br>
									<label class="form-radio-label">
										<input class="form-radio-input" type="radio" name="jk" value="Laki-Laki" <?= ($jk == 'Laki-Laki') ? 'checked' : '' ?>>
										<span class="form-radio-sign">Laki-Laki</span>
									</label>
									<label class="form-radio-label ml-3">
										<input class="form-radio-input" type="radio" name="jk" value="Perempuan" <?= ($jk == 'Perempuan') ? 'checked' : '' ?>>
										<span class="form-radio-sign">Perempuan</span>
									</label>
								</div>

								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempatlahir" class="form-control" value="<?= $tempat; ?>">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="tanggallahir" class="form-control" value="<?= $tgl; ?>">
								</div>

								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" class="form-control" value="<?= $agama1; ?>">
								</div>

								<div class="form-group">
									<label>Status Perkawinan</label>
									<input type="text" name="statusperkawinan" class="form-control" placeholder="Apa anda sudah nikah ? ">
								</div>

								<div class="form-group">
									<label>Kewarganegaraan</label>
									<input type="text" name="kewarganegaraan" class="form-control" value="">
								</div>

								<div class="form-group">
									<label>Pendidikan</label>
									<input type="text" name="pendidikan" class="form-control" value="">
								</div>

								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan anda ">
								</div>

								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Alamat ">
								</div>

								<div class="form-group">
									<label>Keperluan</label>
									<input type="text" name="keperluan" class="form-control" placeholder="Keperluan">
								</div>

								<div class="form-group">
									<label>Berlaku Tanggal</label>
									<input type="date" name="berlaku_tanggal" class="form-control">
								</div>

								<div class="form-group">
									<label>Berdasarkan Keterangan RT/RW</label>
									<input type="text" name="berdasarkan_keterangan" class="form-control">
								</div>

							</div>

						</div>
					</div>
					<div class="card-action">
						<button name="kirim" class="btn btn-success">Kirim</button>
						<a href="?halaman=beranda" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>
<?php
if (isset($_POST['kirim'])) {
	$nik = $_POST['nik'];
	$namalengkap = $_POST['nama'];
	$jk = $_POST['jk'];
	$tempatlahir = $_POST['tempatlahir'];
	$tgllahir = $_POST['tanggallahir'];
	$agamainput = $_POST['agama'];
	$statusKawin = $_POST['statusperkawinan'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$pendidikan = $_POST['pendidikan'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$keperluan = $_POST['keperluan'];
	$berlaku_tanggal = $_POST['berlaku_tanggal'];
	$berdasarkan_keterangan = $_POST['berdasarkan_keterangan'];

	$nik_user = $_SESSION['nik'];


	$sql = "INSERT INTO t_sku (nama, jk, tempat, tgl_lahir, agama, status_perkawinan, kewarganegaraan, pendidikan, pekerjaan,nik, alamat, keperluan, berlaku_tgl, berdasarkan_keterangan, nik_user) VALUES ('$namalengkap', '$jk', '$tempatlahir', '$tgllahir', '$agamainput', '$statusKawin', '$kewarganegaraan', '$pendidikan', '$pekerjaan', '$nik', '$alamat', '$keperluan', '$berlaku_tanggal', '$berdasarkan_keterangan', '$nik_user')";



	if ($konek->query($sql) === TRUE) {
		$_SESSION['nik_sku'] = $nik;
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=scansku">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_sku">';
	}
}

?>