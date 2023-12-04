<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function course(Course $course)
    {
        return view('course', compact('course'));
    }
}
