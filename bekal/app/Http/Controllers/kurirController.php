<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Validation\Rule;

use App\Konsultasi;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use App\Role;
use App\User;
use App\Permission;
use App\Pengiriman;
use App\Pengirimanfix;
use App\Pengirimanselesai;
use App\Authorizable;
use Illuminate\Support\Facades\Auth;
use Validator;


class kurirController extends Controller
{
    //
    public function viewKurir(){
    	$pengiriman = Pengiriman::all();
        return view('kurir.kurir', ['pengiriman' => $pengiriman]);
    }

    public function viewPengiriman(){
        $pengiriman = Pengirimanfix::all();
        return view('kurir.pengirimanfix', ['pengiriman' => $pengiriman]);
    }

    public function viewHistoPengiriman(){
        $pengiriman = Pengirimanselesai::all();
        return view('kurir.history', ['pengiriman' => $pengiriman]);
    }

    public function tambahPerforma($id){
    	$user = User::where('id','=',$id)->first();
    	$performa = $user->jumlahantar + 1;
        $user->jumlahantar= $performa;
        $user->save();
        $hapus = Pengirimanselesai::where('hapus','=',$id)->first();
        $hapus->delete();
        return redirect()->back();
    }

    public function performaKurir(){
        $user = User::where('jumlahantar','!=',null)->orderBy('jumlahantar', 'DESC')->get();
        return view('kurir.performa', ['user' => $user]);
    }
}
