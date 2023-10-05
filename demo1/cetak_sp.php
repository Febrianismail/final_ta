<?php include '../konek.php'; ?>
<?php
if (isset($_GET['id_pernyataan'])) {
    $id = $_GET['id_pernyataan'];
    $sql = "SELECT * FROM t_pernyataan  WHERE id_pernyataan='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_pernyataan'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $nomorkk = $data['nomorkk'];
    $tempat = $data['tempat'];
    $tgl = $data['tgl_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $menyatakan = $data['menyatakan_bahwa'];
    $untuk = $data['untuk'];
    $jekel = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $pekerjaan = $data['pekerjaan'];
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
    <title>CETAK PERNYA</title>
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
                        <font size="4"><b>SURAT PERNYATAAN</b></font><br>
                        <hr style="margin:0px" color="black">
                        <span> </span>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <table border="0" align="center">
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini:
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
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $nik; ?></td>
            </tr>
            <tr>
                <td>Nomor KK</td>
                <td>:</td>
                <td><?php echo $nomorkk; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat; ?></td>
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


        </table>
        <tr>
            <table border="0" align="center">
                <td>
                    Dengan ini Menyatakan Bahwa :<?php echo $menyatakan; ?><br>
                    Surat Pernyataan ini dipergunakan untuk :<?php echo $untuk; ?>
                </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">

        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat pernyataan ini saya buat dengan sebenar-benarnya dan apabila dikemudian hari terdapat ketidakbenaran atas pernyataan ini, saya bersedia menerima segala konsekwensi hukum yang berlaku secara mandiri. Sesuai dengan Pasal 93 Undang-undang Nomor 23 Tahun 2006 tentang Administrasi Kependudukan "Setiap penduduk yang sengaja memalsukan surat dan/atau dokumen kepada instansi palaksana dalam melaporkan peristiwa kependudukan dan peristiwa kependudukan dan peristiwa penting dipidana penjara paling lama 6 (enam tahun) dan/atau denda paling banyak Rp. 50.000.000,00 (lima puluh juta rupiah)". <br>Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan dalam keadaan sadar
                dan tanpa ada paksaan dari pihak manapun agar dapat dipergunakan sebagaimana mestinya
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
        <tr>

            <td> </td>
            <td></td>
            <td>Materai 1000</td>

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
            <td><b><u>(<?php echo $nama; ?>)</u></b></td>
        </tr>
    </table>






</body>

</html>
<script>
    window.print();
</script>