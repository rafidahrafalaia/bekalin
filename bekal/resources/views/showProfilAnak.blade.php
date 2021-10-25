@extends('layouts.dash')

@section('content')

@include('layouts.nav')

<div class="col-md-3 callbacks_container form-w3l-agil3">
    <div class="read-form">
        <form action="{{url('/tambahAnak')}}" method="get">
            <div class="form-left-agileits-submit">
                <input type="submit" value="+ Data Anak">
            </div>
        </form>                      
    </div>
</div>

<div class="w3_testimonials_grids">
    @foreach($anak as $listanak)
    <div class="col-md-12 callbacks_container form-w3l-agil3">
        <div class="box box-primary" style="border-color: #eb422a; border-width: 5px;">
            <div class="box-body box-profile">
                <h3 class="profile-username text-center">{{$listanak->nama_anak}}</h3>
                <p class="text-muted text-center">{{$listanak->alamat_sekolah}}</p>
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Nama Sekolah</b> <a class="pull-right" style="color: white;">{{$listanak->nama_sekolah}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Kelas</b> <a class="pull-right"style="color: white;">{{$listanak->kelas}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Jenis Kelamin</b> <a class="pull-right" style="color: white;">{{$listanak->jenis_kelamin}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Tanggal Lahir</b> <a class="pull-right" style="color: white;">{{$listanak->tgl_lahir}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Berat Badan</b> <a class="pull-right" style="color: white;">{{$listanak->bb}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Tinggi Badan</b> <a class="pull-right" style="color: white;">{{$listanak->tb}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Alergi</b> <a class="pull-right" style="color: white;">{{$listanak->alergi}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Foto</b> @if($listanak->foto)
                        <img src="{{asset('fotoupload/'. $listanak->foto)}}" alt=" " class="img-responsive w3-main-img" style="width: 100px;height: 100px;margin-left: 980px;" />@endif
                    </li>
                </ul>
                <div class="read-form">
                    <div class="col-md-3">
                        <form action="{{url('/settingProfilAnak/'.$listanak->id)}}" method="get">
                                <input type="submit" value="Edit">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="{{url('/hapusAnak/'.$listanak->id)}}" method="get">
                            <input type="submit" value="Hapus">            
                        </form>
                    </div>                
                </div>
            </div>
        </div>
    </div> 
    @endforeach
</div>

@endsection
