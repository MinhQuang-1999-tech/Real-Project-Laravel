<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class AdminRoleController extends Controller
{
    //
    private $role;
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function index()
    {
        $roles = $this->role->paginate(8);
        return view('admin.role.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.role.add');
    }
}