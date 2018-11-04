<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = \App\Noticia::all();
      
        return view('noticias',['noticias' => $noticias]);
    }

    public function index_gestionar()
    {
        $noticias = \App\Noticia::all();
      
        return view('gestionar_noticia',['noticias' => $noticias]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function store(Request $request)
    {
       

       $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:80',
            'topico' => 'required|max:200',
            'contenido' => 'required|max:600',
            'fuente' => 'required',
            'categoria' => 'required',
            
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
/*
        $file = $request->file('foto');
        $name = time().'_'.$request->get('titulo').'_'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path() . '\images';

       
        $ruta = $path.'\ '.$name;
        $ruta = str_replace(' ', '', $ruta);
        $file->move($ruta);*/

        $noticia = \App\Noticia::create([
            'titulo' => $request->get('titulo'),
            'topico' => $request->get('topico'),
            'contenido' => $request->get('contenido'),
            'fuente' => $request->get('fuente'),
            'categoria' => $request->get('categoria'),
            'foto' => ''
        ]);
        
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:80',
            'topico' => 'required|max:200',
            'contenido' => 'required|max:600',
            'fuente' => 'required',
            'categoria' => 'required',
            
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $noticia = \App\Noticia::find($id);
        $noticia->titulo = $request->get('titulo');
        $noticia->topico = $request->get('topico');
        $noticia->contenido = $request->get('contenido');
        $noticia->fuente = $request->get('fuente');
        $noticia->categoria = $request->get('categoria');
        $noticia->save();

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Noticia::destroy($id);


        return redirect()->back();
    }
}
