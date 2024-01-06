<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

    public function addUser(Request $request): RedirectResponse
    {
        $check = trim($request->input('email'));
        if (User::query()->where('email', $check)->count() > 0) {
            return to_route('usersCreate', ['errNo' => '1']);
        }
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'email_verified_at' => now(),
            'password' => Hash::make($request->input('password')),
            'remember_token' => Str::random(10),
        ]);
        $user->save();
        return to_route('users');
    }

    public function deleteUser($id): RedirectResponse
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
        return redirect()->route('users');
    }
}
