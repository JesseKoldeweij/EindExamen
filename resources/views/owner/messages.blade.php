<x-app-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="/dashboard/eigenaar">Terug</a>
        </div>
    </header>
    @include('layouts.message')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('store_messages') }}" method="POST">
                    @csrf
                    <div class="row row justify-content-center" style="text-align: center">
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <div class="form-group">
                                <strong>Bericht:</strong>
                                <textarea type="text" name="message" class="form-control"
                                          placeholder="Bericht"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <div class="form-group">
                                <strong>Doelgroep:</strong>
                                <select name="audience" class="form-select">
                                    <option value="student">Leerlingen</option>
                                    <option value="instructor">Instructeurs</option>
                                    <option value="all">Iedereen</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-dark m-2">Verstuur</button>
                        </div>
                    </div>
                </form>
                <h1>Verstuurde berichtem</h1>
                <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                    <tr class="text-center font-bold">
                        <th class="border px-4 py-1 bg-gray-300">Bericht</th>
                        <th class="border px-4 py-1 bg-gray-300">Doelgroep</th>
                        <th class="border px-4 py-1 bg-gray-300">Beheren</th>
                    </tr>
                    @foreach ($messages as $message)
                        <tr>
                            <td class="border px-4 py-1">{{ $message->message }}<br>
                            <td class="border px-4 py-1">{{ $message->audience }}</td>
                            <td class="border py-1">
                                <a href="{{ route('delete_message', $message->id) }}" class="btn btn-danger">Verwijder bericht</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
