<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Controllers;

use App\Modules\Web\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }
}
