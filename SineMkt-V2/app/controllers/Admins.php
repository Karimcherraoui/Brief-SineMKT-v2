<?php
class Admins extends Controller {
    private $userModel;
public function __construct()
{
    $this->userModel = $this->model('Admin');
}

public function login (){
    //check for POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // process form
        //sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        //init data
        $data = [
            'username' => trim($_POST['username']),
            'password' => trim($_POST['password']),
            'username_err' => '',
            'password_err' => ''
        ];

        // validate username
        if(empty($data['username'])){
            $data['username_err'] = 'Username is required';
        }

        // validate password
        if(empty($data['password'])){
            $data['password_err'] = 'Password is required';
        }
         //check username/password
         if(!$this->userModel->findUserByUsername($data['username'])){
            // user found
            $data['username_err'] = 'Username not correct';
         }
         if(!$this->userModel->findUserByPassword($data['password'])){
            // user found
            $data['password_err'] = 'Password not correct';
         }
        
        // check for errors
        if(empty($data['username_err'])  && empty($data['password_err'])){
            //validated
            // for hash password
            // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            //$this->view('pages/produit', $data);
            $this->createUserSession($this->userModel->login($_POST["username"], $_POST["password"]));
        
        } else {
            //load view with errors 
            $this->view('users/login', $data);
        }
    } else {
        // init data
        $data = [
            'username' => '',
            'password' => '',
            'username_err' => '',
            'password_err' => '',
        ];
        // load view
        $this->view('users/login',$data);

    }
 }
 public function createUserSession($user){

    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_username'] = $user->username;

    redirect('Pages/produit');
}

public function logout(){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_username']);
    session_destroy();
    redirect('Pages/index');

}
}