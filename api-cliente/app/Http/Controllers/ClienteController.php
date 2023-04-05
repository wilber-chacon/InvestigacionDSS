<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //Funcion utilizada para guardar un nuevo cliente
    public function create(Request $request)
    {
        //creando una instancia de la clase cliente
        $cliente = new Cliente();

        //Guardando los datos del nuevo cliente
        $cliente->nombre = $request->input('nombre');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->edad = $request->input('edad');
        $cliente->salario = $request->input('salario');
        $cliente->save();
        return json_encode(['msg' => 'Cliente agregado exitosamente.']); 
    }




}