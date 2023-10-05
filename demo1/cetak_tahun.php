<?php
include '../konek.php';
?>
<!-- Fonts and icons -->
<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: ['../assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/atlantis.min.css">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="../assets/css/demo.css">
<?php
if (isset($_GET['tahun'])) {
    $tahun = $_GET['tahun'];
    $sql = "SELECT
		data_user.nik,
		data_user.nama,
		t_sktm.acc,
        t_sktm.tanggal_request,
		t_sktm.keperluan,
		t_sktm.request
	FROM
		data_user
	INNER JOIN t_sktm ON t_sktm.nik = data_user.nik
	WHERE year(t_sktm.acc) = '$tahun'
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_skdu.acc,
        t_skdu.tanggal_request,
		t_skdu.keperluan,
		t_skdu.request
	FROM
		data_user
	INNER JOIN t_skdu ON t_skdu.nik = data_user.nik
	WHERE year(t_skdu.acc) = '$tahun'
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_sku.acc,
        t_sku.tanggal_request,
		t_sku.keperluan,
		t_sku.request
	FROM
		data_user
	INNER JOIN t_sku ON t_sku.nik = data_user.nik
	WHERE year(t_sku.acc) = '$tahun'
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_skck.acc,
        t_skck.tanggal_request,
		t_skck.keperluan,
		t_skck.request
	FROM
		data_user
	INNER JOIN t_skck ON t_skck.nik = data_user.nik
	WHERE year(t_skck.acc) = '$tahun'
    UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_keramaian.acc,
        t_keramaian.tanggal_request,
		t_keramaian.keperluan,
		t_keramaian.request
	FROM
		data_user
	INNER JOIN t_keramaian ON t_keramaian.nik = data_user.nik
	WHERE year(t_keramaian.acc) = '$tahun'
    UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_pernyataan.acc,
        t_pernyataan.tanggal_request,
		t_pernyataan.keperluan,
		t_pernyataan.request
	FROM
		data_user
	INNER JOIN t_pernyataan ON t_pernyataan.nik = data_user.nik
	WHERE year(t_pernyataan.acc) = '$tahun'
    UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_blm_nikah.acc,
        t_blm_nikah.tanggal_request,
		t_blm_nikah.keperluan,
		t_blm_nikah.request
	FROM
		data_user
	INNER JOIN t_blm_nikah ON t_blm_nikah.nik = data_user.nik
	WHERE year(t_blm_nikah.acc) = '$tahun'
    UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_pindah_nikah.acc,
        t_pindah_nikah.tanggal_request,
		t_pindah_nikah.keperluan,
		t_pindah_nikah.request
	FROM
		data_user
	INNER JOIN t_pindah_nikah ON t_pindah_nikah.nik = data_user.nik
	WHERE year(t_pindah_nikah.acc) = '$tahun'
    ";

    // if($bln=="1"){
    //     $bln="JANUARI";
    // }elseif($bln=="2"){
    //     $bln="FEBRUARI";
    // }elseif($bln=="3"){
    //     $bln="MARET";
    // }elseif($bln=="4"){
    //     $bln="APRIL";
    // }elseif($bln=="5"){
    //     $bln="MEI";
    // }elseif($bln=="6"){
    //     $bln="JUNI";
    // }elseif($bln=="7"){
    //     $bln="JULI";
    // }elseif($bln=="8"){
    //     $bln="AGUSTUS";
    // }elseif($bln=="9"){
    //     $bln="SEPTEMBER";
    // }elseif($bln=="10"){
    //     $bln="OKTOBER";
    // }elseif($bln=="11"){
    //     $bln="NOVEMBER";
    // }elseif($bln=="12"){
    //     $bln="DESEMBER";
    // }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CETAK TAHUN</title>
    </head>

    <body>
        <table border="0" align="center">
            <tr>
                <td><img src="img/tlogomas.png" width="70" height="87" alt=""></td>
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
                        <font size="4"><b>LAPORAN REQUEST SURAT KETERANGAN</b></font><br>
                        <font size="4"><b>KELURAHAN TLOGOMAS</b></font><br>
                        <font size="4"><b>TAHUN <?php echo $tahun; ?></b></font><br>
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
        <center>
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Tanggal Request</th>
                    <th>Tanggal ACC</th>
                    <th>Nama</th>
                    <th>Keperluan</th>
                    <th>Request</th>
                </tr>
                <?php
                $no = 0;
                $query = mysqli_query($konek, $sql);
                while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                    $no++;
                    // $nik = $data['nik'];
                    $nama = $data['nama'];
                    $tanggal = $data['acc'];
                    $format1 = date('d F Y', strtotime($tanggal));
                    $keperluan = $data['keperluan'];
                    $request = $data['request'];
                    $tglreq = $data['tanggal_request'];
                    $req = date('d F Y', strtotime($tglreq));
                ?>
                    <tbody>
                        <tr>
                            <th><?php echo $no; ?></th>
                            <td><?php echo $req; ?></td>
                            <td><?php echo $format1; ?></td>
                            <!-- <td><?php echo $nik; ?></td> -->
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $keperluan; ?></td>
                            <td><?php echo $request; ?></td>
                        </tr>
                    </tbody>
            <?php
                }
            }
            ?>
            </table>
        </center>


        <br>
        <br>
        <table border='0' align="right">
            <tr>
                <td style="text-align: center"><b>Malang, <?php echo date('d F Y'); ?></b></td>
            </tr>
        </table>
        <br><br><br><br><br>
        <table border='0' align="right">
            <tr>
                <td style="text-align: center"><b>Lurah Tlogomas</b></td>
            </tr>
            <tr>
                <td style="text-align: center"><b>(ANDI AISYAH MUHSIN,STP,M.Si)</b></td>
            </tr>
        </table>
    </body>

    </html>
    <script>
        window.print();
    </script>