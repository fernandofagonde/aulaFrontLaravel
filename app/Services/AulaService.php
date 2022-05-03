<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Redirect;

class AulaService{

    public function __construct()
    {
        $this->host = 'http://localhost:8000';
    }

    public function getPessoas()
    { 
        $response = Http::get($this->host .'/api/pessoas')->collect();        

        return $response;
    }

    public function createPessoas($request)
    {
        $json = [
                "email" => $request['email'],
                "id" => $request['id'],
                "nome" => $request['nome']
            ];

        $response = Http::post($this->host . '/api/pessoa', $json);
        return $response;
    }

}