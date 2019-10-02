<?php
namespace App\Requests;
use App\Services\BancosService;
use App\Services\ProfissoesService;
use App\Services\ValidationsService;
use Config\Session;

class FuncionariosRequest{
    private $bancos;
    private $profissoes;
    private $validation;
    public function __construct(){
        $this->bancos = new BancosService();
        $this->profissoes = new ProfissoesService();
        $this->validation = new ValidationsService();
    }

    public function validaParamCPF(){
        try{
            $data=$_GET;
            if(!isset($_GET['documento']) || empty($_GET['documento'])){
                throw new \Exception('Parâmetro de pesquisa informado incorretamente!');
            }

            return true;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function validaInsert(){
        try{
            $data = $_POST;
            $this->validaCampos('insert');
            $codBanco = $data['banco'];
            if(empty($data['sexo'])){
                throw new \Exception('Informe o sexo do aluno!');
            }else if($data['sexo'] != 1 && $data['sexo'] != 2){
                throw new \Exception('O sexo foi informado incorretamente!');
            }

            if(empty($data['nome_completo'])){
                throw new \Exception('Informe o nome do funcionário!');
            }

            if(empty($data['profissao'])){
                throw new \Exception('Informe a profissão do funcionário!');
            }

            if(!$this->validation->validaCPF($data['cpf'])){
                throw new \Exception('O CPF informado é inválido!');
            }
            //dd($data['dt_nascimento']);
            if(!empty($data['dt_nascimento']) && (!$this->validation->validaData($data['dt_nascimento']) ||
                $this->validation->formataDataUS($data['dt_nascimento']) > strtotime(date("Y-m-d")))){
                    throw new \Exception('A data de nascimento informada é inválida!');
            }

            $bancos = $this->bancos->buscaBancosSelect(Session::Get('codigo_empresa'), Session::Get('codigo_filial'));
            if(!empty($bancos)){
                if($data['banco'] != 0){   
                    foreach($bancos as $value){
                        if($value['sequencia']==$codBanco){
                            $verifica = 1;
                        }
                    }
                }
            }

            if(!isset($verifica) && $data['banco'] != 0){
                throw new \Exception('Informe o banco corretamente!');
            }

            if($data['banco'] != 0 && (empty($data['agencia']) || empty($data['conta']))){
                throw new \Exception('Informe a agência e a conta bancária!');
            }

        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    private function validaCampos($tipo){
        try{
            $data = $_POST;
            if($tipo=='insert'){
                $validations = array('nome_completo',
                                    'cpf',
                                    'rg',
                                    'dt_nascimento',
                                    'sexo',
                                    'etiqueta',
                                    'telefone',
                                    'email',
                                    'cep',
                                    'endereco',
                                    'numero',
                                    'complemento',
                                    'bairro',
                                    'cidade',
                                    'ibge',
                                    'estado',
                                    'profissao',
                                    'dt_admissao',
                                    'dt_demissao',
                                    'salario',
                                    'dia_pagamento',
                                    'util',
                                    'banco',
                                    'agencia',
                                    'conta');
            }else{
                $validations = array('descricao_modalidade',
                    'planoPagamento',
                    'valor_modalidade',
                    'status',
                    'typeSave',
                    'code');
            }

            /*foreach($data as $key => $value){
                if(!in_array($key, $validations)){
                    throw new \Exception('Parâmetros não informados corretamente. Tente novamente!');
                }
            }*/

            if(!is_array($data['telefone']) || !is_array($data['etiqueta']) || !is_array($data['email'])){
                throw new \Exception('Parâmetros não informados corretamente. Tente novamente!');
            }
            return true;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }
}