<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Controllers;

use App\Models\User;
use App\Modules\Web\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
}
