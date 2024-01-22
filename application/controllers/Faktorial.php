<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktorial extends CI_Controller{
    public function __construct(){
        
        parent::__construct();
        $this->load->model('mfaktorial');
        $this->load->library('form_validation');   
        $this->load->helper('url');    

        
    }

    public function index(){
        $this->mfaktorial->test();
        $this->load->view('faktorial',array("hasil"=>""));
    }
    public function hitung(){
        $hasil = $this->mfaktorial->hitung($_POST);
        $this->load->view('faktorial',array("hasil"=>$hasil));
    }
    public function showtable(){
        $data = array('data'=>$this->mfaktorial->get_data());
        $this->load->view('table',$data);
    }
}