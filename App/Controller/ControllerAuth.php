<?php
    namespace App\Controller;
    use Config\Session;
    use \Curl\Curl;
    use App\Requests\AuthRequest;
    class ControllerAuth{
        private $validate;
        public function __construct(){
            $this->validate = new AuthRequest();
        }

        public function viewLogin(){
            return view('auth/login');
        }

        public function auth(){
            try{
                $data = $this->validate->validate();
                $curl = new Curl();
                $curl->post('http://localhost/api/academia/auth', array(
                    'username' => $data['username'],
                    'password' => $data['password']
                ));

                $response = json_decode(json_encode($curl->response), True);
                if($response['status'] == 200){
                    Session::Set($response['data']['tokenAcesso']);
                }else{
                    throw new \Exception($response['message']);
                }
                
                return redirect()->route('dashboard')->only();
            }catch(\Exception $ex){
                request()->flashback();
                return redirect()->route('login')->with('error', $ex->getMessage());
            }
        }
    }
?>
