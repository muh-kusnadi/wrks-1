<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Student $student)
    {
        $this->middleware('auth');
        $this->user     = $user;
        $this->student  = $student;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users      = $this->user->count();

        $students   = $this->student->count();

        return view('home', compact('users', 'students'));
    }
}
