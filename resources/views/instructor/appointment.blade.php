<x-app-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="/dashboard/instructeur">Terug</a>
        </div>
    </header>
    @include('layouts.message')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>Rijles Inplannen</h1>
                <hr>
                <form action="{{ route('appointment') }}" method="POST">
                    @csrf
                    <div class="row row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Leerling:</strong><br>
                                <select name="studentsID">
                                    {{--Get all students names--}}
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->name }} {{ $student->lastname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Auto:</strong><br>
                                <select name="car">
                                    {{--Get all cars --}}
                                    @foreach($cars as $car)
                                        <option value="{{ $car->id }}">{{ $car->brand }} - {{ $car->type }} - {{ $car->license_plate }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-8">
                            <div class="form-group">
                                <strong>Datum:</strong>
                                <input type="date" name="date" class="form-control" placeholder="Datum">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-8">
                            <div class="form-group">
                                <strong>Tijd:</strong>
                                <input type="text" name="start_time" class="form-control" placeholder="bijv.(16:00)">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-8">
                            <div class="form-group">
                                <strong>Ophaaladres:</strong>
                                <input type="text" name="pickup_location" class="form-control"
                                       placeholder="Ophaaladres">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-8">
                            <div class="form-group">
                                <strong>lesdoel:</strong>
                                <input type="text" name="purpose" class="form-control" placeholder="Lesdoel">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="instructorsID" class="form-control"
                                   value="{{ auth()->user()->id }}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="phonenumber" class="form-control"
                                   value="{{ auth()->user()->phonenumber }}">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-dark m-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
