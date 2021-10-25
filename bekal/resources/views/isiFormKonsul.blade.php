@extends('layouts.back')

@section('content')
@include('layouts.nav')
<h3 class="w3l-title">Asisten Gizi</h3>
<h5 class="w3l-sub-title" style="color: white;">*Pertanyaan terbuka akan tampil dalam forum dan boleh dijawab oleh semua pengguna, sedangkan pertanyaan tertutup hanya diketahui oleh konsultan.</h5>
<div class="w3_testimonials_grids">
    <div class="w3_testimonials_grids">
        <div class="book-form">
            <p>Tanya si Ahli Gizi</p>
            <form action="{{ url('/adminGizi') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-time-w3layouts">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Judul :</label>
                    <input type="text" id="judul" name="judul" placeholder="Judul" required=""> 
                </div>
                <div class="form-date-w3-agileits">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Pertanyaan :</label>
                    <input  id="text" name="pertanyaan" type="text" placeholder="Pertanyaan" required="">
                </div>
                <div class="form-left-agileits-w3layouts ">
                    <label><i class="fa fa-smile-o" aria-hidden="true"></i> Jenis Pertanyaan :</label>
                    <div class="col-sm-4">
                        <input type="radio" value="terbuka" id="inputMale" name="jenis_pertanyaan" checked> Terbuka
                    </div>
                    <div class="col-sm-4">
                        <input type="radio" value="tertutup" id="inputFemale" name="jenis_pertanyaan" checked> Tertutup
                    </div>
                </div>  
                <div class="form-left-agileits-submit">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@endsection
