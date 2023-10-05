<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_keramaian'])) {
	$id = $_GET['id_keramaian'];

	$tampil_nik = "SELECT * FROM t_keramaian WHERE id_keramaian=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);

	$id = $data['id_keramaian'];
	$nik = $data['nik'];
	$nama = $data['nama'];
	$nomorkk = $data['nomorkk'];
	$tempat = $data['tempat'];
	$tgl_lahir = $data['tgl_lahir'];
	$jk = $data['jk'];
	$agama = $data['agama'];
	$status_perkawiana = $data['status_perkawinan'];
	$pekerjaan = $data['pekerjaan'];
	$alamat = $data['alamat'];
	$pendidikan = $data['pendidikan'];
	$keperluan = $data['keperluan'];
	$tujuan = $data['tujuan'];
	$berlaku_tgl = $data['berlaku_tgl'];
	$acara = $data['padatgl'];
	$mengadakan = $data['acara'];
}
?>

<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM TAMBAH REQUEST KERAMAIAN</div>
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
									<input type="text" name="nomorkk" class="form-control" placeholder="Masukan Nomor KK anda" value="<?= $nomorkk ?>">
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir Anda" value="<?= $tempat ?>">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="tanggallahir" class="form-control" value="<?= $tgl_lahir ?>">
								</div>
								<div class="form-check">
									<label>Jenis Kelamin</label><br />
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
									<label>Agama</label>
									<input type="text" name="agama" class="form-control" placeholder="agama anda " value="<?= $agama ?>">
								</div>
								<div class="form-group">
									<label>Status Perkawinan</label>
									<input type="text" name="statusperkawinan" class="form-control" placeholder="Apa anda sudah nikah ? " value="<?= $status_perkawiana ?>">
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
									<label>Pendidikan</label>
									<input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="<?= $pendidikan ?>">
								</div>
								<div class="form-group">
									<label>Keperluan untuk</label>
									<input type="text" name="keperluan" class="form-control" placeholder="Keperluan Untuk Apa ?" value="<?= $keperluan ?>">
								</div>
								<div class="form-group">
									<label>Tujuan</label>
									<input type="text" name="tujuan" class="form-control" placeholder="tujuannya untuk apa ?" value="<?= $tujuan ?>">
								</div>
								<div class="form-group">
									<label>Berlaku Tanggal</label>
									<input type="date" name="berlakutanggal" class="form-control" value="<?= $berlaku_tgl ?>">
								</div>
								<div class="form-group">
									<label>Mengadakan Acara Apa?</label>
									<input type="text" name="mengadakan" class="form-control" value="<?= $mengadakan ?>">
								</div>

								<div class="form-group">
									<label>Acara Pada Tgl ?</label>
									<input type="date" name="acara" class="form-control" value="<?= $acara ?>">
								</div>


							</div>

						</div>
					</div>
					<div class=" card-action">
						<input type="submit" name="ubah" class="btn btn-primary" value="Ubah">
						<!-- <button name="kirim" class="btn btn-success">Kirim</button> -->
						<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['ubah'])) {

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$nomorkk = $_POST['nomorkk'];
	$tempatlahir = $_POST['tempatlahir'];
	$tgl = $_POST['tanggallahir'];
	$jeniskelamin = $_POST['jk'];
	$agama = $_POST['agama'];
	$status_perkawinan = $_POST['statusperkawinan'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$pendidikan = $_POST['pendidikan'];
	$keperluan = $_POST['keperluan'];
	$tujuan = $_POST['tujuan'];
	$berlakutgl = $_POST['berlakutanggal'];
	$acara = $_POST['acara'];
	$mengadakan = $_POST['mengadakan'];
	$sql = "UPDATE t_keramaian SET
    nik='$nik',
    nama='$nama',
    nomorkk='$nomorkk',
    tempat='$tempatlahir',
    tgl_lahir='$tgl',
    jk='$jeniskelamin',
    agama='$agama',
    status_perkawinan='$status_perkawinan',
    pekerjaan='$pekerjaan',
    alamat='$alamat',
    pendidikan='$pendidikan',
    keperluan='$keperluan',
    tujuan='$tujuan',
    berlaku_tgl='$berlakutgl',
    padatgl='$acara',
	acara='$mengadakan' 
	WHERE id_keramaian=$id";
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