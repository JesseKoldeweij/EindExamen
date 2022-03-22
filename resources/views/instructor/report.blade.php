<x-app-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <a href="/dashboard/instructeur">Terug</a>
        </div>
    </header>
    {{--Show success message--}}
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('update_report') }}" method="POST">
                    @csrf
                    <label for="boolean">Ben je ziek?</label>
                    <select name="choice" id="boolean">
                        <option value="1">Ja</option>
                        <option value="0">Nee</option>
                    </select>
                        <div class="form-group">
                            <strong>Start:</strong>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>Eind:</strong>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-dark">Melden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
