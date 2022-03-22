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
{{--Show success message--}}
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
