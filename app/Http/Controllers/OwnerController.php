<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class OwnerController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {

        $instructors = User::all()->where('role', '=', 'instructor');

        $students = User::all()->where('role', '=', 'student');

        return view('owner.dashboard', compact('instructors', 'students'));
    }

    /**
     * @return Application|Factory|View
     */
    public function get()
    {

        $cars = Car::all();

        return view('owner.car', compact('cars'));

    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {

        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'license_plate' => 'required',
        ]);

        Car::create($request->except('_token'));

        return redirect('/dashboard/eigenaar/wagenpark')
            ->with('success', 'Auto toegevoegd');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store_messages(Request $request)
    {

        $request->validate([
            'message' => 'required',
            'audience' => 'required'
        ]);

        Message::create($request->all());

        return redirect('/dashboard/eigenaar/mededelingen')
            ->with('success', 'Mededeling verstuurd');

    }

    public function return_messages()
    {

        $messages = Message::all();

        return view('owner.messages', compact('messages'));

    }

    public function delete(Request $request, Message $message)
    {

        $message->where('id', $request->id)->delete();

        return redirect('/dashboard/eigenaar/mededelingen')
            ->with('success', 'Bericht verwijderd');

    }
}
