<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => ''
        ]);
        User::where('id', auth()->user()->id)
            ->update($request->except('_token'));

        // User::where('id',auth()->user()->id)
        // ->update([
        //     'name'=>$request->name,
        //     'phone_number'=>$request->phone_number,
        //     'description'=>$request->description,
        //     'gender'=>$request->gender,
        //     'address'=>$request->addresss
        // ]);

        return redirect()->back()->with('message', 'profile updated');
    }
    public function profilePic(Request $request)
    {
        $this->validate($request, ['file' => 'required|image|mimes:jpeg,jpg,png']);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('/profile');
            $image->move($destination, $name);
            $user = User::where('id', auth()->user()->id)->update(['image' => $name]);
            return redirect()->back()->with('message', 'profile updated');
        }
    }
}
