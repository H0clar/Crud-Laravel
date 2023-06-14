<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Validar las credenciales del usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'rut' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Obtener las credenciales del usuario para la autenticación.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return [
            'rut' => $request->input('rut'),
            'password' => $request->input('password'),
        ];
    }

    /**
     * Intentar autenticar al usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        // Intentar autenticar al usuario
        $credentials = $this->credentials($request);
        $credentials['role_id'] = Role::where('description', 'administrador')->value('id');
        return $this->guard()->attempt(
            $credentials, $request->filled('remember')
        );
    }

    /**
     * Método utilizado para redirigir al usuario después de iniciar sesión.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function authenticated(Request $request, $user)
    {
        return view('home');
    }

    // Resto del código del controlador...
}
