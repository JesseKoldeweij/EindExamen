<x-app-layout>
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="instructeur/profiel" class="btn btn-dark">Profiel</a>
            <a href="instructeur/plan" class="btn btn-dark">Rijles Inplannen</a>
            <a href="instructeur/ziekmelding" class="btn btn-dark">Ziekmelden</a>
        </div>
    </header>
    @include('layouts.message')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Mededelingen</h1>
                    {{--Check if there are any messages and show them--}}
                    @if(count($messages_all) < 1 || count($messages) < 1)
                        <div id="mededelingen" class="border border rounded-100 mb-1">
                            <p class="m-2 text-center">
                                <strong>
                                    Geen Mededelingen
                                </strong>
                            </p>
                        </div>
                    @else
                        @foreach($messages as $message)
                            <div id="mededelingen" class="border border-success rounded bg-green-100 mb-1">
                                <p class="m-2 text-center">
                                    <strong>
                                        {{ $message->message }}
                                    </strong>
                                </p>
                            </div>
                        @endforeach
                        @foreach($messages_all as $message)
                            <div id="mededelingen" class="border border-success rounded bg-green-100 mb-1">
                                <p class="m-2 text-center">
                                    <strong>
                                        {{ $message->message }}
                                    </strong>
                                </p>
                            </div>
                        @endforeach
                    @endif
                    <hr>
                    <h1>Geplande Rijlessen</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <tr class="text-center font-bold">
                            <th class="border px-4 py-1 bg-gray-300">Leerling</th>
                            <th class="border px-4 py-1 bg-gray-300">Auto</th>
                            <th class="border px-4 py-1 bg-gray-300">Datum</th>
                            <th class="border px-4 py-1 bg-gray-300">Tijd</th>
                            <th class="border px-4 py-1 bg-gray-300">Ophaaladres</th>
                            <th class="border px-4 py-1 bg-gray-300">Doel</th>
                            <th class="border px-4 py-1 bg-gray-300">Beheer</th>
                        </tr>
                        {{--Show appointment data--}}
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td class="border px-4 py-1">{{ $appointment->student->name }}<br>
                                <td class="border px-4 py-1">{{ $appointment->car->brand }}
                                    - {{ $appointment->car->type }}</td>
                                <td class="border px-4 py-1">{{ $appointment->date }}</td>
                                <td class="border px-4 py-1">{{ $appointment->start_time }}</td>
                                <td class="border px-4 py-1">{{ $appointment->pickup_location }}</td>
                                <td class="border px-4 py-1">{{ $appointment->purpose }}</td>
                                <td class="border px-4 py-1">
                                    <a href="{{ route('delete_appointment' ,$appointment->id) }}" class="btn btn-danger">verwijderen</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
