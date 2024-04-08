<?php

namespace App\Service;

use App\Models\Autor;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutorService implements AutorServiceInterface{

    private $repository;

    public function __construct(Autor $autor){
        $this->repository = $autor;
    }

    public function index($pesquisar, $perPage){
        $registro = $this->repository->where(function($query) use($pesquisar){
            if($pesquisar){
                $query->where("nome","like","%".$pesquisar."%");
                $query->orWhere("email","like","%".$pesquisar."%");
                $query->orWhere("telefone","like","%".$pesquisar."%");
                }
        })->paginate($perPage);
        return $registro;
    }

    public function store($request){#repository é o model a tabela nossa!
        DB::beginTransaction();
        try{
            $registro = $this->repository->create($request);
            DB::commit();
            return $registro;
        } catch(Exception $e){
            DB::rollBack();
            return new Exception('Erro ao criar o registro'. $e->getMessage());
        }
    }

    public function show(string $id){
        try{
            $registro = $this->repository->findOrfail($id);
            return $registro;   
        } catch(ModelNotFoundException $e){
            throw new Exception('Registro não localizado!'. $e->getMessage());
        }
    }

    public function update($request, string $id){

        $autorCadastrado = $this->repository->find($id);
        
        DB::beginTransaction();
        try{
            $registro = $autorCadastrado->update($request);
            DB::commit();
            return $registro;
        } catch(Exception $e){
            DB::rollBack();
            return new Exception('Erro ao alterar o registro'. $e->getMessage());
        }
    }


    public function destroy(string $id){
        
        $autorCadastrado = $this->show($id);
        
        DB::beginTransaction();
        try{
            $autorCadastrado->delete();
            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
            return new Exception('Erro ao excluir o registro'. $e->getMessage());
        }
        
        
        $autorCadastrado->delete();
    }
}