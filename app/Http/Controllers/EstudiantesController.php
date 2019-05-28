<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;
use App\practicasprofesionales_table;

class EstudiantesController extends Controller
{
    public function index()
    {
        return view('Estudiantes.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function catalogopracticas()
    {
        $estudiante=Auth::user();
        $Practicas["Practicas"] =   DB::table('practicasprofesionales')->where('Estado', '=', 'Aprobado')->get();
        return response()->json($Practicas);
    }
}
