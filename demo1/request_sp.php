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
$alamat1 = $data['alamat'];
?>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FORM REQUEST SURAT AhliWaris/Penghasilan/KTP/KK</div>
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
                                    <input type="text" name="tempatlahir" class="form-control" value="<?= $tempat1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="hidden" class="form-control" value="<?= $tgl1; ?>">
                                    <input type="date" name="tanggallahir" class="form-control" value="<?= $tgl1; ?>">
                                </div>
                                <div class="form-check">
                                    <label>Jenis Kelamin</label><br />
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="jk" value="laki-laki" checked="<>">
                                        <span class="form-radio-sign">Laki-Laki</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="jk" value="Perempuan">
                                        <span class="form-radio-sign">Perempuan</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan anda ">
                                </div>
                                <div class="form-group">
                                    <label>Alamat </label>
                                    <input type="hidden" class="form-control" value="<?= $alamat1; ?>">
                                    <input type="text" name="alamat" class="form-control" value="<?= $alamat1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Keperluan </label>
                                    <input type="text" name="keperluan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Dengan Ini Menyatakan Bahawa </label>
                                    <input type="text" name="menyatakan" class="form-control" placeholder="menyatakan bahwa " rows="5">
                                </div>
                                <div class="form-group">
                                    <label>Surat Pernyataan Ini Dipergunakan untuk </label>
                                    <input type="text" name="digunakan" class="form-control" rows="5">
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
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $keperluan = $_POST['keperluan'];
    $menyatakan = $_POST['menyatakan'];
    $digunakan = $_POST['digunakan'];

    $nikuser = $_SESSION['nik'];
    $sql = "INSERT INTO t_pernyataan (nik,nama,nomorkk,tempat,tgl_lahir,jenis_kelamin,pekerjaan,alamat,keperluan,menyatakan_bahwa,untuk,nik_user) VALUES ('$nik','$nama','$nomorkk','$tempatlahir','$tgl','$jeniskelamin','$pekerjaan','$alamat', '$keperluan', '$menyatakan','$digunakan','$nikuser')";


    if ($konek->query($sql) === TRUE) {
        $_SESSION['nik_sp'] = $nik;
        echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=scan3">';
        exit;
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=request_sp">';
    }

    $konek->close();
}


?>