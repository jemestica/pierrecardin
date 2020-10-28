<?php

class Checkout extends Controller{

    function __construct(){
        parent::__construct();                
    }

    function render(){
        $this->view->render('checkout/index');
    }

    function new(){

        //aqui se guardaria en la db

    }  
    
    function order(){
        $this->view->render('checkout/order');
    }    
    
}

?>