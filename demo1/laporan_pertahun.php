<?php

include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
?>
<?php
if (!isset($_POST['tampilkan'])) {
	$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$sql = "SELECT
		data_user.nik,
		data_user.nama,
		t_skdu.acc,
		t_skdu.keperluan,
		t_skdu.request
	FROM
		data_user
	INNER JOIN t_skdu ON t_skdu.nik = data_user.nik
	WHERE t_skdu.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_sku.acc,
		t_sku.keperluan,
		t_sku.request
	FROM
		data_user
	INNER JOIN t_sku ON t_sku.nik = data_user.nik
	WHERE t_sku.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_skck.acc,
		t_skck.keperluan,
		t_skck.request
	FROM
		data_user
	INNER JOIN t_skck ON t_skck.nik = data_user.nik
	WHERE t_skck.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_sktm.acc,
		t_sktm.keperluan,
		t_sktm.request
	FROM
		data_user
	INNER JOIN t_sktm ON t_sktm.nik = data_user.nik
	WHERE t_sktm.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_pernyataan.acc,
		t_pernyataan.keperluan,
		t_pernyataan.request
	FROM
		data_user
	INNER JOIN t_pernyataan ON t_pernyataan.nik = data_user.nik
	WHERE t_pernyataan.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_keramaian.acc,
		t_keramaian.keperluan,
		t_keramaian.request
	FROM
		data_user
	INNER JOIN t_keramaian ON t_keramaian.nik = data_user.nik
	WHERE t_keramaian.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_blm_nikah.acc,
		t_blm_nikah.keperluan,
		t_blm_nikah.request
	FROM
		data_user
	INNER JOIN t_blm_nikah ON t_blm_nikah.nik = data_user.nik
	WHERE t_blm_nikah.status = 3
	
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_pindah_nikah.acc,
		t_pindah_nikah.keperluan,
		t_pindah_nikah.request
	FROM
		data_user
	INNER JOIN t_pindah_nikah ON t_pindah_nikah.nik = data_user.nik
	WHERE t_pindah_nikah.status = 3
	";
	$query = mysqli_query($konek, $sql);
} elseif (isset($_POST['tampilkan'])) {
	$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$sql = "SELECT
		data_user.nik,
		data_user.nama,
		t_sktm.acc,
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
		t_pindah_nikah.acc,
		t_pindah_nikah.keperluan,
		t_pindah_nikah.request
	FROM
		data_user
	INNER JOIN t_pindah_nikah ON t_pindah_nikah.nik = data_user.nik
	WHERE year(t_pindah_nikah.acc) = '$tahun'
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		t_blm_nikah.acc,
		t_blm_nikah.keperluan,
		t_blm_nikah.request
	FROM
		data_user
	INNER JOIN t_blm_nikah ON t_blm_nikah.nik = data_user.nik
	WHERE year(t_blm_nikah.acc) = '$tahun'
	
	";
	$query = mysqli_query($konek, $sql);
}

?>

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">LAPORAN PERTAHUN REQUEST SURAT KETERANGAN</h2>
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
								<select name="tahun" class="form-control">
									<option value="">Pilih</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
								</select>
								<div class="form-group">
									<input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
									<a href="?halaman=laporan_pertahun">
										<input type="submit" value="Reload" class="btn btn-primary btn-sm">
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-tools">
						<a href="cetak_tahun.php?tahun=<?php echo $tahun; ?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
							<span class="btn-label">
								<i class="fa fa-print"></i>
							</span>
							Print
						</a>
					</div>
				</div>
				<div class="card-body">
					<table class="table mt-3">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Tanggal ACC</th>
								<th scope="col">Nama</th>
								<th scope="col">Nik</th>
								<th scope="col">Keperluan</th>
								<th scope="col">Request</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
								$no++;
								$nik = $data['nik'];
								$nama = $data['nama'];
								$tanggal = $data['acc'];
								$tgl = date('d F Y', strtotime($tanggal));
								$keperluan = $data['keperluan'];
								$request = $data['request'];
							?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $tgl; ?></td>
									<td><?php echo $nik; ?></td>
									<td><?php echo $nama; ?></td>
									<td><?php echo $keperluan; ?></td>
									<td><?php echo $request; ?></td>
								</tr>
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