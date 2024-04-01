<?php

namespace App\Service;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorService implements AutorServiceInterface{

    private $repository;

    public function __construct(Autor $autor){
        $this->repository = $autor;
    }

    public function index(){
        $registros = $this->repository->paginate(5);
        return(["registros"=>$registros]);
    }

    public function store($request){#repository é o model a tabela nossa!

        $this->repository->create($request->all());
    }

    public function show(string $id){
        $registro = $this->repository->find($id);
        return (["registro"=>$registro,]);
    }

    public function update($request, string $id){
        //dd('passando pelo ervico de update');

        $autorCadastrado = $this->repository->find($id);
        $autorCadastrado->update($request->all());
    }


    public function destroy(string $id){
        $autorCadastrado = $this->repository->find($id);
        $autorCadastrado->delete();
    }
}