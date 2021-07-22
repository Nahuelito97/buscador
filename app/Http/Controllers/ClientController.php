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
      $nombre = $request->get('buscarpor');


      $clientes = Client::whereBorrado(0)->where('nombre', 'like', "%$nombre%")->paginate(10);
      return view('clientes.index', ['clientes' => $clientes]);
  }


  public function crear()
  {
      return view('clientes.crear');
      return back()->with(['message', 'Cliente creado con exito!']);

  }

  public function search(){

    $search_text = $_GET['query'];
    $clientes = Client::where('nombre', 'like', '%'.$search_text.'%')->get();
    return view('clientes.index', compact('clientes'));

  }

  public function guardar(ClientRequest $request)
  {
      Client::create($request->all());
      return back()->with(['message', 'Cliente creado con exito!']);
  }

  public function editar(Client $cliente) {
    // se retorna la vista del formulario para editar a un Cliente
    return view('clientes.editar', compact('cliente'));
  }



  public function actualizar(ClientRequest $request, Client $cliente )
  {
      dd($request->all());
      $cliente->update ($request->all());
      return redirect()->route('clientes')->with('message', 'Cliente modificado exitosamente.');
  }



  public function borrar (Client $cliente){

    $cliente->update([
        'borrado' => 1,
    ]);
    return redirect()->route('clientes')->with('notification', ' Cliente Eliminado correctamente');
  }
}
