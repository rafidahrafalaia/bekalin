@extends('masterku')

@section('content')
	
<h3><i class="fa fa-angle-right"></i> Pesanan Selesai</h3>
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
						<th>KURIR</th>
						<th>TANGGAL</th>
						<th>PUKUL</th>										
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pesanan as $peng)
					<tr>
						<td style="vertical-align: middle;">{{$peng->penerima}}</td>
						<td style="vertical-align: middle;">{{$peng->no_hp}}</td>
						<td style="vertical-align: middle;">{{$peng->alamat}}</td>
						<td style="vertical-align: middle; ">{{$peng->ket_pesanan}}</td>
						<td style="vertical-align: middle;background-color: #FFCECE; ">{{$peng->kurir}}</td>
						<td style="vertical-align: middle;background-color: #FFCECE; ">{{$peng->tanggal}}</td>
						<td style="vertical-align: middle;background-color: #FFCECE;">{{$peng->pukul}}</td> 
						{{-- <td><a href="/tambahperforma/{{Auth::user()->id }}/{{$peng->no_hp}}" style="font-size: 12px;"    ><button  class="btn btn-success btn-lg" id="coba" onclick="disablebutton()" > Oke</button> </a></td> --}}
						<td><a href="/tambahperforma/{{ $peng->hapus }}" class="btn btn-success btn-lg" style="font-size: 12px;"  >Ok</a></td>
						{{-- <td>
							<form action="{{url('/tambahperforma/'.$peng->hapus)}}" method="POST">
								{{ csrf_field() }}
                                <input type="hidden" name="no_hp" value="{{$peng->no_hp}}">
                                <button type="submit" class="btn btn-success btn-lg" ">Ok</button>
                            </form>   									
                        </td> --}}
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
    </div>
</div>
  
@endsection

<script type="text/javascript">
	function disablebutton() {
    	document.getElementById("coba").disabled = true;
	}
</script>
