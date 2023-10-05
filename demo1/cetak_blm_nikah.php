<?php include '../konek.php'; ?>
<?php
if (isset($_GET['id_blm_nikah'])) {
    $id = $_GET['id_blm_nikah'];
    $sql = "SELECT * FROM t_blm_nikah  WHERE id_blm_nikah='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_blm_nikah'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $nomorkk = $data['nomorkk'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tgl_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jk'];
    $status_perkawinan = $data['status_perkawinan'];
    $alamat = $data['alamat'];
    $pekerjaan = $data['pekerjaan'];
    $pendidikan = $data['pendidikan'];
    $keperluan = $data['keperluan'];
    $tujuan = $data['tujuan'];
    $rt = $data['berdasrkan_keterangan'];
    $berlaku_tgl = $data['berlaku_tgl'];
    $format5 = date('d F Y', strtotime($berlaku_tgl));


    $request = $data['request'];
    $status = $data['status'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SURAT IZIN blm</title>
</head>

<body>

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
                        <font size="4"><b>SURAT KETERANGAN BELUM MENIKAH </b></font><br>
                        <hr style="margin:0px" color="black">
                        <span>Nomor : 474/<?php echo $id; ?>/35.73.05.1003/<?php echo $format1; ?></span>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table border="0" align="center">
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Lurah Kelurahan Tlogomas Kecamatan Lowokwaru <br> menerangkan dengan sebenarnya bahwa:
                </td>
            </tr>
        </table>

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
                <td>Tempat dan Tgl.Lahir</td>
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
                <td>Berdasarkan KeteranganRT/RW</td>

                <td>:</td>
                <br>

                <td><?php echo $rt; ?></td>

            </tr>

        </table>
        <tr>
            <table border="0" align="center">
                <td>
                    1. Yang bersangkutan benar-benar penduduk Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang.<br>
                    2. Menurut keterangan yang bersangkutan serta berdasarkan basis data kependudukan, orang tersebut diatas benar-benar belum menikah (belum kawin).
                </td>
        </tr>
    </table>

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
            <th>MALANG, <?php echo $format4; ?></th>
        </tr>
        <tr>
            <td align="left"> Yang bersangkutan </td>
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
        </tr>
        <tr>
            <td align="left"><b style="text-transform:uppercase"><u>(<?php echo $nama; ?>)</u></b></td>
            <td></td>
            <td><b><u>(ANDI AISYAH MUHSIN, S.STP, M.Si)</b><br></u>Pembina<br>
                NIP. 197807051998102001</td>
            <td><b><u>

        </tr>
    </table>
    </table>





</body>

</html>
<script>
    window.print();
</script>