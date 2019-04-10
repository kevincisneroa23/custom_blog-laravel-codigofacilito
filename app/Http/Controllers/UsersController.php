<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
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
        $user = User::find($id);
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
        
        $user->fill($request->all());
        $user->type = $request->type; // forzar ya que fill no reemplaza type 
        $user->save();
        flash("Actualizacion exitosa | Usuario: ".$user->name.".")->warning();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        flash("Eliminacion exitosa | Usuario: ".$user->name.".")->error();
        return redirect()->route('admin.users.index');
    }
}
