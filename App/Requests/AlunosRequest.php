<?php
namespace App\Requests;
use App\Services\ValidationsService;
use App\Services\ConfigService;
use Config\Session;
class AlunosRequest
{
    private $validation;
    private $config;
    public function __construct() {
        $this->validation = new ValidationsService();
        $this->config = new ConfigService();
    }

    public function validaInsert(){
        try{
            $data = $_POST;
            $this->validaCampos();
            $cpfObrigatorio = $this->config->buscaConfigCPF(Session::get('codigo_empresa'), Session::get('codigo_filial'));

            if(empty($data['sexo'])){
                throw new \Exception('Informe o sexo do aluno!');
            }else if($data['sexo'] != 1 && $data['sexo'] != 2){
                throw new \Exception('O sexo foi informado incorretamente!');
            }

            if(empty($data['nome_completo'])){
                throw new \Exception('Informe o nome do aluno!');
            }

            if(!$this->validation->validaCPF($data['cpf'])){
                throw new \Exception('O CPF informado é inválido!');
            }

            if($cpfObrigatorio == 1){
                if(!empty($data['dt_nascimento']) && (! $this->validation->validaData($data['dt_nascimento']) ||
                        $this->validation->formataDataUS($data['dt_nascimento']) > strtotime(date("Y-m-d")))){
                    throw new \Exception('A data de nascimento informada é inválida!');
                }
            }

        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    private function validaCampos(){
        try{
            $data = $_POST;
            $validations = array('nome_completo',
                'apelido',
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
                'typeSave');

            foreach($data as $key => $value){
                if(!in_array($key, $validations)){
                    throw new \Exception('Parâmetros não informados corretamente. Tente novamente!');
                }
            }

            if(!is_array($data['telefone']) || !is_array($data['etiqueta']) || !is_array($data['email'])){
                throw new \Exception('Parâmetros não informados corretamente. Tente novamente!');
            }


        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function validaBusca(){
        try{
            if(!isset($_GET['studentCode'])){
                throw new \Exception('Aluno não localizado!');
            }

            return $_GET['studentCode'];
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }
}