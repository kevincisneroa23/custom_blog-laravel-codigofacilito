<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
//Add
use Illuminate\Http\Request;
use App\Http\Requests;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
    
    //When a user is successfully authenticated
    protected $redirectPath = '/admin';
    //When a user is not successfully authenticated
    protected $loginPath = '/admin/auth/login';

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function getLogin()
    {
        return view('admin.auth.login');
    }

    public function getRegister()
    {
        return view('admin.auth.register');
    }

    public function postRegister(Request $request)
    {

        $user = new User($request->all());

         //Manipulacion de Imagenes...
        
        if($request->img_perfil)
        {
            $file = $request->file('img_perfil');
            $name = 'blog_avatar_'. time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '\images\perfiles\\';
            $file->move($path, $name);
            //SET
            $user->img_perfil = $name;
        }

        $user->password = bcrypt($request->password);
        $user->save();

        flash("Registro exitoso | Usuario: ".$user->name.".")->success();
        return redirect()->route('admin.auth.login');
        
    }


}
