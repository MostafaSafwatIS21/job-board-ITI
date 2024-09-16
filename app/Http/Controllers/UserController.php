<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
            //            'confirm_password' => 'required|same:new_password',
        ]);

        //        dd(Hash::make($request->current_password));
        if (! Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully!');

    }

    public function deleteProfile(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
        ]);
        if (! Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }
        $user = User::find(Auth::user()->id);

        if ($user) {
            Auth::logout();
            $user->delete();

            return redirect('/')->with('success', 'Your account has been deleted successfully.');
        }

        return redirect()->back()->withErrors(['error' => 'User not found.']);

    }
}
