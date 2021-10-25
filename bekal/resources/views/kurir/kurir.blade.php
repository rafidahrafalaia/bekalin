@extends('kurir.master')

@section('content')

<h3><i class="fa fa-angle-right"></i> List Order</h3>
<div class="row mb">
	<!-- page start-->
	<div class="content-panel">
		<div class="adv-table">
			<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
			    <thead>
					<tr>
						<th>PENERIMA</th>
						<th>NO HP</th>
						<th>ALAMAT</th>
						<th>PESANAN</th>
						<th>TANGGAL</th>
						<th>PUKUL</th>										
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pengiriman as $peng)
					<tr>
						<td style="vertical-align: middle;">{{$peng->penerima}}</td>
						<td style="vertical-align: middle;">{{$peng->no_hp}}</td>
						<td style="vertical-align: middle;">{{$peng->alamat}}</td>
						<td style="vertical-align: middle; ">{{$peng->ket_pesanan}}</td>
						<td style="vertical-align: middle;background-color: #FFCECE; ">{{$peng->tanggal}}</td>
						<td style="vertical-align: middle;background-color: #FFCECE;">{{$peng->pukul}}</td>
						<td><a href="/pengirimanfix/{{ $peng->id }}" class="btn btn-danger btn-lg" style="font-size: 12px;"  >Ambil Order</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
