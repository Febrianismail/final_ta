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
$tempat1 = $data['tempat_lahir'];
$tgl1 = $data['tanggal_lahir'];
$jk = $data['jekel'];
$agama1 = $data['agama'];

?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM TAMBAH REQUEST SURAT KETERANGAN DOMISILI USAHA</div>
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
									<label>Nama</label>
									<input type="hidden" class="form-control" value="<?= $nama; ?>">
									<input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="hidden" class="form-control" value="<?= $tempat1 ?>">
									<input type="text" name="tempatlahir" class="form-control" value="<?= $tempat1 ?>" placeholder="Tempat Lahir Anda">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="hidden" class="form-control" value="<?= $tgl1 ?>">
									<input type="date" name="tanggallahir" class="form-control" value="<?= $tgl1 ?>">
								</div>
								<div class="form-group">
									<label class="mb-2">Jenis Kelamin</label>
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
									<input type="hidden" class="form-control" value="<?= $agama1 ?>">
									<input type="text" name="agama" class="form-control" value="<?= $agama1 ?>" placeholder="agama anda ">
								</div>
								<div class="form-group">
									<label>pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan anda ">
								</div>
								<div class="form-group">
									<label>Alamat Usaha</label>
									<input type="text" name="alamat" class="form-control" placeholder="Alamat tempat Usaha">
								</div>
								<div class="form-group">
									<label>Kelurahan</label>
									<input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan Usaha">
								</div>
								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan Usaha">
								</div>
								<div class="form-group">
									<label>Kota</label>
									<input type="text" name="kota" class="form-control" placeholder="Kota usaha">
								</div>
								<div class="form-group">
									<label>Nama Usaha</label>
									<input type="text" name="namausaha" class="form-control" placeholder="Nama Usaha">
								</div>
								<div class="form-group">
									<label>Bidang Usaha</label>
									<input type="text" name="bidangusaha" class="form-control" placeholder="bidang  Usaha">
								</div>

								<div class="form-group">
									<label>keterangan Surat</label>
									<input type="text" name="keterangan" class="form-control" placeholder="surat ini akan di pergunakan untuk">
								</div>
								<div class="form-group">
									<label>berdasarkan Surat Keterangan RT/RW Nomor </label>
									<input type="text" name="nomorsurat" class="form-control" placeholder="Bahwa berdasarkan Surat Keterangan RT/RW Nomor .">
								</div>
							</div>

						</div>
					</div>
					<div class="card-action">
						<input type="submit" name="submit" value="Lanjut">
						<!-- <button name="kirim" class="btn btn-success">Kirim</button> -->
						<a href="?halaman=beranda" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>


<?php

if (isset($_POST['submit'])) {

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tempatlahir = $_POST['tempatlahir'];
	$tgl = $_POST['tanggallahir'];
	$jeniskelamin = $_POST['jk'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat_usaha = $_POST['alamat'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kota = $_POST['kota'];
	$namausaha = $_POST['namausaha'];
	$bidangusaha = $_POST['bidangusaha'];
	$keterangan = $_POST['keterangan'];
	$nomorsurat = $_POST['nomorsurat'];

	$nikuser = $_SESSION['nik'];
	$sql = "INSERT INTO t_skdu (nik,nama,tempat,tgl_lahir,jk,agama,pekerjaan,alamat,kelurahan,kecamatan,kota,nama_usaha,bidang_surat,surat_keterangan,nik_user,nomer_surat) VALUES ('$nik','$nama','$tempatlahir','$tgl','$jeniskelamin','$agama','$pekerjaan','$alamat_usaha','$kelurahan', '$kecamatan', '$kota', '$namausaha','$bidangusaha','$keterangan','$nikuser','$nomorsurat')";


	if ($konek->query($sql) === TRUE) {
		$_SESSION['nik_skdu'] = $nik;
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=scan">';
		exit;
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_skd">';
	}

	$konek->close();
}


?>