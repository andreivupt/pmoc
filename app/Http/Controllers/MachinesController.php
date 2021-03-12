<?php

namespace App\Http\Controllers;

use App\Models\Machines;
use Illuminate\Http\Request;

class MachinesController extends Controller
{
    public function index()
    {
        $machines = Machines::all();
        return view('machines.index', ['machines' => $machines]);
    }

    public function show($machineId)
    {
        $descriptions = ['Verificar operações Q/F', 'Higienização interna/externa', 'Limpeza filtros evaporadora',
            'Verificar bornes', 'Limpeza de drenos', 'Temperaturas da evaporadora', 'Verificar termostato',
            'Pontos de vazamento', 'Isolamento de tubulações', 'Verificar pressões', 'Verificar terminais elétricos',
            'Limpeza da turbina', 'Limpeza da serpentina',
        ];

        $inputs = ['Verificar tensão (V)', 'Verificar corrente (A)', 'Temperatura externa (ºC)',
            'Temperatura interna (ºC)', 'Temperatura retorno (ºC)', 'Temperatura insuflamento (ºC)'];

        $descriptions_names = ['operations', 'hygiene', 'filters', 'terminals', 'drains', 'evap_temperature',
            'thermostat', 'leak', 'isolation', 'pressures', 'eletric_terminals', 'turbine_cleaning', 'serpentine_cleaning'];

        $inputs_names = ['tensions', 'eletric_current', 'external_temperature', 'internal_temperature',
            'return_temperature', 'return_insufflation'];

        $machine = Machines::find($machineId);

        return view('machines.show', [
            'machine' => $machine,
            'descriptions' => $descriptions,
            'inputs' => $inputs,
            'descriptions_names' => $descriptions_names,
            'inputs_names' => $inputs_names,
        ]);
    }
}
