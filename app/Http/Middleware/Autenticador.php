<?php

namespace App\Http\Middleware;

use App\Models\User;
use Firebase\JWT\JWT;

class Autenticador
{
    public function handle($request, \Closure $next)
    {
        $mensagem = '';
        try {
            if (!$request->hasHeader('Authorization')) {
                $mensagem = "Sem token";
                throw new \Exception();
            }
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dadosAutenticacao = JWT::decode($token, env('JWT_KEY'), ['HS256']);

            //return new GenericUser(['email' => $dadosAutenticacao]);
            $user = User::where('email', $dadosAutenticacao->email)
                ->first();
            if (is_null($user)) {
                $mensagem = "Não achou usuario";
                throw new \Exception();
            }
            return $next($request);

        }catch (\Exception $e){
            return response()->json("Não autorizado: $mensagem", 401);
        }
    }
}
