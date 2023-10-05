<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php

$paramValuesId = array_map(function ($value) {
	return $value;
}, $_GET);

$qDetailImg = "SELECT *, data_jenis_persyaratan.id as idPersyaratan, data_image.id as idImage, data_jenis_persyaratan.nama_persyaratan FROM `data_image` JOIN data_jenis_persyaratan ON data_image.jenis_surat_id = data_jenis_persyaratan.id WHERE `skdu_id`=" . $paramValuesId['id_skdu'];
$queryImage = mysqli_query($konek, $qDetailImg);
$dataImg = mysqli_fetch_all($queryImage, MYSQLI_BOTH);

if (isset($_GET['id_skdu'])) {
	$id = $_GET['id_skdu'];
	$tampil_nik = "SELECT * FROM t_skdu WHERE id_skdu=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$id = $data['id_skdu'];
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
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-7">
				<div class="card">
					<div class="card-header">
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" name="keterangan" class="form-control" autofocus><br>
							<button type="submit" name="ubah" class="btn btn-info btn-border btn-round btn-sm">
								<span class="btn-label">
									<i class="fas fa-edit"></i>
								</span>
								Ubah
							</button>
							<a href="?halaman=sudah_acc_skdu" class="btn btn-info btn-border btn-round btn-sm">
								Batal
							</a>
						</div>
					</div>
					<div class="container mt-5">
						<h1 class="mb-5">Formulir Data SKDU Pemohon</h1>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label>NIK</label>
									<input type="number" name="nik" value="<?php echo $nik; ?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" readonly>
								</div>

								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempat" value="<?php echo $tempat; ?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="tgl" value="<?php echo $tanggal; ?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input type="text" name="jekel" value="<?php echo $kelamin; ?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" value="<?php echo $agama; ?>" class="form-control" readonly>
								</div>

							</div>
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" class="form-control" readonly>

								</div>
								<div class="form-group">
									<label for="comment">Alamat</label>
									<textarea class="form-control" name="alamat" rows="5" readonly> <?php echo $alamat; ?></textarea>
								</div>

								<div class="form-group">
									<label>Kelurahan</label>
									<input type="text" name="kelurahan" value="<?php echo $kelurahan; ?>" class="form-control" readonly>

								</div>

								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" name="kecamatan" readonly="" class="form-control" value="<?= $kecamatan; ?>">
								</div>

								<div class="form-group">
									<label>kota</label>
									<input type="text" name="kota" class="form-control" value="<?= $kota; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Nama Usaha</label>
									<input type="text" name="usaha" class="form-control" value="<?= $nama_usaha; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Surat keterangan</label>
									<input type="text" name="suratketerangan" class="form-control" value="<?= $surat_keterangan; ?>">
								</div>
								<div class="form-group">
									<label>bergerak di bidang</label>
									<input type="text" name="bidang" class="form-control" value="<?= $bidang_surat; ?>">
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<?php foreach ($dataImg as $key => $vImg) : ?>
						<div class="card">
							<div class="card-header">
								<h4 class="card-title"><?= $vImg['nama_persyaratan'] ?></h4>

								<a href=" ../dataFoto/<?= $vImg['path_image'] ?>" class="pop">
									<img src="../dataFoto/<?= $vImg['path_image'] ?>" width="350" height="250" alt="">
								</a>
							</div>


						<?php endforeach; ?>
						</div>


				</div>
	</form>

</div>
<script>
	$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');
		});
	});
</script>

<?php
if (isset($_POST['ubah'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tempatlahir = $_POST['tempat'];
	$tgl = $_POST['tgl'];
	$jeniskelamin = $_POST['jekel'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat_usaha = $_POST['alamat'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kota = $_POST['kota'];
	$namausaha = $_POST['usaha'];
	$bidangusaha = $_POST['bidang'];
	$keterangan = $_POST['suratketerangan'];

	$ubah = "UPDATE t_skdu SET
		nik='$nik',
		nama='$nama',
		tgl_lahir='$tgl',
		tempat='$tempatlahir',
		jk='$jeniskelamin',
		agama='$agama',
		alamat='$alamat_usaha',
		kelurahan='$kelurahan',
		pekerjaan='$pekerjaan',
		kecamatan='$kecamatan',
		kota='$kota',
		nama_usaha='$namausaha',
		bidang_surat='$bidangusaha' ,
		surat_keterangan='$keterangan' WHERE id_skdu=" . $paramValuesId['id_skdu'];
	$query = mysqli_query($konek, $ubah);

	if ($query == 1) {
		$keterangan = $_POST['keterangan'];
		$ubah = "UPDATE t_skdu SET keterangan='$keterangan' WHERE id_skdu=" . $paramValuesId['id_skdu'];
		$quey = mysqli_query($konek, $ubah);
		if ($quey == 1) {
			echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
			echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_skdu">';
		}
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=detail_skdu">';
	}
}
?>