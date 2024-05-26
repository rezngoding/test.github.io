<?php
class BerandaController {
    private $model, $view;
    public function __construct() {
        $this->model = new BerandaModel();
        $this->view = new BerandaView();
    }
    public function index() {
        $this->view->index();
    }
}
class BerandaModel {

}
class BerandaView {
    public function index() {
        echo "Hello";
    }
}
?>