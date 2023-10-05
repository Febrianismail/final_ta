<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="fw-bold text-uppercase">TAMPIL ACC REQUEST PINDAH NIKAH</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="table-responsive">
                            <table id="add7" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal Request</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>

                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql = "SELECT * FROM t_pindah_nikah  WHERE status=0";
                                    $query = mysqli_query($konek, $sql);
                                    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                        $tgl = $data['tanggal_request'];
                                        $format = date('d F Y', strtotime($tgl));
                                        $nik = $data['nik'];
                                        $nama = $data['nama'];
                                        $alamat = $data['alamat'];

                                        $status = $data['status'];
                                        $keterangan = $data['keterangan'];



                                        $id_pindah_nikah = $data['id_pindah_nikah'];

                                        if ($status == "1") {
                                            $status = "<b style='color:blue'>ACC</b>";
                                        } elseif ($status == "0") {
                                            $status = "<b style='color:red'>BELUM ACC</b>";
                                        }
                                    ?>
                                        <tr>
                                            <td><?php echo $format; ?></td>
                                            <td><?php echo $nik; ?></td>
                                            <td><?php echo $nama; ?></td>
                                            <td><?php echo $alamat; ?></td>

                                            <td>
                                                <input type="checkbox" name="check[$i]" value="<?php echo $id_pindah_nikah; ?>">
                                                <input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
                                                <div class="form-button-action">
                                                    <a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_pindah_nikah&id_pindah_nikah=<?= $id_pindah_nikah; ?>">
                                                        <i class="fa fa-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
if (isset($_POST['acc'])) {
    if (isset($_POST['check'])) {
        foreach ($_POST['check'] as $value) {
            $ket = "Surat sedang diperiksa oleh sekertaris";
            $tgl = date('Y-m-d');

            // echo $value;
            // $ubah = "UPDATE t_sku	 set status =1 ,keterangan='$ket'where id_sku = $value";
            $ubah = "UPDATE t_pindah_nikah SET `status`='1', `keterangan`='$ket', `acc`='$tgl' WHERE id_pindah_nikah=" . $value;

            $query = mysqli_query($konek, $ubah);

            if ($query) {
                echo "<script language='javascript'>swal('Selamat...', 'ACC Staf Berhasil!', 'success');</script>";
                echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_pindah_nikah">';
            } else {
                echo "<script language='javascript'>swal('Gagal...', 'ACC Staf Gagal!', 'error');</script>";
                echo '<meta http-equiv="refresh" content="3; url=?halaman=sudah_acc_pindah_nikah">';
            }
        }
    }
}
?>