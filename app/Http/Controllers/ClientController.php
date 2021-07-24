<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\Client;
use App\Http\Requests\ClientRequest;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
  public function index(Request  $request)
  {
      $clientes = Client::all();
      return view('clientes.index', ['clientes' => $clientes]);
  }


  public function crear()
  {
      return view('clientes.crear');
      return back()->with(['message', 'Cliente creado con exito!']);

  }

  public function search(){

    $clientes = Client::where('nombre', 'like', '%' . request()->q . '%')
        ->orWhere('apellido', 'like', '%' . request()->q . '%')->get();

    return response()->json([
        'clientes' => $clientes
    ]);

  }


}
