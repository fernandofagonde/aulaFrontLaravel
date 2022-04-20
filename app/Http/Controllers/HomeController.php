<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Services\AulaService;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{

    private $aulaService;

    public function __construct(AulaService $aulaService) {
        $this->aulaService = $aulaService;
    }

    public function index() {
        
        $pessoas   = $this->aulaService->getPessoas()->all();;
        dd($pessoas);

        return view('home', ['pessoas' => $pessoas]);
    }
}
