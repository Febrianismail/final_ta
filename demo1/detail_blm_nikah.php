<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
$paramValuesId = array_map(function ($value) {
    return $value;
}, $_GET);

$qDetailImg = "SELECT *, data_jenis_persyaratan.id as idPersyaratan, data_image.id as idImage, data_jenis_persyaratan.nama_persyaratan FROM `data_image` JOIN data_jenis_persyaratan ON data_image.jenis_surat_id = data_jenis_persyaratan.id WHERE `blm_nikah_id`=" . $paramValuesId['id_blm_nikah'];
$queryImage = mysqli_query($konek, $qDetailImg);
$dataImg = mysqli_fetch_all($queryImage, MYSQLI_BOTH);


if (isset($_GET['id_blm_nikah'])) {
    $id = $_GET['id_blm_nikah'];
    $tampil_nik = "SELECT * FROM t_blm_nikah WHERE id_blm_nikah=$id";
    $query = mysqli_query($konek, $tampil_nik);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_blm_nikah'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $nomorkk = $data['nomorkk'];
    $jk = $data['jk'];
    $tempat = $data['tempat_lahir'];
    $tgl_lahir = $data['tgl_lahir'];
    $agama = $data['agama'];
    $status_perkawinan = $data['status_perkawinan'];
    $pendidikan = $data['pendidikan'];
    $pekerjaan = $data['pekerjaan'];
    $alamat = $data['alamat'];
    $keperluan = $data['keperluan'];
    $tujuan = $data['tujuan'];
    $berdasarkan = $data['berdasrkan_keterangan'];
    $berlaku_tgl = $data['berlaku_tgl'];
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
                            <a href="?halaman=sudah_acc_blm_nikah" class="btn btn-info btn-border btn-round btn-sm">
                                Batal
                            </a>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <h1 class="mb-5">Formulir Data Belum Nikah Pemohon</h1>

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
                                    <label>Nomor KK</label>
                                    <input type="text" name="nomorkk" value="<?php echo $nomorkk; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat" value="<?php echo $tempat; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl" value="<?php echo $tgl_lahir; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" name="jekel" value="<?php echo $jk; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" name="agama" value="<?php echo $agama; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Status Perkawinan</label>
                                    <input type="text" name="statusperkawinan" value="<?php echo $status_perkawinan; ?>" class="form-control" readonly>
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
                                    <label>Pendidikan</label>
                                    <input type="text" name="pendidikan" value="<?php echo $pendidikan; ?>" class="form-control" readonly>

                                </div>

                                <div class="form-group">
                                    <label>Keperluan</label>
                                    <input type="text" name="keperluan" readonly="" class="form-control" value="<?= $keperluan; ?>">
                                </div>


                                <div class="form-group">
                                    <label>Berlaku Tgl</label>
                                    <input type="date" name="berlakutgl" class="form-control" value="<?= $berlaku_tgl; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control" value="<?= $tujuan; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Berdasarkan Keterangan RT/RW</label>
                                    <textarea class="form-control" name="berdasarkan" rows="5" readonly> <?php echo $berdasarkan; ?></textarea>
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
    $nomorkk = $_POST['nomorkk'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $kelamin = $_POST['jekel'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['statusperkawinan'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $keperluan = $_POST['keperluan'];
    $tujuan = $_POST['tujuan'];
    $berlaku_tgl = $_POST['berlakutgl'];
    $rt = $_POST['berdasarkan'];
    $keterangan = $_POST['keterangan'];

    $ubah = "UPDATE t_blm_nikah SET
		nama='$nama',
		tgl_lahir='$tgl',
		tempat_lahir='$tempat',
		jk='$kelamin',
		agama='$agama',
		alamat='$alamat',status_perkawinan='$status_perkawinan',pekerjaan='$pekerjaan',
        
		berlaku_tgl='$berlaku_tgl'  WHERE id_blm_nikah=" . $paramValuesId['id_blm_nikah'];
    $query = mysqli_query($konek, $ubah);

    if ($query == 1) {
        $keterangan = $_POST['keterangan'];
        $ubah = "UPDATE t_blm_nikah SET
		keterangan='$keterangan' WHERE id_blm_nikah=" . $paramValuesId['id_blm_nikah'];
        $quey = mysqli_query($konek, $ubah);
        if ($quey == 1) {
            echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_blm_nikah">';
        }
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=detail_blm">';
    }
}
?>