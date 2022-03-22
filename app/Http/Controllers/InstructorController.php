<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class InstructorController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function get()
    {

        $appointments = Timetable::all()->where('instructorsID', auth()->user()->id)->sortBy('date');

        $messages = Message::all()->where('audience', auth()->user()->role);
        $messages_all = Message::all()->where('audience', 'all');

        return view('instructor.dashboard', compact('appointments', 'messages', 'messages_all'));
    }

    /**
     * @return Application|Factory|View
     */
    public function show()
    {

        $data = User::all()->where('email', auth()->user()->email);

        return view('instructor.profile', compact('data'));

    }

    /**
     * @return Application|Factory|View
     */
    public function students()
    {

        $students = User::all()->where('role', 'student');
        $cars = Car::all();

        return view('instructor.appointment', compact('students', 'cars'));

    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {

        $request->validate([
            'studentsID' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'pickup_location' => 'required',
            'purpose' => 'required',
            'instructorsID' => 'required',
            'car' => 'required',
        ]);

        Timetable::create([
            'studentsID' => $request->studentsID,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'pickup_location' => $request->pickup_location,
            'purpose' => $request->purpose,
            'instructorsID' => $request->instructorsID,
            'carID' => $request->car,
        ]);

        return redirect('/dashboard/instructeur/plan')
            ->with('success', 'Rijles ingepland!');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function report(Request $request)
    {
        auth()->user()->update(['report' => $request->choice,
            'start_report_date' => $request->start_date,
            'end_report_date' => $request->end_date]);


        return redirect('/dashboard/instructeur/ziekmelding')
            ->with('success', 'Melding verstuurd!');
    }

    public function delete(Request $request, Timetable $timetable)
    {

        $timetable->where('id', $request->id)->delete();

        return redirect('/dashboard/instructeur/')
            ->with('success', 'Rijles verwijderd');
    }
}
