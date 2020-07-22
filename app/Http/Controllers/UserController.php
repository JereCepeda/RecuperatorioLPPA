<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $users= User::all();
		$title = "Lista de Usuarios";

        return view('users.index',compact('title','users'));
    }
    public function show($id){
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    public function create(){
        $title = "Nuevo Usuario";
    	return view('users.crear',compact('title'));
    }
    public function edit(){
        $title = "Lista de Usuarios";
        return view('users.edit',compact('title'));
    }
    public function store(){
        $data = request()->validate([
                                'name'=>'required',
                                'email'=>'required|email|unique:users,email',
                                'password'=>'required|min:6'],
                                ['name.required'=>'El campo nombre es obligatorio',
                                'password.required'=> 'La contraseña debe ser mayor a 6 caracteres']);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']) // password
      
        ]);
        return redirect()->route('users.index');
    }
}
