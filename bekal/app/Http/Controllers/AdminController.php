<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

use App\model_has_permissions;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    public function _construct(){
        $this->middleware('admin');
    }
    public function index(){
        
        return view('admin.home');
    }

    public function showFormAddUser(){
        return view('addUser');
    }

    public function addNewUser(Request $request){
        $user = New User();
        $model = New model_has_permissions();
        //dd($user);
        do{
        $newId = rand(1,100000);
        $old=User::where('id',$newId)->count();
        }while($old>=1);
        $user->id = $newId;
        $user->name = $request->input('name');
        $user->no_ktp = $request->input('no_ktp'); 
        $user->no_rek = $request->input('no_rek'); 
        $user->alamat = $request->input('alamat'); 
        $user->pekerjaan = $request->input('pekerjaan'); 
        $user->email = $request->input('email'); 
        $pass=bcrypt($request->input('password'));
        $user->password = ''. $pass .''; 
        // $user->remember_token = bcrypt($request->input('password_confirmation'));
        $user->save();
        $model->model_id=$newId;
        if($request->input('peran')=='Kurir'){
            $model->permission_id=3;
        }
        elseif($request->input('peran')=='Katering'){
            $model->permission_id=2;
        }
        elseif($request->input('peran')=='AhliGizi'){
            $model->permission_id=5;
        }
        $model->model_type='App\User';
        $model->save();
        return redirect('/admin');
    }
    
}

