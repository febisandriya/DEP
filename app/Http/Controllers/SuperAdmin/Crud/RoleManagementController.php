<?php

namespace App\Http\Controllers\SuperAdmin\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdmin\SystemController;

use App\model\Module;

class RoleManagementController extends SystemController
{
    // public function __construct()
    // {
    //     $this->middleware('auth.superadmin');
    // }

    public function index()
    {
        $page = 'SuperAdmin.Pages.Role.index';
        $modules = Module::with('Menus')->get();
        // $accesses = Module::with('Access')->get();
        return view($page)->with(compact('modules'));
	}

	public function create()
    {
        $page = 'SuperAdmin.Pages.Role.newRole';
        $modules = Module::with('Menus')->get();
        return view($page)->with(compact('modules'));
	}
}
