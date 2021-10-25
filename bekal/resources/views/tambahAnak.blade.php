@extends('layouts.dash')

@section('content')

@include('layouts.nav')

<div class="w3_testimonials_grids">
    <div class="callbacks_container form-w3l-agil3">
        <div class="book-form profil-set">
            <p>Profil Anak</p>
            <form action="{{ url('/tambahAnak') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-time-w3layouts">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Nama Anak :</label>
                        <input type="text" id="nama_orang_tua"" name="name"  required=""> 
                    </div>
                    <div class="form-time-w3layouts">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Alamat Sekolah :</label>
                        <input type="text" id="nama_orang_tua"" name="alamat_sekolah"  required=""> 
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Nama Sekolah :</label>
                        <input  id="no_rek" name="nama_sekolah" type="text"  required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Kelas :</label>
                        <input  id="alamat" name="kelas" type="text"  required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Jenis Kelamin :</label>
                        <input  id="pekerjaan" name="jenis_kelamin" type="text"  required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Tanggal Lahir :</label>
                        <input  id="email" name="tgl_lahir" type="date"  required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Berat Badan :</label>
                        <input  id="foto" name="bb" type="text"  required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Tinggi Badan :</label>
                        <input  id="foto" name="tb" type="text"  required="">
                    </div>
                    <div class="form-date-w3-agileits">
                        <label><i class="fa fa-smile-o" aria-hidden="true"></i> Alergi :</label>
                        <input  id="foto" name="alergi" type="text"  required="">
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
        <div class="clearfix"> </div>
    </div>
</div>

@endsection
