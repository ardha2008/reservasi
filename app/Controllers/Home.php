<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{    
    public function index()
    {    
        $data['title'] = 'Home';
        $data['pages'] = 'start';
        $this->output('home',$data);
    }
    
    public function jadwal(){
        $data['title'] = 'Jadwal'; 
        $data['pages'] = 'jadwal';
        $this->output('home',$data);
    }
}