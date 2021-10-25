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
use App\Pesananfix;
use App\Pesananselesai;
use App\Pengirimanselesai;
use App\Authorizable;
use App\Product;
use App\Pesanan;
use Illuminate\Support\Facades\Auth;
use Validator;


class kateringController extends Controller
{
    //
    public function viewKatering(){
    	$pesanan = Pesananfix::all();
    	// dd($pengguna);
        return view('katering.katering', ['pesanan' => $pesanan]);
    }


     public function viewPesanan(){


        $pesanan = Pesananselesai::all();
        // dd($pengguna);
        return view('katering.history', ['pesanan' => $pesanan]);
        
    }



    public function tambahPerforma($id){
    	
    	  // dd('halo');
    	
    	$user = User::where('id','=',$id)->first();
        // dd($user->id);
    	// $user = User::where('id',Auth::user()->id)->first();
    	$performa = $user->jumlahantar + 1;
    	// dd($user);
    	// dd($performa);

    	   
        // dd($anak);
        $user->jumlahantar= $performa;
        $user->save();
        // dd('halo');
        $hapus = Pengirimanselesai::where('hapus','=',$id)->first();
        
        $hapus->delete();

        return redirect()->back();
    }

 public function kirimPesanan(Request $request){
            $kirim = Pesananfix::find($request->id);
            // dd($id);

            $pesanan = New Pesananselesai();
            $pesanan->penerima = $kirim->penerima;
            $pesanan->no_hp = $kirim->no_hp;
            $pesanan->alamat = $kirim->alamat;  
            $pesanan->ket_pesanan = $kirim->ket_pesanan;
            $pesanan->tanggal = $kirim->tanggal;
            $pesanan->pukul = $kirim->pukul;

            $pesanan->save();
            $kirim->delete();
              return redirect()->back();
            // dd($kirim->no_rekening);

    }

     public function performaKurir(){
        // $performa = User::all();
        // dd($pengguna);
        $user = User::where('jumlahantar','!=',null)->orderBy('jumlahantar', 'DESC')->get();
        // dd($user);
        return view('katering.performa', ['user' => $user]);
    }


    public function PesananSelesai(Request $request){
            // dd($request->id);
            $selesai = Pengirimanfix::find($request->id);
            // dd($id);
            
            $hapus = Auth::user()->id;
            $kurir = User::where('id','=',$hapus)->first();
            
            
            $pengirimanselesai = New Pengirimanselesai();
            $pengirimanselesai->penerima = $selesai->penerima;
            $pengirimanselesai->no_hp = $selesai->no_hp;
            $pengirimanselesai->alamat = $selesai->alamat;  
            $pengirimanselesai->ket_pesanan = $selesai->ket_pesanan;
            $pengirimanselesai->tanggal = $selesai->tanggal;
            $pengirimanselesai->pukul = $selesai->pukul;
            $pengirimanselesai->hapus = Auth::User()->id;
            $pengirimanselesai->kurir = $kurir->name;
            $pengirimanselesai->save();
            $selesai->delete();
              return redirect()->back();
            // dd($kirim->no_rekening);

    }

}
