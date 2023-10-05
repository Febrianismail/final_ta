<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>

<?php if (!empty($_GET['id_nikah'])) { ?>
	<?php
	if (isset($_GET['id_nikah'])) {
		$id = $_GET['id_nikah'];

		$tampil_nik = "SELECT * FROM t_nikah WHERE id_nikah=" . $id;
		$query = mysqli_query($konek, $tampil_nik);
		$data = mysqli_fetch_array($query, MYSQLI_BOTH);

		$id = $data['id_nikah'];
		$nik_nikah = $data['nik_nikah'];
		$nama = $data['nama'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$tempat_lahir = $data['tempat_lahir'];
		$tgl_lahir = $data['tgl_lahir'];
		$kewarganegaraan = $data['kewarganegaraan'];
		$agama = $data['agama'];
		$pekerjaan = $data['pekerjaan'];
		$alamat = $data['alamat'];
		$status_pernikahan_laki = $data['status_pernikahan_laki'];
		$status_pernikahan_perempuan = $data['status_pernikahan_perempuan'];
		$nama_istri_suami_terdahulu = $data['nama_istri_suami_terdahulu'];

		$nama_lengkap_pria = $data['nama_lengkap_pria'];
		$nik_pria = $data['nik_pria'];
		$tempat_lahir_pria = $data['tempat_lahir_pria'];
		$tgl_lahir_pria = $data['tgl_lahir_pria'];
		$kewarganegaraan_pria = $data['kewarganegaraan_pria'];
		$agama_pria = $data['agama_pria'];
		$pekerjaan_pria = $data['pekerjaan_pria'];
		$alamat_pria = $data['alamat_pria'];

		$nama_wanita = $data['nama_wanita'];
		$nik_wanita = $data['nik_wanita'];
		$tempat_wanita = $data['tempat_wanita'];
		$tgl_lahir_wanita = $data['tgl_lahir_wanita'];
		$kewarganegaraan_wanita = $data['kewarganegaraan_wanita'];
		$agama_wanita = $data['agama_wanita'];
		$pekerjaan_wanita = $data['pekerjaan_wanita'];
		$alamat_wanita = $data['alamat_wanita'];
	}
	?>

	<div class="page-inner">
		<div class="row">
			<div class="col-md-12">
				<form method="POST" enctype="multipart/form-data">
					<div class="card">
						<div class="card-header">
							<div class="card-title">FORM UBAH REQUEST NIKAH</div>
						</div>
						<div class="card-body">
							<p>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa: </p>
							<br>
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label>Nama</label>
										<input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
									</div>
									<div class="form-group">
										<label>NIK</label>
										<input type="text" name="nik_nikah" class="form-control" value="<?= $nik_nikah; ?>">
									</div>
									<div class="form-check">
										<label>Jenis Kelamin</label><br />
										<label class="form-radio-label">
											<input class="form-radio-input" type="radio" name="jk" value="Laki-Laki" <?= ($jenis_kelamin == "Laki-Laki") ? "checked" : ""; ?>>
											<span class="form-radio-sign">Laki-Laki</span>
										</label>
										<label class="form-radio-label ml-3">
											<input class="form-radio-input" type="radio" name="jk" value="Perempuan" <?= ($jenis_kelamin == "Perempuan") ? "checked" : ""; ?>>
											<span class="form-radio-sign">Perempuan</span>
										</label>
									</div>
									<div class="form-group">
										<label>Tempat Lahir</label>
										<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir Anda" value="<?= $tempat_lahir ?>">
									</div>
									<div class="form-group">
										<label>Tanggal Lahir</label>
										<input type="date" name="tgl_lahir" class="form-control" <?= $tgl_lahir ?>>
									</div>
									<div class="form-group">
										<label>Kewarganegaraan</label>
										<input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan anda " value="<?= $kewarganegaraan ?>">
									</div>
									<div class="form-group">
										<label>Agama</label>
										<input type="text" name="agama" class="form-control" placeholder="agama anda " value="<?= $agama ?>">
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
										<label>Status Pernikahan </label>
										<br>
										<label class="lable-control">Laki - Laki : Jejaka, Duda, atau berisitri ke</label>
										<input type="text" name="status_pernikahan_laki" class="form-control" placeholder="Laki - Laki : Jejaka, Duda, atau berisitri ke" value="<?= $status_pernikahan_laki ?>">
										<br>
										<label class="lable-control">Perempuan : Perawan, Janda</label>
										<input type="text" name="status_pernikahan_perempuan" class="form-control" placeholder="Perempuan : Perawan, Janda" value="<?= $status_pernikahan_perempuan ?>">
									</div>
									<hr>
									<div class="form-group">
										<label>Nama Istri/Suami terdahulu</label>
										<input type="text" name="nama_istri_suami_terdahulu" class="form-control" placeholder="Nama Istri/Suami terdahulu" value="<?= $nama_istri_suami_terdahulu ?>">
									</div>
									<hr>
									<p>Adalah benar anak dari pernikahan seorang pria:</p>
									<div class="form-group">
										<label>Nama Lengkap</label>
										<input type="text" name="nama_lengkap_pria" class="form-control" placeholder="Nama Lengkap" value="<?= $nama_lengkap_pria ?>">
									</div>
									<div class="form-group">
										<label>Nik</label>
										<input type="text" name="nik_pria" class="form-control" placeholder="Nik" value="<?= $nik_pria ?>">
									</div>
									<div class="form-group">
										<label>Tempat Lahir</label>
										<input type="text" name="tempat_lahir_pria" class="form-control" placeholder="Tempat Lahir" value="<?= $tempat_lahir_pria ?>">
									</div>
									<div class="form-group">
										<label>Tanggal Lahir</label>
										<input type="date" name="tgl_lahir_pria" class="form-control" placeholder="Tanggal Lahir" value="<?= $tgl_lahir_pria ?>">
									</div>
									<div class="form-group">
										<label>Kewarganegara</label>
										<input type="text" name="kewarganegaraan_pria" class="form-control" placeholder="Kewarganegara" value="<?= $kewarganegaraan_pria ?>">
									</div>
									<div class="form-group">
										<label>Agama</label>
										<input type="text" name="agama_pria" class="form-control" placeholder="Agama">
									</div>
									<div class="form-group">
										<label>Pekerjaan</label>
										<input type="text" name="pekerjaan_pria" class="form-control" placeholder="Pekerjaan" value="<?= $pekerjaan_pria ?>">
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" name="alamat_pria" class="form-control" placeholder="Alamat" value="<?= $alamat_pria ?>">
									</div>
									<hr>
									<p>dengan seorang wanita:</p>

									<div class="form-group">
										<label>Nama Lengkap</label>
										<input type="text" name="nama_wanita" class="form-control" placeholder="Nama Lengkap" value="<?= $nama_wanita ?>">
									</div>
									<div class="form-group">
										<label>Nik</label>
										<input type="text" name="nik_wanita" class="form-control" placeholder="Nik" value="<?= $nik_wanita ?>">
									</div>
									<div class="form-group">
										<label>Tempat Lahir</label>
										<input type="text" name="tempat_wanita" class="form-control" placeholder="Tempat Lahir" value="<?= $tempat_wanita ?>">
									</div>
									<div class="form-group">
										<label>Tanggal lahir</label>
										<input type="date" name="tgl_lahir_wanita" class="form-control" placeholder="Tempat" value="<?= $tgl_lahir_wanita ?>">
									</div>
									<div class="form-group">
										<label>Kewarganegaraan</label>
										<input type="text" name="kewarganegaraan_wanita" class="form-control" placeholder="Kewarganegaraan" value="<?= $kewarganegaraan_wanita ?>">
									</div>
									<div class="form-group">
										<label>Agama</label>
										<input type="text" name="agama_wanita" class="form-control" placeholder="Agama" value="<?= $agama_wanita ?>">
									</div>
									<div class="form-group">
										<label>Pekerjaan</label>
										<input type="text" name="pekerjaan_wanita" class="form-control" placeholder="Pekerjaan" value="<?= $pekerjaan_wanita ?>">
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" name="alamat_wanita" class="form-control" placeholder="Alamat" value="<?= $alamat_wanita ?>">
									</div>

								</div>

							</div>
						</div>
						<div class="card-action">
							<input type="submit" name="ubah" class="btn btn-success" value="Ubah">
							<!-- <button name="kirim" class="btn btn-success">Kirim</button> -->
							<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
<?php } else { ?>

	<div class="page-inner">
		<h1>HALAMAN TIDAK DI TEMUKAN</h1>
	</div>

<?php } ?>
<?php
if (isset($_POST['ubah'])) {
	$nik_nikah = $_POST['nik_nikah'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jk'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$status_pernikahan_laki = $_POST['status_pernikahan_laki'];
	$status_pernikahan_perempuan = $_POST['status_pernikahan_perempuan'];
	$nama_istri_suami_terdahulu = $_POST['nama_istri_suami_terdahulu'];

	$nama_lengkap_pria = $_POST['nama_lengkap_pria'];
	$nik_pria = $_POST['nik_pria'];
	$tempat_lahir_pria = $_POST['tempat_lahir_pria'];
	$tgl_lahir_pria = $_POST['tgl_lahir_pria'];
	$kewarganegaraan_pria = $_POST['kewarganegaraan_pria'];
	$agama_pria = $_POST['agama_pria'];
	$pekerjaan_pria = $_POST['pekerjaan_pria'];
	$alamat_pria = $_POST['alamat_pria'];

	$nama_wanita = $_POST['nama_wanita'];
	$nik_wanita = $_POST['nik_wanita'];
	$tempat_wanita = $_POST['tempat_wanita'];
	$tgl_lahir_wanita = $_POST['tgl_lahir_wanita'];
	$kewarganegaraan_wanita = $_POST['kewarganegaraan_wanita'];
	$agama_wanita = $_POST['agama_wanita'];
	$pekerjaan_wanita = $_POST['pekerjaan_wanita'];
	$alamat_wanita = $_POST['alamat_wanita'];

	$sql = "UPDATE t_nikah SET
    nik_nikah='$nik_nikah',
    nama='$nama',
    jenis_kelamin='$jenis_kelamin',
    tempat_lahir='$tempat_lahir',
    tgl_lahir='$tgl_lahir',
    kewarganegaraan='$kewarganegaraan',
    agama='$agama',
    pekerjaan='$pekerjaan',
    alamat='$alamat',
    status_pernikahan_laki='$status_pernikahan_laki',
    status_pernikahan_perempuan='$status_pernikahan_perempuan',
    nama_istri_suami_terdahulu='$nama_istri_suami_terdahulu',
    nama_lengkap_pria='$nama_lengkap_pria',
    nik_pria='$nik_pria',
    tempat_lahir_pria='$tempat_lahir_pria',
    tgl_lahir_pria='$tgl_lahir_pria',
    kewarganegaraan_pria='$kewarganegaraan_pria',
    agama_pria='$agama_pria',
    pekerjaan_pria='$pekerjaan_pria',
    alamat_pria='$alamat_pria',
    nama_wanita='$nama_wanita',
    nik_wanita='$nik_wanita',
    tempat_wanita='$tempat_wanita',
    tgl_lahir_wanita='$tgl_lahir_wanita',
    kewarganegaraan_wanita='$kewarganegaraan_wanita',
    agama_wanita='$agama_wanita',
    pekerjaan_wanita='$pekerjaan_wanita',
    alamat_wanita='$alamat_wanita'
	WHERE id_nikah=$id";
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