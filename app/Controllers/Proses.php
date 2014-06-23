<?php 

namespace Controllers;
use Resources, Models;

    class Proses extends Resources\Controller{
        
        function index(){
                if(isset($_POST['check'])){
                    $this->redirect('order/step2');
                }
        }
        
    }