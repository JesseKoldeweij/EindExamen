<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Mededelingen</h1>

                    {{--Check if there are any messages & show them--}}
                    @if(count($messages) < 1 || count($messages_all) < 1)
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
                    <h1 class="text-4xl">Geplande Rijlessen</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <tr class="text-center font-bold">
                            <th class="border px-4 py-1 bg-gray-300">Instructeur</th>
                            <th class="border px-4 py-1 bg-gray-300">Auto</th>
                            <th class="border px-4 py-1 bg-gray-300">Datum</th>
                            <th class="border px-4 py-1 bg-gray-300">Tijd</th>
                            <th class="border px-4 py-1 bg-gray-300">Ophaaladres</th>
                            <th class="border px-4 py-1 bg-gray-300">Doel</th>
                            <th class="border px-4 py-1 bg-gray-300">Status</th>
                        </tr>
                        {{-- Show the data for an appointment--}}
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td class="border px-4 py-1">{{ $appointment->instructor->name }}</td>
                                <td class="border px-4 py-1">{{ $appointment->car->brand }}
                                    - {{ $appointment->car->type }}</td>
                                <td class="border px-4 py-1">{{ $appointment->date }}</td>
                                <td class="border px-4 py-1">{{ $appointment->start_time }}</td>
                                <td class="border px-4 py-1">{{ $appointment->pickup_location }}</td>
                                <td class="border px-4 py-1">{{ $appointment->purpose }}</td>
                                {{-- Gets the Report data --}}
                                @foreach($reports as $report)
                                    @if($appointment->instructorsID === $report->id && $appointment->date >= $report->start_report_date && $appointment->date <= $report->end_report_date)
                                        <td class="border px-4 py-1 bg-red-500">Geannuleerd (instructeur ziek)</td>
                                    @else
                                        <td class="border px-4 py-1 bg-green-500">Akkoord</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
