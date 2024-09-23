<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// Correct Request class

class AdminController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $users = User::where('id', '!=', $user->id)->get();
        $posts = Post::with('user')
            ->orderByRaw("FIELD(status, 'pending', 'approve', 'reject')")
            ->get();

        return view('admin.dashboard', compact('users', 'posts'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255', 'unique:users', 'regex:/^01[0-2,5]{1}[0-9]{8}$/'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        $user = Auth::user();

        $data = $request->only(['name', 'phone']);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $extension = $avatar->getClientOriginalExtension();

            $timestamp = Carbon::now()->timestamp;
            $newFilename = $timestamp.'.'.$extension;

            // Store the file in the 'public/user' directory
            $avatarPath = $avatar->storeAs('user', $newFilename, 'public');

            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $data['avatar'] = $avatarPath;
        }
        if (empty($data['phone'])) {
            $data['phone'] = $user->phone;
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully');

    }

    public function setOrRemoveAdmin($userId)
    {
        //        $currentAdmin = auth()->user(); // Get the current logged-in admin
        //        $user = User::find($userId);    // Find the user by ID
        //
        //        if ($currentAdmin->role === 'admin') {
        //            if ($user) {
        //                // Toggle the user's role between 'admin' and 'user'
        //                $user->role = ($user->role === 'admin') ? 'user' : 'admin';
        //                $user->save();
        //
        //                if ($user->role === 'admin') {
        //                    return back()->with('success', 'User promoted to admin successfully.');
        //                } else {
        //                    return back()->with('success', 'Admin rights removed from the user.');
        //                }
        //            } else {
        //                return back()->with('error', 'User not found.');
        //            }
        //        }

        return back()->with('error', 'Set Successfully.');
    }

    public function deleteUser($userId)
    {
        $currentAdmin = auth()->user();
        $user = User::find($userId);

        if ($currentAdmin->role === 'admin') {
            if ($user) {
                $user->delete();

                return back()->with('success', 'User deleted successfully.');
            } else {
                return back()->with('failed', 'User not found.');
            }
        }

        return back()->with('failed', 'Unauthorized action.');
    }

    public function statusApprove($id)
    {
        $post = Post::find($id);
        if (! $post) {
            return back()->with('failed', 'Post not found.');
        }
        $post->status = 'approved';
        $post->save();

        return back()->with('success', 'Post approved successfully.');
    }

    public function statusReject($id)
    {
        $post = Post::find($id);
        if (! $post) {
            return back()->with('failed', 'Post not found.');
        }
        $post->status = 'rejected';
        $post->save();

        return back()->with('success', 'Post rejected successfully.');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        if (! $post) {
            return back()->with('failed', 'Post not found.');
        }
        $post->delete();

        return back()->with('success', 'Post deleted successfully.');
    }
}
