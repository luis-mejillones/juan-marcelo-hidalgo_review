<?php

namespace App\Http\Controllers\Admin\Usuario;


class UsuarioController extends Controller
{
    /**
     * muestra la lista de recursos
     */


    public function index()
    {
        return 'lista de recursos';
    }

    /**
     * Muestra el formulario para crear un nuevo usuario
     */
    public function create()
    {

        return view('fourmulario.nuevo.usuario');
    }

    /**
     * Almacena el nuevo usuario
     */
    public function store(CreateUserRequest $request)
    {
        $user = Usuario::create([

            'active' => $request->active
        ]);

        $request->session()->flash('message', 'El Usuario se registro correctamente.');
        return redirect()->route('usuario.listar');

    }

    /**
     * Muestra un usuario especifico
     */
    public function show($id)
    {
        $usuario = find($id);
        return view('vista.usuario', $usuario);
    }

    /**
     * Muestra el formulario de edicion del usuario
     */
    public function edit($id)
    {

        $user = Usuario::findOrFail($id);

        return view('usuario.edit', $user);

    }

    /**
     * Actualiza el usuario editado
     */
    public function update(Request $request, $id)
    {
        $user = Usuario::findOrFail($id);
        $user->fill($request->all());
        $user->save();

        return redirect()->route('usuario.listar');
    }

    /**
     * Elimina al usuario especifico
     */
    public function destroy($id)
    {
        $usuario = find($id);
        $usuario->delete();
        return redirect()->route('usuario.listar');
    }
}

// Review
class UserController extends Controller
{
    public function index()
    {
        return ContentService::getIndex();
    }

    public function create()
    {
        return ContentService::getCreateForm();
    }

    public function save(CreateUserRequest $request)
    {
        return UserService::save($request->user);
    }

    public function show($userId)
    {
        return UserService::getUserbyId($userId);
    }

    public function edit($userId)
    {
        return ContentService::getEditForm($userId);
    }

    public function update(Request $request, $userId)
    {
        return UserService::update($request->user, $userId);
    }

    public function delete($userId)
    {
        return UserService::delete($userId);
    }
}