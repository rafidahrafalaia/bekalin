@extends('layouts.dash')

@section('content')

@include('layouts.nav')

<div class="w3_testimonials_grids">
    <div class="callbacks_container form-w3l-agil3">
        <div class="book-form profil-set">
            <p>Edit Profil</p>
            <form action="{{ url('/settingProfilku') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-time-w3layouts">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Nama :</label>
                    <input type="text" id="nama_orang_tua"" name="name" value="{{Auth::user()->name}}" required=""> 
                </div>
                <div class="form-date-w3-agileits">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Email :</label>
                    <input  id="email" name="email" type="text" value="{{Auth::user()->email}}" required="">
                </div>
                <div class="form-date-w3-agileits">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> No KTP :</label>
                    <input  id="text" name="no_ktp" type="text" value="{{Auth::user()->no_ktp}}" required="">
                </div>
                <div class="form-date-w3-agileits">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> No Rekening :</label>
                    <input  id="no_rek" name="no_rek" type="text" value="{{Auth::user()->no_rek}}" required="">
                </div>
                <div class="form-date-w3-agileits">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Alamat :</label>
                    <input  id="alamat" name="alamat" type="text" value="{{Auth::user()->alamat}}" required="">
                </div>
                <div class="form-date-w3-agileits">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Pekerjaan :</label>
                    <input  id="pekerjaan" name="pekerjaan" type="text" value="{{Auth::user()->pekerjaan}}" required="">
                </div>
                <div class="form-date-w3-agileits">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Foto : &nbsp</label>
                    <input  id="foto" name="foto" type="file" value="{{Auth::user()->foto}}" required="">
                </div>
                <br>
                <div class="form-left-agileits-submit">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div> 
</div>

@endsection
