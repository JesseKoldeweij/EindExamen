<x-guest-layout>
    <body class="antialiased">

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
        <h1><a href="/public">Easy Drive 4 all</a></h1>
        <nav class="">
            <a href="algemene-voorwaarden" class="btn btn-dark">Algemene Voorwaarden</a>
            <a href="lespakketen" class="btn btn-dark">Lespakketen</a>
            <a href="registreren" class="btn btn-dark">Registreren</a>
            <a href="contact" class="btn btn-dark">Contact</a>
        </nav>
    </div>

    <div class="relative flex items-top min-h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-300 overflow-hidden shadow sm:rounded-lg pd" style="padding: 1.5%">
                <h2>Welkom bij Rijschool Easy Drive 4 all!</h2>
                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam
                    felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede
                    justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                    nisi
                    vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</a>
                </p>
                <h3>Medewerkers(Instructeurs)</h3>
                <ul>
                    @foreach($instructors as $instructor)
                        <li>{{ $instructor->name }}</li>
                    @endforeach
                </ul>
                <h3>Doelstellingen</h3>
                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam
                    felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede
                    justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                    consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                    nisi
                    vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. </p>
            </div>
        </div>
    </div>
    </body>
</x-guest-layout>
