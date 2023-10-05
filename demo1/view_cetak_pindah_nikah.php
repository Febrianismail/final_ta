<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_pindah_nikah'])) {
    $id = $_GET['id_pindah_nikah'];
    $sql = "SELECT * FROM t_pindah_nikah  WHERE id_pindah_nikah='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_pindah_nikah'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $nomorkk = $data['nomorkk'];
    $tempat = $data['tempat'];
    $tgl = $data['tgl_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $jk = $data['jk'];
    $kebangsaan = $data['kebangsaan'];
    $agama = $data['agama'];
    $status_perkawinan = $data['status_perkawinan'];
    $pekerjaan = $data['pekerjaan'];
    $alamat = $data['alamat'];
    $pindahke = $data['pindahke'];
    $kelurahan = $data['kelurahan'];
    $kecamatan = $data['kecamatan'];
    $kab_kota = $data['kab_kota'];
    $provinsi = $data['provinsi'];
    $berdasarkan = $data['berdasarkan'];
    $tgl_nikah = $data['tgl_nikah'];
    $format5 = date('d-m-Y', strtotime($tgl_nikah));
    $request = $data['request'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($acc == 0) {
        $acc = "BELUM TTD";
    } elseif ($acc == 1) {
        $acc;
    }

    $request = $data['request'];

    $keterangan = $data['keterangan'];
    $status = $data['status'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($format4 == 0) {
        $format4 = "kosong";
    } elseif ($format4 == 1) {
        $format4;
    }

    if ($status == 3) {
        $keterangan = "Sudah ACC Sekertaris, surat sedang dalam proses cetak oleh staf";
    }
}
?>
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"></h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-tools">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="dicetak" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="Surat dicetak, bisa diambil! Di kelurahan">Surat sudah dicetak, bisa diambil ke kelurahan!</option>
                                </select><br>
                                <!-- <input type="date" name="tgl_acc" class="form-control"> -->
                                <input type="submit" name="ttd" value="Kirim" class="btn btn-primary btn-sm">
                                <a href="cetak_pindah_nikah.php?id_pindah_nikah=<?= $id; ?>" class="btn btn-primary btn-sm">Cetak</a>
                                <!-- <div class="form-group">
                                                    <a href="cetak_skd.php?id_request_skd=<?php $id; ?>">
                                                        Cetak
                                                    </a>
                                                </div> -->
                                <!-- <div class="form-group">
                                                   <a href="cetak_skd.php?id_request_skd=<?= $id; ?>">a</a>
                                                </div> -->
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {
                            $cetak = $_POST['dicetak'];
                            $update = mysqli_query($konek, "UPDATE t_pindah_nikah SET keterangan='$cetak', status=3 WHERE id_pindah_nikah=$id");
                            if ($update) {
                                echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_surat">';
                            } else {
                                echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_cetak_pindah_nikah">';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table border="1" align="center">
                        <table border="0" align="center">
                            <tr>
                                <td><img src="img/tlogomas.png" width="95" height="100" alt=""></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center>
                                        <font size="4">PEMERINTAHAN KOTA MALANG</font><br>
                                        <font size="4">KECAMATAN LOWOKWARU</font><br>
                                        <font size="5"><b>KELURAHAN TLOGOMAS</b></font><br>
                                        <font size="2"><i>Jl. Raya Tlogomas 56 Telp. 0341-560649 Faks. 0341-560649 </i></font><br>
                                        <font size="2"><i>https://keltlogomas.malangkota.go.id e-mail : kel-tlogomas@malangkota.go.id </i></font><br>
                                    </center>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="45">
                                    <hr color="black">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    <center>
                                        <font size="4"><b>SURAT PENGANTAR PINDAH NIKAH </b></font><br>
                                        <hr style="margin:0px" color="black">
                                        <span>Nomor : 474/<?php echo $id; ?>/35.73.05.1003/<?php echo $format1; ?></span>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Lurah Kelurahan Tlogomas Kecamatan Lowokwaru <br> menerangkan dengan sebenarnya bahwa: :
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo $nama; ?></td>
                            </tr>
                            <tr>
                                <td>Nomor KK</td>
                                <td>:</td>
                                <td><?php echo $nomorkk; ?></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?php echo $nik; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php echo $jk; ?></td>
                            </tr>
                            <tr>
                                <td>Tempat dan Tgl.Lahir</td>
                                <td>:</td>
                                <td><?php echo $tempat . ", " . $format2; ?></td>
                            </tr>
                            <tr>
                                <td>Kebangsaan/Suku</td>
                                <td>:</td>
                                <td><?php echo $kebangsaan; ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?php echo $agama; ?></td>
                            </tr>
                            <tr>
                                <td>Status Perkawinan</td>
                                <td>:</td>
                                <td><?php echo $status_perkawinan; ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?php echo $pekerjaan; ?></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $alamat; ?></td>
                            </tr>
                            <tr>
                                <td>Pindah Nikah Ke</td>
                                <td>:</td>
                                <td><?php echo $pindahke; ?></td>
                            </tr>
                            <tr>
                                <td>Kelurahan/Desa</td>
                                <td>:</td>
                                <td><?php echo $kelurahan; ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>:</td>
                                <td><?php echo $kecamatan; ?></td>
                            </tr>
                            <tr>
                                <td>Kab/Kota</td>
                                <td>:</td>
                                <td><?php echo $kab_kota; ?></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>:</td>
                                <td><?php echo $provinsi; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Nikah</td>
                                <td>:</td>
                                <td><?php echo $format5; ?></td>
                            </tr>


                            <tr>
                                <td>Berdasarkan Pengantar RT/RW</td>

                                <td>:</td>
                                <br>

                                <td><?php echo $berdasarkan; ?></td>

                            </tr>

                        </table>
                        <tr>
                            <table border="0" align="center">
                                <td>
                                    1. Yang bersangkutan benar-benar penduduk Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang.<br>
                                    2. Selama ini dikenal berkelakuan baik dan tidak pernah terlibat kriminal.
                                </td>
                        </tr>
                    </table>
                    <br>
                    <table border="0" align="center">

                        </tr>
                        <tr>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian untuk menjadikan periksa dan dipergunakan seperlunya. <br><br>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <th></th>
                            <th width="100px"></th>
                            <th>Malang, <?php echo $format4; ?></th>
                        </tr>
                        <tr>

                            <td> </td>
                            <td></td>
                            <td>Lurah Tlogomas</td>

                        </tr>
                        <tr>
                            <td rowspan="15"></td>
                            <td></td>
                            <td rowspan="15"></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                            <td></td>
                            <td><b><u>(ANDI AISYAH MUHSIN,STP,M.Si)</u></b></td>
                        </tr>
                    </table>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>