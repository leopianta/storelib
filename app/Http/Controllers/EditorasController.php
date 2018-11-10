<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editoras;
use Illuminate\Support\Facades\App;

class EditorasController extends Controller
{
    public function index()
    {
        $editoras =\App\Editoras::all();
        return view('indexEditora', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadEditoras');
    }

    public function store(Request $request){
        $editora = new Editoras();
        $editora->Nome = $request->get('Nome');
        $editora->Sigla = $request->get('Sigla');
        $editora->save();
        return redirect('editoras')->with('success', 'Editoras Cadastrada com Sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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

        $editora = \App\Editoras::find($id);
        return view('editEditoras',compact('editora','id'));
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
        dd($id);
        $editora = \App\Editoras::find($id);
        $editora->Nome = $request->get('Nome');
        $editora->Sigla = $request->get('Sigla');;
        $editora->save();
        return redirect('editoras')->with('success', 'Editoras alterada com Sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editora = \App\Editoras::find($id);
        $editora->delete();
        return redirect('editoras')->with('success','Editoras removida com sucesso!');
    }
}
