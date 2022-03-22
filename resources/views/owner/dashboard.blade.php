<x-app-layout>

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="eigenaar/wagenpark" class="btn btn-dark">Wagenpark Beheren</a>
            <a href="eigenaar/mededelingen" class="btn btn-dark">Mededeling versturen</a>
        </div>
    </header>
    @include('layouts.message')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-4xl">Instructeurs</h1>
                    <table class="w-full">
                        <tr class="text-center font-bold">
                            <th class="border px-4 py-1 bg-gray-300">Voornaam</th>
                            <th class="border px-4 py-1 bg-gray-300">Achternaam</th>
                            <th class="border px-4 py-1 bg-gray-300">Adres</th>
                            <th class="border px-4 py-1 bg-gray-300">Contact</th>
                            <th class="border py-1 bg-gray-300">Beschikbaar</th>
                            <th class="border py-1 bg-gray-300">Beheren</th>
                        </tr>
                        {{--Show data of Instructors--}}
                        @foreach ($instructors as $instructor)
                            <tr>
                                <td class="border px-4 py-1">{{ $instructor->name }}</td>
                                <td class="border px-4 py-1">{{ $instructor->lastname }}</td>
                                <td class="border px-4 py-1">
                                    {{ $instructor->street }} ,
                                    {{ $instructor->number }} <br>
                                    {{ $instructor->zipcode }}
                                </td>
                                <td class="border px-4 py-1">{{ $instructor->email }}<br>{{ $instructor->phonenumber }}}</td>
                                @php
                                    if ($instructor->report == 1){
                                        echo '<td class="border px-4 py-1 bg-red-500 text-center"><strong class="text-4xl">&#x2715;</strong><p>(ziek)</p></td>';
                                        }else{
                                        echo '<td class="border px-4 py-1 bg-green-500 text-center"><strong class="text-4xl">&#10003;<br></strong></td>';
                                        }
                                @endphp
                                <td class="border px-4 py-1">
                                    <a href="{{ route('delete_user', $instructor->id) }}" class="btn btn-danger">Verwijderen</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <h1 class="text-4xl">Leerlingen</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <tr class="text-center font-bold">
                            <th class="border px-4 py-1 bg-gray-300">Voornaam</th>
                            <th class="border px-4 py-1 bg-gray-300">Achternaam</th>
                            <th class="border px-4 py-1 bg-gray-300">Adres</th>
                            <th class="border px-4 py-1 bg-gray-300">Contact</th>
                            <th class="border px-4 py-1 bg-gray-300">Pakket</th>
                            <th class="border py-1 bg-gray-300">Beheren</th>
                        </tr>
                        {{--Show data of Students--}}
                        @foreach ($students as $student)
                            <tr>
                                <td class="border px-4 py-1">{{ $student->name }}</td>
                                <td class="border px-4 py-1">{{ $student->lastname }}</td>
                                <td class="border px-4 py-1">
                                    {{ $student->street }} ,
                                    {{ $student->number }} <br>
                                    {{ $student->zipcode }}
                                </td>
                                <td class="border px-4 py-1">{{ $student->email }}<br>{{ $student->phonenumber }}</td>
                                <td class="border px-4 py-1">{{ $student->lessonsID }}</td>
                                <td class="border px-4 py-1">
                                    <a href="{{ route('delete_user', $student->id) }}" class="btn btn-danger">Verwijderen</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
