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
                        <div class="card-title">FORM TAMBAH REQUEST SKCK</div>
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
                                    <label>Nomor KK</label>
                                    <input type="number" name="nomorkk" class="form-control" placeholder="Masukan Nomor KK anda">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="hidden" class="form-control" value="<?= $tempat1; ?>">
                                    <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir Anda" value="<?= $tempat1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="hidden" class="form-control" value="<?= $tgl1; ?>">
                                    <input type="date" name="tanggallahir" class="form-control" value="<?= $tgl1; ?>">
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
                                    <label>Agama</label>
                                    <input type="hidden" class="form-control" value="<?= $agama1; ?>">
                                    <input type="text" name="agama" class="form-control" placeholder="agama anda " value="<?= $agama1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Status Perkawinan</label>
                                    <input type="text" name="statusperkawinan" class="form-control" placeholder="Apa anda sudah nikah ? ">
                                </div>
                                <div class="form-group">
                                    <label>pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan anda ">
                                </div>
                                <div class="form-group">
                                    <label>Alamat </label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat anda">
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan">
                                </div>
                                <div class="form-group">
                                    <label>Keperluan untuk</label>
                                    <input type="text" name="keperluan" class="form-control" placeholder="Keperluan Untuk Apa ?">
                                </div>
                                <div class="form-group">
                                    <label>Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control" placeholder="tujuannya untuk apa ?">
                                </div>
                                <div class="form-group">
                                    <label>Berlaku Tanggal</label>
                                    <input type="date" name="berlakutanggal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Berdasarkan Keterangan RT/RW</label>
                                    <input type="text" name="keteranganrt/rw" class="form-control" placeholder="berdasarkan keterangan RT/RW isi">
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
    $keterangan = $_POST['keteranganrt/rw'];

    $nikuser = $_SESSION['nik'];
    $sql = "INSERT INTO t_skck (nik,nama,nomorkk,tempat,tgl_lahir,jk,agama,status_perkawinan,pekerjaan,alamat,pendidikan,keperluan,tujuan,berlaku_tgl,berdasarkan_rtrw,nik_user) VALUES ('$nik','$nama','$nomorkk','$tempatlahir','$tgl','$jeniskelamin','$agama','$status_perkawinan','$pekerjaan','$alamat','$pendidikan', '$keperluan', '$tujuan', '$berlakutgl','$keterangan','$nikuser')";


    if ($konek->query($sql) === TRUE) {
        $_SESSION['nik_skck'] = $nik;
        echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=scan1">';
        exit;
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=request_skck">';
    }

    $konek->close();
}


?>