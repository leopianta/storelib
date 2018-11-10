<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livros;
class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros =\App\Livros::all();
        return view('indexLivros', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadLivros');
    }

    /*public function createBook(Request $request){
        $livro = new Livro();
        $livro->Titulo =$request->get('titulo');
        $livro->Edicao = 1;
        $livro->Ano = 2019;
        $livro->Editora_idEditora = 1;
        $livro->Categoria_idCategoria = 1;
        $livro->save();
        return redirect('livros')->with('success', 'Livro Cadastrado com Sucesso!');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*        if($request->hasfile('arq'))
        {
            $arq = $request->file('arq');
            $arqnome=time().$arq->getClientOriginalName();
            $arq->move(public_path().'/arquivos/', $arqnome);
        }*/
        $livro = new \App\Livros();
/*        $livro->nome=$request->get('nome');
        $livro->edicao=$request->get('edicao');
        $livro->isbn=$request->get('isbn');
        $livro->arq=$arqnome;*/
        $livro->Titulo =$request->get('titulo');
        $livro->Edicao = 1;
        $livro->Ano = 2019;
        $livro->Editora_idEditora = 1;
        $livro->Categoria_idCategoria = 1;

        $livro->save();

        return redirect('livros')->with('success', 'Livro Cadastrado com Sucesso!');
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
        $livro = (new Livros())::find($id);
        return view('editLivros',compact('livro','id'));
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
        $livro = \App\Livros::find($id);
        $livro->Titulo =$request->get('Titulo');
        $livro->Edicao = 1;
        $livro->Ano = 2022;
        $livro->Editora_idEditora = 1;
        $livro->Categoria_idCategoria = 1;
        $livro->save();
        return redirect('livros')->with('success', 'Livro Editado com Sucesso!');
        //return redirect('livros');

//        $livro= \App\Livros::find($id);
//        $livro->nome=$request->get('nome');
//        $livro->edicao=$request->get('edicao');
//        $livro->isbn=$request->get('isbn');
//        $livro->save();
//        return redirect('livros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = \App\Livros::find($id);
        $livro->delete();
        return redirect('livros')->with('success','Livro Removido com sucesso!');
    }
}
