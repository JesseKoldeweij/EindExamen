<x-guest-layout>

    <body class="antialiased">

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
        <h1><a href="/public">Easy Drive 4 all</a></h1>
        <nav>
            <a href="algemene-voorwaarden" class="btn btn-dark">Algemene Voorwaarden</a>
            <a href="lespakketen" class="btn btn-dark">Lespakketen</a>
            <a href="registreren" class="btn btn-dark">Registreren</a>
            <a href="contact" class="btn btn-dark">Contact</a>
        </nav>
    </div>

    <div class="relative flex items-top min-h-screen bg-gray-100">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 w-full">
            <div class="mt-8 bg-white dark:bg-gray-300 overflow-hidden shadow sm:rounded-lg pd" style="padding: 1.5%">
                <h1>Onze Lespakketen</h1>
                {{--Show lessons data--}}
                @foreach($lessons as $lesson)
                    <div class="card"
                         style="width: 18rem; display:inline-block; margin-left: 13%; margin-top: 5%; margin-bottom: 5%; ">
                        <div class="card-body m-5">
                            <h2 class="card-title">{{ $lesson->lesson }} - {{ $lesson->price }}&euro;</h2>
                            <p> {{ $lesson->description }}</p>
                        </div>
                    </div>
                @endforeach
                <p><strong>Interesse?</strong> Registreer je dan <a href="registreren">hier!</a></p>
            </div>
        </div>
    </div>
    </body>
</x-guest-layout>
