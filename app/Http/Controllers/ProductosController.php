<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function index(){
        $productos = DB::table('productos')
                   ->orderBy('id', 'desc')
                   ->get();

        /*echo('<pre>');
        var_dump($productos);
        die();*/

        return view('producto.index', [
            'productos' => $productos
        ]);
    }

    public function detail($id){
        $producto = DB::table('productos')->where('id', '=', $id)->first();
        return view('producto.detail', [
            'producto' => $producto
        ]);
    }

    public function create(){
        return view('producto.create');
    }

    public function save(Request $request){
        //guardar el registro
        $producto = DB::table('productos')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));
        return redirect()->action('ProductosController@index')->with('status', 'Producto creado correctamente');
    }

    public function delete($id){
        $producto = DB::table('productos')->where('id', $id)->delete();
        return redirect()->action('ProductosController@index')->with('status', 'Producto borrado correctamente');
    }

    public function edit($id){
        $producto = DB::table('productos')->where('id', $id)->first();
        return view('producto.create', [
            'producto' => $producto
        ]);
    }

    public function update(Request $request){
        $id = $request->input('id');
        $producto = DB::table('productos')-> where('id', $id)
                                          -> update(array(
                                                'nombre' => $request->input('nombre'),
                                                'descripcion' => $request->input('descripcion'),
                                                'precio' => $request->input('precio'),
                                           ));
        return redirect()->action('ProductosController@index')->with('status', 'Producto editado correctamente');
    }
}
