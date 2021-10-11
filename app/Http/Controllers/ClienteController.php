<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes.index');
    }
}
