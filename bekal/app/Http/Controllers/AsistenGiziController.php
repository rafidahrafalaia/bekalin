<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Konsultasi;
use App\Anak;
use App\Http\Requests;
use Session;
use Auth;
// use App\User;

class AsistenGiziController extends Controller
{
    public function showFormGizi(){
    	return view('isiFormKonsul');
    }

    public function showPengguna(){
        return view('pengguna');
    }


    public function showTimeline(){
        $konsul = Konsultasi::where('jenis_pertanyaan','terbuka')->get();
        return view('timelineGizi', ['konsul'=> $konsul]);
    }
    public function showAnak(){
        $anak = Anak::all();
        return view('listAnak', ['anak'=> $anak]);
    }
    public function showAdminGizi(){
    	// $terbuka = DB::select("select * from konsultasi where jenis_pertanyaan = 'terbuka'");
    	// $tertutup = DB::select("select * from konsultasi where jenis_pertanyaan = 'tertutup'");
        $terbuka = Konsultasi::where('jenis_pertanyaan','=','terbuka')->orderBy('id','desc')->get();
        $tertutup = Konsultasi::where('jenis_pertanyaan','=','tertutup')->orderBy('id','desc')->get();
        //return $tertutup;

    	return view('ahligizi/master', ['terbuka' => $terbuka, 'tertutup' => $tertutup]);
    }
    public function setJawabAdminGizi(Request $request, $id){

        $user = Konsultasi::where('id','=',$id)->first();
        $user->admin_id = Auth::User()->id;
        $user->jawaban = $request->input('jawaban');
        $user->jawaban = $request->input('jawaban');
        $user->save();
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '.' .$foto->getClientOriginalExtension();
            Image::make($foto)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_name ));
            $paket->foto = $foto_name;
            $user->save();
        }

       return redirect()->back();
    }
    
    public function cekKonsul(){
        //fetch all posts //posts = paket , Post=Paket
         $konsul = Konsultasi::where('users_id',Auth::user()->id)->get();
        return view('histoKonsul', ['konsul'=> $konsul]);
     }

    public function setAdminGizi(Request $request){
        $user = New Konsultasi();
        //dd($user);
        $user->users_id = Auth::user()->id;
        $user->judul = $request->input('judul');
        $user->pertanyaan = $request->input('pertanyaan'); 
        $user->jenis_pertanyaan = $request->input('jenis_pertanyaan');
        if($request->file('foto')){
        $foto = $request->file('foto');
        $foto->move('fotoupload',$foto->getClientOriginalName());
        $user->foto=''.$foto->getClientOriginalName().'';
        }
        $user->save();

        return redirect()->back();
    }

     public function showHalamanUtama()
    {
        if($konsul = Konsultasi::where('jenis_pertanyaan','=','terbuka')->get()){
            return view('welcome', ['konsul'=> $konsul]);
        }
        else{
            return view('welcome');
        }
        
        
    }
}
