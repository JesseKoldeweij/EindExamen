<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class StudentController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function show()
    {

        $appointments = Timetable::all()->where('studentsID', auth()->user()->id);

        $messages = Message::all()->where('audience', auth()->user()->role);
        $messages_all = Message::all()->where('audience', 'all');

        $reports = User::all()->where('report', '1');

        return view('student.dashboard', compact('appointments', 'messages', 'messages_all', 'reports'));

    }
}
