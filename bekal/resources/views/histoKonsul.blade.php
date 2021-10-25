@extends('layouts.dash')

@section('content')

@include('layouts.nav')

<div class="col-md-3 callbacks_container form-w3l-agil3">
    <div class="read-form">
        <form action="{{url('/tambahAnak')}}" method="get">
            <div class="form-left-agileits-submit">
                <input type="submit" value="+ Konsultasi">
            </div>
        </form>                      
    </div>
</div>

<div class="w3_testimonials_grids">
    <div class="col-md-12 callbacks_container form-w3l-agil3">
        <div class="nav-tabs-custom">
            <div class="tab-content">
                <div class="active tab-pane" id="umum">
                    <div class="table-responsive" style="margin-top: 10px; height: 460px;">
                        <table class="table table-bordered table-striped">
                            @foreach($konsul as $listkonsultasi_terbuka)
                            <h4 style="color: #999999;">Pertanyaan:</h4>
                            <p style="color: white; font-size: 18px;">{{$listkonsultasi_terbuka->pertanyaan}}</p>
                            @if($listkonsultasi_terbuka->foto)
                            <div class="col-md-4">
                                <img src="{{ asset('fotoupload/' . $listkonsultasi_terbuka->foto) }}" alt="product" class="img-responsive" style="width: 100px;height: 100px;">
                            </div><br><br><br><br><br>
                            @endif
                            <h4 style="color: #999999;">Jawaban:</h4>
                            <div class="post clearfix">
                                <div class="user-block" style="color: #eb422a">
                                    <span class="username">
                                        <a href="#">{{$listkonsultasi_terbuka->admin_id}}</a>
                                    </span>
                                    <span class="description" style="color: #26d797">{{$listkonsultasi_terbuka->created_at}}</span>
                                </div>
                                <p style="color: white; font-size: 18px;">{{$listkonsultasi_terbuka->jawaban}}</p>
                            </div>
                            <hr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
