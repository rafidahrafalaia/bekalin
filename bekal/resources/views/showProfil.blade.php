@extends('layouts.dash')

@section('content')

@include('layouts.nav')

<div class="w3_testimonials_grids">
    @foreach($user as $listuser)
    <div class="col-md-12 callbacks_container form-w3l-agil3">
        <div class="box box-primary">
            <div class="box-body box-profile" >
                <img class="profile-user-img img-responsive img-circle" src="{{asset('fotoupload/'. Auth::user()->foto)}}" alt="User profile picture">
                <h3 class="profile-username text-center">{{$listuser->name}}</h3>
                <p class="text-muted text-center">{{$listuser->pekerjaan}}</p>
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Email</b> <a class="pull-right" style="color: white;">{{$listuser->email}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>No KTP</b> <a class="pull-right" style="color: white;">{{$listuser->no_ktp}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>No Rekening</b> <a class="pull-right"style="color: white;">{{$listuser->no_rek}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Alamat</b> <a class="pull-right" style="color: white;">{{$listuser->alamat}}</a>
                    </li>
                </ul>
                <div class="read-form">
                    <form action="{{ url('/settingProfil') }}" method="get">
                            <input type="submit" value="Edit">
                        </div>
                    </form>                      
                </div>
                <br><br>     
            </div>
        </div>
    </div> 
    @endforeach
</div>

@endsection
