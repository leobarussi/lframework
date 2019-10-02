<?php
namespace App\Requests;
class CategoriasProdutosRequest
{

    public function validaInsert(){
        try{
            $this->validaCampos('insert');
            $data = $_POST;
            if(empty($data['descricao_cat'])){
                throw new \Exception('Informe a descrição da categoria!');
            }else if(empty($data['status']) || ($data['status'] != 1 && $data['status'] != 2)){
                throw new \Exception('Informe o status corretamente!');
            }

        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function validaUpdate(){
        try{
            $this->validaCampos('update');
            $data = $_POST;
            if(empty($data['descricao_cat'])){
                throw new \Exception('Informe a descrição da categoria!');
            }else if(empty($data['status']) || ($data['status'] != 1 && $data['status'] != 2)){
                throw new \Exception('Informe o status corretamente!');
            }else if(empty($data['code'])){
                throw new \Exception('Código da categoria não localizado!');
            }

        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function validaParametrosEdit(){
        try{
            $data = $_GET;
            if(!isset($data['code']) || empty($data['code'])){
                throw new \Exception('Código da categoria não encontrado!');
            }
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    private function validaCampos($tipo){
        try{
            $data = $_POST;
            if($tipo=='insert'){
                $validations = array('descricao_cat',
                                     'status',
                                     'typeSave');
            }else{
                $validations = array('descricao_cat',
                                     'status',
                                     'typeSave',
                                     'code');
            }

            foreach($data as $key => $value){
                if(!in_array($key, $validations)){
                    throw new \Exception('Parâmetros não informados corretamente. Tente novamente!');
                }
            }
            return true;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }
}