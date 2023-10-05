<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">UPLOAD SURAT</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            include '../konek.php';

                            $paramValuesId = array_map(function ($value) {
                                return $value;
                            }, $_GET);

                            //session_start();
                            // $tampilkandataskdu = "SELECT * FROM t_skdu WHERE nik=" . $_SESSION['nik_skdu'] . " ORDER BY id_skdu desc";

                            // // nik ganti session

                            // $query = mysqli_query($konek, $tampilkandataskdu);
                            // $dataSkdu = mysqli_fetch_array($query, MYSQLI_BOTH);


                            // $nik = '';
                            // $idSkdu = '';
                            // if (isset($dataSkdu)) {
                            //     $nik = $dataSkdu['nik'];
                            //     $idSkdu = $dataSkdu['id_skdu'];
                            // }

                            $tampilJenisPersyaratan = "SELECT * FROM `data_jenis_persyaratan` ";
                            $queryJP = mysqli_query($konek, $tampilJenisPersyaratan);
                            $datajp = mysqli_fetch_all($queryJP, MYSQLI_BOTH);

                            $dataScans = [];

                            if (!empty($paramValuesId['id'])) {
                                if ($paramValuesId['request'] == 'skck') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `skck_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'skdu') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `skdu_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'sku') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `sku_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'sktm') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `sktm_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'nikah') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `nikah_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'skck') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `skck_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'keramaian') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `keramaian_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'pernyataan') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `pernyataan_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'blmnikah') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `blm_nikah_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                } elseif ($paramValuesId['request'] == 'pindahnikah') {
                                    $tampilScan = "SELECT * FROM `data_image` WHERE `pindah_nikah_id`=" . $paramValuesId['id'] . " AND `upload_surat` IS NOT NULL ";

                                    $queryScan = mysqli_query($konek, $tampilScan);
                                    $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);
                                }
                            }


                            // echo json_encode($dataScans) . '<br>';
                            // exit;

                            ?>
                            <!-- <div class="container mt-5">
                                <h1 class="mb-4">Persyaratan</h1>
                                <ul class="list-group">
                                    <li class="list-group-item">Scan KK</li>
                                    <li class="list-group-item">Scan KTP</li>
                                    <li class="list-group-item">Scan surat pernyatan rt/rw</li>
                                    <li class="list-group-item">Foto Tempat Usaha</li>
                                </ul>
                            </div> -->

                            <div class="container mt-5">
                                <!-- <h1>Form Persyaratan</h1> -->
                                <form method="post" enctype="multipart/form-data">
                                    <!-- <div class="mb-3">
                                        <label for="jenis_persyaratan" class="form-label">Jenis Persyaratan</label>
                                        <select name="jenis_persyaratan" id="jenis_persyaratan" class="form-select">
                                            <option value="">--PILIH--</option>
                                            <?php foreach ($datajp as $key => $value) { ?>
                                                <option value="<?= $value['id'] ?>"><?= $value['nama_persyaratan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div> -->
                                    <div class="mb-3">
                                        <label for="upload_file" class="form-label">Upload File</label>
                                        <input type="file" name="upload_file" id="upload_file" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                        <a href="?halaman=surat_dicetak" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                            </div>

                            <div class="container mt-5">
                                <h1>Tabel scan</h1>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($dataScans as $keysScans => $vScans) { ?>
                                            <tr>
                                                <td><?= $keysScans + 1 ?></td>
                                                <td>
                                                    <a href="../assets/file/<?= $vScans['upload_surat'] ?>" class="img-thumbnail">Lihat Foto</a>
                                                </td>
                                                <td>
                                                    <a href="?halaman=upload_cetak_file&request=<?= $paramValuesId['request'] ?>&id=<?= $paramValuesId['id'] ?>&delete=<?= $vScans['id'] ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>


                            <?php

                            // Fungsi untuk mengubah nama file dengan menambahkan underscore
                            function sanitizeFileName($fileName)
                            {
                                // Hilangkan karakter non-alfanumerik kecuali underscore dan titik
                                $fileName = preg_replace("/[^A-Za-z0-9_\.]/", "_", $fileName);

                                // Tambahkan underscore di depan nama file jika dimulai dengan angka
                                $fileName = preg_replace("/^[0-9]/", "_$0", $fileName);

                                return $fileName;
                            }

                            if (isset($_POST['simpan'])) {
                                // $jenisPersyaratan = $_POST['jenis_persyaratan'];

                                // if (!empty($jenisPersyaratan)) {

                                $file_name = $_FILES['upload_file']['name'];
                                $file_tmp = $_FILES['upload_file']['tmp_name'];

                                $file_name = sanitizeFileName($file_name);

                                move_uploaded_file($file_tmp, "../assets/file/" . $file_name);

                                if ($paramValuesId['request'] == 'skck') {
                                    $columnId = 'skck_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'skdu') {
                                    $columnId = 'skdu_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'sku') {
                                    $columnId = 'sku_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'sktm') {
                                    $columnId = 'sktm_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'nikah') {
                                    $columnId = 'nikah_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'skck') {
                                    $columnId = 'skck_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'keramaian') {
                                    $columnId = 'keramaian_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'pernyataan') {
                                    $columnId = 'pernyataan_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'blmnikah') {
                                    $columnId = 'blm_nikah_id';
                                    $idValue = $paramValuesId['id'];
                                } elseif ($paramValuesId['request'] == 'pindahnikah') {
                                    $columnId = 'pindah_nikah_id';
                                    $idValue = $paramValuesId['id'];
                                }
                                $querySimpanScan = "INSERT INTO `data_image` (`$columnId`, `upload_surat`) VALUES ('$idValue', '$file_name') ";

                                $resultBerkas = mysqli_query($konek, $querySimpanScan);

                                if (!$resultBerkas) {
                                    echo "Erro : " . mysqli_error($konek);
                                }
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=surat_dicetak">';
                                // } else {
                                //     echo 'belum memilih jenis persyaratan';
                                // }
                            }

                            // Fungsi Delete (hapus data dan file terkait)
                            if (isset($_GET['delete'])) {
                                $id = $_GET['delete'];

                                // Query untuk mendapatkan nama file yang akan dihapus

                                $query = "SELECT upload_surat FROM data_image WHERE id=$id";
                                $result = mysqli_query($konek, $query);
                                $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                                $file_name = '';
                                if (isset($row)) {
                                    $file_name = $row['upload_surat'];
                                }

                                if (isset($file_name)) {
                                    // Hapus file dari folder upload
                                    unlink("../assets/file/" . $file_name);
                                }

                                // Query untuk menghapus data dari tabel
                                $query = "DELETE FROM data_image WHERE id=$id";
                                $result = mysqli_query($konek, $query);

                                if (!$result) {
                                    echo "Error: " . mysqli_error($konek);
                                }
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=upload_cetak_file&request=' . $paramValuesId['request'] . '&id=' . $paramValuesId['id'] . '">';
                            }

                            ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>