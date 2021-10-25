@extends('ahligizi.master')

@section('content')

<h3><i class="fa fa-angle-right"></i> Histori Pesanan</h3>
<div class="row mb">
	<!-- page start-->
	<div class="content-panel">
		<div class="adv-table">
			<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
			    <thead>
					<tr>
						<th>NAMA ANAK</th>
						<th>ALAMAT SEKOLAH</th>
						<th>NAMA SEKOLAH</th>
						<th>KELAS</th>
						<th>JENIS KELAMIN</th>
						<th>TANGGAL LAHIR</th>
						<th>BERAT BADAN</th>										
						<th>TINGGI BADAN</th>
						<th>ALERGI</th>
					</tr>
				</thead>
				<tbody>
					@foreach($anak as $pes)
					<tr>				
						<td style="vertical-align: middle;">{{$pes->nama_anak}}</td>
						<td style="vertical-align: middle;">{{$pes->alamat_sekolah}}</td>
						<td style="vertical-align: middle;">{{$pes->nama_sekolah}}</td>
						<td style="vertical-align: middle;">{{$pes->kelas}}</td>
						<td style="vertical-align: middle;">{{$pes->jenis_kelamin}}</td>
						<td style="vertical-align: middle;">{{$pes->tanggal_lahir}}</td>
						<td style="vertical-align: middle;">{{$pes->bb}}</td>
						<td style="vertical-align: middle;">{{$pes->tb}}</td>
						<td style="vertical-align: middle;">{{$pes->alergi}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
