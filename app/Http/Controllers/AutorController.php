<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutorFormRequest;
use Illuminate\Http\Request;
use App\Models\Autor;
use App\Service\AutorServiceInterface;

class AutorController extends Controller
{

    private $service;

    public function __construct(AutorServiceInterface $service)
    {
        $this->service = $service;
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)#mostrar os dados do nosso autor
    {
        $pesquisar = $request->pesquisar;
        $page = $request->perPage;
       #dd($request->all());// mostrar uma mensagem 
       //$registros = Autor::paginate(10);#crie uma variável
       $registros = $this->service->index($pesquisar, $page);
        return view ('autor.index', ['registros' => $registros['registros'],
                                     'pages'=>[5,10,15,20],
                                     'item'=>5,]); //retorna os conteudo para determinado local
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd('acessando o controller autor controler - create');
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutorFormRequest $request)
    {
        

        $this->service->store($request);
        return redirect()->route('autor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = $this->service->show($id);
        return view('autor.show', ['registro'=> $registro['registro'],]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registro = $this->service->show($id);
        return view ('autor.edit',['registro'=>$registro['registro']]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutorFormRequest $request, string $id)
    {
        
        $this->service->update($request, $id);

       /* $autor['nome'] = $registro['nome'];
        $autor['apelido'] = $registro['apelido'];
        $autor['cidade'] = $registro['cidade'];
        $autor['bairro'] = $registro['bairro'];
        $autor['cep'] = $registro['cep'];
        $autor['email'] = $registro['email'];
        $autor['telefone'] = $registro['telefone'];
        
        $autor->save();*/

        return redirect()->route('autor.index');

        //dd($registro);
    }

    public function delete(string $id){

        $registro = $this->service->show($id);
        return view('autor.destroy', ['registro'=>$registro['registro']]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->service->destroy($id);
        return redirect()->route('autor.index');
        //dd($id);
    }
}
