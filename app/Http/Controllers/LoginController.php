<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*private $url;
    private $message;
    private $loginFail = false;*/

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensaje = [
            'username.required' => 'Se necesita un nombre de usuario',
            'username.unique' => 'Ya existe este username',
            'email.unique' => 'Este correo ya está en uso',
        ];

        $valid = Validator::make($request->all(), [
            'username' => 'required|string|max:40|unique:users,username',
            'email' => 'unique:users,email|required|string|email|max:80|',
            'password' => 'required|string|max:80',
            'name' => 'required|string|max:255',
        ], $mensaje);

        //$user = $request->validated();

        if($valid->fails())
        {
            return redirect('/log')->withErrors($valid)->withInput();
        }else{
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->username = $request->input('username');
            $user->password = bcrypt($request->input('password'));
            $user->save();
            return redirect('/log')->route('log')->with('mensaje',$mensaje);
        }
 
        
    }


    /**
     * Display the login.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('login');
    }

    public function redirect(Request $request)
    {
        if($request->has('previus'))
        {
            session(['prev' => $request->get('previus')]);
        }

        return redirect()->route('log');
    }


    public function authenticate(Request $request)
    {
        
        $credenciales = $request->only('email', 'password');

        if(Auth::attempt($credenciales))
        {
           //return Redirect::to($request->input('previus'));

           if($request->session()->has('prev'))
           {
               $url = session('prev');
               $request->session()->forget('prev');
               return Redirect::to($url);
           }

           return redirect()->route('indice');
        }else{
            $info = "Usuario o contraseña incorrecta";
            $message = ['info' => $info];
            //$previus = $request->input('previus');
            return Redirect::to($request->input('url') . '?fail=yes');
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
