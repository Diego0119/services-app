<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index()
    {
        return view('account.index');
    }


    public function modifyUserInformation(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|confirmed|min:8',
        ], [
            'name.required' => __('El nombre es obligatorio.'),
            'name.max' => __('El nombre no puede superar los 255 caracteres.'),
            'password.confirmed' => __('La confirmación de la nueva contraseña falló.'),
            'password.min' => __('La contraseña debe tener al menos 8 caracteres.'),
        ]);

        $user = auth()->user();
        $user->name = $validated['name'];

        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }

        $user->save();

        return redirect()->route('account.index')
            ->withSuccess(__('La información del usuario se ha actualizado correctamente.'));
    }
}
