@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content m-4">
            <div class="card">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">TAG</th>
                        <th scope="col">Local</th>
                        <th scope="col">Abrir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($machines as $machine)

                        <tr>
                            <th scope="row">{{ $machine->tag }}</th>
                            <th>{{ $machine->location }}</th>
                            <th><a href="{{ route('show.machine', ['id' => $machine->id]) }}">Abrir</a></th>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
