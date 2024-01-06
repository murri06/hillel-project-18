<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{

    public function list(): View
    {
        return view('Users.list', [
            'users' => User::all()
        ]);
    }

    public function details($id): View
    {
        return view('Users.details', [
            'user' => User::query()->findOrFail($id),
            'events' => User::query()->findOrFail($id)->events,
        ]);
    }

    public function addUser(): RedirectResponse
    {
        $user = User::create([
        ]);
        return redirect()->route('users');
    }

    public function deleteUser($id) : RedirectResponse
    {
        return redirect()->route('users');
    }
}
