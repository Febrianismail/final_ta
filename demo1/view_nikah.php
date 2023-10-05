<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_nikah'])) {
    $id = $_GET['id_nikah'];
    $sql = "SELECT * FROM t_nikah  WHERE id_nikah='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_nikah'];
    $nik = $data['nik_nikah'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tgl_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jenis_kelamin'];
    $kewarganegaraan = $data['kewarganegaraan'];
    $alamat = $data['alamat'];
    $pekerjaan = $data['pekerjaan'];

    $status_pernikahan_laki = $data['status_pernikahan_laki'];
    $status_pernikahan_perempuan = $data['status_pernikahan_perempuan'];
    $nama_istri_suami_terdahulu = $data['nama_istri_suami_terdahulu'];
    $nama_lengkap_pria = $data['nama_lengkap_pria'];
    $nik_pria = $data['nik_pria'];
    $tempat_lahir_pria = $data['tempat_lahir_pria'];
    $kewarganegaraan_pria = $data['kewarganegaraan_pria'];
    $agama_pria = $data['agama_pria'];
    $pekerjaan_pria = $data['pekerjaan_pria'];
    $alamat_pria = $data['alamat_pria'];
    $tgl_lahir_pria = $data['tgl_lahir_pria'];
    $format6 = date('d-m-Y', strtotime($tgl_lahir_pria));
    $nama_lengkap_wanita = $data['nama_wanita'];
    $nik_wanita = $data['nik_wanita'];
    $tempat_lahir_wanita = $data['tempat_wanita'];
    $kewarganegaraan_wanita = $data['kewarganegaraan_wanita'];
    $agama_wanita = $data['agama_wanita'];
    $pekerjaan_wanita = $data['pekerjaan_wanita'];
    $alamat_wanita = $data['alamat_wanita'];
    $tgl_lahir_wanita = $data['tgl_lahir_wanita'];
    $format7 = date('d-m-Y', strtotime($tgl_lahir_wanita));



    $request = $data['request'];



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
                            $update = mysqli_query($konek, "UPDATE t_nikah SET acc='$tgl', status=2, keterangan='$ket' WHERE id_nikah=$id");
                            if ($update) {
                                echo "<script language='javascript'>swal('Selamat...', 'ACC Sekertaris Berhasil', 'success');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_nikah">';
                            } else {
                                echo "<script language='javascript'>swal('Gagal...', 'ACC Sekertaris Gagal', 'error');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_nikah">';
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
                        <tr>

                            <font size="1">LAMPIRAN V </font><br>
                            <font size="1"> KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM NOMOR 473 TAHUN 2020 <br> TENTANG PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN
                            </font>
                        </tr>
                        <table border="0" align="center">
                            <tr>
                                <td></td>
                                <td>
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
                                <td>
                                    <center>
                                        <font size="2">FORMULIR PENGANTAR NIKAH</font><br>
                                        <font size="2">KECAMATAN LOWOKWARU</font><br>
                                        <font size="2">KELURAHAN TLOGOMAS</font><br>
                                        <font size="2">KOTA MALANG</font><br>

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

                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    <center>
                                        <font size="4"><b>PENGANTAR NIKAH </b></font><br>
                                        <hr style="margin:0px" color="black">
                                        <span>Nomor : </span>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">

                            <tr>

                                <td>Nama</td>
                                <td>: <?php echo $nama; ?></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>Nomor Induk Kependudukan (NIK)</td>
                                <td>: <?php echo $nik; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: <?php echo $jekel; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tempat dan tanggal lahir</td>
                                <td>: <?php echo $tempat . ", " . $format2; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td>: <?php echo $kewarganegaraan; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>: <?php echo $agama; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>: <?php echo $pekerjaan; ?></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td>: <?php echo $alamat; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Status Pernikahan <br>a. Laki-laki : Jejaka, Duda, atau beristri ke <br>b. Perempuan : Perawan, Janda</td>

                                <td><br>: <?php echo $status_pernikahan_laki; ?> <br>: <?php echo $status_pernikahan_perempuan; ?></td>

                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nama Istri/Suami terdahulu</td>
                                <td>: <?php echo $nama_istri_suami_terdahulu; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>adalah benar anak dari pernikahan seorang pria</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>nama lengkap dan alias</td>
                                <td>: <?php echo $nama_lengkap_pria; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>nomor induk Kependudukan</td>
                                <td>:<?php echo $nik_pria; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>tempat dan tanggal lahir</td>
                                <td>:<?php echo $tempat_lahir_pria . ", " . $format6; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>kewarganegaraan</td>
                                <td>:<?php echo  $kewarganegaraan_pria; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>agama</td>
                                <td>: <?php echo  $agama_pria; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>pekerjaan</td>
                                <td>:<?php echo  $pekerjaan_pria; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>alamat</td>
                                <td>:<?php echo  $alamat_pria; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>dengan seorang wanita</td>

                                <td></td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td>Nama lengkap dan alias</td>
                                <td>: <?php echo  $nama_lengkap_wanita; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>nomor induk Kependudukan</td>
                                <td>: <?php echo  $nik_wanita; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>tempat dan tanggal lahir</td>
                                <td>: <?php echo $tempat_lahir_wanita . ", " . $format7; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>kewarganegaraan</td>
                                <td>: <?php echo $kewarganegaraan_wanita; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>agama</td>
                                <td>: <?php echo $agama_wanita; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>pekerjaan</td>
                                <td>:<?php echo $pekerjaan_wanita; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>alamat</td>
                                <td>:<?php echo $alamat_wanita; ?></td>
                                <td></td>
                            </tr>

                        </table>

                        <br>
                        <table border="0" align="center">

                            </tr>
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;Demikian surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk dapat dipergunakan sebagaimana

                                    mestinya.
                                    <br>
                                </td>
                            </tr>
                        </table>
                        <br>

                        <table border="0" align="right">
                            <tr>
                                <th></th>
                                <th width="100px"></th>
                                <th align="center">MALANG,</th>
                            </tr>
                            <tr>
                                <td> </td>
                                <td></td>
                                <td align="center">LURAH TLOGOMAS</td>
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
                                <td></td>
                                <td><b><u>ANDI AISYAH MUHSIN, S.STP, M.Si </u><br> Pembina <br> NIP. 197807051998102001 </b></td>
                            </tr>
                        </table>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>