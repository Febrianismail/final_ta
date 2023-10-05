<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>

<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">DETAIL EDIT REQUEST SURAT NIKAH</div>
                    </div>
                    <div class="card-body">
                        <div class="row">


                        </div>
                        <?php
                        include '../konek.php';
                        //session_start();

                        $paramValuesId = array_map(function ($value) {
                            return $value;
                        }, $_GET);
                        $idParamsUrl = $paramValuesId['id_nikah'];

                        $tampilJenisPersyaratan = "SELECT * FROM `data_jenis_persyaratan` ";
                        $queryJP = mysqli_query($konek, $tampilJenisPersyaratan);
                        $datajp = mysqli_fetch_all($queryJP, MYSQLI_BOTH);

                        $idNikah = '';
                        if (isset($paramValuesId['id_nikah'])) {
                            $idNikah = $paramValuesId['id_nikah'];
                        }

                        $tampilScan = "SELECT *, data_jenis_persyaratan.id as idPersyaratan, data_image.id as idImage FROM `data_image` JOIN data_jenis_persyaratan ON data_image.jenis_surat_id = data_jenis_persyaratan.id WHERE `nikah_id`=" . $idNikah;
                        $queryScan = mysqli_query($konek, $tampilScan);
                        $dataScans = mysqli_fetch_all($queryScan, MYSQLI_BOTH);


                        ?>
                        <div class="container mt-5">
                            <h1 class="mb-4">Persyaratan</h1>
                            <ul class="list-group">
                                <li class="list-group-item">Scan KK (putra & Putri)</li>
                                <li class="list-group-item">Scan KTP (putra & Putri)</li>
                                <li class="list-group-item">Scan akte lahir (putra & Putri)</li>
                                <li class="list-group-item">Scan ijasah (putra & Putri)</li>
                                <li class="list-group-item">Scan identitas kerja jika jenis pekerjaan tidak sesuai KK (putra & Putri)</li>
                                <li class="list-group-item">Scan hasil pemeriksaan kesehatan catim (mempelai berdua)</li>
                                <li class="list-group-item">Scan KTP ortu (ayah&ibu)</li>
                                <li class="list-group-item">bila sudah almarhum,scan akte kematian (ayah/ibu)</li>
                                <li class="list-group-item">Bila ortu sudah pisah,ditambah Scan kk masing masing ortu</li>
                                <li class="list-group-item">Scan surat pengantar rt/rw</li>
                                <li class="list-group-item">pas foto </li>

                            </ul>
                        </div>


                        <div class="container mt-5">
                            <h1>Edit Persyartan foto</h1>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="jenis_persyaratan" class="form-label">Jenis Persyaratan</label>
                                    <select name="jenis_persyaratan" id="jenis_persyaratan" class="form-control">
                                        <option value="">--PILIH--</option>
                                        <?php foreach ($datajp as $key => $value) { ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['nama_persyaratan'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="upload_file" class="form-label">Upload File</label>
                                    <input type="file" name="upload_file" id="upload_file" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                                    <a href="?halaman=tampil_status" class="btn btn-secondary">Simpan</a>
                                    <a href="?halaman=tampil_status" class="btn btn-secondary">Kembali</a>
                                </div>
                            </form>
                        </div>

                        <div class="container mt-5">
                            <h1>Tabel scan</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Jenis Persyaratan</th>
                                        <th scope="col">Scan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataScans as $keysScans => $vScans) { ?>
                                        <tr>
                                            <td><?= $keysScans + 1 ?></td>
                                            <td><?= $vScans['nama_persyaratan'] ?></td>
                                            <td>
                                                <img src="../dataFoto/<?= $vScans['path_image'] ?>" alt="" class="img-thumbnail" style="height: 100px;">
                                            </td>
                                            <td>
                                                <a href="?halaman=detail_nikah_request&delete=<?= $vScans['idImage'] ?>&id_nikah=<?= $idNikah ?>" class="btn btn-danger">Hapus</a>
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

                        if (isset($_POST['tambah'])) {
                            $jenisPersyaratan = $_POST['jenis_persyaratan'];

                            if (!empty($jenisPersyaratan)) {

                                $file_name = $_FILES['upload_file']['name'];
                                $file_tmp = $_FILES['upload_file']['tmp_name'];

                                $file_name = sanitizeFileName($file_name);

                                move_uploaded_file($file_tmp, "../dataFoto/" . $file_name);

                                $querySimpanScan = "INSERT INTO `data_image` (`nikah_id`, `jenis_surat_id`, `path_image`) VALUES ('$idParamsUrl','$jenisPersyaratan', '$file_name') ";

                                $resultBerkas = mysqli_query($konek, $querySimpanScan);

                                if (!$resultBerkas) {
                                    echo "Erro : " . mysqli_error($konek);
                                }
                                echo '<meta http-equiv="refresh" content="0; url=?halaman=detail_nikah_request&id_nikah=' . $idParamsUrl . '">';
                            } else {
                                echo 'belum memilih jenis persyaratan';
                            }
                        }

                        // Fungsi Delete (hapus data dan file terkait)
                        if (isset($_GET['delete'])) {
                            $id = $_GET['delete'];

                            // Query untuk mendapatkan nama file yang akan dihapus
                            $query = "SELECT path_image FROM data_image WHERE id=$id";
                            $result = mysqli_query($konek, $query);
                            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                            $file_name = '';
                            if (isset($row)) {
                                $file_name = $row['path_image'];
                            }

                            // if (isset($file_name)) {
                            //     // Hapus file dari folder upload
                            //     unlink("../dataFoto/" . $file_name);
                            // }

                            // Query untuk menghapus data dari tabel
                            $query = "DELETE FROM data_image WHERE id=$id";
                            $result = mysqli_query($konek, $query);

                            if (!$result) {
                                echo "Error: " . mysqli_error($konek);
                            }
                            echo '<meta http-equiv="refresh" content="0; url=?halaman=detail_nikah_request&id_nikah=' . $idParamsUrl . '">';
                        }

                        ?>
                    </div>
                </div>
        </div>
    </div>