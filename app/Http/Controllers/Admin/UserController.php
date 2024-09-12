<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MultiImage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function create(){
        return view('admin.user.create');
    }


public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'image' => 'required',
    ], [
        'name.required' => 'Employee Name is Required',
        'email.required' => 'Employee Email is Required',
        'phone.required' => 'Employee Phone is Required',
        'image.required' => 'Employee Image is Required',
    ]);

    // Handle single image upload
    $image = $request->file('image');
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

    Image::make($image)->resize(400, 400)->save('storage/employee/' . $name_gen);
    $save_url = 'storage/user/' . $name_gen;

    // Store user data
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->image = $save_url;
    $user->save();

    // Handle multiple image upload
    $images = $request->file('multi_img');
    if ($images) {
        foreach ($images as $multi_image) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_image->getClientOriginalExtension();
            Image::make($multi_image)->resize(200, 200)->save('storage/employee/multiplephotos/' . $name_gen);
            $save_url = 'storage/employee/multiplephotos/' . $name_gen;

            // Insert multi-images with user ID into the MultiImage table
            MultiImage::insert([
                'user_id' => $user->id,  // Assign user_id from newly created user
                'multi_img' => $save_url,
            ]);
        }
    }

    // Notification and redirect
    $notification = array(
        'message' => 'User Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
}
}
