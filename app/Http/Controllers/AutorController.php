<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutorFormRequest;
use Illuminate\Http\Request;
use App\Models\Autor;
use App\Service\AutorServiceInterface;
use Exception;

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
        $pesquisar = $request->pesquisar ?? "";
        $perPage = $request->perPage ?? 5;
       #dd($request->all());// mostrar uma mensagem 
       //$registros = Autor::paginate(10);#crie uma variável
       $registros = $this->service->index($pesquisar, $perPage);
        return view ('autor.index', ['registros' => $registros,
                                     'perPage'=>$perPage,
                                     'filter'=>$pesquisar,]); //retorna os conteudo para determinado local
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
        $registro = null;

        $registro = $request->all();
        try{
        $registro = $this->service->store($registro);
        return redirect()->route('autor.index')->with('success', 'Registro cadastrado com sucesso');
        } catch(Exception $e){
            return view('autor.create',[
                'registro'=>$registro,
                'fail'=>$e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = null;

        try{
        $registro = $this->service->show($id);
        return view('autor.show',[
            'registro'=>$registro]);
        } catch(Exception $e){
            return view('autor.show',[
                'registro'=>$registro,
                'fail'=>$e->getMessage(),
            ]);
        }
        return view('autor.show', ['registro'=> $registro['registro'],]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registro = null;

        try{
            $registro = $this->service->show($id);
            return view('autor.edit',[
                'registro'=>$registro,]);
            } catch(Exception $e){
                return view('autor.edit',[
                    'registro'=>$registro,
                    'fail'=>$e->getMessage(),
                ]);
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutorFormRequest $request, string $id)
    {
        $registro = null;

        $registro = $request->all();
        try{
        $registro = $this->service->update($registro, $id);
        return redirect()->route('autor.index')->with('success', 'Registro alterado com sucesso!');
        } catch(Exception $e){
            return view('autor.edit',[
                'registro'=>$registro,
                'fail'=>$e->getMessage(),
            ]);
        }
    }

    public function delete(string $id){

        try{
            $registro = $this->service->show($id);
            return view('autor.destroy',[
                'registro'=>$registro,]);
            } catch(Exception $e){
                return view('autor.destroy',[
                    'registro'=>$registro,
                    'fail'=>$e->getMessage(),
                ]);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try{
            $this->service->destroy($id);
            return redirect()->route('autor.index')->with('success', 'Registro excluido com sucesso!');
            } catch(Exception $e){
                return view('autor.destroy',[
                    'fail'=>$e->getMessage(),
                ]);
            }
    }
}
