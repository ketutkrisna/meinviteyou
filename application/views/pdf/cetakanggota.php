<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>sttkertasari</title>
  <style>
  </style>
</head>
<body>
	<div style="text-align:center;margin-bottom:20px">
	<span style="text-align:center;font-size:30px;font-weight:bold;">STT Kertasari</span><br>
	<span style="text-align:center;padding:0!important;top:-20px">(Pemuda & Pemudi Jalur 3 Mulyasari)</span>
	</div>
	<span>Aktif : <?=$countaktif['aktif']; ?> orang</span><br>
	<span>Non aktif : <?=$countnonaktif['nonaktif']; ?> orang</span><br>
		<div style="text-align:left;display: block;">Total anggota : <?=$countaktif['aktif']+$countnonaktif['nonaktif']; ?> orang</div>
		<div style="text-align:right;display: block;">Dicetak : <?=date('d F Y'); ?></div>
	<table border="1" cellpadding="10" cellspacing="0" width="100%" style="margin:auto;">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Jenis kelamin</th>
				<th>Jabatan</th>
				<th>Status</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
	<?php $no=1; foreach($cetakanggota as $ca): ?>
			<tr>
				<td><?=$no++; ?></td>
				<td><?=$ca['nama_anggota']; ?></td>
				<td><?=$ca['kelamin_anggota']; ?></td>
				<td><?=$ca['jabatan_anggota']; ?></td>
				<td><?=$ca['status_anggota']; ?></td>
				<td><?=$ca['alamat_anggota']; ?></td>
			</tr>
	<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>