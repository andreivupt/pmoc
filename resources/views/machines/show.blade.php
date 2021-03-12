@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content m-4">
            <div class="card border-0">
                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-2 border border-info">
                            <b>TAG</b>
                        </div>
                        <div class="col-4 border border-info">
                            {{ $machine->tag }}
                        </div>
                        <div class="col-2 border border-info">
                            <b>SETOR</b>
                        </div>
                        <div class="col-4 border border-info">
                            {{ $machine->location }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 border border-info">
                            MODELO
                        </div>
                        <div class="col-4 border border-info">

                        </div>
                        <div class="col-2 border border-info">
                            CAPACIDADE
                        </div>
                        <div class="col-4 border border-info">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <form action="{{ route('store.pmoc') }}" method="POST">
                        @csrf
                        <input type="text" name="machine_id" value="{{ $machine->id }}" hidden>
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th scope="col">Período</th>
                                <th scope="col">Descrição</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($descriptions as $key => $description)
                                <tr>
                                    <th></th>
                                    <th>{{ $description }}</th>
                                    <th>
                                        <input class="form-check-input"
                                               name="{{ $descriptions_names[$key] }}"
                                               type="checkbox"
                                               value="S"
                                               id="flexCheckDefault"
                                        >
                                    </th>
                                </tr>
                            @endforeach
                            @foreach($inputs as $key => $input)
                                <tr>
                                    <th></th>
                                    <th>{{ $input }}</th>
                                    <th>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2">
                                                    <input
                                                        type="text"
                                                        class="form-control input-sm"
                                                        name="{{ $inputs_names[$key] }}"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="text-right">
                            <button type="submit" class="btn btn-outline-info btn-sm">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
