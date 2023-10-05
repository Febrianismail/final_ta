<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_skdu'])) {
	$id = $_GET['id_skdu'];
	$tampil_nik = "SELECT * FROM t_skdu WHERE id_skdu=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$nik = $data['nik'];
	$nama = $data['nama'];
	$tempat = $data['tempat'];
	$tanggal = $data['tgl_lahir'];
	$agama = $data['agama'];
	$kelamin = $data['jk'];
	$nama_usaha = $data['nama_usaha'];
	$alamat = $data['alamat'];
	$pekerjaan = $data['pekerjaan'];
	$kelurahan = $data['kelurahan'];
	$kecamatan = $data['kecamatan'];
	$kota = $data['kota'];
	$keterangan = $data['keterangan'];
	$surat_keterangan = $data['surat_keterangan'];
	$bidang_surat = $data['bidang_surat'];
}
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">UBAH FORM TAMBAH REQUEST SURAT KETERANGAN DOMISILI</div>
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
									<input type="text" name="nama" class="form-control" value="<?= $nama; ?> ">
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempatlahir" class="form-control" value="<?= $tempat; ?>">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="tanggallahir" class="form-control" value="<?= $tanggal; ?>">
								</div>
								<div class="form-group">
									<label class="mb-2">Jenis Kelamin</label>
									<br />
									<label class="form-radio-label">
										<input class="form-radio-input" type="radio" name="jk" value="Laki-Laki" <?= ($kelamin == 'Laki-Laki') ? 'checked' : '' ?>>
										<span class="form-radio-sign">Laki-Laki</span>
									</label>
									<label class="form-radio-label ml-3">
										<input class="form-radio-input" type="radio" name="jk" value="Perempuan" <?= ($kelamin == 'Perempuan') ? 'checked' : '' ?>>
										<span class="form-radio-sign">Perempuan</span>
									</label>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" class="form-control" value="<?= $agama; ?>">
								</div>
								<div class="form-group">
									<label>pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" value="<?= $pekerjaan; ?>">
								</div>
								<div class="form-group">
									<label>Alamat Usaha</label>
									<input type="text" name="alamat" class="form-control" value="<?= $alamat; ?>">
								</div>
								<div class="form-group">
									<label>Kelurahan</label>
									<input type="text" name="kelurahan" class="form-control" value="<?= $kelurahan; ?>">
								</div>
								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" name="kecamatan" class="form-control" value="<?= $kecamatan; ?>">
								</div>
								<div class="form-group">
									<label>Kota</label>
									<input type="text" name="kota" class="form-control" value="<?= $kota; ?>">
								</div>
								<div class="form-group">
									<label>Nama Usaha</label>
									<input type="text" name="namausaha" class="form-control" value="<?= $nama_usaha; ?>">
								</div>
								<div class="form-group">
									<label>Bidang Usaha</label>
									<input type="text" name="bidangusaha" class="form-control" value="<?= $bidang_surat; ?>">
								</div>
								<div class="form-group">
									<label>keterangan Surat</label>
									<input type="text" name="keterangan" class="form-control" value="<?= $surat_keterangan; ?>">
								</div>

							</div>

						</div>
					</div>
					<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
					<script src="js/jquery-2.1.3.min.js"></script>
					<script src="js/sweetalert.min.js"></script>

					<div class="card-action">
						<button name="ubah" class="btn btn-success">Ubah</button>
						<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['ubah'])) {
	$nik1 = $_POST['nik'];
	$nama = $_POST['nama'];
	$tempatlahir = $_POST['tempatlahir'];
	$tgl = $_POST['tanggallahir'];
	$jeniskelamin = $_POST['jk'];
	$agamainput = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat_usaha = $_POST['alamat'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kota = $_POST['kota'];
	$namausaha = $_POST['namausaha'];
	$bidangusaha = $_POST['bidangusaha'];
	$keterangan = $_POST['keterangan'];

	$sql = "UPDATE t_skdu SET
    nama='$nama',
    jk='$jeniskelamin',
    tempat='$tempatlahir',
    tgl_lahir='$tgl',
    agama='$agamainput',
    kelurahan='$kelurahan',
    kecamatan='$kecamatan',
    kota='$kota',
    pekerjaan='$pekerjaan',
    alamat='$alamat_usaha',
    nama_usaha='$namausaha',
    bidang_surat='$bidangusaha',
    surat_keterangan='$keterangan',
    nik='$nik1' 
	WHERE id_skdu=$id";
	$query = mysqli_query($konek, $sql);

	if ($query) {

		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_skd">';
	}
}

?>