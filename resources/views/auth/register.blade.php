<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
    <h1><a href="/public">Easy Drive 4 all</a></h1>
    <nav>
        <a href="algemene-voorwaarden" class="btn btn-dark">Algemene Voorwaarden</a>
        <a href="lespakketen" class="btn btn-dark">Lespakketen</a>
        <a href="registreren" class="btn btn-dark">Registreren</a>
        <a href="contact" class="btn btn-dark">Contact</a>
    </nav>
</div>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1>Registreren</h1>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
            <div>
                <x-label for="name" value="Voornaam"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                         autofocus/>
            </div>

            <!-- Lastname -->
            <div>
                <x-label for="lastname" value="Achternaam"/>

                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')"
                         required autofocus/>
            </div>

            <!-- Lespakket -->
            <div>
                <x-label for="lessonsID" value="Lespakket"/>

                <select name="lessonsID" class="block mt-1 w-full">
                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}">{{ $lesson->lesson }} - {{ $lesson->price }}&euro;</option>
                    @endforeach
                </select>
            </div>
            <!-- Street -->
            <div>
                <x-label for="street" value="Straatnaam"/>

                <x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required
                         autofocus/>
            </div>
            <!-- Number -->
            <div>
                <x-label for="number" value="Huisnummer"/>

                <x-input id="number" class="block mt-1 w-full" type="number" name="number" :value="old('number')"
                         required autofocus/>
            </div>
            <!-- Zipcode -->
            <div>
                <x-label for="zipcode" value="Postcode"/>

                <x-input id="zipcode" class="block mt-1 w-full" type="text" name="zipcode" :value="old('zipcode')"
                         required autofocus/>
            </div>
            <!-- Phonenumber -->
            <div>
                <x-label for="phonenumber" value="Telefoonnummer"/>

                <x-input id="phonenumber" class="block mt-1 w-full" type="tel" name="phonenumber" :value="old('phonenumber')"
                         required autofocus/>
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" value="E-mail"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" value="Wachtwoord"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="Wachtwoord bevestigen"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required/>
            </div>

            <div class="mt-4">
                <input type="hidden" name="role" class="block mt-1 w-full" value="student" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Al geregistreerd?
                </a>

                <x-button class="ml-4">
                    Registreren
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
