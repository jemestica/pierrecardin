<?php
class Api extends Controller{

    function __construct(){
        parent::__construct();                
        
    }

    function cart(){
        $this->view->render('api/cart');
    } 

    function desc(){
        require_once "libs/functions.php";

        $api = URL . "api/cart"; 
        $desc = 0;
        $amount= 0;
        $total=0;
        $percentage = 0.30;
        $maxDesc = 30.00; 
        
        $get_data = callAPI('GET', $api, false);
        $response = json_decode($get_data, true);
        //$errors = $response['response']['errors'];
        

        foreach($response as $k=>$arr)
        {
         if(preg_match('#^01#', $arr["catalog"]) || preg_match('#^02#', $arr["catalog"])){
            $amount = round($arr["Amount"] * $arr["Qty"],2);
            $desc += round($amount * $percentage, 2);
            $total += number_format($amount,2);                    
         }
        }

        if($desc > $maxDesc){
            $desc = round($maxDesc,2);
        }

        $response = array("desc" => $desc, "total" => number_format($total,2));
        echo json_encode($response);
    }
}

?>