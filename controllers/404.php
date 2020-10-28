<?php
class Noexist extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->msg = "404 Not found";
        $this->view->render('404/index');
        
    }

}

?>