<?php 

namespace Controllers;
use Resources, Models;

    class Order extends Resources\Controller{
        
        function __construct(){
            parent::__construct();
            $this->session = new Resources\Session();
            $this->request = new Resources\Request;
            $this->order = new Models\Order;
        }
        
        function index(){
            $this->redirect('home');
        }
        
        function step1(){
            $data['title']='Step 1';
            $data['pages']='step1';
            
            if(isset($_POST['step1'])){
                $this->session->setValue('tanggal',$this->request->post('tanggal',FILTER_SANITIZE_STRING));
                $this->redirect('order/step2');
            }
            
            $this->output('home',$data);
        }
        
        function step2(){
            $data['title']='Step 2';
            $data['pages']='step2';
            
            $data['tanggal']=$this->session->getValue('tanggal');
            
            if(isset($_POST['step2'])){
               $insert=array(
               'id'=>'',
               'nama'=>$this->request->post('nama',FILTER_SANITIZE_STRING),
               'alamat'=>$this->request->post('alamat',FILTER_SANITIZE_STRING),
               'telepon'=>$this->request->post('telepon',FILTER_SANITIZE_STRING),
               'email'=>$this->request->post('email',FILTER_SANITIZE_STRING),
               'tanggal'=>$this->request->post('tanggal',FILTER_SANITIZE_STRING),
               'status_bayar'=>0,
               ); 
               
               $proses=$this->order->insert($insert);
               if($proses==true){
                    $this->redirect('order/step3');
               }else{
                exit('Eror');
               }
            }
            
            $this->output('home',$data);
        }
        
        function step3(){
            $data['title']='Step 3';
            $data['pages']='step3';
            $this->output('home',$data);
        }
        
    }