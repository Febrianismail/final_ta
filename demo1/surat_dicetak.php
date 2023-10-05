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
                        <h4 class="card-title">PERMOHONAN SURAT SUDAH DICETAK</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add7" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Tanggal Request</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Keperluan</th>
                                    <th>Request</th>
                                    <th>Status</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT      
                                                    data_user.nik,
                                                    t_skck.id_skck as data_id,
                                                    t_skck.nik as data_nik,
                                                    t_skck.nama,
                                                    t_skck.tanggal_request,
                                                    t_skck.keperluan,
                                                    t_skck.request,
                                                    t_skck.status
                                                FROM
                                                    data_user
                                                INNER JOIN t_skck ON t_skck.nik_user = data_user.nik
                                                WHERE t_skck.status = 3
                                                UNION
                                                SELECT
                                                    data_user.nik,
                                                    t_skdu.id_skdu as data_id,
                                                    t_skdu.nik as data_nik,
                                                    t_skdu.nama,
                                                    t_skdu.tanggal_request,
                                                    t_skdu.keperluan,
                                                    t_skdu.request,
                                                    t_skdu.status
                                                FROM
                                                    data_user
                                                INNER JOIN t_skdu ON t_skdu.nik_user = data_user.nik
                                                WHERE t_skdu.status = 3
                                                UNION
                                                SELECT
                                                    data_user.nik,
                                                    t_sku.id_sku as data_id,
                                                    t_sku.nik as data_nik,
                                                    t_sku.nama,
                                                    t_sku.tanggal_request,
                                                    t_sku.keperluan,
                                                    t_sku.request,
                                                    t_sku.status
                                                FROM
                                                    data_user
                                                INNER JOIN t_sku ON t_sku.nik_user = data_user.nik
                                                WHERE t_sku.status = 3
                                                UNION
                                                SELECT
                                                    data_user.nik,
                                                    t_sktm.id_sktm as data_id,
                                                    t_sktm.nik as data_nik,
                                                    t_sktm.nama,
                                                    t_sktm.tanggal_request,
                                                    t_sktm.keperluan,
                                                    t_sktm.request,
                                                    t_sktm.status
                                                FROM
                                                    data_user
                                                INNER JOIN t_sktm ON t_sktm.nik_user = data_user.nik
                                                WHERE t_sktm.status = 3
                                                UNION
                                                SELECT
                                                    data_user.nik,
                                                    t_keramaian.id_keramaian as data_id,
                                                    t_keramaian.nik as data_nik,
                                                    t_keramaian.nama,
                                                    t_keramaian.tanggal_request,
                                                    t_keramaian.keperluan,
                                                    t_keramaian.request,
                                                    t_keramaian.status
                                                FROM
                                                    data_user
                                                INNER JOIN t_keramaian ON t_keramaian.nik_user = data_user.nik
                                                WHERE t_keramaian.status = 3
                                                UNION
                                                SELECT
                                                    data_user.nik,
                                                    t_pernyataan.id_pernyataan as data_id,
                                                    t_pernyataan.nik as data_nik,
                                                    t_pernyataan.nama,
                                                    t_pernyataan.tanggal_request,
                                                    t_pernyataan.keperluan,
                                                    t_pernyataan.request,
                                                    t_pernyataan.status
                                                FROM
                                                    data_user
                                                INNER JOIN t_pernyataan ON t_pernyataan.nik_user = data_user.nik
                                                WHERE t_pernyataan.status = 3
                                                UNION
                                                SELECT
                                                    data_user.nik,
                                                    t_blm_nikah.id_blm_nikah as data_id,
                                                    t_blm_nikah.nik as data_nik,
                                                    t_blm_nikah.nama,
                                                    t_blm_nikah.tanggal_request,
                                                    t_blm_nikah.keperluan,
                                                    t_blm_nikah.request,
                                                    t_blm_nikah.status
                                                FROM
                                                    data_user
                                                INNER JOIN t_blm_nikah ON t_blm_nikah.nik_user = data_user.nik
                                                WHERE t_blm_nikah.status = 3
                                                ";
                                // $sql = "SELECT * FROM data_request_skd natural join data_user WHERE status=3";
                                $query = mysqli_query($konek, $sql);
                                while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                    $id = $data['data_id'];
                                    $tgl = $data['tanggal_request'];
                                    $format = date('d F Y', strtotime($tgl));
                                    $nik = $data['nik'];
                                    $nama = $data['nama'];
                                    $status = $data['status'];
                                    $keperluan = $data['keperluan'];
                                    // $keterangan = $data['keterangan'];
                                    // $id= $data['id_request_skd'];
                                    $request = $data['request'];

                                    if ($status == "1") {
                                        $status = "<b style='color:blue'>Sudah ACC Staf</b>";
                                    } elseif ($status == "0") {
                                        $status = "<b style='color:red'>BELUM ACC staf</b>";
                                    } elseif ($status == "3") {
                                        $status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
                                    }

                                    $aksiUpload = '';
                                    if ($request == 'skck') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=skck&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'skdu') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=skdu&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'sku') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=sku&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'sktm') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=sktm&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'nikah') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=nikah&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'skck') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=pindahnikah&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'keramaian') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=keramaian&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'pernyataan') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=pernyataan&id=" . $id . "'>upload&lihat</a>";
                                    } elseif ($request == 'blmnikah') {
                                        $aksiUpload = "<a class='btn btn-primary' href='?halaman=upload_cetak_file&request=blmnikah&id=" . $id . "'>upload&lihat</a>";
                                    }

                                ?>
                                    <tr>
                                        <td><?php echo $format; ?></td>
                                        <td><?php echo $nik; ?></td>
                                        <td><?php echo $nama; ?></td>
                                        <td><?php echo $keperluan; ?></td>
                                        <td><?php echo $request; ?></td>
                                        <td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
                                        <td>
                                            <div class="container mt-5">
                                                <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">

                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                                                </form> -->
                                                <?= $aksiUpload ?>
                                                <!-- <a href="../assets/file/" class="btn btn-success mt-3">Lihat foto</a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- <?php
                                            if (isset($_GET['id_request_sktm'])) {
                                                $hapus = mysqli_query($konek, "DELETE FROM data_request_sktm WHERE id_request_sktm=$id");
                                                if ($hapus) {
                                                    echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
                                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
                                                } else {
                                                    echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
                                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
                                                }
                                            }
                                            ?> -->
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>