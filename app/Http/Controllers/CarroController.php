<?php

namespace App\Http\Controllers;

use App\Models\detallecarro;
use App\Models\carros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class CarroController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    public function index()
    {
        $carros = carros::all();
        //  $carros = carros::paginate(5);
        //{{ $carros->links('pagination::bootstrap-4') }}
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'sucursal' => 'required',
            'name' => 'required',
            'file' => 'required|image|max:2048',
        ]);
        $img  = $request->file('file')->store('public/imagenes');
        $url = Storage::url($img);


        //$carro = carros::create($request->all());
        $carro = new carros();
        $carro->sucursal = $request->sucursal;
        $carro->name = $request->name;
        $carro->file = $url;
        $carro->estado = 0;
        $carro->save();


        return redirect()->route('carros.show', $carro);
    }


    public function store2(Request $request,$id)
    {
        $carroid = carros::find($id);
        $carros=$carroid->id;
        $detallecarro = detallecarro::create($request->all());

        return redirect()->route('carros.show',$carros);
    }


    public function show(carros $carros)
    {
        $detallecarros = DB::table('detallecarro')->get();
        return view('carros.show', compact('carros','detallecarros'));
    }




    public function update(Request $request, carros $carros)
    {
       // $request->validate([
         //   'sucursal' => 'required',
          //  'name' => 'required',
            //'patente' => 'required',
        //]);

        $carros->update($request->all());

        return redirect()->route('carros.show', $carros);
    }

    public function destroy(carros $carros){
        $file = str_replace('storage','public',$carros->file);
        Storage::delete($file);
        $carros->delete();
        return redirect()->route('carros.index');
    }





}
