<?php 

namespace Models;
use Resources;

class Order{
    
    public function __construct(){        
        $this->db=new Resources\Database;
    }
    
    function insert($data){
        $insert=$this->db->insert('order',$data);
        if($insert){
            return true;
        }else{
            return false;
        }
    }
}