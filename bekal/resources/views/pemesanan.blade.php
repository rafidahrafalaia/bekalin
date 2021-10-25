@extends('masterku')

@section('content')
	
<h3><i class="fa fa-angle-right"></i> List Pesanan</h3>
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
						<th>TOTAL</th>										
						<th>NO REKENING</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>	
					@foreach($pesanan as $pes)
					<tr>	
						<td style="vertical-align: middle;">{{$pes->penerima}}</td>
						<td style="vertical-align: middle;">{{$pes->no_hp}}</td>
						<td style="vertical-align: middle;">{{$pes->alamat}}</td>
						<td style="vertical-align: middle;">{{$pes->ket_pesanan}}</td>
						<td style="vertical-align: middle;">{{$pes->tanggal}}</td>
						<td style="vertical-align: middle;">{{$pes->pukul}}</td>
						<td style="vertical-align: middle;background-color: #FFCECE;">{{$pes->total}}</td>
						<td style="vertical-align: middle; background-color: #FFCECE;">{{$pes->no_rekening}}</td>
						<td><a href="/pengiriman/{{ $pes->id }}" class="btn btn-success btn-lg" style="font-size: 12px;"  >Verifikasi</a></td>
					</tr>				
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
 </div>
  
@endsection
