<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use File;
use Image;
use Storage;
use Carbon\Carbon;

class UserController extends Controller
{
    public $path;

    public function __construct(User $model)
    {
        $this->path = storage_path('app/public/users');
        $this->model = $model;
    }

    public function index()
    {
        return view('profile.form');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|unique:users,email,'.Auth::user()->id,
        ]);

        //IF FOLDER IS NOT EXIST
        if (!File::isDirectory($this->path)) {
            //THEN CREATE NEW FOLDER
            File::makeDirectory($this->path);
        }

        //IF PHOTO IS NOT EMPTY
        if(!empty($request->photo)){
            //TAKE FILE IMAGE FROM FORM INPUT
            $file = $request->file('photo');
             //RENAME ORIGIN FILE NAME COMBINE WITH TIME STAMP AND UNIQUE ID
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            //UPLOAD FILE
            Image::make($file)->save($this->path . '/' . $fileName);

            //REMOVE OLD FILE
            File::delete($this->path.'/'.Auth::user()->photo);
        }

        // dd($request->all());
        $update = $this->model->updateUserData($request, $fileName);

        return redirect()->back()->with('success', 'Successfully update user data!');
    }
}
