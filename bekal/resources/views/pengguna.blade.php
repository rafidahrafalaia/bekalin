@extends('masterku')

@section('content')
	
<h3><i class="fa fa-angle-right"></i> List User</h3>
<div class="row mb">
	<!-- page start-->
	<div class="content-panel">
		<div class="adv-table">
			<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
			    <thead>
					<tr>
						<th>NAMA</th>
						<th>NO KTP</th>
						<th>NO REK</th>
						<th>ALAMAT</th>
						<th>PEKERJAAN</th>
						<th>EMAIL</th>
						<th>ACTION</th>			
					</tr>
				</thead>
				<tbody>
					@foreach($pengguna as $peng)
					<tr>
						<td style="vertical-align: middle;">{{$peng->name}}</td>
						<td style="vertical-align: middle;">{{$peng->no_ktp}}</td>
						<td style="vertical-align: middle;">{{$peng->no_rek}}</td>
						<td style="vertical-align: middle;">{{$peng->alamat}}</td>
						<td style="vertical-align: middle;">{{$peng->pekerjaan}}</td>
						<td style="text-align: center; vertical-align: middle;">{{$peng->email}}</td>
						<td><a href="/pengguna2/{{ $peng->id }}" class="btn btn-sm btn-block btn-warning mb-1" ><i class="fas fa-unlock-alt"></i> &nbsp Akses</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
