<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_sktm'])) {
    $id = $_GET['id_sktm'];
    $sql = "SELECT * FROM t_sktm  WHERE id_sktm='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_sktm'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $nomorkk = $data['nomorkk'];
    $tempat = $data['tempat'];
    $tgl = $data['tgl_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jk'];
    $alamat = $data['alamat'];
    $surat_perkawinan = $data['status_perkawinan'];
    $pekerjaan = $data['pekerjaan'];
    $keperluan = $data['keperluan'];
    $pendidikan = $data['pendidikan'];
    $tujuan = $data['tujuan'];
    $berdasarkan_keterangan = $data['berdasarkan_keterangan'];
    $request = $data['request'];


    $berlaku_tgl = $data['berlaku_tgl'];
    $format5 = date('d F Y', strtotime($berlaku_tgl));

    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($acc == 0) {
        $acc = "BELUM TTD";
    } elseif ($acc == 1) {
        $acc;
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
                                <input type="date" name="tgl_acc" class="form-control">
                                <div class="form-group">
                                    <input type="submit" name="ttd" value="ACC" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {
                            $ket = "Surat sedang dalam proses cetak";
                            $tgl = $_POST['tgl_acc'];
                            $update = mysqli_query($konek, "UPDATE t_sktm SET acc='$tgl', status=2, keterangan='$ket' WHERE id_sktm=$id");
                            if ($update) {
                                echo "<script language='javascript'>swal('Selamat...', 'ACC Sekertaris Berhasil', 'success');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sktm">';
                            } else {
                                echo "<script language='javascript'>swal('Gagal...', 'ACC Sekertaris Gagal', 'error');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_sktm">';
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
                                        <font size="4"><b>SURAT KETERANGAN TIDAK MAMPU </b></font><br>
                                        <hr style="margin:0px" color="black">
                                        <span>Nomor : </span>
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
                                <td>Tempat Tgl Lahir</td>
                                <td>:</td>
                                <td><?php echo $tempat . ", " . $format2; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php echo $jekel; ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?php echo $agama; ?></td>
                            </tr>
                            <tr>
                                <td>Status Perkawinan</td>
                                <td>:</td>
                                <td><?php echo $surat_perkawinan; ?></td>
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
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td><?php echo $pendidikan; ?></td>
                            </tr>
                            <tr>
                                <td>Keperluan</td>
                                <td>:</td>
                                <td><?php echo $keperluan; ?></td>
                            </tr>
                            <tr>
                                <td>Tujuan</td>
                                <td>:</td>
                                <td><?php echo $tujuan; ?></td>
                            </tr>
                            <tr>
                                <td>Berlaku Tanggal</td>
                                <td>:</td>
                                <td><?php echo $format5; ?></td>
                            </tr>
                            <tr>
                                <td>Berdasarkan Keterangan RT/RW</td>
                                <td>:</td>
                                <td><?php echo $berdasarkan_keterangan; ?></td>
                            </tr>


                        </table>

                        <table border="0" align="center">
                            <td>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Yang bersangkutan benar-benar penduduk Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Berdasarkan Keterangan RT/RW setempat di atas serta pernyataan pemohon, yang bersangkutan tergolong orang yang tidak mampu / miskin. </td>

                                </tr>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian untuk menjadikan periksa dan dipergunakan seperlunya
                                </td>
                            </tr>
                        </table>

                        <table border="0" align="right">
                            <tr>
                                <th></th>
                                <th width="100px"></th>
                                <th>Malang, </th>
                            </tr>
                            <tr>

                                <td> </td>
                                <td></td>
                                <td>LURAH TLOGOMAS</td>

                            </tr>
                            <tr>
                                <td rowspan="10"></td>
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