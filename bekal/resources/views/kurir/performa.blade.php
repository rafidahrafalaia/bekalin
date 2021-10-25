@extends('masterku')

@section('content')
	
<h3><i class="fa fa-angle-right"></i> Performa Kurir</h3>
<div class="row mb">
	<!-- page start-->
	<div class="content-panel">
		<div class="adv-table">
			<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
			    <thead>
					<tr>
						<th>NAMA KURIR</th>
						<th>EMAIL KURIR</th>
						<th>JUMLAH ANTAR</th>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $user)
					<tr>
						<td style="vertical-align: middle;">{{$user->name}}</td>
						<td style="vertical-align: middle;">{{$user->email}}</td>
						<td style="vertical-align: middle; background-color: #FFCECE;">{{$user->jumlahantar}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
    </div> 
</div>

@endsection
