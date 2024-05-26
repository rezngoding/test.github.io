<?php
class PenggunaController {
    private $model, $view;
    public function __construct() {
        $this->model = new PenggunaModel();
        $this->view = new PenggunaView();
    }
    public function login() {
        $this->model->login();
    }
    public function logout(){
        $this->model->logout();
    }
}
class PenggunaModel {
    public function logout(){
        global $app;

        unset ($_SESSION["pengguna"] );
        header("Location:".$app->config["site"]);
    }
    public function login() {
        global $app;

        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        $sql = "SELECT *
                FROM pengguna
                WHERE username=:username";
        $params = array(
            ":username" => $username
        );
        $result = $app->find($sql, $params);
        //var_dump($result);
        if ($result) {
            $success = password_verify($password, $result->password);
            if ($success) {
                $_SESSION["pengguna"] = new stdClass();
                $_SESSION["pengguna"]->username = $result->username;
                $_SESSION["pengguna"]->nama = $result->nama;
                $_SESSION["pengguna"]->level_akses = $result->level_akses;
                header("Location:".$app->config["site"]."/admin");
            } else {
                header("Location:".$app->config["site"]);
            }
        } else {
            header("Location:".$app->config["site"]);
        }
    }
}
class PenggunaView {

}
?>