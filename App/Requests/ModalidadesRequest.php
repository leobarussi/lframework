<?php
namespace App\Requests;
use App\Services\PlanosPagamentoService;
use Config\Session;
class ModalidadesRequest{

    private $planoPagamento;
    public function __construct(){
        $this->planoPagamento = new PlanosPagamentoService();
    }

    public function validaParametros(){
        try{
            $data=$_GET;
            if(!isset($data['code']) || empty($data['code'])){
                throw new \Exception('Código da modalidade não localizado!');    
            }
            
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function validaUpdate(){
        try{
            $data = $_POST;
            $code=$data['planoPagamento'];
            $valor = str_replace('R$', '', $data['valor_modalidade']);
            $valor = str_replace('.', '', $valor);
            $valor = str_replace(',', '.', $valor);

            $this->validaCampos('update');
            if(empty($data['descricao_modalidade'])){
                throw new \Exception('Informe a descrição da modalidade!');
            }else if(empty($data['planoPagamento'])){
                throw new \Exception('Informe o plano de pagamento!');
            }else if(empty($valor)){
                throw new \Exception('Informe o valor da modalidade!');
            }else if(empty($data['code'])){
                throw new \Exception('Código da modalidade não informado!');
            }

            $data = $this->planoPagamento->buscaPlanos(Session::Get('codigo_empresa'), Session::Get('codigo_filial'));
            $verifica = null;
            if(!empty($data)){
                foreach($data as $value){
                    if($value['sequencia']==$code){
                        $verifica = 1;
                    }
                }
            }

            if(empty($verifica)){
                throw new \Exception('Informe o plano de pagamento corretamente!');
            }
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function validaInsert(){
        try{
            $data = $_POST;
            $code=$data['planoPagamento'];
            $valor = str_replace('R$', '', $data['valor_modalidade']);
            $valor = str_replace('.', '', $valor);
            $valor = str_replace(',', '.', $valor);

            $this->validaCampos('insert');
            if(empty($data['descricao_modalidade'])){
                throw new \Exception('Informe a descrição da modalidade!');
            }else if(empty($data['planoPagamento'])){
                throw new \Exception('Informe o plano de pagamento!');
            }else if(empty($valor)){
                throw new \Exception('Informe o valor da modalidade!');
            }

            $data = $this->planoPagamento->buscaPlanos(Session::Get('codigo_empresa'), Session::Get('codigo_filial'));
            $verifica = null;
            if(!empty($data)){
                foreach($data as $value){
                    if($value['sequencia']==$code){
                        $verifica = 1;
                    }
                }
            }

            if(empty($verifica)){
                throw new \Exception('Informe o plano de pagamento corretamente!');
            }

        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    private function validaCampos($tipo){
        try{
            $data = $_POST;
            if($tipo=='insert'){
                $validations = array('descricao_modalidade',
                    'planoPagamento',
                    'valor_modalidade',
                    'status',
                    'typeSave');
            }else{
                $validations = array('descricao_modalidade',
                    'planoPagamento',
                    'valor_modalidade',
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