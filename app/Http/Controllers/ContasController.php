<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contas;
class ContasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contas = Contas::all();
        return view('contas.index',['todascontas' => $contas]);
        return view('contas.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contas.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
        ]);
        
        $contas = new Contas;
        $contas->nome = $request->nome;
        $contas->descricao = $request->descricao;
        $contas->save();
        return redirect('contas')->with('message', 'Conta atualizada com sucesso!');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contas = Contas::find($id);
        if(!$contas){
            abort(404);
        }
        return view('contas.details')->with('detailpage', $contas);        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contas = Contas::find($id);
        if(!$contas){
            abort(404);
        }
        return view('contas.edit')->with('detailpage', $contas);
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
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
        ]);
        
        $contas = Contas::find($id);
        $contas->nome = $request->nome;
        $contas->descricao = $request->descricao;
        $contas->save();
        return redirect('contas')->with('message', 'Conta editada com sucesso!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contas = Contas::find($id);
        $contas->delete();
        return redirect('contas')->with('message', 'Conta apagada com sucesso!');
    }
}