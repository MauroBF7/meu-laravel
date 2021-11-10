<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index',[
        'livros'=>$livros]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create',[
            'livro'=>new Livro
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'titulo'=> 'required',
           'autor'=> 'required',
           'isbn'=> 'required|integer',
       ]);
        $livro = new Livro;
       $livro->titulo= $request->titulo;
       $livro->autor= $request->autor;
       $livro->isbn= $request->isbn;
       $livro->save();
       #return redirect("/livros/{$livro->id}");
       return redirect("/livros");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        return view('livros.show',['livro'=>$livro,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit',[
            'livro' => $livro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo'=> 'required',
            'autor'=> 'required',
            'isbn'=> 'required|integer',
        ]);
        $livro->titulo= $request->titulo;
       $livro->autor= $request->autor;
       $livro->isbn= $request->isbn;
       $livro->save();
       #return redirect("/livros/{$livro->id}");
       return redirect("/livros");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect('/livros');
    }
}
