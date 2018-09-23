<?php

use Models\Usuario;

class UsuarioController extends Controller
{
    public function update($id, $newAge)
    {
        $usuarioActual = Usuario::find($id);
        $usuarioActual->edad = $newAge;
        $usuarioActual->save();
    }
}

// Review
class UsuarioController extends Controller
{
    public function update($id, $newAge)
    {
        Userservice::update($id, $newAge);
    }
}

class UsuerService
{
    public function update($userId, $newAge)
    {
        $user = User::find($userId);
        $user->age = $newAge;
        User::save($user);
    }
}
