<link rel="icon" type="image/png" href="{{ asset('assets') }}/foto/logo_atip.png"/>
<title>Data Laporan Perbulan</title>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="assets/js/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<style type="text/css">
h1{font-family:Arial, Helvetica, sans-serif;}
table{font-size:12px}
td{line-height:20px;}
p{display:inline;}
</style>
</head>

<body onload="print();">

<div id="center_col" style="font-size:10px;width:100% ">
	<table cellpadding="0" cellspacing="0" width="100%" >
	<tr>
	<td valign="top">
	<div style="text-align:center;font-family:Arial, Helvetica, sans-serif;line-height:26px;padding-top:0px;height:90px;">
	<span style="font-size:18px;font-weight:bold;"><br>DATA LAPORAN PERBULAN</span>
	</div>


	<table width="100%" class="tabel_t4" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th class="t4_title" align="center" width="100">No</th>
		<th class="t4_title" align="center" width="100">No. Laporan</th>
		<th class="t4_title" align="center" width="100">Jenis</th>
		<th class="t4_title" align="center" width="100">Tipe</th>
		<th class="t4_title" align="center" width="100">Tanggal</th>
		<th class="t4_title" align="center" width="200">Lokasi</th>
        <th class="t4_title" align="center" width="200">Nama Pelapor</th>
        <th class="t4_title" align="center" width="200">Teknisi</th>
        <th class="t4_title" align="center" width="200">Kegiatan Perbaikan</th>
        <th class="t4_title" align="center" width="200">Pihak Terlibat</th>
        <th class="t4_title" align="center" width="200">Biaya</th>
        <th class="t4_title" align="center" width="200">Foto</th>
	</tr>

	</thead>
	<tbody align="center">
    @php
        $no = 1;
        $nourut = 1;
    @endphp
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ date('Y.m.d', strtotime($laporans->tanggal))}}.00{{ $nourut++ }}</td>
                <td>{{ $laporans->type }}</td>
                <td>{{ $laporans->jenis }}</td>
                <td>{{ date('d-m-Y', strtotime($laporans->tanggal)) }}</td>
                <td>{{ $laporans->lokasi }}</td>
                <td>{{ $laporans->nama_pelapor }}</td>
                <td>{{ $laporans->nama_teknisi }}</td>
                <td>{{ $laporans->kegiatan_perbaikan }}</td>
                <td>{{ $laporans->pihak_terlibat }}</td>
                <td>Rp. {{ number_format($laporans->biaya, 0, ',', '.') }}</td>
                <td><img src="{{ asset($laporans->foto)}}" width="50px" height="50px"></a></td>
            </tr>
	</tbody>
	</table>


	</div>
	</td>
	</tr>
	</table>

</div>

			<style type="text/css">
			.tabel{
				font-family: Verdana;
				font-size: 10px;
			}
			.tabel_t4{
				border-collapse: collapse;


			}
			.tabel_t4 td{
				font-family: Verdana;
				font-size: 10px;

				border:1px solid #CCCCCC;
				padding: 4px;
			}
			.tabel_t4 th{
				font-family: Verdana;
				font-size: 10px;
				border:1px solid #CCCCCC;

				padding: 10px;
				font-weight:bold;
			}
			.zt4_title{
				border-collapse:separate;
				border-bottom:4px solid #FFFFFF;
				font-weight:bold;
			}
			a{color:#0066FF;text-decoration:underline}
			</style>
</body>
</html>
