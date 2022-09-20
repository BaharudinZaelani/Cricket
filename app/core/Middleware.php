<?php 

class Middleware {

    private $login = false;
    private $user = [];

    function __construct(){
        if ( isset($_COOKIE['z4wl0p']) ) {
            $this->login = true;
            $json = json_decode($_COOKIE['z4wl0p'], true);
            $this->user = [
                "name" => $json['name'],
                "username" => $json['username'],
                "email" => $json['email']
            ];
        }
    }

    public function loginArea(){
        // if not suitable
        if( !$this->login ){
            App::redirect("/login");
            return [
                "status" => "Found",
                "cond" => true,
            ];
        }
    }

    public static function createJE($data = []){
        $JE = json_encode($data);
        setcookie("z4wl0p", $JE, time() + (86400 * 30), "/");
        return;
    }

    public static function logout(){
        $_SESSION['user'] = [];
        unset($_SESSION['user']);

        if (isset($_COOKIE['z4wl0p'])) {
            unset($_COOKIE['z4wl0p']); 
            setcookie('z4wl0p', null, -1, '/'); 
            return true;
        } else {
            return false;
        }

        return [
            "status" => "success", 
            "message" => "Berhasil Logout dari Aplikasi !"
        ];
    }

    // Getter
    public function getUser() {
        return $this->user;
    }

    public function getLogin(){
        return $this->login;
    }


    // Setter
}