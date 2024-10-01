<?php
namespace Application\Controller;

class Panel extends Controller {

    public function index(){
        return $this->view('panel.index');
    }
}