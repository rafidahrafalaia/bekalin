@extends('layouts.dash')

@section('content')

@include('layouts.nav')

<div class="w3_testimonials_grids">
    <div class="callbacks_container form-w3l-agil3">
        <div class="book-form profil-set">
            <p>Edit Profil Anak</p>
            @foreach ($anak as $anak) @endforeach
                <form action="{{url('/settingProfilAnak/'.$anak->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-time-w3layouts">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Nama Anak :</label>
                        <input type="text" id="nama_orang_tua"" name="name" value="{{$anak->nama_anak}}" required=""> 
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Alamat Sekolah :</label>
                        <input  id="text" name="alamat_sekolah" type="text" value="{{$anak->alamat_sekolah}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Nama Sekolah :</label>
                        <input  id="no_rek" name="nama_sekolah" type="text" value="{{$anak->nama_sekolah}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Kelas :</label>
                        <input  id="alamat" name="kelas" type="text" value="{{$anak->kelas}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Jenis Kelamin :</label>
                        <input  id="pekerjaan" name="jenis_kelamin" type="text" value="{{$anak->jenis_kelamin}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Tanggal Lahir :</label>
                        <input  id="email" name="tgl_lahir" type="text" value="{{$anak->tgl_lahir}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Berat Badan :</label>
                        <input  id="foto" name="bb" type="text" value="{{$anak->bb}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Tinggi Badan :</label>
                        <input  id="foto" name="tb" type="text" value="{{$anak->tb}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Alergi :</label>
                        <input  id="foto" name="alergi" type="text" value="{{$anak->alergi}}" required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label for="exampleInputFile"><i class="fa fa-smile-o" aria-hidden="true"></i> Foto : &nbsp</label>
                        <input type="file" id="exampleInputFile" name="foto">
                        <p class="help-block"></p>
                    </div>
                    <div class="form-left-agileits-submit">
                        <input type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
