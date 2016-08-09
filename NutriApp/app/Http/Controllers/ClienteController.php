<?php
/**
 * Created by PhpStorm.
 * User: juanjo
 * Date: 4/8/2016
 * Time: 9:05 AM
 */

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests;


class ClienteController extends Controller
{
    public function getCrear(){
        return view("cliente.crear");
    }

    public function postCrearcliente(Request $request){
        $cliente = new Cliente();
        $cliente->nombre = $request->input("nombre");
        $cliente->apellido = $request->input("apellido");
        $cliente->cedula = $request->input("cedula");
        $cliente->telefono = $request->input("telefono");
        $cliente->direccion = $request->input("direccion");
        $cliente->email = $request->input("email");

        if ($cliente->save()){
            return view('welcome');
        }

    }

}