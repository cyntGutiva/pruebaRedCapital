<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use App\Mail\MessageReceived;
use App\User;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // latest utiliza el campo created_at por defecto, si no lo queremos ordenar por ese campo, se debe pasar por parametro el que queremos utilizar
        $users = User::latest()->paginate();
        return view('users.index', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
        date_default_timezone_set('America/Santiago');
        // User::create($request->validated());
        User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
        //Enviar notificacion correo
        Mail::to('cynthiagutierrezvargas@gmail.com')->queue(new MessageReceived($request->validated()));
        // return new MessageReceived($fields);
        return redirect()->route('user.index')->with('status', 'Usuario creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        date_default_timezone_set('America/Santiago');
        return view('users.show', [
            'user' => User::findOrFail($id)
        ]);
    }

     public function create()
    {
        return view('users.create', [
                'user' => new User
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        date_default_timezone_set('America/Santiago');

        $user->updated_at = date('Y-m-d G:i:s');
        $user->update(request()-> only(
            'username',
            'name',
            'lastname',
            'email',
            'phone',
            'updated_at'));

        return redirect()->route('user.show', $user)->with('status', 'Usuario actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        //User::destroy($user->id);
        return redirect()->route('user.index')->with('status', 'Usuario eliminado.');
    }
}
