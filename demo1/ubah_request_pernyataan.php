<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_pernyataan'])) {
    $id = $_GET['id_pernyataan'];
    $tampil_nik = "SELECT * FROM t_pernyataan WHERE id_pernyataan=$id";
    $query = mysqli_query($konek, $tampil_nik);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nik1 = $data['nik'];
    $nama1 = $data['nama'];
    $nomorkk1 = $data['nomorkk'];
    $tempat1 = $data['tempat'];
    $tgl1 = $data['tgl_lahir'];
    $jekel1 = $data['jenis_kelamin'];
    $alamat1 = $data['alamat'];
    $pekerjaan1 = $data['pekerjaan'];
    $menyatakan1 = $data['menyatakan_bahwa'];
    $keperluan1 = $data['keperluan'];
    $untuk1 = $data['untuk'];
}
?>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">UBAH FORM TAMBAH REQUEST SURAT PERNYATAAN</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nik" class="form-control" value="<?= $nik1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $nama1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nomor KK</label>
                                    <input type="text" name="nomorkk" class="form-control" value="<?= $nomorkk1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>

                                    <input type="text" name="tempatlahir" class="form-control" value="<?= $tempat1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggallahir" class="form-control" value="<?= $tgl1; ?>">
                                </div>
                                <div class="form-check">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" name="jk" class="form-control" value="<?= $jekel1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" value="<?= $pekerjaan1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat </label>

                                    <input type="text" name="alamat" class="form-control" value="<?= $alamat1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Keperluan </label>
                                    <input type="text" name="keperluan" class="form-control" value="<?= $keperluan1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Dengan Ini Menyatakan Bahawa </label>
                                    <input type="text" name="menyatakan" class="form-control" value="<?= $menyatakan1; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Surat Pernyataan Ini Dipergunakan untuk </label>
                                    <input type="text" name="digunakan" class="form-control" value="<?= $untuk1; ?>">
                                </div>



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

    $sql = "UPDATE `t_pernyataan` SET nama='$nama',tempat='$tempatlahir',tgl_lahir='$tgl',jenis_kelamin='$jeniskelamin',nik='$nik',nomorkk='$nomorkk',alamat='$alamat',pekerjaan='$pekerjaan',menyatakan_bahwa='$menyatakan',untuk='$digunakan' WHERE id_pernyataan=$id";
    $query = mysqli_query($konek, $sql);

    if ($query) {

        echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_request_pernyataan">';
    }
}

?>