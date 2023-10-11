<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('admin.administrator.list');
    }

    // public function create()
    // {
    //     return view('admin.staff.add');
    // }

    // public function edit($id)
    // {
    //     return view('admin.staff.edit', ['id' => $id]);
    // }
}
