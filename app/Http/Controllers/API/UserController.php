<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        $users = User::with('multiImage')->latest()->get();

        foreach ($users as $user) {
            $user->image = asset($user->image);

            foreach ($user->multiImage as $multiImage) {
                $multiImage->multi_img = asset($multiImage->multi_img);
            }
        }

        return response([
            'message' => 'Users Data',
            'status' => 'success',
            'users' => $users,
            'code' => 200
        ], 200);
    }
}
