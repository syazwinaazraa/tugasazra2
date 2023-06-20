<?php 

namespace App\Controllers;

use App\Core\Controller;
class Login extends Controller {

    public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Login();
	}

    public function index()
    {
        $data['title'] = 'Login';
        $this->dashboard('login/index', $data);
    }
    public function login()
    {
        $user_nama = $_POST['user_nama'];
        $user_password = $_POST['user_password'];
//        echo $user_nama .'<br>'. $user_password;

        $data['login'] = $this->model->getUser($user_nama, $user_password);
//        var_dump($data['login']);

        session_start();
        if($data['login']==NULL){
            header("location:" .URL. "/404");
        }else{
            foreach($data['login'] as $row):
                $_SESSION['user_email'] = $row['user_email'];
                header("location:" .URL. '/dashboard');
            endforeach;
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        header('location:' . URL . '/login');
    }
}