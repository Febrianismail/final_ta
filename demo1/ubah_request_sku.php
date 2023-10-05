<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_sku'])) {
	$id = $_GET['id_sku'];
	$tampil_nik = "SELECT * FROM t_sku WHERE id_sku=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$id = $data['id_sku'];
	$nik = $data['nik'];
	$nama = $data['nama'];
	$jk = $data['jk'];
	$tempat = $data['tempat'];
	$tgl_lahir = $data['tgl_lahir'];
	$agama = $data['agama'];
	$status_perkawinan = $data['status_perkawinan'];
	$kewarganegaraan = $data['kewarganegaraan'];
	$pendidikan = $data['pendidikan'];
	$pekerjaan = $data['pekerjaan'];
	$alamat = $data['alamat'];
	$keperluan = $data['keperluan'];
	$berlaku_tgl = $data['berlaku_tgl'];
	$berdasarkan_keterangan = $data['berdasarkan_keterangan'];
}
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">UBAH FORM REQUEST USAHA</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK</label>
									<input type="text" name="nik" class="form-control" value="<?= $nik; ?>">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
								</div>
								<div class="form-group">
									<label class="mb-2">Jenis Kelamin</label>
									<br />
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
									<input type="date" name="tanggallahir" class="form-control" value="<?= $tgl_lahir; ?>">
								</div>

								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" class="form-control" value="<?= $agama; ?>">
								</div>

								<div class="form-group">
									<label>Status Perkawinan</label>
									<input type="text" name="statusperkawinan" class="form-control" placeholder="Apa anda sudah nikah ? " value="<?= $status_perkawinan ?>">
								</div>

								<div class="form-group">
									<label>Kewarganegaraan</label>
									<input type="text" name="kewarganegaraan" class="form-control" value="<?= $kewarganegaraan ?>">
								</div>

								<div class="form-group">
									<label>Pendidikan</label>
									<input type="text" name="pendidikan" class="form-control" value="<?= $pendidikan ?>">
								</div>

								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan anda " value="<?= $pekerjaan ?>">
								</div>

								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Alamat " value="<?= $alamat ?>">
								</div>

								<div class="form-group">
									<label>Keperluan</label>
									<input type="text" name="keperluan" class="form-control" placeholder="Keperluan" value="<?= $keperluan ?>">
								</div>

								<div class="form-group">
									<label>Berlaku Tanggal</label>
									<input type="date" name="berlaku_tanggal" class="form-control" value="<?= $berlaku_tgl ?>">
								</div>

								<div class="form-group">
									<label>Berdasarkan Keterangan RT/RW</label>
									<input type="text" name="berdasarkan_keterangan" class="form-control" value="<?= $berdasarkan_keterangan ?>">
								</div>

							</div>

						</div>
					</div>
					<div class="card-action">
						<button name="ubah" class="btn btn-success">Ubah</button>
						<a href="?halaman=beranda" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>
<?php
if (isset($_POST['ubah'])) {

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

	$sql = "UPDATE t_sku SET
    nama='$namalengkap',
    jk='$jk',
    tempat='$tempatlahir',
    tgl_lahir='$tgllahir',
    agama='$agamainput',
    status_perkawinan='$statusKawin',
    kewarganegaraan='$kewarganegaraan',
    pendidikan='$pendidikan',
    pekerjaan='$pekerjaan',
    alamat='$alamat',
    keperluan='$keperluan',
    berlaku_tgl='$berlaku_tanggal',
    berdasarkan_keterangan='$berdasarkan_keterangan',
    nik='$nik' 
	WHERE id_sku=$id";
	$query = mysqli_query($konek, $sql);

	if ($query) {
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
}

?>