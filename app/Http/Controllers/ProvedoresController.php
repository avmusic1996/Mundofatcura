<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedor.index');
    }
}
