<html>
<head>
	<title>Laporan Pengaduan Masyarakat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pengaduan</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>NIK</th>
				<th>Isi Laporan</th>
				<th>Foto</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pengaduans as $pengaduan)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{$pengaduan->tanggal}}</td>
				<td>{{$pengaduan->nik}}</td>
				<td>{{$pengaduan->isi_laporan}}</td>
				<td><img style="width:150px" src="{{ asset('/images/pengaduan/' . $pengaduan->foto) }}" alt=""></td>
			</tr>
			@endforeach
		</tbody>
	</table>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>
