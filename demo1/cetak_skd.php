<?php include '../konek.php'; ?>
<?php
if (isset($_GET['id_skdu'])) {
    $id = $_GET['id_skdu'];
    $sql = "SELECT * FROM t_skdu WHERE id_skdu='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat'];
    $tgl = $data['tgl_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('d', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jk'];
    $nama_usaha = $data['nama_usaha'];
    $alamat = $data['alamat'];
    $pekerjaan = $data['pekerjaan'];
    $kelurahan = $data['kelurahan'];
    $kecamatan = $data['kecamatan'];
    $kota = $data['kota'];
    $keterangan = $data['keterangan'];
    $surat_keterangan = $data['surat_keterangan'];
    $bidang_surat = $data['bidang_surat'];
    $nomorsurat = $data['nomer_surat'];
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
    <title>CETAK SKD</title>
</head>

<body>

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
                    <font size="4"><b>SURAT KETERANGAN DOMISILI USAHA </b></font><br>
                    <hr style="margin:0px" color="black">
                    <span>Nomor : 563 / <?php echo $id; ?> / 35.73.05.1003/<?php echo $format1; ?></span>
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
            <td>TTL</td>
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
            <td>Kelurahan</td>
            <td>:</td>
            <td><?php echo $kelurahan; ?></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><?php echo $kecamatan; ?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><?php echo $kota; ?></td>
        </tr>
        <tr>
            <td>Nama Usaha</td>
            <td>:</td>
            <td><?php echo $nama_usaha; ?></td>
        </tr>


    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa berdasarkan Surat Keterangan RT/RW Nomor : <?php echo $nomorsurat; ?> / 35.73.05.1003/2023, tanggal <?php echo $format1; ?> Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang, orang tersebut di atas benar-benar mempunyai Usaha <?php echo $nama_usaha ?> yang bergerak di Bidang <?php echo $bidang_surat ?> yang saat ini berdomisili di <?php echo $alamat ?> Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang.<br>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Surat keterangan tersebut akan dipergunakan untuk <?php echo $surat_keterangan ?> Surat keterangan ini berlaku 6 (enam) bulan terhitung sejak surat dikeluarkan.<br><br>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="right">
        <tr>
            <th></th>
            <th width="100px"></th>
            <th>Malang, <?php echo $format4; ?></th>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
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
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>

            <td></td>
            <td></td>
            <td><b><u>(ANDI AISYAH MUHSIN,STP,M.Si)</u></b></td>
        </tr>
    </table>




</body>

</html>
<script>
    window.print();
</script>