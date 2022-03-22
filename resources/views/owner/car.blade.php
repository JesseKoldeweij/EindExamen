<x-app-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="/dashboard/eigenaar">Terug</a>
        </div>
    </header>
    {{--Show errors if there are any--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Foutmelding!</strong> Er is iets mis gegaan.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--Show success messages--}}
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('store_car') }}" method="POST">
                    @csrf
                    <div class="row row justify-content-center" style="text-align: center">
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <div class="form-group">
                                <strong>Merk:</strong>
                                <input type="text" name="brand" class="form-control" placeholder="Merk">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <div class="form-group">
                                <strong>Type:</strong>
                                <input type="text" name="type" class="form-control" placeholder="Elektrisch/Brandstof">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <div class="form-group">
                                <strong>Kenteken:</strong>
                                <input type="text" name="license_plate" class="form-control" placeholder="Kenteken">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-dark m-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                    <tr class="text-center font-bold">
                        <th class="border px-4 py-1 bg-gray-300">Merk</th>
                        <th class="border px-4 py-1 bg-gray-300">Type</th>
                        <th class="border px-4 py-1 bg-gray-300">Kenteken</th>
                    </tr>
                    {{--Show data of the cars--}}
                    @foreach ($cars as $car)
                        <tr>
                            <td class="border px-6 py-4">{{ $car->brand }}</td>
                            <td class="border px-6 py-4">{{ $car->type }}</td>
                            <td class="border px-6 py-4">{{ $car->license_plate }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
