<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 *
 */
class HomeController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $instructors = User::all()->where('role', 'instructor');

        return view('welcome', compact('instructors'));
    }

    /**
     * @return Application|Factory|View
     */
    public function index_owner()
    {
        $owners = User::all()->where('role', 'owner');

        return view('home.contact', compact('owners'));
    }

    /**
     * @return Application|Factory|View
     */
    public function index_lesson()
    {
        $lessons = Lesson::all();

        return view('home.lessons', compact('lessons'));
    }
}
