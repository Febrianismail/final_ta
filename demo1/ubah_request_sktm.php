<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_sktm'])) {
	$id = $_GET['id_sktm'];
	$tampil_nik = "SELECT * FROM t_sktm WHERE id_sktm=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$id = $data['id_sktm'];
	$nik = $data['nik'];
	$nama = $data['nama'];
	$nomorkk = $data['nomorkk'];
	$tempat1 = $data['tempat'];
	$tgl = $data['tgl_lahir'];
	$agama = $data['agama'];
	$jekel = $data['jk'];
	$alamat = $data['alamat'];
	$surat_perkawinan = $data['status_perkawinan'];
	$pekerjaan = $data['pekerjaan'];
	$keperluan = $data['keperluan'];
	$pendidikan = $data['pendidikan'];
	$tujuan = $data['tujuan'];
	$berdasarkan_keterangan = $data['berdasarkan_keterangan'];

	$berlaku_tgl = $data['berlaku_tgl'];
}
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">UBAH REQUEST SURAT KETERANGAN TIDAK MAMPU</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK</label>

									<input type="text" name="nik" class="form-control" value="<?= $nik; ?>">
								</div>
								<div class="form-group">
									<label>Nama</label>

									<input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
								</div>
								<div class="form-group">
									<label>Nomor KK</label>
									<input type="text" name="nomorkk" class="form-control" value="<?= $nomorkk; ?>">
								</div>

								<div class=" form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempatlahir" class="form-control" value="<?= $tempat1; ?>">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="hidden" class="form-control" value="<?= $tgl; ?>">
									<input type="date" name="tanggallahir" class="form-control" value="<?= $tgl; ?>">
								</div>
								<div class="form-group">
									<label class="mb-2">Jenis Kelamin</label>
									<br />
									<label class="form-radio-label">
										<input class="form-radio-input" type="radio" name="jk" value="Laki-Laki" <?= ($jekel == 'Laki-Laki') ? 'checked' : '' ?>>
										<span class="form-radio-sign">Laki-Laki</span>
									</label>
									<label class="form-radio-label ml-3">
										<input class="form-radio-input" type="radio" name="jk" value="Perempuan" <?= ($jekel == 'Perempuan') ? 'checked' : '' ?>>
										<span class="form-radio-sign">Perempuan</span>
									</label>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" class="form-control" value="<?= $agama; ?>">
								</div>
								<div class="form-group">
									<label>Status Perkawinan</label>
									<input type="text" name="statusperkawinan" class="form-control" value="<?= $surat_perkawinan; ?>">
								</div>
								<div class="form-group">
									<label>pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" value="<?= $pekerjaan; ?>">
								</div>
								<div class="form-group">
									<label>Alamat </label>
									<input type="text" name="alamat" class="form-control" value="<?= $alamat; ?>">
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<input type="text" name="pendidikan" class="form-control" value="<?= $pendidikan; ?>">
								</div>
								<div class="form-group">
									<label>Keperluan </label>
									<input type="text" name="keperluan" class="form-control" value="<?= $keperluan; ?>">
								</div>
								<div class="form-group">
									<label>Tujuan </label>
									<input type="text" name="tujuan" class="form-control" value="<?= $tujuan; ?>">
								</div>
								<div class="form-group">
									<label>Berlaku Tanggal</label>
									<input type="date" name="berlakutanggal" class="form-control" value="<?= $berlaku_tgl; ?>">
								</div>
								<div class="form-group">
									<label>Berdasarkan Keterangan RT/RW</label>
									<input type="text" name="keteranganrt_rw" class="form-control" value="<?= $berdasarkan_keterangan; ?>">
								</div>


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

	$nik1 = $_POST['nik'];
	$nama1 = $_POST['nama'];
	$nomorkk1 = $_POST['nomorkk'];
	$tempatlahir = $_POST['tempatlahir'];
	$tgl = $_POST['tanggallahir'];
	$jeniskelamin = $_POST['jk'];
	$agama1 = $_POST['agama'];
	$status_perkawinan1	 = $_POST['statusperkawinan'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$pendidikan = $_POST['pendidikan'];
	$keperluan = $_POST['keperluan'];
	$tujuan = $_POST['tujuan'];
	$berlakutgl = $_POST['berlakutanggal'];
	$keterangan = $_POST['keteranganrt_rw'];

	$sql = "UPDATE t_sktm SET
    nama='$nama1',
    jk='$jeniskelamin',
    tempat='$tempatlahir',
    tgl_lahir='$tgl',
    agama='$agama1',
    status_perkawinan='$status_perkawinan1',
    tujuan='$tujuan',
    pendidikan='$pendidikan',
    pekerjaan='$pekerjaan',
    alamat='$alamat',
    keperluan='$keperluan',
    berlaku_tgl='$berlakutgl',
    berdasarkan_keterangan='$keterangan',
    nik='$nik1' 
	WHERE id_sktm=$id";
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