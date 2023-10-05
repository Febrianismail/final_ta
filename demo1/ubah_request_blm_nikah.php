<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_blm_nikah'])) {
	$id = $_GET['id_blm_nikah'];

	$tampil_nik = "SELECT * FROM t_blm_nikah WHERE id_blm_nikah=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);


	$id = $data['id_blm_nikah'];
	$nama = $data['nama'];
	$nik = $data['nik'];
	$nomorkk = $data['nomorkk'];
	$tempat_lahir = $data['tempat_lahir'];
	$tgl_lahir = $data['tgl_lahir'];
	$jk = $data['jk'];
	$agama = $data['agama'];
	$status_perkawinan = $data['status_perkawinan'];
	$pekerjaan = $data['pekerjaan'];
	$alamat = $data['alamat'];
	$pendidikan = $data['pendidikan'];
	$keperluan = $data['keperluan'];
	$tujuan = $data['tujuan'];
	$berlaku_tgl = $data['berlaku_tgl'];
	$berdasrkan_keterangan = $data['berdasrkan_keterangan'];
	$keterangan = $data['keterangan'];
}
?>

<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM TAMBAH REQUEST BELUM MENIKAH</div>
					</div>
					<div class="card-body">

						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
								</div>
								<div class="form-group">
									<label>NIK</label>
									<input type="text" name="nik" class="form-control" value="<?= $nik; ?>">
								</div>
								<div class="form-group">
									<label>No. Kartu Keluarga</label>
									<input type="text" name="nomorkk" class="form-control" value="<?= $nomorkk ?>">
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir Anda" value="<?= $tempat_lahir ?>">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="tgl_lahir" class="form-control" value="<?= $tgl_lahir ?>">
								</div>
								<div class="form-check">
									<label>Jenis Kelamin</label><br />
									<label class="form-radio-label">
										<input class="form-radio-input" type="radio" name="jk" value="Laki-Laki" <?= ($jk == 'Laki-Laki') ? 'checked' : ''; ?>>
										<span class="form-radio-sign">Laki-Laki</span>
									</label>
									<label class="form-radio-label ml-3">
										<input class="form-radio-input" type="radio" name="jk" value="Perempuan" <?= ($jk == 'Perempuan') ? 'checked' : ''; ?>>
										<span class="form-radio-sign">Perempuan</span>
									</label>
								</div>

								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" class="form-control" placeholder="Agama " value="<?= $agama ?>">
								</div>
								<div class="form-group">
									<label>Status Perkawinan</label>
									<input type="text" name="status_perkawinan" class="form-control" placeholder="Status Perkawinan " value="<?= $status_perkawinan ?>">
								</div>
								<div class="form-group">
									<label>pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan anda " value="<?= $pekerjaan ?>">
								</div>
								<div class="form-group">
									<label>Alamat </label>
									<input type="text" name="alamat" class="form-control" placeholder="Alamat anda" value="<?= $alamat ?>">
								</div>
								<div class="form-group">
									<label>Pendidikan </label>
									<input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan anda" value="<?= $pendidikan ?>">
								</div>
								<div class="form-group">
									<label>Keperluan </label>
									<input type="text" name="keperluan" class="form-control" placeholder="Keperluan anda" value="<?= $keperluan ?>">
								</div>
								<div class="form-group">
									<label>Tujuan </label>
									<input type="text" name="tujuan" class="form-control" placeholder="Tujuan anda" value="<?= $tujuan ?>">
								</div>
								<div class="form-group">
									<label>Berlaku Tanggal </label>
									<input type="date" name="berlaku_tgl" class="form-control" placeholder="Berlaku Tanggal anda" value="<?= $berlaku_tgl ?>">
								</div>
								<div class="form-group">
									<label>Berdasarjan Keterangan </label>
									<input type="text" name="berdasrkan_keterangan" class="form-control" placeholder="Berdasarjan Keterangan anda" value="<?= $berdasrkan_keterangan ?>">
								</div>



							</div>

						</div>
					</div>
					<div class="card-action">
						<input type="submit" name="ubah" class="btn btn-primary" value="Ubah">
						<!-- <button name="kirim" class="btn btn-success">Kirim</button> -->
						<a href="?halaman=beranda" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['ubah'])) {
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$nomorkk = $_POST['nomorkk'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$pendidikan = $_POST['pendidikan'];
	$keperluan = $_POST['keperluan'];
	$tujuan = $_POST['tujuan'];
	$berlaku_tgl = $_POST['berlaku_tgl'];
	$berdasrkan_keterangan = $_POST['berdasrkan_keterangan'];


	$sql = "UPDATE t_blm_nikah SET
    nama='$nama',
    nik='$nik',
    nomorkk='$nomorkk',
    tempat_lahir='$tempat_lahir',
    tgl_lahir='$tgl_lahir',
    jk='$jk',
    agama='$agama',
    status_perkawinan='$status_perkawinan',
    pekerjaan='$pekerjaan',
    alamat='$alamat',
    pendidikan='$pendidikan',
    keperluan='$keperluan',
    tujuan='$tujuan',
    berlaku_tgl='$berlaku_tgl',
    berdasrkan_keterangan='$berdasrkan_keterangan'
	WHERE id_blm_nikah=$id";
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