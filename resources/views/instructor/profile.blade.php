<x-app-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="/dashboard/instructeur">Terug</a>
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($data as $x)
                    <label for="name"><strong>Voornaaam</strong></label>
                    <p id="name">{{ $x->name }}</p>

                    <label for="lastname"><strong>Achternaam</strong></label>
                    <p id="lastname">{{ $x->lastname }}</p>

                    <label for="email"><strong>E-mail</strong></label>
                    <p id="email">{{ $x->email }}</p>

                    <label for="adress"><strong>Adres</strong></label>
                    <p id="adress">
                        {{ $x->street }},
                        {{ $x->number }}<br>
                        {{ $x->zipcode }}
                    </p>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
