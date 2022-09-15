<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $series= Serie::all();
        // $series= DB::select('SELECT nome FROM series;');
        // dd($series);

        // Função session manupula a session diretamente
        $mensagemSucesso= session('mensagem.sucesso'); 
        // $mensagemSucesso= $request->session()->get('mensagem.sucesso');
        // $request->session()->forget('mensagem.sucesso');

        return view('series.index',compact('series','mensagemSucesso'));
        // return view('listar-series',['series'=>$series]);

        // Request obtem da superglobal $__REQUEST
        // return $request->get('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $nomeDaSerie= $request->input('nome');
        // $nomeDaSerie= $request->nome;

        // DB::insert('INSERT INTO series (nome) VALUES (?)',[$nomeDaSerie]);
        // $serie = new Serie();
        // $serie->nome = $nomeDaSerie;
        // $serie->save();

        //$request->all() Irá pegar todos os campos da requisição.
        //$request->only(['nome']) Irá pegar apenas os campos informado no array.
        //$request->except(['nome']) Irá pegar tudo menos os campos informado no array.
        Serie::create($request->all());


        $request->session()->flash('mensagem.sucesso','Serie adicionada com sucesso');

        // Utilizando a função helper session() o cache de session não é limpo
        // session(['mensagem.sucesso'=>'Serie adicionada com sucesso']);
        // return redirect('/series');
        // return redirect()->route('series.index');
        return to_route('series.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // dd($request->serie);
        Serie::destroy($request->series);

        // $request->session()->put('mensagem.sucesso','Série removida com sucesso');
        $request->session()->flash('mensagem.sucesso','Série removida com sucesso');

        return to_route('series.index');
    }
}
