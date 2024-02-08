<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        $user->update($request->only(['first_name', 'last_name', 'email']));

        if ($user->addresses()->exists()) {

            $user->addresses()->first()->update($request->only(['addressline1', 'addressline2', 'city', 'province', 'phone', 'postal']));
        } else {

            return back()->with('success', 'БД не оновлено (addresses)!');
        }

        return back()->with('success', 'БД оновлено!');
    }

    public function index()
    {
        $user = User::with('addresses')->latest()->first();
        return view('welcome', compact('user'));
    }
}
