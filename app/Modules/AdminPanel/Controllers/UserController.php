<?php

declare(strict_types=1);

namespace App\Modules\AdminPanel\Controllers;

use App\Models\User;
use App\Modules\Web\Controllers\Controller;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::query()->paginate(10);
        return view('admin.users.index',compact('users'));
    }
}
