<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
$paramValuesId = array_map(function ($value) {
    return $value;
}, $_GET);

$qDetailImg = "SELECT *, data_jenis_persyaratan.id as idPersyaratan, data_image.id as idImage, data_jenis_persyaratan.nama_persyaratan FROM `data_image` JOIN data_jenis_persyaratan ON data_image.jenis_surat_id = data_jenis_persyaratan.id WHERE `nikah_id`=" . $paramValuesId['id_nikah'];
$queryImage = mysqli_query($konek, $qDetailImg);
$dataImg = mysqli_fetch_all($queryImage, MYSQLI_BOTH);


if (isset($_GET['id_nikah'])) {
    $id = $_GET['id_nikah'];
    $tampil_nik = "SELECT * FROM t_nikah WHERE id_nikah=$id";
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
    $keterangan = $data['keterangan'];
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
                            <a href="?halaman=sudah_acc_nikah" class="btn btn-info btn-border btn-round btn-sm">
                                Batal
                            </a>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <h1 class="mb-5">Formulir Data Nikah Pemohon</h1>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Nama</label>
                                    <input type="text" name="nik" value="<?php echo $nama; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nama" value="<?php echo $nik_nikah; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" name="jekel" value="<?php echo $jenis_kelamin; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat" value="<?php echo $tempat_lahir; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl" value="<?php echo $tgl_lahir; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" name="tempat" value="<?php echo $kewarganegaraan; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" name="agama" value="<?php echo $agama; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>pekerjaan</label>
                                    <input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="5" readonly> <?php echo $alamat; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status Perkawinan</label><br>
                                    <label>Laki-Laki</label>
                                    <input type="text" name="statusperkawinan" value="<?php echo $status_pernikahan_laki; ?>" class="form-control" readonly>
                                    <label>Perempuan</label>
                                    <input type="text" name="statusperkawinan" value="<?php echo $status_pernikahan_perempuan; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama istri/Suami Terdahulu</label>
                                    <input type="text" name="agama" value="<?php echo $nama_istri_suami_terdahulu; ?>" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">Adalah benar anak dari pernikahan seorang pria:
                                <div class="form-group">
                                    <label>Nama Lengkap dan alias</label>
                                    <input type="text" name="nik" value="<?php echo $nama_lengkap_pria; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nama" value="<?php echo $nik_pria; ?>" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat" value="<?php echo $tempat_lahir_pria; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl" value="<?php echo $tgl_lahir_pria; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" name="tempat" value="<?php echo $kewarganegaraan_pria; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" name="agama" value="<?php echo $agama_pria; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>pekerjaan</label>
                                    <input type="text" name="pekerjaan" value="<?php echo $pekerjaan_pria; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="5" readonly> <?php echo $alamat_pria; ?></textarea>
                                </div>

                                Dengan seorang Wanita:
                                <div class="form-group">
                                    <label>Nama Lengkap dan alias</label>
                                    <input type="text" name="nik" value="<?php echo $nama_wanita; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nama" value="<?php echo $nik_wanita; ?>" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat" value="<?php echo $tempat_wanita; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl" value="<?php echo $tgl_lahir_wanita; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" name="tempat" value="<?php echo $kewarganegaraan_wanita; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" name="agama" value="<?php echo $agama_wanita; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>pekerjaan</label>
                                    <input type="text" name="pekerjaan" value="<?php echo $pekerjaan_wanita; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="5" readonly> <?php echo $alamat_wanita; ?></textarea>
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

    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $kelamin = $_POST['jekel'];
    $agama = $_POST['agama'];

    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];




    $keterangan = $_POST['keterangan'];

    $ubah = "UPDATE t_nikah SET
		nama='$nama',
		tgl_lahir='$tgl',
		jenis_kelamin='$kelamin',
		agama='$agama',
		alamat='$alamat',pekerjaan='$pekerjaan'
        WHERE id_nikah=" . $paramValuesId['id_nikah'];
    $query = mysqli_query($konek, $ubah);

    if ($query == 1) {
        $keterangan = $_POST['keterangan'];
        $ubah = "UPDATE t_nikah SET
		keterangan='$keterangan' WHERE id_nikah=" . $paramValuesId['id_nikah'];
        $quey = mysqli_query($konek, $ubah);
        if ($quey == 1) {
            echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_nikah">';
        }
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=detail_nikah">';
    }
}
?>