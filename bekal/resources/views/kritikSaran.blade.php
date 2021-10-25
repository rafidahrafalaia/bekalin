@extends('masterku')

@section('content')
  
<h3><i class="fa fa-angle-right"></i> Kritik dan Saran</h3>
<div class="row mb">
    <!-- page start-->
    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>KRITIK SARAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kritiksaran as $kritik)
                    <tr>
                        <td style="vertical-align: middle;">{{$kritik->nama}}</td>
                        <td style="vertical-align: middle;">{{$kritik->email}}</td>
                        <td style="vertical-align: middle;">{{$kritik->pesan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
  
@endsection
