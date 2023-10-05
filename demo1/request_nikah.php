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
?>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FORM TAMBAH REQUEST NIKAH</div>
                    </div>
                    <div class="card-body">
                        <p>Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa: </p>
                        <br>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" value="<?= $nama; ?>">
                                    <input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="hidden" class="form-control" value="<?= $nik; ?>">
                                    <input type="number" name="nik_nikah" class="form-control" value="<?= $nik; ?>">

                                </div>
                                <div class="form-check">
                                    <label>Jenis Kelamin</label><br />
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="jk" value="Laki-Laki" checked="">
                                        <span class="form-radio-sign">Laki-Laki</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="jk" value="Perempuan">
                                        <span class="form-radio-sign">Perempuan</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir Anda">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggallahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan" class="form-control" placeholder="agama anda ">
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" name="agama" class="form-control" placeholder="agama anda ">
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
                                    <label>Status Pernikahan </label>
                                    <br>
                                    <label class="lable-control">Laki - Laki : Jejaka, Duda, atau berisitri ke</label>
                                    <input type="text" name="status_pernikahan_laki" class="form-control" placeholder="Laki - Laki : Jejaka, Duda, atau berisitri ke">
                                    <br>
                                    <label class="lable-control">Perempuan : Perawan, Janda</label>
                                    <input type="text" name="status_pernikahan_perempuan" class="form-control" placeholder="Perempuan : Perawan, Janda">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Nama Istri/Suami terdahulu</label>
                                    <input type="text" name="nama_istri_suami_terdahulu" class="form-control" placeholder="Nama Istri/Suami terdahulu">
                                </div>
                                <hr>
                                <p>Adalah benar anak dari pernikahan seorang pria:</p>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap_pria" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Nik</label>
                                    <input type="number" name="nik_pria" class="form-control" placeholder="Nik">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir_pria" class="form-control" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir_pria" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegara</label>
                                    <input type="text" name="kewarganegaraan_pria" class="form-control" placeholder="Kewarganegara">
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" name="agama_pria" class="form-control" placeholder="Agama">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan_pria" class="form-control" placeholder="Pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat_pria" class="form-control" placeholder="Alamat">
                                </div>
                                <hr>
                                <p>dengan seorang wanita:</p>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_wanita" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Nik</label>
                                    <input type="number" name="nik_wanita" class="form-control" placeholder="Nik">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_wanita" class="form-control" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal lahir</label>
                                    <input type="date" name="tgl_lahir_wanita" class="form-control" placeholder="Tempat">
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan_wanita" class="form-control" placeholder="Kewarganegaraan">
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" name="agama_wanita" class="form-control" placeholder="Agama">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan_wanita" class="form-control" placeholder="Pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat_wanita" class="form-control" placeholder="Alamat">
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="card-action">
                        <input type="submit" name="submit" class="btn btn-primary" value="Lanjut">
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
    $nik_nikah = $_POST['nik_nikah'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
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
    $tanggal_request = date('Y-m-d');



    $nikuser = $_SESSION['nik'];
    $sql = "INSERT INTO t_nikah (nama, nik_nikah, tempat_lahir, tgl_lahir, kewarganegaraan, agama, pekerjaan, alamat, status_pernikahan_laki, status_pernikahan_perempuan, nama_istri_suami_terdahulu, tanggal_request, nik_user,nama_lengkap_pria,nik_pria,tempat_lahir_pria,tgl_lahir_pria,kewarganegaraan_pria,agama_pria,pekerjaan_pria,alamat_pria,nama_wanita,nik_wanita,tempat_wanita,tgl_lahir_wanita,kewarganegaraan_wanita,agama_wanita,pekerjaan_wanita,alamat_wanita,jenis_kelamin) VALUES ('$nama', '$nik_nikah','$tempatlahir','$tanggallahir','$kewarganegaraan','$agama', '$pekerjaan','$alamat','$status_pernikahan_laki','$status_pernikahan_perempuan','$nama_istri_suami_terdahulu','$tanggal_request','$nikuser', '$nama_lengkap_pria','$nik_pria','$tempat_lahir_pria','$tgl_lahir_pria','$kewarganegaraan_pria','$agama_pria', '$pekerjaan_pria', '$alamat_pria','$nama_wanita','$nik_wanita','$tempat_wanita','$tgl_lahir_wanita','$kewarganegaraan_wanita','$agama_wanita','$pekerjaan_wanita','$alamat_wanita', '$jk')";


    if ($konek->query($sql) === TRUE) {
        $_SESSION['nik_nikah'] = $nik_nikah;
        echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=scannikah">';
        exit;
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=request_nikah">';
    }

    $konek->close();
}


?>