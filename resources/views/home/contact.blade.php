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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-300 overflow-hidden shadow sm:rounded-lg pd"
                 style="padding: 1.5%">
                <h1 class="text-4xl">Contact</h1>
                <br>
                @foreach( $owners as $owner)
                <h4>Naam: {{ $owner->name }}<br>
                    Email: {{ $owner->email }}<br>
                    Adres: {{ $owner->street }},{{ $owner->number }}   {{ $owner->zipcode }}</h4>
                @endforeach
                <br>
                <hr>
                <br>
                <h2>Route Beschrijving</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Gravida in fermentum et sollicitudin ac orci phasellus egestas tellus.
                    Suscipit tellus mauris a diam maecenas sed. Ac felis donec et odio pellentesque. Est ante in nibh
                    mauris cursus. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Erat
                    pellentesque adipiscing commodo elit. Quis varius quam quisque id. Morbi tristique senectus et netus
                    et. Viverra mauris in aliquam sem fringilla ut morbi tincidunt augue. Sem viverra aliquet eget sit
                    amet tellus cras adipiscing enim. Tincidunt dui ut ornare lectus sit amet. Sed vulputate mi sit amet
                    mauris commodo quis. Sagittis id consectetur purus ut faucibus pulvinar elementum. Porta non
                    pulvinar neque laoreet suspendisse. In pellentesque massa placerat duis ultricies lacus.</p>
            </div>
        </div>
    </div>
    </body>

</x-guest-layout>
