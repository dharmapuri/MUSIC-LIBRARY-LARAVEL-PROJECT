<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Library;

use Illuminate\Support\Facades\Stroage;

use App\Models\User;
use Session;
use Crypt;

class Musiclib extends Controller
{
    function index()
    {
        return view('home');
    }

    function list()
    {
        $data= Library::all();
        return view('list',["data"=>$data]);
    }

    function store(Request $request)
    {
        $data=new Library(); 

        $file=$request->file;

        $filename=time().'.'.$file->getClientOriginalExtension();

        $request->file->move('assets',$filename);

        $data->file=$filename;

        $data->name=$request->name;
        $data->email=$request->email;
        
        $data->save();

        $request->session()->flash('status','Album submitted succesfully');
        return redirect('list');
    }

    public function view($id)
    {
        $data=Library::find($id);

        return view('viewproduct',compact('data'));
    }

    public function register(Request $request)
    {
       
    
        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Crypt::encrypt($request->input('password'));
        $user->save();
        $request->session()->put('user',$request->input('name'));
        return redirect('/');
    }

    public function login(Request $request)
    {
         $user=User::where("email",$request->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$request->input('password'));
         {
            $request->session()->put('user', $user[0]->name);
            return redirect('/');
         }
    }
}
